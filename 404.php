<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->header("generator=&template=&keywords=&description=&commentReply=&antiSpam="); ?>
    <style>

            * {
                margin: 0;
                line-height: 1.5;
            }

            html {
                color: #888;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                text-align: center;
            }

            body {
                left: 50%;
                margin: -43px 0 0 -150px;
                position: absolute;
                top: 50%;
                width: 300px;
            }

            h1 {
                color: #555;
                font-size: 2em;
                font-weight: 400;
            }

            p {
                line-height: 1.2;
            }

            @media only screen and (max-width: 270px) {

                body {
                    margin: 10px auto;
                    position: static;
                    width: 95%;
                }

                h1 {
                    font-size: 1.5em;
                }

            }

    </style>
</head>
<body>
    <h1>404 Page Not Found</h1>
    <p>页面不存在或被管理员删除</p>
</body>
    
    <div style="display:none">
        <script src="<?php if ($this->options->CNZZtjsrc){$this->options->CNZZtjsrc();}else{} ?>" language="JavaScript"></script>
    </div>

</html>
<!-- IE requires 512+ bytes: http://www.404-error-page.com/404-error-page-too-short-problem-microsoft-ie.shtml -->