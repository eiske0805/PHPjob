<?php

$num = $_GET["num"];
$digits = strlen($num);
$selected_digit = substr($num, mt_rand(0, $digits - 1), 1);
$selected_number = (int) $selected_digit;
$fortune;


if ($selected_number === 0) {
  $fortune = "凶";
} elseif ($selected_number <= 3) {
  $fortune = "小吉";
} elseif ($selected_number <= 6) {
  $fortune = "中吉";
} elseif ($selected_number <= 8) {
  $fortune = "吉";
} elseif ($selected_number === 9) {
  $fortune = "大吉";
} else {
  $fortune = "占えませんでした。";
}

?>

<P><?php echo date("Y/m/d", time()) ?>の運勢は</P>
<P>選ばれた数字は<?php echo $selected_number ?></P>
<P><?php echo $fortune ?></P>