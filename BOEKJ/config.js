
let host = '127.0.0.1'

exports.cp=[
 
/*
 	// 极速 1.5 赛车
    {
        title:'极速赛车',
        source:'BOT',
        name:'jspk10',
        enable:true,
        timer:'jspk10',

        option:{

            host:host,
            timeout:50000,
            path: '/sylot/js_pk10',
            headers:{
                "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
            }
        },

        parse:function(str){
            try{                                                                                              	//
                str=str.substr(0,200);	                                                                      	//
                var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;                	//
                var m;                                                                                        	//
                if(m=str.match(reg)){                                                                         	//
                    return {                                                                                  	//
                        type:72,                                                                              	//
                        time:m[3],                                                                            	//
                        number:m[1],                                                                          	//
                        data:m[2]                                                                             	//
                    };                                                                                        	//
                }					                                                                          	//
            }catch(err){                                                                                      	//
                throw('极速赛车 解析数据不正确');                                                            	//
            }
        }
    },

    // 极速 1.5 时时彩
    {
        title:'极速时时彩',
        source:'BOT',
        name:'jsssc',
        enable:true,
        timer:'jsssc',

        option:{

            host:host,
            timeout:50000,
            path: '/sylot/js_ssc',
            headers:{
                "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
            }
        },

        parse:function(str){
            try{                                                                                              	//
                str=str.substr(0,200);	                                                                      	//
                var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;                   	//
                var m;
                if(m=str.match(reg)){                                                                         	//
                    return {                                                                                  	//
                        type:73,                                                                              	//
                        time:m[3],                                                                            	//
                        number:m[1],                                                                          	//
                        data:m[2]                                                                             	//
                    };                                                                                        	//
                }					                                                                          	//
            }catch(err){                                                                                      	//
                throw('极速时时彩 解析数据不正确');                                                            	//
            }
        }
    },

    // 极速 5 六合彩
    {
        title:'极速六合彩',
        source:'BOT',
        name:'jslhc',
        enable:true,
        timer:'jslhc',

        option:{

            host:host,
            timeout:50000,
            path: '/sylot/js_lhc',
            headers:{
                "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
            }
        },

        parse:function(str){
            try{                                                                                              	//
                str=str.substr(0,200);	                                                                      	//
                var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;                    	//
                var m;                                                                                        	//
                if(m=str.match(reg)){                                                                         	//
                    return {                                                                                  	//
                        type:74,                                                                              	//
                        time:m[3],                                                                            	//
                        number:m[1],                                                                          	//
                        data:m[2]                                                                             	//
                    };                                                                                        	//
                }					                                                                          	//
            }catch(err){                                                                                      	//
                throw('极速时时彩 解析数据不正确');                                                            	//
            }
        }
    },
	{
        title:'极速飞艇',
        source:'BOT',
        name:'jsft',
        enable:true,
        timer:'jsft',

        option:{

            host:host,
            timeout:5000,
            path: '/sylot/js_jsft',
            headers:{
                "User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
            }
        },

        parse:function(str){
            try{                                                                                              	//
                str=str.substr(0,200);	                                                                      	//
                var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;                	//
                var m;                                                                                        	//
                if(m=str.match(reg)){                                                                         	//
                    return {                                                                                  	//
                        type:56,                                                                              	//
                        time:m[3],                                                                            	//
                        number:m[1],                                                                          	//
                        data:m[2]                                                                             	//
                    };                                                                                        	//
                }					                                                                          	//
            }catch(err){                                                                                      	//
                throw('极速飞艇 解析数据不正确');                                                            	//
            }
        }
    },


	
	 {
		title:'重庆时时彩',
		source:'api1',
		name:'cqssc',
		enable:true,
		timer:'ssc-cq', 

		option:{

			host:host,
			timeout:50000,
			path: '/api/api1.php?id=10011',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
	
		parse:function(str){
		try{				
				return getFromapi(str,1);
			}catch(err){
				throw('api1重庆时时彩解析数据不正确');
			}
		}
	},	
	  
	  
	  {                                                                                                           //
		title:'重庆时时彩',                                                                           	    	//
		source:'重庆时时彩',                                                                                 			//
		name:'cqssc',                                                                                          //
		enable:true,                                                                                            //
		timer:'ssc-cq',                                                                                         //
		option:{                                                                                                //
			host:"cpapi.com.cn",                                                                                   //
			timeout:50000,                                                                                      //北
			path: '/xml/cqssc/index.php',                                   //京
			headers:{                                                                                           //PK
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //拾
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:1,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------重庆时时彩解析数据不正确');                                                      //
			}                                                                                                   //北
		}                                                                                                       //京
	},          
 

*/

 
 
 {
		title:'pk10',
		source:'fc55',
		name:'bjpk10',
		enable:true,
		timer:'bjpk10',

		option:{
			host:host,
			timeout:50000,
			path: '/xml/pk10.php',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "
			}
		},
		parse:function(str){
			try{
				str=str.substr(0,200);
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/; 			
				var m;
				if(m=str.match(reg)){
					return {
						type:50,
						time:m[3],
						number:m[1],
						data:m[2]
					};
				}
			}catch(err){
				throw('pk10解析数据不正确');
			}
		}
	},
	

