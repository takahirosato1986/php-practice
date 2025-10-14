<?php
// Q1 tic-tac問題

echo "1から100までのカウントを開始します\n\n";

for($i = 1; $i <= 100; $i++){
    switch ($i) {
    case ($i % 4 == 0 && $i % 5 == 0):
        echo 'tictac'."\n";
        break;
        
    case ($i % 4 == 0):
        echo 'tic'."\n";
        break;

    case ($i % 5 == 0):
        echo 'tac'."\n";
        break;

    default:
        echo $i."\n";
        break;
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

/* 問題1 */

echo $personalInfos[1]["name"]. "の電話番号は". $personalInfos[1]["tel"]."です。"

/* 問題2 */

foreach ($personalInfos as $index => $y) {
    $count = $index + 1;
    echo $count. "番目の". $y["name"]. "のメールアドレスは". $y["mail"]. "で、電話番号は". $y["tel"]. "です。\n";
}

/* 問題3 */

foreach ($personalInfos as $index => $y) {
    $ageList = [25, 30, 18];
    $personalInfos[$index]["age"] = $ageList[$index];
}

var_dump($personalInfos);

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

    public function attend($language)
    {
        echo $this->studentName. "は". $language. "の授業に参加しました。学籍番号：". $this->studentId;
    }
}

$sato = new Student(235,"佐藤");

echo "学籍番号". $sato->studentId. "番の生徒は". $sato->studentName. "です。";

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス

/* 問題1 */
$oneMonthAgo = new DateTime();
echo $oneMonthAgo->modify('-1 months')->format("Y-m-d");

/* 問題2 */

$startday = new DateTime("1992-4-25");
$countday = new DateTime("today");
$progress = $startday->diff($countday);
echo "あの日から". $progress->format("%a"). "日経過しました。";



?>