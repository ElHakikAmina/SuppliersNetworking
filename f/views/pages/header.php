    <div class="header d-flex flex-wrap  justify-content-between">
        <div class="mx-auto mx-lg-0">
        <a href="http://localhost/electromaroc/index" class="text-decoration-none ChakraPetch "><span class=" text-dark fs-1"><span class="text-primary ">F</span>ournisseurs</span><span class=" text-muted ">Maroc</span></a>
        </div>
        <!---->
        <div class="mx-auto">
            <form class="d-flex" role="search" method="POST" action="http://localhost/electromaroc/search/1">
            <input class="form-control  me-2 ChakraPetch" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn btn-primary ChakraPetch" type="submit">Search</button>
            </form>
        </div>
        <!---->
        <div class="mx-auto">
            <?php
            if(isset($_SESSION['logged']) and isset($_SESSION['id_client']))
            {
                ?>
                <a href="http://localhost/electromaroc/profile/<?php echo $_SESSION['id_client']; ?>" class="link-primary text-decoration-none ChakraPetch text-dark">Profile</a>&nbsp;&nbsp;&nbsp;
                <?php
            }
            if(isset($_SESSION['admin']))
            {
                ?>

                <a href="http://localhost/electromaroc/addProduct" class="link-primary text-decoration-none ChakraPetch text-dark">Ajouter Produit</a>&nbsp;&nbsp;&nbsp;
                <a href="http://localhost/electromaroc/addCategory" class="link-primary text-decoration-none ChakraPetch text-dark">Ajouter Categorie</a>&nbsp;&nbsp;&nbsp;
                <a href="http://localhost/electromaroc/dashboard" class="link-primary text-decoration-none ChakraPetch text-dark">Dashboard</a>&nbsp;&nbsp;&nbsp;
            <?php
            }else if(isset($_SESSION['client']))
            {
                ?>
    <a href="http://localhost/electromaroc/historiquecommandes" class="text-dark text-decoration-none ChakraPetch">Historique des commandes</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
            }
            if(!isset($_SESSION['logged']))
            {
                ?>
            <a href="http://localhost/electromaroc/login" class="text-primary text-decoration-none ChakraPetch">Connexion</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="http://localhost/electromaroc/register" class="text-success  text-decoration-none ChakraPetch">Creér un compte</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
            }else
            {
                ?>
            <a href="http://localhost/electromaroc/logout" class="link-primary text-decoration-none ChakraPetch text-dark">Déconnexion</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
            }
            if(isset($_SESSION['client']))
            {
            ?>            
            <a href="http://localhost/electromaroc/panier"><img src="http://localhost/electromaroc/views/img/panier.png" style="width:30px; height:30px;"></a>
            <?php
            }
            ?>
        </div>
</div>