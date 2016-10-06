$(function(){
	
	//Ajax_login
	ajax_login=function(val1, val2){
		$.ajax({
		   type:"POST",
		   url:'http://140.135.113.236/postSocket.php',
		   dataType:"json",
		   data:
		    {
			   menu:menuid,
			   id:val,
			   pwd:val2,
			},
			success:function(msg){
				return msg;
			}
		});
	}
	
	    //Ajax_create_mobile_db
	ajax_create_mobile_database=function(val1, val2){
		$.ajax({
		   type:"POST",
		   url:'http://140.135.113.236/postSocket.php', //create mobile db URL
		   dataType:'html',
		   data:
		    {
			   
			   id:val,
			   pwd:val2,
			},
			success:function(msg){
		       return msg;
			}
		});
	}
	
	    //Ajax_define_shop
	ajax_define_shop=function(val1, val2){
		$.ajax({
		   type:"POST",
		   url:'http://140.135.113.236/postSocket.php', //define shop URL
		   dataType:'html',
		   data:
		    {
			   
			   lat:val1,
			   lon:val2,
			},
			success:function(msg){
				return msg;
			}
		});
	}
	
	    //Ajax_define_products
	ajax_define_products=function(val1){
		$.ajax({
		   type:"POST",
		   url:'http://140.135.113.236/postSocket.php', //define_product URL
		   //define products URL
		   dataType:'html',
		   data:
		    {
			   pid:val1,
			},
			success:function(msg){
				return msg;
			}
		});
	}
	
	    //Ajax_record
	ajax_record=function(val21,val22,val23,val24,val25){
		$.ajax({
		   type:"POST",
		   url:'http://140.135.113.236/postSocket.php', //record URL
		   dataType:'json',
		   data:
		    {
				uid:val21,
				shopid:val22,
				pid:val23,
				deadline:val24,
				record_time:val25,
			},
			success:function(msg){
                return msg;
			}
		});
	}
	
		//Ajax define_manager_mainframe
	ajax_define_manager_mainframe=function(val1){
		$.ajax({
		   type:"POST",
		   url:'http://140.135.113.236/postSocket.php', //define manager mainframe URL
		   dataType:'html',
		   data:{
			   pid:val1,
			},
			success:function(msg){
				return msg;
			
			}
		});
	}
	
		//Ajax_chart
	ajax_chart=function( val1){
		$.ajax({
		   type:"POST",
		   url:'http://140.135.113.236/postSocket.php', //chart URL
		   //define products URL
		   dataType:"html",
		   data:
		    {
			   products_category:val1,
			},
			success:function(msg){
				return msg;
			}
		});
	}
	
});