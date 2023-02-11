<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./home.css">
    <title></title>
  </head>
  <body>



      <dl>
      <dt>写真</dt>
      <dd>
        <div>
          <label><span>背面カメラ</span>
          <input type="file" capture="environment" accept="image/*"></label>
        </div>
      <div>
    <label><span>インカメラ</span>
    <input type="file" capture="user" accept="image/*"></label>
    </div>
  </dd>
  <dt>動画</dt>
  <dd>
    <div>
    <label><span>背面カメラ</span>
    <input type="file" capture="environment" accept="video/*"></label>
    </div>
    <div>
    <label><span>インカメラ</span>
    <input type="file" capture="user" accept="video/*"></label>
    </div>
  </dd>
</dl>



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
        $sakana =  $_POST[text];
        echo "検索ワード：「".$sakana."」";
        ?>
        <br>
        <br>
        <hr>
        <br>
        <?php
        $momoniku = file(__DIR__ . '/links.txt');
        $ebi = file(__DIR__ . '/urls.txt');

        $yaki_doufu = count($momoniku, COUNT_RECURSIVE);
        $momen_doufu = count($ebi, COUNT_RECURSIVE);

        for ($i = 0; $i < $yaki_doufu; $i++){
          if (strpos(substr($momoniku[$i], 8), $sakana) !== false){
            $index_momoniku = substr($momoniku[$i], 0, 8);
            for ($j = 0; $j < $momen_doufu; $j++){
              // echo $index_momoniku;
              if (strpos($ebi[$i], $index_momoniku) !== false){
                // echo $index_momoniku;
                echo "<a href=\"".substr($ebi[$i], 8)."\">".substr($momoniku[$i], 8)."</a>";
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
