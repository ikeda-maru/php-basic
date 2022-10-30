<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 変数に値を代入する
    $user_name = '侍太郎';

    // 変数の中身を出力する
    echo $user_name;

    echo '<br>';

    // 変数に値を再代入する
    $user_name = '侍花子';

    // 変数の中身を出力する
    echo $user_name;
    ?>
  </p>
  <p>
    <?php
    // 変数に値を代入する
    $number = 3;

    // 変数と数値を計算し、その結果を出力する
    echo $number - 1.2;

    // 改行する
    echo '<br>';

    // 変数に値を代入する
    $my_name = '侍一郎';

    // 変数と文字列を連結し、その結果を出力する
    echo '私の名前は' . $my_name . 'です。';

    // 改行する
    echo '<br>';

    // 文字列の中で変数の中身を表示する(変数展開)
    echo "私の名前は{$my_name}です。";

    echo '<br>';
    // 変数展開は""で囲む(''ではダメ)
    // 変数展開されず、{$my_name}をそのまま出力される。
    echo '私の名前は{$my_name}です。';
    ?>
  </p>

  <!-- 
  変数の命名規則

  変数はどのような名前を付けても動作するが、誰が見ても内容がわかる変数名にすることが基本。
  覚えておくべき命名規則。

  1. 先頭に$（ドル記号）をつける

  2. 変数名はスネークケースで記述する
  スネークケースは、アルファベットで複合語を書く際に、単語と単語を_(アンダースコア)で区切る記法
  例：$user_name, $user_number

  なお、JavaScriptではキャメルケースを使っていたが、PHPではスネークケースが一般的。

  3. 変数の中身がわかるような名前にする
  ユーザー名であればuserName、年齢であればageなど、内容がわかる名前にする。
  中身がわからないアルファベットの羅列(例:xyz)、長すぎる名前は避ける。
  また、変数名は英語で記述する。
  -->
</body>
</html>