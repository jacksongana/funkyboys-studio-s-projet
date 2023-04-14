<?php
include 'menu.php';

@include 'shop/config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="cart.css">
   <link rel="stylesheet" href="menu.css">
   <link rel="stylesheet" href="shop/style.css">

</head>
<body>

<?php  echo $_Menu ; ?>

<div class="container ">

<section class="shopping-cart ">

   <h1 class="heading">Panier</h1>

   <table>

      <thead>
         <th>image</th>
         <th>nom</th>
         <th>prix</th>
         <th>quantité</th>
         <th>prix totale</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
      
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
          $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="shop/uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td><?php echo $fetch_cart['price']; ?> €</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="modifier" name="update_update_btn">
               </form>   
            </td>
            <td><?php echo $sub_total = $fetch_cart['price'] * $fetch_cart['quantity']; ?> €</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> supprimer </a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="shop.php" class="option-btn" style="margin-top: 0;">continuer d'achats</a></td>
            <td colspan="3">total</td>
            <td> <?php echo $grand_total; ?> €</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> vider la panier </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Valider votre commande</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="shop/shop-script.js"></script>

</body>
</html>