<?php

@include 'config.php';

if(isset($_POST['add_product'] )) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_floder = 'uploaded_img/'.$p_image;
    
    $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES
    ('$p_name', '$p_price', '$p_image')") or die('query failed');

    if($insert_query){
        move_uploaded_file($p_image_tmp_name, $p_image_floder);
        $message[] ='product add succesfully';
    }else{
        $message[] = 'could not add the product';
    }
};

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ");
    if($delete_query){
      
        $message[] = 'product has been deleted';
    }else{
    
        $message[] = 'prodcut could not be delete';
    }
};

if(isset($_POST['update_product'])){
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = 'uploaded_img/'.$update_p_image;
 
    $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");
 
    if($update_query){
       move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
       $message[] = 'product updated succesfully';
       header('location:admin.php');
    }else{
       $message[] = 'product could not be updated';
       header('location:admin.php');
    }
 
 }
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        
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

if(isset($message)){
    foreach($message as $message){
    echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.
    parentElement.style.display = `none`;"></i> </div>';
    };
};

?>
    <?php include 'header.php'; ?>
    


<div class="container">

        <section>

            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">

                <h3>Ajouter les nouvelles articles</h3>

                    <input type="text" name="p_name" placeholder="entrer le nom du produits" class="box" required>
                    <input type="number" name="p_price" min="0" placeholder="entrer le prix du produits" class="box" required>
                    <input type="file" name="p_image" accept="image/.jpg, image/.png, image/.jpeg" class="box" required>
                    <input type="submit" value="Ajouter au panier" name="add_product" class="btn">

            </form>

        </section>

        <section class="dispaly-product-table">

                <table>
                    <thead>
                        <th>image du produits</th>
                        <th>nom du produits</th>
                        <th>prix du produits</th>
                        <th>action</th>
                    </thead>
           

                <tbody>
                    <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                    if(mysqli_num_rows($select_products) > 0){
                        while($row = mysqli_fetch_assoc($select_products)){
                    ?>

                        <tr>
                            <td><img src="uploaded_img/<?php echo $row['image'];?>" height="100" width="100" alt=""></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['price']; ?>/-</td>
                            <td>
                                <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn"
                                onclick="return confirm('are your sure you want to delete this?');"><i 
                                class="fas fa-trash">Supprimer</i></a>
                                <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"><i 
                                class="fas fa-edit">Modifier</i></a>
                            </td>
                        </tr>

                    <?php
                            };
                        }else{
                            echo "<div class='empty'>no product added</div> ";
                                };
                    ?>
                </tbody>
                </table>

        </section>

<section class="edit-form-container">

<?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit
      ['name']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo 
      $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_p_image" 
      accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the prodcut" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>








                <script src="shop-script.js"></script>
</body>
</html>