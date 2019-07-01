//九龍国际
function BBOnlineService() {
	
window.open('http://api.pop800.com/chat/321442', 'Service' ,"width=1039,height=728,status=no,scrollbars=no");
}

//QQ客服
function qqService(){
	window.open('http://api.pop800.com/chat/321442');
}
function qqService1(){
	window.open('http://api.pop800.com/chat/321442');
}
function down(){
	window.open('http://api.pop800.com/chat/321442');
}
//取回密码
function getPwd(){
	alert("帐户密码遗失请与九龍国际联系！");
}

function Go_forget_pwd(){
alert("帐户密码遗失请与九龍国际联系！");
}

//返回顶部
/*
if ('undefined' != typeof($)) {
		$(function(){
	    $("#floatTop").click(function(){
	            $("html,body").animate({
	            scrollTop:0
	        },1000);
	    });
	    $(window).scroll(function() {
	        if(navigator.userAgent.indexOf("MSIE") != -1) {
	            var fadeSec = 0;
	        }else{
	            var fadeSec = 300;
	        }
	
	        if ( $(this).scrollTop() > 300){
	            $('#floatTop').fadeIn(fadeSec);
	        } else {
	            $('#floatTop').stop().fadeOut(fadeSec);
	
	        }
	    });
		});
}
*/

//设为首页
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
        obj.setHomePage(url);
    }catch(e){
        if(window.netscape){
            try{
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            }catch(e){
                alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
            }
        }else{
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
        }
    }
}
 
//收藏本站
function AddFavorite() {
    var url = window.location;
    var title = document.title;
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("360se") > -1) {
        alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
    }
    else if (ua.indexOf("msie 8") > -1) {
        window.external.AddToFavoritesBar(url, title); //IE8
    }
    else if (document.all) {
  try{
   window.external.addFavorite(url, title);
  }catch(e){
   alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
  }
    }
    else if (window.sidebar) {
        window.sidebar.addPanel(title, url, "");
    }
    else {
  alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
    }
}

$(document).ready(function(){
	$("#ruleInfo").children(".rule-pic").click(function(){
		var m = $(this);
		if (m.next().is(":visible")) {
			m.next().slideUp(500);
		}
		else {
			m.next().slideDown(500);
		}
	});
});