<?php
// Q1 変数と文字列

$name = "佐藤";

echo "私の名前は「".$name."」です。";

// Q2 四則演算

$num = 5*4;
$num2 = $num/2;

echo "$num\n$num2";

// Q3 日付操作

$now = time();

echo date("現在時刻は、Y年m月d日 H時i分s秒です。", $now);

// Q4 条件分岐-1 if文

$device = "windows";

if($device == "windows" || $device == "mac")
{
    echo "使用OSは、".$device."です。";
} else {
    echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子

$age = 17;

echo($age < 18) ? "未成年です。" : "成年です。";

// Q6 配列

$kanto = ["東京都" , "茨城県" , "栃木県" , "群馬県" , "埼玉県" , "千葉県" , "神奈川県" ];

echo $kanto[2] . "と" . $kanto[5] . "は関東地方の都道府県です。";

// Q7 連想配列-1

$kanto = [
    "東京都" => "新宿区" ,
    "神奈川県" => "横浜市" ,
    "千葉県" => "千葉市" ,
    "埼玉県" => "さいたま市" ,
    "栃木県" => "宇都宮市" ,
    "群馬県" => "前橋市" ,
    "茨城県" => "水戸市" ,
    ];

foreach ($kanto as $x => $y) {
    echo "$y\n";
}

// Q8 連想配列-2

$kanto = [
    "東京都" => "新宿区" ,
    "神奈川県" => "横浜市" ,
    "千葉県" => "千葉市" ,
    "埼玉県" => "さいたま市" ,
    "栃木県" => "宇都宮市" ,
    "群馬県" => "前橋市" ,
    "茨城県" => "水戸市" ,
    ];
    
$kanto_key = array_keys($kanto);

if($kanto_key[3] == "埼玉県") {
    echo $kanto_key[3] . "の県庁所在地は、" . $kanto[$kanto_key[3]] ."です。";
}

// Q9 連想配列-3

$kanto["北海道"] = "札幌市";
$kanto["沖縄県"] = "那覇市";

$kanto_key = array_keys($kanto);

for ($i = 0; $i <= 8; $i++) {
    echo ($i < 7) ? $kanto_key[$i]. "の県庁所在地は、". $kanto[$kanto_key[$i]]. "です。\n" : $kanto_key[$i]. "は関東地方ではありません。\n";
}

// Q10 関数-1

function hello($names) {
    echo $names. "さん、こんにちは。\n";
}

hello("大村");
hello("中久保");

// Q11 関数-2

function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.10;
    echo $price. "円の商品の税込は価格は". floor($taxInPrice). "円です。";
}

calcTaxInPrice(100);

// Q12 関数とif文

function distinguishNum($whitchnum) {
    echo ($whitchnum % 2 == 0) ? $whitchnum. "は偶数です。\n" : $whitchnum. "は奇数です。\n";
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文

function distinguishNum($oneGrade) {
    
    switch ($oneGrade) {
    case "A":
    case "B":   
        echo "合格です。\n";
        break;

    case "C":
        echo "合格ですが追加課題があります。\n";
        break;

    case "D":
        echo "不合格です。\n";
        break;

    default:
        echo "判定不明です。講師に問い合わせてください。\n";
        break;
}
}

distinguishNum("A");
distinguishNum("E");

?>