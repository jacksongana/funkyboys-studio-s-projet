<?php
include("menu.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
    <title>FunkyCreat@Com</title>
</head>
<?php  echo $_Menu ; ?>
<body>


 


    <header id="intro">
        <img src="image/Londres.gif">
    </header>

    <main class="accueil container">

        <div id="col">
            <div id="qui" class="qui">
            <h2>Qui Sommes-Nous?</h2>
            </div>
            <div class="para">
            <p>Bonjour Nous sommes FunkyBoys c'est site qui vous aidera et donner le cuitriste Lorem ipsum dolor sit amet consectetur adipisicing elit. A in repellendus perferendis temporibus dolorem quod ex repellat, recusandae reprehenderit voluptatem ipsum non minus maiores similique impedit praesentium nisi quis aliquam? <br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error totam assumenda, doloremque repudiandae expedita officiis repellat, deleniti natus quidem voluptatibus repellendus ad commodi laudantium veniam doloribus id ullam quia quaerat.</p>
            </div>

        </div>



    </main>










   

</body>

<script type="text/javascript" src="funk.js"></script>


<footer class="foot">
<?php  echo $_Footer ; ?>
    
</footer>

</html>
