<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>登录</title>
  <link rel="stylesheet" type="text/css" href="include/css/common.css">
  <link rel="stylesheet" type="text/css" href="include/css/login.css">
 </head>
 <body>
 <div class="login">
 <h1 class="login-head">
 <div><img src="include/img/head.png"></div>
 </h1>
 <span class="errorprompt" id="errorprompt"></span>
	<p class="login-main">
	<input class="inputbox" type="text" id="username" placeholder="邮箱或手机号">
	</p>
	<p class="login-main">
	<input class="inputbox" type="password" id="password" placeholder="密码">
	</p>
	<p class="login-main">
	<input class="inputbox" id="checktxt" type="text" placeholder="验证码">
	<img src="include/lib/checkcode.php" class="checkimg" alt="验证码">
	</p>
	<p class="login-main">
	<input type="checkbox" class="dxk" id="dxk"><span>记住密码</span><input type="submit" class="loginbutton" value="登录">
	</p>
  </div>
 </body>
  <script src="include/js/jquery-3.1.0.js"></script>
  <script src="include/js/has1.js"></script>
  <script src="include/js/login.js"></script>
</html>