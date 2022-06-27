<link rel="stylesheet" href="css/style.css" />

<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST["my_name"];
$port = $_POST["port"];
$language = $_POST["language"];
$sql = $_POST["sql"];
$correct_port = $_POST["correct_port"];
$correct_language = $_POST["correct_language"];
$correct_sql = $_POST["correct_sql"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkTheAnswer($answer, $correct)
{
  if ($answer === $correct) {
    echo "正解!";
  } else {
    echo "残念・・・";
  }
}

?>
<!--POST通信で送られてきた名前を表示-->
<p>
  <?php echo $my_name; ?>さんの結果は・・・？
</p>

<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php checkTheAnswer($port, $correct_port) ?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php checkTheAnswer($language, $correct_language) ?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php checkTheAnswer($sql, $correct_sql) ?>