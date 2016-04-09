<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <title> Vali stiil </title>
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
           <?php if(isset($_POST['backgroundColor']) && $_POST['backgroundColor']!=""){
            $backgroundColor=htmlspecialchars($_POST['backgroundColor']);
            echo "${_POST["backgroundColor"]}";
          } ?>;
          color:
            <?php if(isset($_POST['textColor']) && $_POST['textColor']!=""){
            $textColor=htmlspecialchars($_POST['textColor']);
            echo "${_POST["textColor"]}";
          } ?>;
          border-style:
            <?php if(isset($_POST['boarderType']) && $_POST['boarderType']!=""){
            $boarderType=htmlspecialchars($_POST['boarderType']);
            echo "${_POST["boarderType"]}";
          } ?>;
          border-color:
             <?php if(isset($_POST['boarderColor']) && $_POST['boarderColor']!=""){
            $boarderColor=htmlspecialchars($_POST['boarderColor']);
            echo "${_POST["boarderColor"]}";
          } ?>;
          border-width:
           <?php if(isset($_POST['width']) && $_POST['width']!=""){
            $width=htmlspecialchars($_POST['width']);
            echo "${_POST["width"]}"."px";
          } ?>;
          border-radius:
           <?php if(isset($_POST['radius']) && $_POST['radius']!=""){
            $radius=htmlspecialchars($_POST['radius']);
            echo "${_POST["radius"]}"."px";
          } ?>;
          font-size:
           <?php if(isset($_POST['fontSize']) && $_POST['fontSize']!=""){
            $fontSize=htmlspecialchars($_POST['fontSize']);
            echo "${_POST["fontSize"]}"."px";
          } ?>;
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
    <div id="screen"><?php if(isset($_POST['text']) && $_POST['text']!=""){
      $text=htmlspecialchars($_POST['text']);
      echo "${_POST["text"]}";
    } ?>

    </div>
      <hr>
      <form method="POST" action="stiilid.php">

        <textarea rows="5" cols="50" name="text" id="inputText"> </textarea>
          <br>

          <input type="number" min="1" max="40" name="fontSize"> Teksti suurus (1px-40px)</input>
          <br>

        <input type="color" name="backgroundColor" value="#FFFF00"> Taustavärvus</input>
          <br>

        <input type="color" name="textColor" value="#FF0000"> Tekstivärvus</input>
          <br>
          <br>
          <fieldset>
            <legend>Piirjoon</legend>
            Piirjoone laius (0-20px): <input type="number" min="0" max="20" step="1" name="width">
            <br>

            Piirjoonetüüp: <select name="boarderType">
              <option value="none"> Piirjoon puudub </option>
              <option value="dotted"> Punktiline piirjoon </option>
              <option value="solid"> Ühtlane piirjoon </option>
              <option value="double"> Topelt piirjoon</option>
              <option value="outset"> 3D </option>
            </select>
            <br>

            Piirjoone värvus: <input type="color" name="boarderColor" value="#FF00FF">
            <br>
            Piirjoone nurga raadius (0-100px): <input type="number" min="0" max="100" name="radius">
          </fieldset>
          <br>
        <button type="submit" name="esita"> Esita</button>

      </form>

  </body>
</html>