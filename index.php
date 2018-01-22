<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./public/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
  <title>Manga</title>
</head>
<body>

  <div class="main-container">
    <!--............................................................................
    Header
    ............................................................................-->
    <header>
      <div class="home">
        <a href="index.php"><p>Home</p></a>
      </div>
      <div class="titre">
        <h1>Manga</h1>
      </div>

    </header>
    <!--.....................................................................
    Diaporama
    .........................................................................-->

    <div class="diaporama"></div>
    <!--................................................................................
    DESCRIPTIF
    ................................................................................. -->
    <div class="descriptif">
      <p>Lecture de vos manga prefere</p>
      <p>Section de scan</p>
    </div>


    <!--...............................................................
    Block Principal
    ...............................................................-->

    <div class="block_principal">

      <section class="block_contenu">
        <section class="block action"><a href="apps/views/type-manga/action.php"><h2>Action</h2></a></section>
        <section class="block policier"><a href="policier.php"><h2>Policier</h2></a></section>
      </section>

      <section class="block_contenu">
        <section class="block aventure"><a href="aventure.php"><h2>Aventure</h2></a></section>
        <section class="block science-fiction"><a href="science-fiction.php"><h2>Fantastique</h2></a></section>
      </section>

      <section class="block_contenu">
        <section class="block romance"><a href="romance.php"><h2>Romance</h2></a></section>
        <section class="block fantastique"><a href="fantastique.php"><h2>Fantastique</h2></a></section>
      </section>

      <section class="block_contenu">
        <section class="block sport"><a href="sport.php"><h2>Sport</h2></a></section>
        <section class="block manga_celebre"><a href="manga-celebre.php">Manga Celebre<h2></h2></a></section>
      </section>

    </div>

    <!--.........................................................................
    Footer
    ............................................................................-->
    <footer></footer>

  </div>
</body>
</html>
