<?php
    echo "<h3>Valiku tulemus</h3>";

    if (isset($_SESSION['voted_for'])) {
        $selectedPosition=htmlspecialchars($_SESSION['voted_for']);
        echo "<h3>Te olete juba hääletanud, valisite pildi number $selectedPosition</h3>";
        echo '</br>';
        echo "<img src=$pildid[$selectedPosition] alt='pilt'/>";
    }
    elseif  (isset($_POST['pilt']) && $_POST['pilt']!="" && count($pildid) >= htmlspecialchars($_POST['pilt'])){
        $selectedPosition=htmlspecialchars($_POST['pilt']);
        echo "<h3>Aitäh hääletamast, valisite pildi number ${_POST['pilt']}</h3>";
        echo '</br>';
        echo "<img src=$pildid[$selectedPosition] alt='pilt'/>";
        $_SESSION['voted_for'] = $_POST['pilt'];
    } else {
        echo '<h3>Vabandame, kuid te ei valinud ühtegi pilti või sellist pilti pole olemas!</h3>';
           }
?>