/*	

			{
		title:'广东快乐十分',
		source:'api1',
		name:'gdklsf',
		enable:true,
		timer:'gdklsf',

	option:{

			host:host,
			timeout:50000,
			path: '/api/api1.php?id=1008',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
	
		parse:function(str){
		try{				
				return getFromapi(str,60);
			}catch(err){
				throw('api1广东快乐十分解析数据不正确');
			}
		}
	},
	
	
	{                                                                                                           //
		title:'广东快乐十分',                                                                           	    	//
		source:'129k',                                                                                 			//
		name:'gdklsf',                                                                                          //
		enable:true,                                                                                            //
		timer:'gdklsf',                                                                                         //
		option:{                                                                                                //
			host:"cpapi.com.cn",                                                                                   //
			timeout:50000,                                                                                      //北
			path: '/xml/gdklsf/index.php',                                                                       //京
			headers:{                                                                                           //PK
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //拾
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){  
				var bian1=m[1].substr(-2);
                var bian2=m[1].substr(0,8);
 				var zong=bian2+bian1;
					return {                                                                                    //
						type:60,                                                                                //
						time:m[3],                                                                              //
						number:zong,                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------广东快乐十分解析数据不正确');                                                      //
			}                                                                                                   //北
		}                                                                                                       //京
	},	 	

	
	


	
{
		title:'重庆幸运农场',
		source:'api2',
		name:'klsf',
		enable:true,
		timer:'klsf', 
		option:{

			host:host,
			timeout:50000,
			path: '/api/api2.php?id=10010',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
	
		parse:function(str){
		try{				
				return getFromapi(str,61);
			}catch(err){
				throw('api2重庆幸运农场解析数据不正确');
			}
		}
	},

	


	
	
	{                                                                                                           //
		title:'北京快乐8',                                                                           	    	//
		source:'百度',                                                                                 			//
		name:'bjk8',                                                                                          //
		enable:true,                                                                                            //
		timer:'bjk8',                                                                                         //
		option:{                                                                                                //
			host:"kj.dzmz007.com",                                                                                   //
			timeout:50000,                                                                                      //北
			path: '/kl8.php',                                                                       //京
			headers:{                                                                                           //PK
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //拾
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){ 
				var bian1=m[1].substr(-9);
                var bian2=m[1].substr(0,8);
 				var zong=bian2+bian1;				//
					return {                                                                                    //
						type:65,                                                                                //
						time:m[3],                                                                              //
						number:bian1,                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------北京快乐8解析数据不正确');                                                      //
			}                                                                                                   //北
		}                                                                                                       //京
	},

	
	    {                                                                                                           //
		title:'北京快乐8',                                                                           	    	//
		source:'百度',                                                                                 			//
		name:'bjk8',                                                                                          //
		enable:true,                                                                                            //
		timer:'bjk8',                                                                                         //
		option:{                                                                                                //
			host:host,                                                                                   //
			timeout:50000,                                                                                      //北
			path: '/xml/bjkl8.php',                                                                       //京
			headers:{                                                                                           //PK
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //拾
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){ 
				var bian1=m[1].substr(-9);
                var bian2=m[1].substr(0,8);
 				var zong=bian2+bian1;				//
					return {                                                                                    //
						type:65,                                                                                //
						time:m[3],                                                                              //
						number:bian1,                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------北京快乐8解析数据不正确');                                                      //
			}                                                                                                   //北
		}                                                                                                       //京
	},





	 
{                                                                                                           //
		title:'广东11选5',                                                                           	    	//
		source:'520.ag',                                                                                 			//
		name:'gd11x5',                                                                                          //
		enable:true,                                                                                            //
		timer:'gd11x5',                                                                                         //
		option:{                                                                                                //
			host:"cpapi.com.cn",                                                                                   //
			timeout:50000,                                                                                      //北
			path: '/xml/gd11x5/index.php',                                                                       //京
			headers:{                                                                                           //PK
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //拾
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:21,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------幸115解析数据不正确');                                                      //
			}                                                                                                   //北
		}                                                                                                       //京
	},
   {
		title:'江苏快3',
		source:'api1',
		name:'jsk3',
		enable:true,
		timer:'jsk3',

		option:{

			host:host,
			timeout:50000,
			path: '/api/api1.php?id=1006',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
	
		parse:function(str){
		try{				
				return getFromapi(str,10);
			}catch(err){
				throw('api1江苏快3解析数据不正确');
			}
		}
	},



	  


	
		
	
 	{
	title:'香港六合彩',
	source:'api1',
	name:'lhc',
	enable:true,
	timer:'lhc',
	
	option:{
		host:host,
		timeout:500000,
		path: '/api/api1.php?id=6001',
		headers:{
			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "
		}
	},
		parse:function(str){
			try{
				return getFromapi(str,70);
			}catch(err){
				throw('api1六合彩解析数据不正确');
			}
		}
	 }, 



 	


	{
		title:'PC蛋蛋',
		source:'api1',
		name:'pcdd',
		enable:true,
		timer:'pcdd',

		option:{
		host:host,
		timeout:500000,
		path: '/api/api1.php?id=28',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		
		parse:function(str){
			try{
				return getFromapi(str,66);			
			}catch(err){
				throw('api1PC蛋蛋解析数据不正确');
			}
		}
	},
	

    {                                                                                                           //
		title:'广东11选5',                                                                           	    	//
		source:'520.ag',                                                                                 			//
		name:'gd11x5',                                                                                          //
		enable:true,                                                                                            //
		timer:'gd11x5',                                                                                         //
		option:{                                                                                                //
			host:host,                                                                                   //
			timeout:50000,                                                                                      //北
			path: '/xml/gd11x5.php',                                                                       //京
			headers:{                                                                                           //PK
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0) "                             //拾
			}                                                                                                   //
		},                                                                                                      //
		parse:function(str){                                                                                    //
			try{                                                                                                //
				str=str.substr(0,200);	                                                                        //
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/;              //
				var m;                                                                                          //
				if(m=str.match(reg)){                                                                           //
					return {                                                                                    //
						type:21,                                                                                //
						time:m[3],                                                                              //
						number:m[1],                                                                            //
						data:m[2]                                                                               //
					};                                                                                          //
				}					                                                                            //
			}catch(err){                                                                                        //
				throw('--------幸115解析数据不正确');                                                      //
			}                                                                                                   //北
		}                                                                                                       //京
	},                                 
*/
	{
		title:'幸运飞艇',
		source:'国外网',
		name:'xyft',
		enable:true,
		timer:'xyft',

		option:{

			host:host,
			timeout:30000,
			path: '/xml/xyft.php',
			headers:{
				"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)"
			}
		},
		
		parse:function(str){
			try{
				str=str.substr(0,200);
				var reg=/<row expect="([\d\-]+?)" opencode="([\d\,]+?)" opentime="([\d\:\- ]+?)"/; 			
				var m;
				if(m=str.match(reg)){
					return {
						type:55,
						time:m[3],
						number:m[1],
						data:m[2]
					};
				}
			}catch(err){
				throw('幸运飞艇解析数据不正确');
			}
		}
	},
];

