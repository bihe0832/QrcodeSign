var Meeting = {
		//参加会议的用户的ID
		attenderID:"",
		//参加会议的用户类型
		attenderTypeList:{"0":"参会人员","1":"参会嘉宾","2":"参会媒体","3":"参会类型3"},
};

function signInit(result){
	 //初始化用户信息
	if(result.ecode == -1){
		//尚未报名
		document.getElementById( "name" ).innerHTML="" ;
		document.getElementById( "status" ).innerHTML="尚未报名" ;
		document.getElementById( "userSign" ).innerHTML="尚未报名" ;
		document.getElementById( "userSign" ).onclick= function(){
          	alert( "没有报名" );
       };
	}else if (result.ecode > -1){
		document.getElementById( "name" ).innerHTML=result.msg.name;
		if (result.msg.status == 3){
			document.getElementById( "status" ).innerHTML="已签到" ;
			document.getElementById( "is_special" ).innerHTML = Meeting.attenderTypeList[result.msg.is_special]; 
			document.getElementById( "userSign" ).innerHTML="已经签到" ;
			document.getElementById( "userSign" ).onclick= function(){
				alert( "已经签到" );
			};
		}else if(result.msg.status == 2){
			document.getElementById( "status" ).innerHTML="尚未签到" ;
			document.getElementById( "is_special").innerHTML = Meeting.attenderTypeList[result.msg.is_special]; 
			document.getElementById( "userSign" ).onclick= function(){
				/************************************效果展示代码开始****************************************/
				eval('var result = {"ecode":1,"msg":"success"}');
				signFinished(result);
				exit;
				/************************************效果展示代码结束****************************************/
				var JSONP=document.createElement( "script");
				JSONP.type= "text/javascript" ;
				JSONP.src= "http://wekf.qq.com/wechat2/app/roadshow/cgi/roadshow.cgi.php?cmd=101003&id="+Meeting.attenderID+"&callback=signFinished" ;  
				document.getElementsByTagName( "head" )[0].appendChild(JSONP);
           };
		}else{
			document.getElementById( "status" ).innerHTML="资料审核不通过";
			document.getElementById( "userSign" ).innerHTML="审核不通过" ;
			document.getElementById( "userSign" ).onclick= function(){
				alert( "资料审核不通过" );
			};
		}
	} else {
		showInfo(result.ecode);
	}
}
function signFinished(result){
	if(result.ecode ==1){
		alert("签到成功");
		document.getElementById("status").innerHTML="已签到";
		document.getElementById( "userSign" ).innerHTML="已经签到" ;
		document.getElementById( "userSign" ).onclick= function(){
				alert( "已经签到" );
		};
	}else{
		alert("签到失败，请重试");
		WeixinJSBridge.invoke("scanQRCode");
	}
}

function showInfo(id) { 
	var info  = {
			'-10000':'服务器错误，请重试！'
	};
	if(info[id]){
		alert(info[id]);
	}else{
		alert(info[-10000] + id);
	}
}
