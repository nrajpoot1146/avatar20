
//Home
class Click {
    constructor() {
        
    }
    click(fun) {
        this.obj.addEventListener("click", fun);
        this.obj.addEventListener("click", this.playAudio);
    }
    playAudio(){
        var audio = document.getElementById("av-audio");
        audio.play();
    }
}
class Item extends Click {
    constructor(obj) {
        super();
        this.obj = obj;
    }
}

class Home {
    constructor() {
        var nav = document.getElementsByClassName("nav-item");
        this.navItem = {};
        for (let i = 0; i < nav.length; i++) {
            this.navItem[nav[i].innerHTML.toCamelCase()] = new Item(nav[i]);
        }
        this.solar = new Solars();
        this.solar.show();
    }
    open() {
        this.solar.show();
        this.countShow();
    }
    close() {
        this.solar.hide();
        this.countHide();
    }
    countHide() {
        $(".clock").hide();
    }
    countShow() {
        $(".clock").show();
    }
}
//End Home

// Solar System
class Planets extends Item{
    constructor(obj) {
        super(obj);
        this.obj = obj;
        this.obj.addEventListener("mouseover", function (e) {
            var x = $(e.target).parent().attr("id");
            $("#" + x).css("animation-play-state", "paused");
            $(e.target).css("animation-play-state", "paused");
            $(e.target).children().fadeIn("fast");

        });
        this.obj.addEventListener("mouseleave", function (e) {
            var x = $(e.target).parent().attr("id");
            if ($("#" + x).css("animation-play-state") == "paused" && $(e.target).css("animation-play-state") == "paused") {
                $("#" + x).css("animation-play-state", "running");
                $(e.target).css("animation-play-state", "running");
                $(e.target).children().hide();
            }
        });
    }
    setLable(lbl) {
        this.obj.getElementsByTagName("span")[0].innerHTML = lbl;
    }
}

class Solars extends Item{
    constructor() {
        super();
        this.obj = document.getElementById("solar");
        var planet = this.obj.getElementsByClassName("planet");
        this.planet = {};
        for (let i = 0; i < planet.length; i++) {
            this.planet[planet[i].getAttribute("av-name")] = new Planets(planet[i]);
        }

        $(document).mousemove(function (e) {
            if (typeof ($(e.target).attr("class")) != "undefined" && $(e.target).attr("class").indexOf("planet") == -1) {
                $(".orbit").css("animation-play-state", "running");
                $(".orbit .planet").css("animation-play-state", "running");
                $(".orbit .planet").children().hide();
            }
        });

        setTimeout(showSolarBg, 1500);

        function showSolarBg() {
            $(".solar-bg").fadeIn();
            $(".front-footer").fadeIn("slow");
            $(".hamb").fadeIn("slow");
        }
    }

    hide() {
        this.obj.style.display = "none";
        $("#at-solar").hide();
    }
    show() {
        $("#at-solar").show();
        this.obj.style.display = "block";
    }
    fadeIn() {
        $("#solar").fadeIn(time);
    }
    fadeOut() {
        $("#solar").fadeOut(time);
    }
    setVisibilityHidden() {
        this.obj.style.visibility = "hidden";
    }
    setVisibilityVisible() {
        this.obj.style.visibility = "visible";
    }
}
// End Solar System

class Section extends Item{
    constructor(){
        super();
        this.obj = document.getElementById("av-section");
    }
    open(){
        this.obj.style.display = "block";
    }
    close(){
        this.obj.style.display = "none";
    }
    update(content){
        this.obj.getElementsByClassName("cnt")[0].innerHTML = content;
    }
}

//Contact Us
class ContactUs{
    constructor(section) {
        this.section = section;
        this.obj = document.getElementById("contactus");
        var citem = this.obj.getElementsByClassName("memberteam-item");
        this.contactUsItem = {};
        for (let i = 0; i < citem.length; i++) {
            this.contactUsItem[citem[i].getAttribute("av-name")] = new Item(citem[i]);
        }
    }
    open() {
        this.section.open();
        this.obj.style.display = "block";
    }
    close() {
        this.obj.style.display = "none";
        this.section.close();
    }
    fadeIn(speed) {
        this.section.open()
        $("#" + this.obj.getAttribute("id")).fadeIn(speed);
    }
    fadeOut(speed) {
        $("#" + this.obj.getAttribute("id")).fadeOut(speed);
        this.section.close();
    }
}
//End Contact Us


String.prototype.toCamelCase = function () {
    var temp = this.split(" ");
    var res = "";
    res += temp[0].toLowerCase();
    for (let i = 1; i < temp.length; i++) {
        temp[i].toLowerCase();
        res += temp[i].substr(0, 1).toUpperCase() + temp[i].substr(1).toLowerCase();
    }
    return res;
}

function _(str){
    if(str.substr(0,1)==".")
        return document.getElementsByClassName(str.substr(1));
    else if(str.substr(0,1)=="#")
        return document.getElementById(str.substr(1));
    else
        return document.getElementsByTagName(str);
}
