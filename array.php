<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 配列に値を代入する
    $user_names = ['太郎', '一郎', '二郎', '三郎', '四郎'];

    // 配列の値を出力する
    // echo文は配列の中身全体を出力することはできないのでprint_r()を使用する。
    print_r($user_names);

    // 改行する
    echo '<br>';

    // 2番目の要素を更新する
    $user_names[1] = '花子';

    // 末尾に要素を追加する
    $user_names[] = '五郎';

    // 配列の値を出力する
    print_r($user_names);

    // 改行する
    echo '<br>';

    // 3番目の要素を出力する
    echo $user_names[2];
    ?>
  </p>
</body>
</html>