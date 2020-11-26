<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
    
<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    
    <main>
        <form method="post" action="register_confirm.php" enctype="multipart/form-data">
            <div class="form_contents">
                <h1>会員登録</h1>

                <div class="name">
                    <div class="hissu">必須</div> <label>氏名</label><br>
                    <input type="text" class="formbox" size="40" name="name" required>
                </div>

                <div class="mail">
                    <div class="hissu">必須</div> <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>

                <div class="password">
                    <div class="hissu">必須</div> <label>パスワード</label><br>
                    <input type="password" class="formbox" name="password"  size="40" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                </div>

                <div class="password">
                    <div class="hissu">必須</div>　<label>パスワード確認</label><br>
                    <input type="password" class="formbox" size="40"  name="confirm_password" id="confirm" oninput="ConfirmPaaword(this)" required>
                </div>

                <div class="picture">
                    <label>プロフィール写真</label><br>
                    <input type="hidden" name="max_file_size" value="1000000"/>
                     <input type="file" class="formbox" name="picture" size="40">
                </div>

                <div class="comments">
                    <label>コメント</label><br>
                    <textarea name="comments" class="formbox" rows="5" cols="45"></textarea>
                </div>

                <div class="toroku">
                    <input type="submit" class="submit_button" size="35" value="登録する">
                </div>
            </div>
        </form>
    </main>
    
    <footer>
        © 2018 InterNous.inc. All rights registered
    </footer>
    
    <script>
        function ConfrimPassword(confirm){
            var input1 = password.value;
            var input2=confirm.value;
            if(input1! = input2){
                confirm.setCustomVlidity("パスワードが一致しません。");
                }else{
                confirm.setCustomValidity(");
            }
        }
    </script>
    
</body>
</html>