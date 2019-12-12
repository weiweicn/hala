<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>登录</title>
<link rel="stylesheet" href="<?php echo base_url(PUB . '/'. MODULE . '/css/login.css') ?>">
<script type="text/javascript" src="<?php echo base_url(PUB .'/'. MODULE . '/js/jquery.min.js') ?>">
</script>
</head>

<body>
<div id="login_form">
    <form action= "<?php echo site_url(MODULE . '/' . C . '/' . M) ?>" method="post">
        <div id="login_tip">用户登录<span></span></div>
        <div><input type="text" name="username" class="username" placeholder="用户名" value="" /></div>
        <div><input type="password" name="password" class="username password" placeholder="密码" value="" /></div>
        <div><input type="text" name="verify" class="username verify" placeholder="验证码" /></div>
        <div><img src="" alt="" width="150" height="40" />&nbsp;
        <input type="submit" id="submit" value="登录" /></div>
    </form>
</div>
</body>
</html>