<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
<!-- bootstrap cdn link  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- bootstrap link  -->
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <!-- font awesome script link  -->
        <script src="https://kit.fontawesome.com/0a6d56343f.js" crossorigin="anonymous"></script>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.css" integrity="sha512-hksROWRSWPuYnv0z5vhyUwobZ49ZBxzhsCdXhwFy9ZDFFMS2UOg1DgCKphTlWkibm7p3Fp6Vq6GffbNDd+tOgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- custom css link  -->
        <link rel="stylesheet" href="style.css">
</head>
<body>
   
<?php

?>

<?php include 'header.php'; ?>

<div class="container">

      <section class="products">

         <h1 class="heading">latest products</h1>

         <div class="box-container">

            <?php
            
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
               while($fetch_product = mysqli_fetch_assoc($select_products)){
            ?>

            <form action="" method="post">
               <div class="box">
                  <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" width="150" height="110">
                  <h3><?php echo $fetch_product['name']; ?></h3>
                  <div class="price">€<?php echo $fetch_product['price']; ?></div>
                  <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                  
               </div>
              
            </form>
            <div class="popup-imag">
                              <span>&times;</span>
                              <img src="">
                           </div>
            <?php
               };
            };
            ?>

         </div>
               
      </section>
                           
</div>                     

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script>document.querySelectorAll('.box-container img').forEach(image =>{
    image.onclick = () =>{
    document.querySelector('.popup-imag').style.display = 'block';
    document.querySelector('.popup-imag img').src = image.getAttribute('src');
    }
});

document.querySelector('.popup-imag span').onclick = () => {
    document.querySelector('.popup-imag').style.display = 'none';
} </script>
</body>
</html>