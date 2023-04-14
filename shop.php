<?php
include("menu.php");
@include 'shop/config.php';

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'produit déjà ajouté au panier';
    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
       $message[] = 'produit ajouté au panier avec succès';
    }
 
 }
?>

<!DOCTYPE html>
<html lang="fr">
    
    
    
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta http-equiv="X-UA-Compatible" content="IE=7">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Shop</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0a6d56343f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.css" integrity="sha512-hksROWRSWPuYnv0z5vhyUwobZ49ZBxzhsCdXhwFy9ZDFFMS2UOg1DgCKphTlWkibm7p3Fp6Vq6GffbNDd+tOgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="shop.css">
            <link rel="stylesheet" href="menu.css">
        </head>

       <?php  echo $_Menu ; ?>

    <body>
    <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

        <br> 
            <div class="panel">
                    <h3>FunkyBoys-Shop</h3>
                <div class="cart">
                <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
                    <a href="cart.php"><span class="num"><?php echo $row_count;?></span><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        
        <br>

     

        <div class="container">
            <div class="products">
                <div class="box-container">

                                <?php
                                
                                    $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                                    if(mysqli_num_rows($select_products) > 0){
                                        while($fetch_product = mysqli_fetch_assoc($select_products)){
                                ?>
                        <div class="stuff">
                            <div class="container">
                                <div class="upper row">
                                    <div class="col-6">
                                        <img class="article" src="shop/uploaded_img/<?php echo $fetch_product['image']; ?>" width="120" height="120">
                                   </div>
                                                <div class="col-6 mt-4">
                                                    <p class="para"><?php echo $fetch_product['name']; ?></p>
                                                </div>
                                </div>
                            </div>
                                        <form action="" method="post">
                                            <div class="downer">
                                                <p class="price">Prix: €<?php echo $fetch_product['price']; ?></p>
                                                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                                <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                                <button type="submit" class="btn btn-warning" value="add to cart" name="add_to_cart">Ajouter au panier</button>
                                           </div>
                                       </form>
                        </div>
    
                                <?php
                                    };
                                };
                                ?>
                </div>
            </div>
       

                    <div class="popup-imag">
                        <span>&times;</span>
                        <img src="">
                    </div>
        </div>

                   
        
 
        <script>
document.querySelectorAll('.row img').forEach(image =>{
    image.onclick = () =>{
    document.querySelector('.popup-imag').style.display = 'block';
    document.querySelector('.popup-imag img').src = image.getAttribute('src');
    }
});

document.querySelector('.popup-imag span').onclick = () => {
    document.querySelector('.popup-imag').style.display = 'none';
}
            </script>
        
        
        
    </body>


    <footer class="foot">
<?php  echo $_Footer ; ?>
    
</footer>

</html>