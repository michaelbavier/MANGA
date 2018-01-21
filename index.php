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
                                    Nav Bar
    ............................................................................-->
    <div class="nav_bar">
      <nav>
        <ul>
          <a href=""><li>Home</li></a>
        </ul>


        <div class="form">
          <form class="formulaire">
            <p>Rechercher</p>
            <input class="text" type="text" value="">
            <button class="go" type="button" name="go">GO</button>
          </form>
        </div>
      </nav>
    </div>

    <!--.................................................................
                                  Titre
  ...................................................................  -->

    <div id="title">
      <h1>Manga</h1>
      <p>Site De Refference En Manga</p>
    </div>

    <!--.....................................................................
                            Diaporama
   .........................................................................-->

    <div class="diaporama"></div>

    <!--...............................................................
                          Block Principal
  ...............................................................-->

    <div class="block_principal">

      <div class="block_contenu">
        <div class="block action">
          <a href="action.php"><h2>Action</h2></a>
        </div>
        <div class="block policier">
          <h2>Policier</h2>
        </div>
      </div>

      <div class="block_contenu">
        <div class="block aventure">
          <h2>Aventure</h2>
        </div>

        <div class="block science-fiction">
          <h2>Science Fiction</h2>
        </div>
      </div>

      <div class="block_contenu">
        <div class="block romance">
          <h2>Romance</h2>
        </div>

        <div class="block fantastique">
          <h2>Fantastique</h2>
        </div>
      </div>

      <div class="block_contenu">
        <div class="block decouverte">
        </div>
        <div class="block manga_celebre">
          <h2>Manga Celebre</h2>
        </div>
      </div>
    </div>

    <!--.........................................................................
                                Footer
   ............................................................................-->
  <footer></footer>

  </div>
</body>
</html>
