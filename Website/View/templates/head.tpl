<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script language="javascript">
        	$(function(){
				$('.TopHoverMenu').hover(function(){
					var ImgN=$(this).index();
					var ImgRoot="View/images/style/top_button/";
					
					switch(ImgN+1){
						case 1:
							$(this).attr("src",ImgRoot+"1-2.jpg");
						break;
						case 2:
							$(this).attr("src",ImgRoot+"2-2.jpg");
						break;
						case 3:
							$(this).attr("src",ImgRoot+"3-2.jpg");
						break;
						case 4:
							$(this).attr("src",ImgRoot+"4-2.jpg");
						break;
						case 5:
							$(this).attr("src",ImgRoot+"5-2.jpg");
						break;
						case 6:
							$(this).attr("src",ImgRoot+"6-2.jpg");
						break;
						case 7:
							$(this).attr("src",ImgRoot+"7-2.jpg");
						break;
					}
				},function(){
					var ImgN=$(this).index();
					var ImgRoot="View/images/style/top_button/";
					alert(ImgN);
					switch(ImgN+1){
						case 1:
							$(this).attr("src",ImgRoot+"1-1.jpg");
						break;
						case 2:
							$(this).attr("src",ImgRoot+"2-1.jpg");
						break;
						case 3:
							$(this).attr("src",ImgRoot+"3-1.jpg");
						break;
						case 4:
							$(this).attr("src",ImgRoot+"4-1.jpg");
						break;
						case 5:
							$(this).attr("src",ImgRoot+"5-1.jpg");
						break;
						case 6:
							$(this).attr("src",ImgRoot+"6-1.jpg");
						break;
						case 7:
							$(this).attr("src",ImgRoot+"7-1.jpg");
						break;
					}
				});
			});
			
			$(function(){
				$('.MoreHover').hover(function(){
					var ImgN=$(this);
					$(this).attr("src","View/images/icon/more_2.gif");
				},function(){
					var ImgN=$(this);
					$(this).attr("src","View/images/icon/more_1.gif");
				});
			});
			
			$(function(){
				$('.GoHover1').hover(function(){
					var ImgN=$(this);
					$(this).attr("src","View/images/index/block-go1-2.gif");
				},function(){
					var ImgN=$(this)
					$(this).attr("src","View/images/index/block-go1-1.gif");
				});
			});
			
			$(function(){
				$('.GoHover2').hover(function(){
					var ImgN=$(this);
					$(this).attr("src","View/images/index/block-go2-2.gif");
				},function(){
					var ImgN=$(this)
					$(this).attr("src","View/images/index/block-go2-1.gif");
				});
			});
			
			$(function(){
				$('.GoHover3').hover(function(){
					var ImgN=$(this);
					$(this).attr("src","View/images/index/block-go3-2.gif");
				},function(){
					var ImgN=$(this)
					$(this).attr("src","View/images/index/block-go3-1.gif");
				});
			});
			
			$(function(){
				$('.texthover').hover(function(){
					var ImgN=$(this);
					$(this).css('color', 'gray');
				},function(){
					var ImgN=$(this);
					$(this).css('color', '#333333');
				});
			});
        </script>
    	<link href="View/css/Sanchuang.css" rel="stylesheet">
        <link href="View/css/index.css" rel="stylesheet">
		<title>中原大學  教學卓越三創暨創新創業紮根資訊網</title>    
    </head>