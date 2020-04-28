<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    {{head}}
    <link rel="stylesheet" type="text/css" href="<?php echo HOST; ?>asset/css/abs-style.css">
</head>

<body>
    <div id="particles-js"></div>
    <div class="abstract">
        <!-- <div type="button" class="btn-primary close" onclick="this.parentElement.parentElement.style.display='none'" style="position: absolute;z-index: 556;top: 0%;left: auto;right: 2%;height: 0px;top:1%"><span aria-hidden="true">&times;</span></div> -->

        <div class="row" style="margin-left: 0px;margin-right: 0px;width: 100%;height: 100%">

            <div class="vl col-sm-3 sideMenu">
                <?php  require_once("content/". $data[0][1] ."/". $data[0][2] ."/sidemenu.php");?>
            </div>

            <div class="col-sm-9 abs-content">
                <div style="width: 100%; height:100%; position: absolute; box-sizing: border-box;">
                    <img class="robowar" src="asset/img/ext/logo_black.png" width="100%" height="100%">
                </div>
                <div class="topnav" id="myTopnav">
                    <div class="row">
                        <div class="topnav-item"><a onclick="about(this);" class="topnav-item active">About</a></div>
                        <div class="topnav-item"><a onclick="abstract(this);" class="topnav-item">Abstract</a></div>
                        <div class="topnav-item"><a onclick="contact(this)" class="topnav-item">Contacts</a></div>
                    </div>
                </div>
                <div class="abs-section">
                    <?php require_once("content/".$data[0][1]."/".$data[0][2]."/content.php");?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo HOST; ?>asset/js/particles.js"></script>
    <script type="text/javascript" src="<?php echo HOST; ?>asset/js/app.js"></script>
    <script>
        particleShow();
        var ele = document.getElementsByClassName("abstract")[0];
        var position = 0;
        document.getElementsByClassName("abstract")[0].addEventListener("mousedown",function(e){
            position = ele.scrollTop;
        });
        document.getElementsByClassName("abstract")[0].addEventListener("scroll",function(e){
            if(position < ele.scrollTop){
                document.getElementsByClassName("abs-section")[0].scrollIntoView();
            }else if (position > ele.scrollTop) {
                document.getElementsByClassName("sideMenu")[0].scrollIntoView();
            }
            position = ele.scrollTop;
        });
    </script>
</body>

</html>
