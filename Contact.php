<?php
include("menu.php");

?>
<!DOCTYPE html>
<html lang="fr">
    
    
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- bootstrap link  -->
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <!-- font awesome script link  -->
        <script src="https://kit.fontawesome.com/0a6d56343f.js" crossorigin="anonymous"></script>
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.css" integrity="sha512-hksROWRSWPuYnv0z5vhyUwobZ49ZBxzhsCdXhwFy9ZDFFMS2UOg1DgCKphTlWkibm7p3Fp6Vq6GffbNDd+tOgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="menu.css">
    </head>
    <?php  echo $_Menu ; ?>
    <body>
        
        
        <div class="container">

            <h1>Contact</h1>

            <p>N'hésitez pas à nous contacter et nous vous répondrons dès que possible</p>

            <form action="https://formspree.io/f/xpznoerl" method="POST">

            <label for="name">Nom</label>
            <input type="text" name="name" id="name">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" id="sujet">

            <label for="name">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>

            <input type="submit" value="Send">
            </form>
        </div>
        
 
        
        
        
        
    </body>
            <footer class="foot">
                <?php  echo $_Footer ; ?>
            </footer>
</html>