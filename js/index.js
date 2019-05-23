var warp = document.querySelector(".warp")
var next = document.querySelector(".arrow_right")
var prev = document.querySelector(".arrow_left")
// 计算左右滑动的宽度
next.onclick = function(){
    next_pic();
}
prev.onclick = function(){
    prev_pic();
}
function next_pic(){
    var neWleft = parseInt(warp.style.left)-1200;
    warp.style.left = neWleft + "px"    
}
function prev_pic(){
    var neWleft = parseInt(warp.style.left)+1200;
    warp.style.left = neWleft + "px"
}
// 计算无缝滚动
function next_pic(){
 var neWleft;
 if(warp.style.left === "-2400px"){
    neWleft = -1200;
 }else{
     neWleft = parseInt(warp.style.left)-1200;
 }
 warp.style.left = neWleft + "px"
}
function prev_pic(){
    var neWleft;
    if(warp.style.left === "0px"){
        neWleft = "-1200"
    }else{
        neWleft = parseInt(warp.style.left)+1200;
    }
    warp.style.left = neWleft + "px"
}
// 计时器
var times = null;
function rencai(){
    times = setInterval(function() {
        next_pic();
    },2000);
}
rencai();
// 需要解除播放
var box_banner = document.getElementById("box_banner")
console.log(box_banner)
box_banner.onmousemove = function(){
    clearInterval(times);
}
box_banner.onmouseout = function (){
    rencai();
}
// 