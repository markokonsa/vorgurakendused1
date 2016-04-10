<?php
    echo "<h3>Valiku tulemus</h3>";

    if(isset($_POST['pilt']) && $_POST['pilt']!="" && count($pildid) >= htmlspecialchars($_POST['pilt'])){
            $selectedPosition=htmlspecialchars($_POST['pilt']);
            echo "Aitäh hääletamast, valisite pildi number ${_POST['pilt']}";
            echo '</br>';
            echo "<img src=$pildid[$selectedPosition] alt='pilt'/>";
    } else {
            echo 'Vabandame, kuid te ei valinud ühtegi pilti või sellist pilti pole olemas!';
           }
?>
