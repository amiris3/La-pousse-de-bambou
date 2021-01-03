<?php

namespace app\languages;

class FrenchLang extends Lang {

    public function langAccueil()
    {
        $this->lang['home'] = 'Accueil';
        $this->lang['restoAsiat'] = 'restaurant asiatique à La Rochelle';
        $this->lang['hero'] = 'Dans une ambiance feutrée et de grand standing, venez découvrir ou redécouvrir les saveurs des
                    cuisines traditionnelles chinoise, japonaise et thailandaise.';
        $this->lang['book'] = 'Réservez';
        $this->lang['ourMenu'] = 'Notre menu';
        $this->lang['specialties'] = 'Spécialités';
        $this->lang['discoverSpecialties'] = 'Découvrez nos spécialités';
        $this->lang['specialtiesSpeech'] = "Il est pour nous de la plus haute importance de vous donner des produits frais,
                                        de la qualité plus que de la quantité. Nous prenons bien soin de l'hygiène de
                                        ceux en contact avec la nourriture et d'autant plus en cette période.";
    }

    public function langEvents() {
        $this->lang['events'] = 'Évènements';
        $this->lang['organizeEvents'] = 'Organisez vos évènements dans notre restaurant';
        $this->lang['e1_nom'] = 'Fêtes d\'anniversaire';
        $this->lang['e1_italic'] = 'Nous faisons de votre anniversaire un moment mémorable';
        $this->lang['e1_1'] = 'choix d\'un gâteau sur mesure';
        $this->lang['e1_2'] = 'animations pour les enfants';
        $this->lang['e1_3'] = 'prise en compte des régimes particuliers';
        $this->lang['e1_p'] = 'Notre équipe sera aux petits soins pour s\'assurer que vous ne manquiez de rien';
        $this->lang['e2_nom'] = 'Soirées privées';
        $this->lang['e2_italic'] = 'Vous serez accueillis par un intérieur sophistiqué et les sourires chaleureux
         de notre merveilleuse équipe.';
        $this->lang['e2_1'] = 'un endroit agréable et intimiste';
        $this->lang['e2_2'] = 'des serveurs qui veillent au grain';
        $this->lang['e2_3'] = 'de la nourriture qui ravira tout un chacun';
        $this->lang['e2_p'] = 'Notre restaurant est disponible exclusivement pour vous, en faisant le lieu idéal 
      pour les évènements de ce genre';
        $this->lang['e3_nom'] = 'Fêtes d\'entreprise';
        $this->lang['e3_italic'] = 'Notre restaurant vous promet une expérience agréable et unique avec vos collègues et 
        chefs d\'entreprise';
        $this->lang['e3_1'] = 'un encadrement de votre consommation d\'alcool pour que vous puissiez vous amuser 
        sans avoir à y penser';
        $this->lang['e3_2'] = 'des animations originales';
        $this->lang['e3_3'] = 'une ambiance légère';
        $this->lang['e3_p'] = 'La pression diminuera et vos collègues vous remercieront de nous avoir choisi.';
    }

    public function langAbout()
    {
        $this->lang['about'] = 'À Propos';
        $this->lang['promise'] = 'Ce que nous vous promettons';
        $this->lang['idealPlace'] = "La pousse de bambou à La Rochelle est l'endroit idéal si vous êtes amateur des grandes spécialités
                        de la cuisine asiatique.";
        $this->lang['quality1'] = 'une qualité des produits irréprochables';
        $this->lang['quality2'] = 'un respect des recettes traditionnelles';
        $this->lang['quality3'] = 'une expérience vous offrant les meilleurs éléments';
        $this->lang['aboutSpeech'] = "Notre restaurant propose un succulent menu composé de
                        spécialités chinoises, thaïlandaises, vietnamiennes et japonaises que vous pourrez déguster
                        entre amis ou en famille, et toujours dans une ambiance des plus chaleureuses ! Afin de
                        réserver une table au restaurant La pousse de bambou, contactez-nous dès à présent.";
        $this->lang['chefs'] = 'Chefs';
        $this->lang['proChefs'] = 'Nos chefs professionnels';
        $this->lang['chef1_name'] = 'Walter White';
        $this->lang['chef1_job'] = 'Chef cuisinier';
        $this->lang['chef2_name'] = 'Sarah Jhonson';
        $this->lang['chef2_job'] = 'Patissière';
        $this->lang['chef3_name'] = 'William Anderson';
        $this->lang['chef3_job'] = 'Cuisinier';
        $this->lang['whyUs'] = 'Pourquoi nous';
        $this->lang['whyChoosingUs'] = 'Pourquoi choisir notre restaurant';
        $this->lang['why1_name'] = 'La qualité';
        $this->lang['why1_text'] = "Nos produits sont frais et sélectionnés parmi des producteurs locaux qui se sont engagés
                        à respecter l'environnement et leur production";
        $this->lang['why2_name'] = 'La tradition';
        $this->lang['why2_text'] = 'Nous avons fait des recherches extensives et sommes en lien avec des experts culinaires en
                            Asie pour vous faire profiter des meilleures recettes';
        $this->lang['why3_name'] = "L'expérience";
        $this->lang['why3_text'] = "Nous n'engageons que des cuisiniers ayant un minimum de 5 ans d'expérience et issus des
                        formations les plus renommées";
    }

