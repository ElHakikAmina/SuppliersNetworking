<div class="produit-populaire mx-3">
<h2 class="p-5 ChakraPetch text-muted">NOUVELLE ARRIVEE</h2>
<div class="d-flex justify-content-between flex-wrap" >
        <?php
            foreach($products as $product):
        ?>
    <div class="mb-5 mx-4">
        <a href="http://localhost/electromaroc/product/<?php echo $product['id']; ?>" class="text-decoration-none">
        <img src="views/pages/affiche_img_produit.php?id=<?php echo $product['id'];?>" style="width:180px; height:220px;" alt=""><br>
        <span class="ChakraPetch text-muted"><?php  echo $product['libelle'];?></span><br>
        <span class="ChakraPetch text-success"><?php  echo $product['prix_final'];?>MAD</span></a>  <br>
    </div>
    <?php
    endforeach;
?>
</div>
</div>
<section id="sec-4" class="py-5 ChakraPetch">
        <div class="container my-4">
            <div class="row gx-lg-5">
                <div class="col-lg-6 mb-5">
                    <h3>Lorem ipsum dolor</h3>
                    <p class="text-muted fw-light lh-lg my-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit minima recusandae molestiae veniam, reiciendis assumenda soluta eligendi debitis magnam necessitatibus reprehenderit suscipit temporibus. Ullam iusto maiores inventore nemo vero deserunt unde sit architecto repellendus quibusdam.
                    </p>
                    <p class="text-muted fw-light lh-lg my-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis corrupti quam quidem dolore pariatur!
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="http://localhost/electromaroc/views/img/img1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>