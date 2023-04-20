<?php
if(isset($_GET['id']))
{
    $existProduct = new ProductController();
    $product = $existProduct->getOneProduct();
    $commande= new CommandeController();
    $commande->order();
}else
{
  header("location:index");
  
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro MAROC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="http://localhost/electromaroc/views/style/header.css" rel="stylesheet"> 
    <link href="http://localhost/electromaroc/views/style/footer.css" rel="stylesheet">
    <link href="http://localhost/electromaroc/views/style/ChakraPetch.css" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,700&display=swap'); </style>
</head>
  <body>
    <div class=".container-fluid d-flex flex-column">
    <?php include('views/pages/header.php'); ?>
        <div class="d-flex flex-row">
            <div class="" style="width:40%;">
                <img src="http://localhost/electromaroc/views/pages/affiche_img_produit.php?id=<?php echo $_GET['id'];?>" style="width:70%; padding-left:30px; height:330px;">
            </div>
            <div class="mx-5" style="width:60%;">
              <br>
              <span class="ChakraPetch text-primary"><?php  echo $product->libelle;?></span>
              <br>
              <span class="ChakraPetch text-muted"><?php  echo $product->description;?></span><br><br>
              <span class="ChakraPetch text-success">Price:	<?php  echo $product->prix_final;?></span>
                <form method="POST">
                  <?php $id_produit=$_GET['id'];?>
                  <input type="hidden" name="id_produit" value="<?php echo $id_produit; ?>" style="width:60px;"/> <br>
                  <span class="ChakraPetch">Quantité : <input type="number" value="<?php echo $product->last_quantity; ?>" min="<?php echo $product->last_quantity; ?>" name="quantite" class="form-control" style="width:60px;"></span>
                  Vous ne pouvez pas achetter moins de <?php echo $product->last_quantity; ?> <br> <br>
                  <input type="submit" name="acheter" class="btn btn-success ChakraPetch" value="Achetter" /> 
                  <input type="submit" name="ajouter_au_panier" class="btn btn-primary ChakraPetch" value="Ajouter au panier" />
                </form>     
            </div>
        </div>    
        <?php include('pages/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>