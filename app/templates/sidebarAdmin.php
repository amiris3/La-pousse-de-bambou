<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column text-justify">
            <?php for ($i=0;$i<4;$i++) :
                $active = ($tab[$i] == $_GET['page'])? 'active' : '';
                ?>
            <li class="nav-item">
                <a class="nav-link <?=$active?>" href="index.php?page=<?=$tab[$i]?>">
                    <i class="icofont-<?=$icons[$i]?>"></i>
                    <?=$noms[$i]?>
                </a>
            </li>
            <?php endfor;?>

            <li class="nav-item">
                <div class="dropdown">
                    <a class="<?=($tab[4] == $_GET['page'] || $tab[5] == $_GET['page'])? 'active' : '';?> nav-link dropdown-toggle" type="button"
                       id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icofont-food-basket"></i>
                        Plats
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="index.php?page=<?=$tab[4]?>">Ajouter un plat</a>
                        <a class="dropdown-item" href="index.php?page=<?=$tab[5]?>">Modifier un plat</a>
                    </div>
                </div>
            </li>
        </ul>
        <hr>
    </div>
</nav>