    public function langGallery()
    {
        $this->lang['gallery'] = 'Galerie';
        $this->lang['pictures'] = 'Quelques photos de notre restaurant';
    }

    public function langMenu()
    {
        $this->lang['menu'] = 'Menu';
        $this->lang['discoverMenu'] = 'Découvrez notre délicieux menu';
        $this->lang['all'] = 'Tout';

    }

    public function langFooter()
    {
        $this->lang['phone'] = 'Téléphone :';
        $this->lang['mail'] = 'Email :';
        $this->lang['social'] = ['twitter', 'facebook', 'instagram', 'pinterest'];
        $this->lang['socials'] = 'Réseaux sociaux';
        $this->lang['admin'] = 'Admin';
        $this->lang['rights'] = 'Tous Droits Réservés';

    }

    public function langContact()
    {
        $this->lang['contact'] = 'Contact';
        $this->lang['contactUs'] = 'Contactez-nous';
        $this->lang['address'] = 'Addresse :';
        $this->lang['openingsTitle'] = 'Horaires d\'ouverture';
        $this->lang['openingDays'] = 'Mardi-Dimanche';
        $this->lang['openingTime1'] = '11 h 45 - 14 h 30 ';
        $this->lang['openingTime2'] = '19 h 30 - 22 h 00 ';
        $this->lang['openings'] = $this->lang['openingDays'] . ' '. $this->lang['openingTime1'] . ' et '.
            $this->lang['openingTime2'];
        $this->lang['closed'] = 'Fermé le Lundi';
        $this->lang['name'] = 'Nom : ';
        $this->lang['subject'] = 'Object : ';
        $this->lang['message'] = 'Message :';
        $this->lang['sendMessage'] = 'Envoyer le message';


    }

    public function langBook() {
        $this->lang['book'] = 'Réservez';
        $this->lang['bookHere'] = 'Réservez une table';
        $this->lang['date'] = 'Date :';
        $this->lang['time'] = 'Heure :';
        $this->lang['peopleNb'] = 'Nombre de personnes :';

        $this->lang['testimonials'] = 'Avis';
        $this->lang['customersThink'] = 'Ce que nos clients pensent de nous';

        $this->lang['avis1_job'] = 'Chef d\'entreprise & Fondateur';
        $this->lang['avis1_avis'] = 'Délicieux ! Un restaurant aux allures majestueuses, et c\'est pour la bonne cause,
         c\'est excellent. C\'est un véritable voyage en pays d\'Asie durant lequel on peut savourer des plats
         qui sont typiques. Je recommande !';

        $this->lang['avis2_job'] = 'Designer';
        $this->lang['avis2_avis'] = 'Excellent!!! Les produits sont frais et bien travaillés.
                        Le choix de menu y est large et le service, très efficace. Le personnel est très professionnel.
                        Très bon rapport qualité prix.';

        $this->lang['avis3_job'] = 'Propriétaire d\'un magasin';
        $this->lang['avis3_avis'] = 'Le restaurant est très très propre ainsi que les toilettes c\'est irréprochable .
        Les desserts comporte des fruits frais découpés ou non ce qui est assez rare.
        C\'est l\'un des meilleurs restaurants de la région';

        $this->lang['avis4_job'] = 'Freelance';
        $this->lang['avis4_avis'] = 'Nous sommes allés dans ce restaurant asiatique et jamais déçus. L\'accueil est parfait ,
                        le menu est très varié. Le personnel est sympathique et dévoué, mérite le déplacement et est
                        sans doute une valeur sure dans cette catégorie';

        $this->lang['avis5_job'] = 'Entrepreneur';
        $this->lang['avis5_avis'] = 'Un excellent restaurant Asiatique .
                        Super accueil, super service et cuisine d\'une grande qualité.
        Le service est impeccable, vos assiettes vides retirées afin de ne pas encombrer la table.
        Les tarifs sont raisonnables.';

    }


}

