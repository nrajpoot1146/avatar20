<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="AVATAR'20, REC Banda Techfest">
<meta name="description" content='"AVATAR" 2020 is here again to bring in the innovative minds in posterity. It&apos;s the time to steer you through 14 exciting competitions this year and all more that is waiting there for you to light up the spirit of technology and
engineering.
To provide exposure thrilling enough, "AVATAR" this time has the theme
"COSMOS"
with the motto of making you aware of the opportunities available to you to venture out in the world of true engineering.This year, we&apos;ll help you explore the ways to create an impact in the universe and inspire you to keep on
innovating.
With everchanging space and time, "AVATAR" will help you find and develop your eternal skills this year."'>

<link rel="icon" href="asset/img/ext/favicon.ico" sizes="16x16">
<!--essential bootstrap style sheet-->
<title>Avatar REC Banda (Beta)</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/css/animate.css">
<script src="<?php echo HOST; ?>asset/js/jquery.min.js"></script>
<script src="<?php echo HOST; ?>asset/js/popper.min.js"></script>
<script src="<?php echo HOST; ?>asset/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="asset/css/solar.css">
<script type="text/javascript" src="<?php echo HOST; ?>asset/js/avApp.js"></script>
<script type="text/javascript" src="<?php echo HOST; ?>asset/js/flipclock.min.js"></script>
<script type="text/javascript" src="<?php echo HOST; ?>asset/js/notify.min.js"></script>
<!--custom style sheet-->
<link rel="stylesheet" type="text/css" href="<?php echo HOST; ?>asset/css/av-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo HOST; ?>asset/css/flipclock.css">

<script>
    function about(e){
    document.getElementById("event_about").style.display="block";
    document.getElementById("event_abstract").style.display="none";
    document.getElementById("event_contacts").style.display="none";
    var temp = document.getElementsByClassName('topnav-item');
    for(let i=0;i<temp.length;i++){
        temp[i].classList.remove('active');
    }
    e.classList.add('active');
}
function abstract(e){
    document.getElementById("event_about").style.display="none";
    document.getElementById("event_abstract").style.display="block";
    document.getElementById("event_contacts").style.display="none";
    var temp = document.getElementsByClassName('topnav-item');
    for(let i=0;i<temp.length;i++){
        temp[i].classList.remove('active');
    }
    e.classList.add('active');
}
function contact(e){
    document.getElementById("event_about").style.display="none";
    document.getElementById("event_abstract").style.display="none";
    document.getElementById("event_contacts").style.display="block";
    var temp = document.getElementsByClassName('topnav-item');
    for(let i=0;i<temp.length;i++){
        temp[i].classList.remove('active');
    }
    e.classList.add('active');
}
    </script>
