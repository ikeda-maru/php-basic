<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // グローバル変数を定義する
    $user_name = '花子';

    function show_user_name() {
      // ローカル変数を定義する
      $user_name = '太郎';

      // ローカルスコープの範囲内でローカル変数を使う
      echo $user_name . '<br>';
    }

    show_user_name();

    // グローバルスコープの範囲内でグローバル変数を使う
    echo $user_name;

    /*
    ローカルスコープで定義された変数はローカルスコープ内で使用する
    グローバルスコープで定義された変数はグローバルスコープ内で使用する
    */
    ?>
  </p>
</body>
</html>