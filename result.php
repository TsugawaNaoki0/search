<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./home.css">
    <title></title>
  </head>
  <body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="main">
      <form class="" action="./result.php" method="post">
        <div class="">
          <input type="text" name="text" value="">
          <input type="submit" name="" value="検索">
        </div>
      </form>
      <br>
      <br>
      ※　検索ワードは１つだけ
      <br>
      <br>
      <br>
      <?php
        $word =  $_POST[text];
        echo "検索ワード：「".$word."」";
        ?>
        <br>
        <br>
        <hr>
        <br>
        <?php
        $database = file(__DIR__ . '/links.txt');
        $count = count($database, COUNT_RECURSIVE);

        for ($i = 0; $i < $count; $i++){
          if (strpos($database[$i], $word) !== false){
            echo "<a href=\"".$database[$i+1]."\">".$database[$i]."</a>";
            ?>
              <br>
              <br>
            <?php
            }
          }
      ?>
    </div>
  </body>
</html>
