<?php
    require_once('../head.html');
    $pildid = glob('pildid/*.{jpg}', GLOB_BRACE);

    echo "<h3>Valiku tulemus</h3>";

    if(isset($_GET['pilt']) && $_GET['pilt']!="" && count($pildid) >= htmlspecialchars($_GET['pilt'])){
            $selectedPosition=htmlspecialchars($_GET['pilt']);
            echo "Aitäh hääletamast, valisite pildi number ${_GET['pilt']}";
            echo '</br>';
            echo "<img src=$pildid[$selectedPosition] alt='pilt'/>";
    } else {
            echo 'Vabandame, kuid te ei valinud ühtegi pilti või sellist pilti pole olemas!';
           }
    require_once('../foot.html');
?>
