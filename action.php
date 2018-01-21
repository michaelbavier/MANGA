<?php
include 'request.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./public/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
  <title>Page Action</title>
</head>
<body>


  <div class="nav_bar">
    <nav>
      <ul>
        <a href="index.php"><li>Home</li></a>
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



<div class="main_action">
  <div class="action_titre">
    <h1>Action</h1>
  </div>
  <?php foreach ($action as $pic): ?>
    <div class="integrale">
      <div class="titre"><h4><?php echo $pic["titre"];?></h4></div>
      <div class="action_img"><img src="<?php echo $pic["image"];?>" alt=""></div>
      <div class="description"><p class="Pdes"><?php echo $pic["description"];?></p></div>
    </div>
  <?php endforeach ?>
</div>

</body>
</html>
