<?php

    session_start();

    require_once('head.html');
    $pildid = glob('pildid/*.{jpg}', GLOB_BRACE);

    if(isset($_GET['page']) && $_GET['page']!=""){
        $view=htmlspecialchars($_GET['page']);
    } else {
       $view="pealeht";
    }

    switch($view) {
         case "pealeht":
                include 'pealeht.php';
                break;
         case "galerii":
                include 'gallery.php';
                break;
         case "haaletamine":
         if (isset($_SESSION['voted_for'])) {
            include 'tulemus.php';
         } else {
            include 'vote.php';
         }
                break;
         case "tulemus":
                include 'tulemus.php';
                break;
         default:
                include 'pealeht.php';
                break;
    }
    require_once('foot.html');
?>