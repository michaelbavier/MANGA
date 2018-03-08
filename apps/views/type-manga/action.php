<?php
include '../../../apps/views/parts/request.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../../public/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">
  <title>Page Action</title>
</head>
<body>

<!--...................................................................................
                                   HEADER
................................................................................ -->

    <header>
        <a href="../../../index.php"><p>Home</p></a>
        <h1>Action</h1>
    </header>
  <!--.........................................................................
                                    INTEGRALE
   ....................................................................... -->

  <div class="main_full">

<?php
require_once 'database.php';

 ?>      <section class="integrale">

        <section class="titel"><h4></h4></section>

        <section class="action_img"><img src="" alt=""></section>

        <section><img src="" alt=""></section>

        <button class="scan" type="button" name="lire">Lire</button>

      </section>

  </div>
<?php
    $req = $db->query('SELECT * FROM genre');

    $genre = $req-> fetch();

    var_dump($genre);



 ?>
<!-- ............................................................................
                                          FOOTER
............................................................................. -->

<footer></footer>

</body>
</html>
