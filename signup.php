<!--
https://localhost/base/user_resist/user_resist_sp/signup_sp2.php
まずは、この画面のどこにPHPコードを挿入していくか
-->

<!-- ★signup.php require -->
<!DOCTYPE html>
<html lang="ja">

  <head> <!-- ### head前提 ### -->
    <meta charset="utf-8">
    <title>ユーザー登録 | WEBUKATU MARKET</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  </head>

  <body class="page-signup page-1colum">

    <header> <!-- ### header前提 ### -->
      <div class="site-width">
        <h1><a href="index.html">WEBUKATU MARKET</a></h1>
        <nav id="top-nav">
          <ul>
            <li><a href="signup.html" class="btn btn-primary">ユーザー登録</a></li>
            <li><a href="login.html">ログイン</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div id="contents" class="site-width"> <!-- ### div前提 -->

      <!-- Main -->
      <section id="main" >

        <div class="form-container">

          <form action="" method="post" class="form">
            <h2 class="title">ユーザー登録</h2>
            <div class="area-msg"></div>
            <label class="<?php if(!empty($err_msg['email'])) echo 'err'; ?>">
              Email
              <input type="text" name="email">
            </label>
            <div class="area-msg"></div>
            <label class="php insert"> <!-- php insert -->
              パスワード <span style="font-size:12px">※英数字６文字以上</span>
              <input type="password" name="pass">
            </label>
            <div class="area-msg">
              <?php 
              if(!empty($err_msg['pass'])) echo $err_msg['pass'];
              ?>
            </div>
            <label class="php insert"> <!-- php insert -->
              パスワード（再入力）
              <input type="password" name="pass_re">
            </label>
            <div class="area-msg"></div>
            <div class="btn-container">
              <input type="submit" class="btn btn-mid" value="登録する">
            </div>
          </form>
        </div>

      </section>

    </div>

    <footer id="footer"> <!-- ### footer前提 ### -->
      Copyright <a href="http://webukatu.com/">ウェブカツ!!WEBサービス部</a>. All Rights Reserved.
    </footer>

    <script src="js/vendor/jquery-2.2.2.min.js"></script> <!-- ### script前提 ### -->
    <script>
      $(function(){
        var $ftr = $('#footer');
        if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
          $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
        }
      });
    </script>
  </body>
</html>