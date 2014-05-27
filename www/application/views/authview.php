<head>
	<style type="text/css">
      body {
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
</head>
<?php if(isset($error)){?>
	<div class="alert alert-error"> Логин или пароль введены неверно </div>
<?php }?>
<div class="container">
	<form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Войдите в интранет</h2>
        <input type="text" name = "login" class="input-block-level" placeholder="Логин">
        <input type="password" name = "password" class="input-block-level" placeholder="Пароль">
        <button class="btn btn-large btn-primary" type="submit" name="btnsubmit">Войти</button>
    </form>
</div>
