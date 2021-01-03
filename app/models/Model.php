<?php

namespace app\models;

use app\config\Database;
use app\languages\FrenchLang;
use PDO;

class Model
{
    private $connexion;
    protected $table;
    public $language;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $db = new Database();
        $this->connexion = $db->getConnexion();
        $this->language = new FrenchLang();

    }

    /**
     * @param null|array $params
     * @param string $req the type of the request
     * @return array|bool of requested elements
     */
    protected function executerRequete($params = null, $req = 'find')
    {
        $requete = $this->$req($params);
        $resultat = $this->connexion->prepare($requete);
        if (!($req == 'find' && $params == null)) {
            if (isset($params['params'])) {
                $p = $params['params'];
            }
            else $p = $params;
            foreach ($p as $key => $value) {
                if ($value != 'NOW()') $resultat->bindValue($key, $value);
            }
        }
        if ($resultat->execute()) {
            if ($req == 'find') return $resultat->fetchAll(PDO::FETCH_ASSOC);
            else return true;
        } else return false;
    }

    private function find($data)
    {
        $select = 'SELECT ';
        if (isset($data['fields'])) {
            $select .= $data['fields'] . '';
        } else {
            $select .= '*';
        }
        $select .= ' FROM ' . $this->table . '';
        if (isset($data['conditions'])) {
            $select .= ' WHERE ' . $data['conditions'] . '';
        }
        if (isset($data['order'])) {
            $select .= ' ORDER BY ' . $data['order'] . '';
        }
        $select .= ';';
        return $select;
    }

    protected function insert($params)
    {
        $sql = "INSERT INTO " . $this->table . " (";
        foreach ($params as $key => $value) {
            $newKey = substr($key, 1);
            $sql .= "`$newKey`, ";
        }
        //suppression de la dernière virgule
        $sql = substr($sql, 0, -2);
        $sql .= ") VALUES (";
        foreach ($params as $key => $value) {
            if ($value == 'NOW()') $sql .= 'NOW(), ';
            else $sql .= "$key, ";
        }
        $sql = substr($sql, 0, -2);
        $sql .= ");";
        return $sql;
    }

    protected function delete($data)
    {
        $sql="DELETE FROM ".$this->table." WHERE ";
        $key = array_keys($data)[0];
        $newKey = substr($key, 1);
        $sql .= "`$newKey` = $key;";
        return $sql;
    }

    protected function update($data)
    {
        $sql="UPDATE ".$this->table." SET ";
        foreach ($data['params'] as $key => $value) {
            $newKey = substr($key, 1);
            $sql .= "`$newKey` = $key, ";
        }
        $sql = substr($sql, 0, -2);
        $cond = $data['conditions'];
        $sql .= " WHERE $cond";
        $sql .= ";";
        return $sql;
    }


}