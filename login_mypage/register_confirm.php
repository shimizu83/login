<?php
mb_internal_encoding("utf8");

//仮保存されたファイル名で画像ファイルを取得
$temp_pic_name = $_FILES['picture']['tmp_name'];

//元のファイル名で画像ファイル取得。
$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

//元のファイル名でimageフォルダに移動させる。
move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>


<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <title>マイページ管理</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        <main>
            <div class="confirm">
                <div class="form_contents">
                    <h1>会員登録　確認</h1>
                    <center>こちらの内容で登録しても宜しいでしょうか？</center>

                    <p>氏名：
                    <?php echo $_POST['name']; ?>
                    </p>

                    <p>メールアドレス：
                        <?php echo $_POST['mail']; ?>
                    </p>

                    <p>パスワード：
                        <?php echo $_POST['password']; ?>
                    </p>

                    <p>プロフィール写真：
                       <?php echo $_FILES['picture']['name']; ?>
                    </p>

                    <p>コメント：
                       <?php echo $_POST['comments']; ?> 
                    </p>
                    
                    <div class="buttons">    
                        <form action="register.php">
                            <input type="submit" class="button1" value="戻って修正する">
                        </form>

                        <form action="register_insert.php" method="post">
                            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
                            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                            <input type="submit" class="button2" value="登録する"/>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        
        <footer>
            © 2018 InterNous.inc. All rights registered
        </footer>
        
    </body>
</html>