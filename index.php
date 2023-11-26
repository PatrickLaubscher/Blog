<?php 

require 'form.php';
require 'personnage.php';
require 'text.php';

$form = new Form($_POST);
var_dump(Text::withZero(40));

?>

    <form action="#" method="post">

        <?php

        echo $form->input('username');
        echo $form->input('password');
        echo $form->submit();

        ?>

    </form>

<?php 

$harry = new Personnage('Harry');

$harry->regenerer();

var_dump($harry);


?>