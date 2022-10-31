<?php
// 型宣言と異なるデータ型の場合にエラーを発生させる
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 朝の挨拶を出力する関数を定義する
    function say_good_morning() {
      echo 'おはようございます!<br>';
      echo '昨日はよく眠れましたか?<br>';
      echo '今日も一日頑張りましょう!<br>';
    }

    // 夜のあいさつを出力する関数を定義する
    function say_good_evening() {
      echo 'こんばんは!<br>';
      echo '今日も一日お疲れさまでした。<br>'; 
    }

    // 朝のあいさつを出力する関数を呼び出す
    say_good_morning();

    // 夜のあいさつを出力する関数を呼び出す
    say_good_evening();
    ?>
  </p>
  <p>
    <?php
    // 与えられた引数$priceに送料を加算し、その値を出力するkな数を定義する
    function calculate_total($price) {
      $total = $price + 500;

      echo $total . '円<br>';
    }

    // 関数を呼び出し、引数として購入金額を渡す
    calculate_total(1200);

    // 与えられた引数$priceと引数$shipping_feeを加算し、その値を出力する関数を定義する
    function add_two_arguments($price, $shipping_fee) {
      $total = $price + $shipping_fee;

      echo $total . '円<br>';
    }

    // 関数を呼び出し、引数として購入金額と送料を渡す
    add_two_arguments(1200, 500);
    ?>
  </p>
  <p>
    <?php
    // 与えられた引数$numを2倍にし、その値を戻り地として返す関数を定義する
    function double($num) {
      return $num * 2;
    }

    // 関数の戻り値を出力する
    echo double(30);
    ?>
  </p>
  <p>
    <?php
    // 引数の型宣言を行い、引数を整数型に限定する
    function type_hinting_argument(int $num) {
      return $num * 2;
    }

    // 型宣言と同じデータ型(今回整数型)の引数を渡す
    echo type_hinting_argument(1);

    /*
    型宣言と違う浮動小数点型を入力すると、下記のようなエラーメッセージが出力される。
    "整数型じゃないといけないのに、浮動小数点型が渡されている"という旨の記述。
    Fatal error: Uncaught TypeError: type_hinting_argument(): Argument #1 ($num) must be of type int, float given,
    */
    ?>
  </p>
    <?php
    // 戻り値の型宣言を行い、戻り値を整数型に限定する
    function type_hinting_return_value($num): int {
      return $num * 2;
    }

    // 型宣言と異なるデータ型の戻り値を返す(PHPファイルの先頭にdeclare(strict_types=1);を記述しているのでエラーが発生する)
    echo type_hinting_return_value(1);

    /*
    型宣言と違う浮動小数点型の戻り値が返ると、下記のようなエラーメッセージが出力される。
    "整数型じゃないといけないのに、浮動小数点型が返ってきた"という旨の記述。
    Fatal error: Uncaught TypeError: type_hinting_return_value(): Return value must be of type int, float returned
    ?>
    */
    ?>
  <p>

  </p>
</body>
</html>