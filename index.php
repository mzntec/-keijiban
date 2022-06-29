<!doctype HTML>
<HTML lang="ja">
<header>
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
         <img src="4eachblog_logo.jpg" >
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>管理フォーム</li>
            <li>お問い合わせ</li>
            <li>その他</li>        
        </ul>
</header>
<main>
    <div class="left">
        <div class="title">
            プログラミングに役立つ掲示板
        </div>
        
         <form method="post" action="insert.php">
             <h1> 入力フォーム</h1>
             <div>
                <lablel>
                ハンドルネーム
                <br>
                <input type="text" class="text" size="35" name="handlename">
                </lablel>
             </div>
            
             <div>
                <lablel>
                タイトル
                <br>
                <input type="text" class="text" size="35"  name="title">
                </lablel>
             </div>
             <div>
                <lablel>
                コメント
                <br>
                <textarea cols="64" rows="10" name="comments"></textarea>
                </lablel>
             </div>

             <div>
               
                <input type="submit" class="submit" value="送信する">
              
             </div>
              

        </form>

        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");

       

        foreach($stmt as $row)
        {   
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "</div>";
            echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
            echo "</div>";  
            

        }
        
        ?>


    </div>
    <div class="right">
            <ul>
                <li>人気の記事</li>
                     <ul class=" right_li">
                         <li>PHPオススメ本</li>
                         <li>PHP MyAdiminの使い方</li>
                         <li>今人気のエディタ　Top5</li>
                         <li>HTMLの基礎</li>
                     </ul>
                   
  
                <li>オススメリンク</li>
                    <ul class=" right_li">
                         <li>インターノウス株式会社</li>
                         <li>XAMPPのダウンロード</li>
                         <li>Eclipseのダウンロード</li>
                         <li>Bracketsのダウンロード</li>
                    </ul> 
                <li>カテゴリ</li>
                    <ul class=" right_li">
                         <li>HTML</li>
                         <li>PHP</li>
                         <li>MySQL</li>
                         <li>JavaScript</li>
                    </ul> 
            </ul>
    </div>
    
   



    
</main>
<footer>
    <div class="box">
    copyright©internous|4ecah blog the which provides A to Z about programming.
    </div>
</footer>