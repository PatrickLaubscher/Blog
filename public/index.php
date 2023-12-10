<?php 

require '../app/Autoloader.php';

App\Autoloader::register();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}


if($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'single') {
    require '../pages/single.php';
}


?>
