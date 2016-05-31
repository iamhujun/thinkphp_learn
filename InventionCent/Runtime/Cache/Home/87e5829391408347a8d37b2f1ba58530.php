<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo (C("__HOME_CSS__")); ?>/login.css" type="text/css">
    <script type="text/javascript" src="/Public/libs/jquery/1.x/jquery.min.js"></script>
</head>
<body>
    <!-- 背景 -->
    <div id="particles-js" class="background"></div>
        <!-- 登陆框 -->
    <div class="panel-lite">
        <div class="brand">
            <a href="<?php echo C('HOME_PAGE');?>" target="_blank">
                <img alt="logo" class="logo img-responsive" src="<?php echo (C("WEB_SITE_LOGO")); ?>">
            </a>
        </div>
        <h4>注  册</h4>
        <form class="login-form" action="<?php echo U('Public/register');?>" method="post">
            <div class="form-group">
                <input type="text" required="required" class="form-control" name="student_id" autocomplete="off">
                <label class="form-label">学 号</label>
            </div>
            <div class="form-group">
                <input type="text" required="required" class="form-control" name="user_name" autocomplete="off">
                <label class="form-label">姓 名</label>
            </div>
            <div class="form-group">
                <input type="password" required="required" class="form-control" name="password">
                <label class="form-label">密　码</label>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" required="required" class="form-control" name="verify">
                    <label class="form-label">验证码</label>
                    <span class="input-group-addon verifyimg-box">
                        <img class="verifyimg reload-verify" alt="CoreThink验证码" src="<?php echo U('Public/verify');?>" title="点击刷新">
                    </span>
                </div>
            </div>
            <div class="form-group">
                <input type="submit">注 册</input>
            </div>
        </form>
    </div>
</body>

    <script src="/Public/libs/particles/particles.min.js"></script>
    <script type="text/javascript">
        $(function(){
            // 刷新验证码
            $(".reload-verify").on('click', function() {
                var verifyimg = $(".verifyimg").attr("src");
                if (verifyimg.indexOf('?') > 0) {
                    $(".verifyimg").attr("src", verifyimg + '&random=' + Math.random());
                } else {
                    $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/, '') + '?' + Math.random());
                }
            });

            //背景粒子效果
            particlesJS('particles-js', {
                particles: {
                    color: '#46BCF3',
                    shape: 'circle', // "circle", "edge" or "triangle"
                    opacity: 1,
                    size: 2,
                    size_random: true,
                    nb: 200,
                    line_linked: {
                        enable_auto: true,
                        distance: 100,
                        color: '#46BCF3',
                        opacity: .8,
                        width: 1,
                        condensed_mode: {
                            enable: false,
                            rotateX: 600,
                            rotateY: 600
                        }
                    },
                    anim: {
                        enable: true,
                        speed: 1
                    }
                },
                interactivity: {
                    enable: true,
                    mouse: {
                        distance: 250
                    },
                    detect_on: 'canvas', // "canvas" or "window"
                    mode: 'grab',
                    line_linked: {
                        opacity: .5
                    },
                    events: {
                        onclick: {
                            enable: true,
                            mode: 'push', // "push" or "remove" (particles)
                            nb: 4
                        }
                    }
                },
                retina_detect: true
            });
        });
    </script>

</html>