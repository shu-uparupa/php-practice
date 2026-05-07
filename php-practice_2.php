<?php
// Q1 tic-tac問題
class tic_tac {
  public $tic;
  public $tac;
  public $tic_tac;

  public function judge($num) {
    $this->tic = $num % 4 === 0;
    $this->tac = $num % 5 === 0;
    $this->tic_tac = $num % 20 === 0;
  }
}

for ($i = 1; $i <= 100; $i++) {
  $game = new tic_tac();
  $game->judge($i);
  if ($game->tic_tac) {
    echo "tic-tac" . "\n";
  } elseif ($game->tic) {
    echo "tic" . "\n";
  } elseif ($game->tac) {
    echo "tac" . "\n";
  } else {
    echo "$i" . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);

// 問題1
echo $personalInfos[1]['name'] . 'の' . '電話番号は' . $personalInfos[1]['tel'] . 'です。';
// 問題2
foreach ($personalInfos as $index => $info){
  echo ($index + 1) . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] .'で、電話番号は' . $info['tel'] . 'です。' . "\n";
}
// 問題3
$ageList = [25, 30, 10];

foreach ($personalInfos as $index => $info){
  $personalInfos[$index]['age'] = $ageList[$index];
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada->attend('PHP'); //Q4用の追記

/* Q3の条件　studentIdプロパティは正の整数を設定してください。
nameプロパティは任意の値を設定してください*/
$yamada = new Student(120, '山田');

echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2

public function attend($curriculum){
    echo $this->studentName . 'は' . $curriculum . 'の授業に参加しました。' . '学籍番号：' . $this->studentId;
}

// Q5 定義済みクラス
// 問題1
$lastmonth = new DateTime();
$lastmonth->modify('-1 month');
echo $lastmonth->format('Y-m-d');

// 問題2
$today = new DateTime('2026-4-29');
$thatday = new DateTime('1992-4-25');
$interval = $today->diff($thatday);
echo 'あの日から' . $interval->format('%a') . '日経過しました。';

?>