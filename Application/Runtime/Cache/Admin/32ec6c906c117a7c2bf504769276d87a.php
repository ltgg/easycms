<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>登录页</title>
    <link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.min.css" >
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/layer/layer.js"></script>
    <script src="/Public/js/own/ltcms.js"></script>
    <script src="/Public/js/own/login.js"></script>
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <form role="form">
                    <div class="form-group">
                         <label for="username">Username</label>
                         <input type="text" class="form-control" name="username" />
                    </div>
                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" />
                    </div>
                    <input type="button" class="btn btn-default" value="登录" onclick="login.check()" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>