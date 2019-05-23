"use strict"

var catbox = document.querySelector(".catbox")
var next = document.querySelector(".arrow_left")
var prve = document.querySelector(".arrow_right")
console.log(catbox,next,prve)
console.log()
next.onclick = function(){
    next_pic();
}
prve.onclick = function(){
    prve_pic();
}
function next_pic(){
    var shoWlist = parseInt(catbox.style.left)-890;
    catbox.style.left = shoWlist + "px"
   
}
function prve_pic(){
    var shoWlist = parseInt(catbox.style.left)+890;
    catbox.style.left = shoWlist + "px"
    
}



function next_pic () {
    var shoWlist;
    if(catbox.style.left === "-7120px"){
        shoWlist = -890;
    }else{
        shoWlist = parseInt(catbox.style.left)-890;
    }
    catbox.style.left = shoWlist + "px"
    index++;
    if(index > 7){
        index = 0;
    }
    showCurrentDot();
}
function prve_pic() {
    var shoWlist;
    if(catbox.style.left === "-890px"){
        shoWlist = -7120;
    }else{
        shoWlist = parseInt(catbox.style.left)+890;
    }
    catbox.style.left = shoWlist + "px"
    index--;
    if(index < 0){
        index = 7;
    }
    showCurrentDot();
}

var index = 0;
var dost = document.getElementById("buttons").getElementsByTagName("span")
console.log(dost)

function showCurrentDot () {
            for(var i = 0, len = dost.length; i < len; i++){
                dost[i].className = "";
            }
            dost[index].className = "on";
}


for( var i = 0, len = dost.length; i<len; i++){
    (function (i){
       dost[i].onclick = function(){
           var dis = index - i;
           if(index == 7 && parseInt(catbox.style.left)!== -3000){
               dis = dis -7;
           }
       }
    //    if(index == 0){
    //        dis = 5 + dis;
    //    }
    //    catbox.style.left = (parseInt(catbox.style.left) +  dis * 890)+"px";
    //    index = i;
    //    showCurrentDot();
    }) (i);
}

// 显示隐藏hide
var btn = document.getElementById("btn")
var cont = document.getElementById("case_contents")
var container = document.querySelector(".container")
    console.log(container)
cont.onclick = function(){
    container.className = "container"

}
btn.onclick = function(){
    container.className = "come"
}