<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <title> Vali stiil </title>
       <?php
if (isset($_POST['backgroundColor'])) {
    $backgroundColor = htmlspecialchars($_POST['backgroundColor']);
    setcookie('backgroundColor', $backgroundColor);
}
if (isset($_POST['textColor']) && $_POST['textColor'] != "") {
    $textColor = htmlspecialchars($_POST['textColor']);
    setcookie('textColor', $textColor);
}
if (isset($_POST['boarderType']) && $_POST['boarderType'] != "") {
    $boarderType = htmlspecialchars($_POST['boarderType']);
    setcookie('boarderType', $boarderType);
}
if (isset($_POST['boarderColor']) && $_POST['boarderColor'] != "") {
    $boarderColor = htmlspecialchars($_POST['boarderColor']);
    setcookie('boarderColor', $boarderColor);
}
if (isset($_POST['width']) && $_POST['width'] != "") {
    $width = htmlspecialchars($_POST['width']);
    setcookie('width', $width);
}
if (isset($_POST['radius']) && $_POST['radius'] != "") {
    $radius = htmlspecialchars($_POST['radius']);
    setcookie('radius', $radius);
}
if (isset($_POST['fontSize']) && $_POST['fontSize'] != "") {
    $fontSize = htmlspecialchars($_POST['fontSize']);
    setcookie('fontSize', $fontSize);
}
if (isset($_POST['text'])) {
    $text = htmlspecialchars($_POST['text']);
    setcookie('text', $text);
}
?>
     <style>
      hr{
        display: flex;
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: auto;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
      }
        #screen{
          background-color:
           <?php
if (isset($_POST['backgroundColor'])) {
    $backgroundColor = htmlspecialchars($_POST['backgroundColor']);
    echo "${_POST['backgroundColor']}";
}
?>;
          color:
            <?php
if (isset($_POST['textColor'])) {
    $textColor = htmlspecialchars($_POST['textColor']);
    echo "${_POST['textColor']}";
}
?>;
          border-style:
            <?php
if (isset($_POST['boarderType'])) {
    $boarderType = htmlspecialchars($_POST['boarderType']);
    echo "${_POST['boarderType']}";
}
?>;
          border-color:
             <?php
if (isset($_POST['boarderColor'])) {
    $boarderColor = htmlspecialchars($_POST['boarderColor']);
    echo "${_POST['boarderColor']}";
}
?>;
          border-width:
           <?php
if (isset($_COOKIE['width'])) {
    $width = htmlspecialchars($_POST['width']);
    echo "${_POST['width']}" . "px";
}
?>;
          border-radius:
           <?php
if (isset($_COOKIE['radius'])) {
    $radius = htmlspecialchars($_POST['radius']);
    echo "${_POST['radius']}" . "px";
}
?>;
          font-size:
           <?php
if (isset($_POST['fontSize'])) {
    $fontSize = htmlspecialchars($_POST['fontSize']);
    echo "${_POST['fontSize']}" . "px";
}
?>;
          padding: 10px;
          max-width: 600px;
        }
        body{
          padding-left: 20px;
          padding-top: 20px;
        }
        fieldset{
          max-width: 600px;
          border-radius: 5px;
        }
      </style>
  </head>
  <body>
    <div id="screen"><?php
if (isset($_POST['text'])) {
    $text = htmlspecialchars($_POST['text']);
    echo "${_POST['text']}";
}
?>

    </div>
      <hr>
      <form method="POST" action="stiilid.php">

        <textarea rows="5" cols="50" name="text" id="inputText"><?php
if (isset($_POST['text'])) {
    echo $_POST['text'];
} elseif (isset($_COOKIE['text'])) {
    echo $_COOKIE['text'];
}
?></textarea>
          <br>

          <input type="number" min="1" max="40" name="fontSize"
            value=
             <?php
if (isset($_POST['fontSize'])) {
    echo $_POST['fontSize'];
} elseif (isset($_COOKIE['fontSize'])) {
    echo $_COOKIE['fontSize'];
}
?>> Teksti suurus (1px-40px)</input>
          <br>

        <input type="color" name="backgroundColor" value=
                    <?php
if (isset($_POST['backgroundColor'])) {
    echo $_POST['backgroundColor'];
} elseif (isset($_COOKIE['backgroundColor'])) {
    echo $_COOKIE['backgroundColor'];
} else {
    echo "#FFFF00";
}
?>
                    > Taustavärvus</input>
          <br>

        <input type="color" name="textColor" value=
                            <?php
if (isset($_POST['textColor'])) {
    echo $_POST['textColor'];
} elseif (isset($_COOKIE['textColor'])) {
    echo $_COOKIE['textColor'];
} else {
    echo "#FF0000";
}
?>> Tekstivärvus</input>
          <br>
          <br>
          <fieldset>
            <legend>Piirjoon</legend>
            Piirjoone laius (0-20px): <input type="number" min="0" max="20" step="1" name="width" value=
                                        <?php
if (isset($_POST['width'])) {
    echo $_POST['width'];
} elseif (isset($_COOKIE['width'])) {
    echo $_COOKIE['width'];
}
?>>
            <br>

            Piirjoonetüüp: <select name="boarderType">
                <option value="none" <?php
if (isset($_POST['boarderType']) && $_POST['boarderType'] == 'none') {
    echo ' selected="selected"';
} elseif (isset($_COOKIE['boarderType']) && $_COOKIE['boarderType'] == 'none') {
    echo ' selected="selected"';
}
?>> Piirjoon puudub </option>
                <option value="dotted" <?php
if (isset($_POST['boarderType']) && $_POST['boarderType'] == 'dotted') {
    echo ' selected="selected"';
} elseif (isset($_COOKIE['boarderType']) && $_COOKIE['boarderType'] == 'dotted') {
    echo ' selected="selected"';
}
?>> Punktiline piirjoon </option>
                <option value="solid" <?php
if (isset($_POST['boarderType']) && $_POST['boarderType'] == 'solid') {
    echo ' selected="selected"';
} elseif (isset($_COOKIE['boarderType']) && $_COOKIE['boarderType'] == 'solid') {
    echo ' selected="selected"';
}
?>> Ühtlane piirjoon </option>
                <option value="double" <?php
if (isset($_POST['boarderType']) && $_POST['boarderType'] == 'double') {
    echo ' selected="selected"';
} elseif (isset($_COOKIE['boarderType']) && $_COOKIE['boarderType'] == 'double') {
    echo ' selected="selected"';
}
?>> Topelt piirjoon</option>
                <option value="outset" <?php
if (isset($_POST['boarderType']) && $_POST['boarderType'] == 'outset') {
    echo ' selected="selected"';
} elseif (isset($_COOKIE['boarderType']) && $_COOKIE['boarderType'] == 'outset') {
    echo ' selected="selected"';
}
?>> 3D </option>
            </select>
            <br>

            Piirjoone värvus: <input type="color" name="boarderColor" value=
                                        <?php
if (isset($_POST['boarderColor'])) {
    echo $_POST['boarderColor'];
} elseif (isset($_COOKIE['boarderColor'])) {
    echo $_COOKIE['boarderColor'];
} else {
    echo "#FF00FF";
}
?>>
            <br>
            Piirjoone nurga raadius (0-100px): <input type="number" min="0" max="100" name="radius"
             value= <?php
if (isset($_POST['radius'])) {
    echo $_POST['radius'];
} elseif (isset($_COOKIE['radius'])) {
    echo $_COOKIE['radius'];
}
?>>
          </fieldset>
          <br>
        <button type="submit" name="esita"> Esita</button>

      </form>
  </body>
</html>