<?php
//csvファイルの読み込み
$file = fopen("data.csv", "r");

$list = "<tr>
            <th>会員番号</th>
            <th>お名前</th>
            <th>メール</th>
            <th>希望公演日</th>
        </tr>";

//whileは毎行をループで処理していくという意味で、!feofは行がなくなるまで処理するという意味
while (!feof($file)){
    $csv = fgets($file);
    // echo $csv."<br>";

    // もし行が空であればスキップ
    if (empty(trim($csv))) {
        continue;
    }

    $array = explode(",",$csv);
    // var_dump($array);

    $list .= "<tr>
                <td>{$array[0]}</td>
                <td>{$array[1]}</td>
                <td>{$array[2]}</td>
                <td>{$array[3]}</td>
            </tr>";
}

//csvファイルを閉じる
fclose($file);

// CSVファイルを開く
$csvFile = 'data.csv';
$handle = fopen($csvFile, 'r');

// 公演ごとのカウントを保存する配列
$performance_counts = [];

// CSVファイルの内容を読み込んで、各公演ごとのカウントをする
if ($handle !== FALSE) {
    while (($data = fgetcsv($handle)) !== FALSE) {
        $performance = $data[3]; // 公演名がCSVファイルの4列目
        if (!isset($performance_counts[$performance])) {
            $performance_counts[$performance] = 0;
        }
        $performance_counts[$performance]++;
    }
    fclose($handle);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./read.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Yusei+Magic&family=Zen+Kaku+Gothic+New&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    <title>ファンに会う</title>
</head>
<body>
    <header>
        <div id="icon"><img src="./img/00_icon_ren.jpg" style="height: 40px; border-radius:50%;"></div>
        <div id="logo"><img src="./img/00_logo_white.png" style="height: 70px;"></div>
        <div id="alert"><img src="./img/00_alert_white.png" style="height: 25px; "></div>
    </header>

    <main>
        <img src="./img/ReERA.png" height="100px">

        <h4 style="margin: 20px 0;">公演毎応募者数</h4>
        <table align="center" class="entry">
                <tr>
                    <td align="right" class="item">千葉 2024.10.26（土）17:30</td>
                    <td align="left">
                        <?php echo isset($performance_counts['千葉 2024.10.26（土）17:30']) ? $performance_counts['千葉 2024.10.26（土）17:30'] : '0';?>人
                    </td>
                </tr>
                <tr>
                    <td align="right" class="item">千葉 2024.10.27（日）12:30</td>
                    <td align="left">
                        <?php echo isset($performance_counts['千葉 2024.10.27（日）12:30']) ? $performance_counts['千葉 2024.10.27（日）12:30'] : '0';?>人
                    </td>
                </tr>
                <tr>
                    <td align="right" class="item">千葉 2024.10.27（日）17:30</td>
                    <td align="left">
                    <?php echo isset($performance_counts['千葉 2024.10.27（日）17:30']) ? $performance_counts['千葉 2024.10.27（日）17:30'] : '0';?>人
                    </td>
                </tr>
                <tr>
                    <td align="right" class="item">愛知 2024.11.09（土）17:30</td>
                    <td align="left">
                        <?php echo isset($performance_counts['愛知 2024.11.09（土）17:30']) ? $performance_counts['愛知 2024.11.09（土）17:30'] : '0';?>人
                    </td>
                </tr>
                <tr>
                    <td align="right" class="item">愛知 2024.11.10（日）12:30</td>
                    <td align="left">
                        <?php echo isset($performance_counts['愛知 2024.11.10（日）12:30']) ? $performance_counts['愛知 2024.11.10（日）12:30'] : '0';?>人
                    </td>
                </tr>
                <tr>
                    <td align="right" class="item">愛知 2024.11.10（日）17:30</td>
                    <td align="left">
                        <?php echo isset($performance_counts['愛知 2024.11.10（日）17:30']) ? $performance_counts['愛知 2024.11.10（日）17:30'] : '0';?>人
                    </td>
                </tr>
            </table>

        <h4 style="margin: 40px 0 30px 0;">全国ツアー チケット申込一覧</h4>
        <table border="1">
            <?php echo $list ?>
        </table>


    </main>

    <footer>
        <ul>
            <li><img src="./img/01_space_gray.png" style="height: 25px;"></li>
            <li><img src="./img/02_daily_gray.png" style="height: 25px;"></li>
            <li><img src="./img/03_fun_gray.png" style="height: 25px;"></li>
            <li><img src="./img/04_ticket_white.png" style="height: 30px;"></li>
            <li><img src="./img/05_shop_gray.png" style="height: 25px;"></li>
        </ul>
    </footer>

</body>
</html>
