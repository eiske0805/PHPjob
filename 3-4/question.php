<link rel="stylesheet" href="css/style.css" />

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST["my_name"];

//①画像を参考に問題文の選択肢の配列を作成してください。
$port = [80, 22, 20, 21];
$language = ["PHP", "Python", "JAVA", "HTML"];
$sql = ["join", "select", "insert", "update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$correct_port = $port[0];
$correct_language = $language[3];
$correct_sql = $sql[1];

?>
<!--POST通信で送られてきた名前を出力-->
<p>
  お疲れ様です<?php echo $my_name; ?>さん
</p>

<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">

  <h2>①ネットワークのポート番号は何番？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php
  foreach ($port as $v) {
    echo "<input type='radio' name='port' value={$v}>{$v} ";
  }
  ?>

  <h2>②Webページを作成するための言語は？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php
  foreach ($language as $v) {
    echo "<input type='radio' name='language' value={$v}>{$v} ";
  }
  ?>

  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php
  foreach ($sql as $v) {
    echo "<input type='radio' name='sql' value={$v}>{$v} ";
  }
  echo "<br>";
  ?>
  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
  <input type="hidden" name="correct_port" value="<?php echo $correct_port; ?>">
  <input type="hidden" name="correct_language" value="<?php echo $correct_language; ?>">
  <input type="hidden" name="correct_sql" value="<?php echo $correct_sql; ?>">
  <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">

  <input type="submit" value="回答する">
</form>