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
    <link rel="stylesheet" href="sagastyle.css">
    <link rel="stylesheet" href="menu.css">

    
    <title>FunkyCreat@Com</title>
</head>
<header><?php  echo $_Menu ; ?></header>
<body>

<!-- Full-width images with number and caption text -->
<div class="carousel-container">

  <div class="mySlides animate">
    <img src="image/MCvsDC.png" alt="slide" />
    <div class="text">Marvel Vs DC</div>
  </div>

  <div class="mySlides animate">
    <a href="saga\James Bond\Accueil_James_Bond.php"><img src="image/007.jpg" alt="slide" /></a>
    <div class="text">James Bond</div>
  </div>

  <div class="mySlides animate">
    <a href="saga\Harry Potter\Accueil_Harry_Potter.html"><img src="saga\Harry Potter\hp_sorciers-1.jpg" alt="slide" /></a>
    <div class="text">Harry Potter</div>
  </div>

  <div class="mySlides animate">
    <a href="saga\Star Wars\Accueil_Star_Wars.html"><img src="saga\Star Wars\saga_star_wars.jpg" alt="slide" /></a>
    <div class="text">Star Wars</div>
  </div>

  <div class="mySlides animate">
    <img src="image/poc.png" alt="slide" />
    <div class="text">Priates des Caraibes</div>
  </div>

  <div class="mySlides animate">
    <img src="image/ff.png" alt="slide" />
    <div class="text">fast and furious</div>
  </div>

  <div class="mySlides animate">
    <img src="image/lord.gif" alt="slide" />
    <div class="text">Lord of Ring</div>
  </div>

  <div class="mySlides animate">
    <img src="image/hg.gif" alt="slide" />
    <div class="text">Hunger Games</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="prevSlide()">&#10094;</a>
  <a class="next" onclick="nextSlide()">&#10095;</a>

  <!-- The dots/circles -->
  <div class="dots-container">
    <span class="dots" onclick="currentSlide(1)"></span>
    <span class="dots" onclick="currentSlide(2)"></span>
    <span class="dots" onclick="currentSlide(3)"></span>
    <span class="dots" onclick="currentSlide(4)"></span>
    <span class="dots" onclick="currentSlide(5)"></span>
    <span class="dots" onclick="currentSlide(6)"></span>
    <span class="dots" onclick="currentSlide(7)"></span>
    <span class="dots" onclick="currentSlide(8)"></span>
  </div>
</div>
    
    
</body>

   <script type="text/javascript" src="sagafunk.js"></script>
   <footer class ="foot">
<?php  echo $_Footer ; ?>
    
</footer>
</html>