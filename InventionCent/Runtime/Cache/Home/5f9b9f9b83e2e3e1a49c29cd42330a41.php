<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <title>跳转提示</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        img {
            max-width: 100%;
        }
        body {
            background: #30333F;
            font-family: '微软雅黑';
            color: #fff;
            font-size: 16px;
        }
        .message-box {
            width: 500px;
            padding: 20px;
            margin: 8% auto;
            text-align: center;
            overflow: hidden;
        }
        .message-box .message-header {
            margin-bottom: 20px;
        }
        .message-box .message-header a {
            font-size: 50px;
            text-decoration: none;
        }
        .message-box .message-header a:hover {
            text-decoration: none;
        }
        .message-box .message-header .logo {
            width: 350px;
        }
        .message-box .message-body h1 {
            font-size: 50px;
            font-weight: normal;
            line-height: 60px;
            margin-bottom: 12px
        }
        .message-box .message-body .jump {
            padding-top: 10px;
            margin-bottom:20px
        }
        .message-box .message-body .jump a {
             color: #333;
         }
        .message-box .message-body .success,
        .message-box .message-body .error {
            font-size: 36px
        }
        .message-box .message-body .detail {
            font-size: 12px;
            line-height: 20px;
            margin-bottom: 12px;
            display:none
        }
        .message-box .message-action .btn {
            display: inline-block;
            margin-right: 10px;
            font-size: 16px;
            line-height: 18px;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            border: 0 none;
            background-color: #308B04;
            padding: 10px 20px;
            color: #fff;
            font-weight: bold;
            border-color: transparent;
            text-decoration:none;
        }
        .message-box .message-action .btn:hover {
            background-color: #43BD08;
        }
        @media (max-width: 768px) {
            .message-box {
                width: 100%;
            }
            .message-box .message-header .logo {
                width: 200px;
            }
            .message-box .message-body h1 {
                display: none;
            }
            .message-box .message-body {
                margin-bottom: 60px;
            }
            .message-box .message-action .btn{
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="message-box">
        <div class="message-header">
            <?php if(C('WEB_SITE_LOGO')): ?>
                <a href="<?php echo C('HOME_PAGE');?>"><img class="logo" src="<?php echo (get_cover(C("WEB_SITE_LOGO"))); ?>"></a>
            <?php else: ?>
                <a href="<?php echo C('HOME_PAGE');?>"><span><?php echo C('PRODUCT_LOGO');?></span></a>
            <?php endif; ?>
        </div>
        <div class="message-body">
            <h1>恭喜您!</h1>
            <p class="success"><?php echo($message); ?></p>
            <p class="detail"></p>
            <p class="jump">
                <b id="wait"><?php echo($waitSecond); ?></b> 秒后页面将自动跳转
            </p>
        </div>
        <div class="message-action">
            <a class="btn" id="btn-now" href="<?php echo($jumpUrl); ?>">立即跳转</a>
            <a class="btn" id="btn-stop" onclick="stop()">停止跳转</a>
        </div>
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait');
            var btn = document.getElementById('btn-now').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = btn;
                    clearInterval(interval);
                };
            }, 1000);
            window.stop = function (){
                clearInterval(interval);
            }
        })();
    </script>
</body>
</html>