<?php
include 'menu.php';

@include 'shop/config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = ($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
        
      };
   };
   $total_product = implode( ", ",$product_name);
   if(mysqli_num_rows($cart_query) > 1){
      $total_product = implode('quantity', 'name',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Merci d'avoir passé la commande!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> Nom : <span>".$name."</span> </p>
            <p> Numéro e téléphone : <span>".$number."</span> </p>
            <p> Email : <span>".$email."</span> </p>
            <p> Adresse : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> Mode de paiement : <span>".$method."</span> </p>
            <p>(*Une fois que votre commande est valider, vous recervez un e-mail de comfirmation de commande et lien de paiement)</p>
         </div>
            <a href='shop.php' class='btn' name='boutique_btn'>Retour à la boutique</a>
         </div>
      </div>
      ";
   }
   else{
      echo 'error';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="cart.css">
   <link rel="stylesheet" href="menu.css">
   <link rel="stylesheet" href="shop/style.css">

</head>
<body>

<?php echo $_Menu; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">completer votre commande</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
        $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $price_total = $fetch_cart['price'] * $fetch_cart['quantity'];
            $grand_total = $total += $price_total;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>votre painer est vide!</span></div>";
      }
      ?>
      <span class="grand-total"> Total : <?= $grand_total; ?> €</span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>Nom</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Numéro de téléphone</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>Email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Mode payment</span>
            <select name="method">
               <option value="virement" selected>Virement</option>
               <option value="credit cart">CB</option>
               <option value="paypal">Paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Adresse</span>
            <input type="text" placeholder="ex. 1bis." name="flat" required>
         </div>
         <div class="inputBox">
            <span>Adresse complet</span>
            <input type="text" placeholder="ex. Rue sanit-martin" name="street" required>
         </div>
         <div class="inputBox">
            <span>Ville</span>
            <input type="text" placeholder="ex. Paris" name="city" required>
         </div>
         <div class="inputBox">
            <span>Region</span>
            <input type="text" placeholder="ex. Alsace" name="state" required>
         </div>
         <div class="inputBox">
            <span>Pays</span>
            <input type="text" placeholder="ex. France" name="country" required>
         </div>
         <div class="inputBox">
            <span>Code postal</span>
            <input type="text" placeholder="ex. 75010" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>

</div>


<script src="shop/shop-script.js"></script>
   
</body>
</html>