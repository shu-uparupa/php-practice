<?php
// Q1 変数と文字列
$name = '永野';

echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5*4;

echo $num;

echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

$date = date('Y年m月d日 H時i分s秒');

echo '現在時刻は、' . $date . 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'windows' || $device === 'mac'){
  echo '使用OSは' . $device . 'です。';
}
else{
  echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 27;

echo ($age >= 18) ? '成人です。' : '未成年です。';

// Q6 配列
$deta = ['東京', '千葉', '埼玉', '栃木', '群馬', '茨城', '神奈川'];

echo $deta[2] . 'と' . $deta[3] . 'は、関東地方の都道府県です。';

// Q7 連想配列-1
$array = ['東京' => '新宿区', '千葉' => '千葉市', '埼玉' => 'さいたま市', '栃木' => '宇都宮市', '群馬' => '前橋市', '茨城' => '水戸市', '神奈川' => '横浜市'];

foreach ($array as $key => $value){
  echo $value . "\n";
}
// Q8 連想配列-2
foreach ($array as $key => $value)
  {
    if ($key === '埼玉'){
        echo '埼玉県の県庁所在地は、さいたま市です。';
    }
}

// Q9 連想配列-3
$array['鹿児島'] = '鹿児島';
$array['熊本'] = '熊本';

foreach ($array as $key => $value){
    if ($key !== '東京' && $key !== '千葉' && $key !== '埼玉' && $key !== '栃木' && $key !== '群馬' && $key !== '茨城' && $key !== '神奈川'){
        echo $key . 'は関東地方ではありません。' . "\n";
    }
    else {
      echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
    }
}

// Q10 関数-1
function hello($name){
  echo $name . '' . 'さん、こんにちは。' . "\n";
}

hello ('田中');
hello ('鈴木');

// Q11 関数-2
function calcTaxPrice($price){
  $taxprice = $price * 1.1;
  echo $price . 'の税込価格は、' . $taxprice . '円です。' . "\n";
}
calcTaxPrice($price = 1000);

// Q12 関数とif文
function distinguishNum($num) {
  echo ($num % 2 == 0) ? $num . 'は偶数です。' : $num . 'は奇数です。';
}

distinguishNum($num = 200);
distinguishNum($num = 321);

// Q13 関数とswitch文
function evaluateGrade($score){
  switch ($score){
    case 'A':
    case 'B':
      echo '合格です。' . "\n";
      break;
    case 'C':
      echo '合格ですが追加課題がある。' . "\n";
      break;
    case 'D':
      echo '不合格です。' . "\n";
      break;
    default:
      echo '判定不明です。講師に問い合わせてください。' . "\n";
      break;
  }
}

evaluateGrade($score = 'A');
evaluateGrade($score = 'N');


?>