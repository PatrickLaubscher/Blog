<?php 
use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
        <?php 
            require 'class/Autoloader.php';
            Autoloader::register();

            $form = new BootstrapForm($_POST);

        ?>

        <form action="#" method="post" class="container col-5">

            <?php
                echo $form->input('username');
                echo $form->input('password');
                echo $form->submit();
                
            ?>

        </form>



    </body>







</html>