<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $user_names = ['太郎', '一郎', '二郎', '三郎', '四郎'];

    // 配列$user_namesの要素を1つずつ順番に出力する
    // foreach (要素取り出す配列名 as 取り出した要素を代入する変数名)
      // 取り出した要素に代入する変数名は何でも良いが、取り出す配列名の単数形にするのが一般的
    foreach ($user_names as $user_name) {
      echo $user_name . '<br>';
    }

    // 配列$user_namesのインデックスと値を1つずつ順番に出力する
    // 下記の連想配列でキーを取り出せるように、indexを取り出すことも可能
    foreach ($user_names as $index => $value) {
      echo "{$index}:{$value}<br>";
    }
    ?>
  </p>
  <p>
    <?php
    $personal_data = ['name' => '太郎', 'age' => 36, 'gender' => '男性'];

    // 連想配列$personal_dataのキーと値を1つずつ順番に出力する
    // foreach (要素を取り出す連想配列名 as 取り出したキーを代入する変数名 => 取り出した値を代入する変数名)
      // 取り出したキーと値を代入する変数名は何でも良いが、$keyと$valueにすることが多い
    foreach ($personal_data as $key => $value) {
      echo "{$key}は{$value}です。<br>";
    }

    // 連想配列$personal_dataの値を1つずつ順番に出力する
      // 上のようにキーを取り出さない場合、$keyを省略することも可能
    foreach ($personal_data as $value) {
      echo $value . '<br>';
    }
    ?>
  </p>
  <p>出身地を選択してください。</p>
  <form>
    <select>
      <?php
      $birthplaces = [
        '北海道地方',
        '東北地方',
        '関東地方',
        '中部地方',
        '近畿地方',
        '中国・四国地方',
        '九州地方'
      ];

      foreach ($birthplaces as $birthplace) {
        echo "<option>{$birthplace}</option>";
      }
      ?>
    </select>
  </form>
  <p>
    <?php
    $user_names = ['太郎', '一郎', '二郎', '三郎', '四郎'];

    // 検索したいユーザー名を代入する変数
    $target = '二郎';

    foreach ($user_names as $user_name) {
      echo $user_name . '<br>';

      // 変数$user_nameと変数$targetの値が一致すれば、break文で繰り返し処理を強制終了する
      if ($user_name === $target) {
        echo "{$target}さんが見つかったので、繰り返し処理を強制終了します。";
        break;
      }
    }
    ?>
  </p>
  <p>
    <?php
    $score = [
      '国語' => 80,
      '数学' => 55,
      '理科' => 70,
      '社会' => 85,
      '英語' => 60
    ];

    echo '合格した科目は以下のとおりです。<br>';

    foreach ($score as $key => $value) {
      // 変数$valueの値(点数)が70より小さければ、キー(科目名)と値(点数)を出力せずにcontinue文で次のループに進む
      if ($value < 70) {
        continue;
      }

      echo "{$key}:{$value}点<br>";
    }
    ?>
  </p>
</body>
</html>