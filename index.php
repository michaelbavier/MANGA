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
        <section class="block action"><a href="apps/views/type-manga/action.php?categorie=action"><h2>Action</h2></a></section>
        <section class="block policier"><a href="apps/views/type-manga/policier.php?categorie=policier"><h2>Policier</h2></a></section>
      </section>

      <section class="block_contenu">
        <section class="block aventure"><a href="apps/views/type-manga/aventure.php?categorie=aventure"><h2>Aventure</h2></a></section>
        <section class="block science-fiction"><a href="apps/views/type-manga/science-fiction.php"><h2>Fantastique</h2></a></section>
      </section>

      <section class="block_contenu">
        <section class="block romance"><a href="apps/views/type-manga/romance.php"><h2>Romance</h2></a></section>
        <section class="block fantastique"><a href="apps/views/type-manga/fantastique.php"><h2>Fantastique</h2></a></section>
      </section>

      <section class="block_contenu">
        <section class="block sport"><a href="apps/views/type-manga/sport.php"><h2>Sport</h2></a></section>
        <section class="block manga_celebre"><a href="apps/views/type-manga/manga-celebre.php">Manga Celebre<h2></h2></a></section>
      </section>

    </div>

    <!--.........................................................................
    Footer
    ............................................................................-->
    <footer></footer>

  </div>
</body>
</html>
