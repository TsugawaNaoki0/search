<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./home.css">
    <title>SEARCH</title>
  </head>
  <body>
    <div class="main">
      <form class="" action="" method="post">
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
        $link_file = file(__DIR__ . '/links.txt');
        $url_file = file(__DIR__ . '/urls.txt');
// alert("");
        $link_len = count($link_file, COUNT_RECURSIVE);
        $url_len = count($url_file, COUNT_RECURSIVE);
        
        for ($i = 0; $i < $link_len; $i++){
          if (strpos(substr($link_file[$i], 8), $word) !== false){
            $index_link_file = substr($link_file[$i], 0, 8);
            for ($j = 0; $j < $url_len; $j++){
              // echo $index_link_file;
              if (strpos($url_file[$i], $index_link_file) !== false){
                // echo $index_link_file;
                echo "<a href=\"".substr($url_file[$i], 8)."\">".substr($link_file[$i], 8)."</a>";
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
