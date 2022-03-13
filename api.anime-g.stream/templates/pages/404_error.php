<?php
if (!defined("JUICYCODES")) {
    exit;
}
use IT\Data;
echo '
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>' . Data::Get("default_title") . '</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700">
        <link rel="stylesheet" href="' . Data::Get("url") . '/templates/pages/assets/style.css">
    </head>
    <body>
        <div id="wrapper">
            <div class="vertical-align-wrap">
                <div class="vertical-align-middle">
                    <div class="content">
                        <div class="content-box">
                            <div class="header">
                                <div class="title">المعذرة، يوجد خطأ</div>
                            </div>
                            <div class="error_message">
                                يرجى العودة لاحقا
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
';