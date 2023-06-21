function move_up(num){
    document.getElementById("username" +num).style.cssText="transform: translateY(-5px);"
}
function disp_reg(){
    document.getElementById("loginbox").style.cssText="display:none;";
    document.getElementById("registerbox").style.cssText="display:block;";
}
function disp_log(){
    document.getElementById("loginbox").style.cssText="display:block;";
    document.getElementById("registerbox").style.cssText="display:none;";
}
function toggle_password(n)
{
    var pass=document.getElementById("pass"+n);
    if(pass.type==="password")
    {
        pass.type="text"
    }
    else{
        pass.type="password"
    }
}
function gone(el)
{
    document.getElementById(el).classList.add("temp");
    const stopanim=setTimeout(clearem(el),1500);
}
function stopanim(el){
    document.getElementById(el).style.cssText="display:none;";
}
