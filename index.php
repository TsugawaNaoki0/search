<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./home.css">
    <title></title>
  </head>
  <body>
    <div class="main">
      <form class="" action="./index.php" method="post">
        <div class="">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <input type="text" name="text" value="" class="login">
          <input type="submit" name="" value="検索" class="login">
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
        $url_db = file(__DIR__ . '/urls.txt');

        $count = count($database, COUNT_RECURSIVE);
        $count_urls = count($url_db, COUNT_RECURSIVE);

        for ($i = 0; $i < $count; $i++){
          if (strpos(substr($database[$i], 8), $word) !== false){
            $index_database = substr($database[$i], 0, 8);
            for ($j = 0; $j < $count_urls; $j++){
              // echo $index_database;
              if (strpos($url_db[$i], $index_database) !== false){
                // echo $index_database;
                echo "<a href=\"".substr($url_db[$i], 8)."\">".substr($database[$i], 8)."</a>";
                break;
              }
            }

            ?>
            <br>
            <br>
            <?php
            }
          }
      ?>
      <br>
      <br>
      <br>
      <br>
      <br>

    </div>

  </body>
</html>
