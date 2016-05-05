<?php
  $jsonData = file_get_contents("movies.json");
  $json = json_decode($jsonData, true);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Udemy mini project1</title>
    <link rel="stylesheet" href="style.css" charset="utf-8">
  </head>
  <body>
    <section class="container">
      <h1>My Favorite Movies</h1>
      <ul>
        <?php
          foreach($json['movies'] as $key=>$value) {
            echo '<h4>' . $value['title'] . '</h4>';
            echo '<li>Year: ' . $value['Year'] . '</li>';
            echo '<li>Genre: ' . $value['Genre'] . '</li>';
          }
         ?>
      </ul>
    </section>
  </body>
</html>
