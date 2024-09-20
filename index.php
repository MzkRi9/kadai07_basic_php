<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Yusei+Magic&family=Zen+Kaku+Gothic+New&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    <title>ながちゃんに会う</title>
</head>
<body>
    <header>
        <div id="icon"><img src="./img/00_icon.jpg" style="height: 40px; border-radius:50%;"></div>
        <div id="logo"><img src="./img/00_logo_white.png" style="height: 70px;"></div>
        <div id="alert"><img src="./img/00_alert_white.png" style="height: 25px; "></div>
    </header>

    <main>
        <img src="./img/ReERA.png" height="100px">
        <h3 style="margin: 0 0 30px 0;">全国ツアー チケット申込</h3>
        <form action="write.php" method="post">    
            <table align="center" class="contactform">
                <tr>
                    <td align="right" class="item">会員番号</td>
                    <td align="left"><input type="text" name="number"></td>
                </tr>
                <tr>
                    <td align="right" class="item">お名前</td>
                    <td align="left"><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td align="right" class="item">メール</td>
                    <td align="left"><input type="email" name="mail"></td>
                </tr>
                <tr>
                    <td align="right" class="item">希望公演日</td>
                    <td align="left">
                        <select name="liveDate" size="1" required>
                            <option value="" disabled selected>--</option>
                            <option value="千葉 2024.10.26（土）17:30">千葉 2024.10.26（土）17:30</option>
                            <option value="千葉 2024.10.27（日）12:30">千葉 2024.10.27（日）12:30</option>
                            <option value="千葉 2024.10.27（日）17:30">千葉 2024.10.27（日）17:30</option>
                            <option value="愛知 2024.11.09（土）17:30">愛知 2024.11.09（土）17:30</option>
                            <option value="愛知 2024.11.10（日）12:30">愛知 2024.11.10（日）12:30</option>
                            <option value="愛知 2024.11.10（日）17:30">愛知 2024.11.10（日）17:30</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" class="send">お申し込み</button>
        </form>

        <a href="read.php" class="list">申し込み一覧</a>
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