global.log = function (log) {
    var date = new Date();
    console.log('[' + date.toLocaleDateString() + ' ' + date.toLocaleTimeString() + '] ' + log)
}



function getOption(type) {
    //var host="api.1680210.com";
	var host = "api.api68.com";
    var uri = "";
    switch (type) {
		case 1:
            uri = "/CQShiCai/getBaseCQShiCai.do?lotCode=10002";
            break;
		case 81:
            uri = "/CQShiCai/getBaseCQShiCai.do?lotCode=10056";
            break;	
		case 82:
            uri = "/CQShiCai/getBaseCQShiCai.do?lotCode=10050";
            break;	
		case 50:
            uri = "/pks/getLotteryPksInfo.do?lotCode=10001";
            break;
		case 58:
            uri = "/pks/getLotteryPksInfo.do?lotCode=10001";
            break;	
		case 59:
            uri = "/pks/getLotteryPksInfo.do?lotCode=10037";
            break;	
		case 72:
            uri = "/pks/getLotteryPksInfo.do?lotCode=10037";
            break;	
		case 55:
            uri = "/pks/getLotteryPksInfo.do?lotCode=10057";
            break;	
        case 120:
            uri = "/CQShiCai/getBaseCQShiCai.do?lotCode=10004";
            break;	
	    case 119:
            uri = "/CQShiCai/getBaseCQShiCai.do?lotCode=10003";
            break;	
		case 116:
            uri = "/lotteryJSFastThree/getBaseJSFastThree.do?lotCode=10027";
            break;	
        case 21:
            uri = "/ElevenFive/getElevenFiveInfo.do?lotCode=10006";
			 break;
		case 117:
            uri = "/ElevenFive/getElevenFiveInfo.do?lotCode=10018";
			 break;
		case 118:
            uri = "/ElevenFive/getElevenFiveInfo.do?lotCode=10017";
			 break;
		case 10:
            uri = "/lotteryJSFastThree/getBaseJSFastThree.do?lotCode=10007";
            break;
		case 114:
            uri = "/lotteryJSFastThree/getBaseJSFastThree.do?lotCode=10026";
            break;
		case 115:
            uri = "/lotteryJSFastThree/getBaseJSFastThree.do?lotCode=10030";
            break;	
		case 116:
            uri = "/lotteryJSFastThree/getBaseJSFastThree.do?lotCode=10027";
            break;	
       	
        case 65:
            uri = "/LuckTwenty/getBaseLuckTewnty.do?lotCode=10014";
            break;
        case 66:
            uri = "/LuckTwenty/getPcLucky28.do?&lotCode=";
            break;
		case 60:
            uri = "/klsf/getLotteryInfo.do?lotCode=10005";
            break;
        case 61:
            uri = "/klsf/getLotteryInfo.do?lotCode=10009";
            break;	
        case 70:
            host="1680660.com"
            uri = "/smallSix/findSmallSixInfo.do?lotCode=10048";
            break;
       
    }
    return {
        host: host,
        timeout: 5000,
        path: uri,
        headers: {
            "Content-Type": "application/json;charset=UTF-8",
			"User-Agent": "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Win64; x64; Trident/4.0)"

        }
    }
}


// 出错时等待 10
exports.errorSleepTime=10;

// 重启时间间隔，以小时为单位，0为不重启
//exports.restartTime=0.4;
exports.restartTime=0;

exports.submit={

	host:'127.0.0.3',
	path:'/admin778899.php/data/kj'
}

exports.dbinfo={
	host:'localhost',
	port:'3306',
	user:'root',
	password:'root',
	database:'boe2017',
	multipleStatements : true

}

global.log=function(log){
	var date=new Date();
	console.log('['+date.toLocaleDateString() +' '+ date.toLocaleTimeString()+'] '+log)
}


function getFromapi(str, type){
	str=str.substr(0,1000);	
	//console.log(str);	
	var reg=/"c_t":(\d+?),"c_d":"([\d\:\- ]+?)","c_r":"([\d\,]+?)"/;
	match=str.match(reg);
	if(!match) throw new Error('数据不正确');

	var mynumber=match[1];
	var mydata=match[3];
	var mytime=match[2];
	//console.log(mynumber);
	try{
		var data={
			type:type,
			time:mytime,
			number:mynumber,
			data:mydata
		};
		//console.log(data);
		return data;
	}catch(err){
		throw('解析数据失败');
	}
} 
