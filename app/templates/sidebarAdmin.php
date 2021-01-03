<?php
$tab = ['adminMain', 'adminResa', 'adminPlatsInsertUpdate', 'adminPlatsDelete', 'adminClients', 'adminMessages'];
$actives = [];
for ($i=0;$i<sizeof($tab);$i++) {
    $actives[] = ($tab[$i] == $_GET['page'])? 'active' : '';
}
?>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column text-justify">
            <li class="nav-item">
                <a class="nav-link <?=$actives[0]?>" href="index.php?page=adminMain">
                    <i class="icofont-home"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?=$actives[1]?>" href="index.php?page=adminResa">
                    <i class="icofont-restaurant"></i>
                    Réservations
                </a>
            </li>

            <li class="nav-item">
                <div class="dropdown">
                    <a class="<?=$actives[2] . $actives[3]?> nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icofont-food-basket"></i>
                        Plats
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="index.php?page=adminPlatsInsertUpdate">Ajouter un plat</a>
                        <a class="dropdown-item" href="index.php?page=adminPlatsDelete">Modifier un plat</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=$actives[4]?>" href="index.php?page=adminClients">
                    <i class="icofont-user"></i>
                    Clients
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=$actives[5]?>" href="index.php?page=adminMessages">
                    <i class="icofont-ui-message"></i>
                    Messages
                </a>
            </li>
        </ul>
        <hr>
    </div>
</nav>