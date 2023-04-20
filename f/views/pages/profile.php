<div class="d-flex flex-column flex-md-row mx-5 ">
    <div class="">
        <img src="http://localhost/electromaroc/views/img/profileImage.jpg" style="height:200px; width:150px;" >
    </div>
    <div>
        <?php echo $profil->nom_complet; ?> <br>
        <?php echo $profil->ville; ?> <br>
        <?php echo $profil->role; ?> <br>
        <?php echo $profil->telephone; ?> <br>
        <?php echo $profil->adresse; ?><br>
        <input type="submit" value="modifier profile">
        
        <input type="submit" value="Contacter" />
    </div>
</div>