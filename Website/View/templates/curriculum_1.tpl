<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script language="javascript">
        	$(function(){
				$('.TopHoverMenu').hover(function(){
					var ImgN=$(this).index();
					var ImgRoot="../images/style/top_button/";
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
					var ImgRoot="../images/style/top_button/";
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
					$(this).attr("src","../images/icon/more_2.gif");
				},function(){
					var ImgN=$(this);
					$(this).attr("src","../images/icon/more_1.gif");
				});
			});
			
			$(function(){
				$('.GoHover1').hover(function(){
					var ImgN=$(this);
					$(this).attr("src","../images/index/block-go1-2.gif");
				},function(){
					var ImgN=$(this)
					$(this).attr("src","../images/index/block-go1-1.gif");
				});
			});
			
			$(function(){
				$('.GoHover2').hover(function(){
					var ImgN=$(this);
					$(this).attr("src","../images/index/block-go2-2.gif");
				},function(){
					var ImgN=$(this)
					$(this).attr("src","../images/index/block-go2-1.gif");
				});
			});
			
			$(function(){
				$('.GoHover3').hover(function(){
					var ImgN=$(this);
					$(this).attr("src","../images/index/block-go3-2.gif");
				},function(){
					var ImgN=$(this)
					$(this).attr("src","../images/index/block-go3-1.gif");
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
    	<link href="../css/Sanchuang.css" rel="stylesheet">
        <link href="../css/index.css" rel="stylesheet">
		<title>中原大學  教學卓越三創暨創新創業紮根資訊網</title>    
    </head>
    <body>
    	<div id="wrap">
        	<div id="top" align="left">
            	<div id="top_left">
                	<img src="../images/style/logo-2.jpg"/>
                </div>
                <div id="top_right1">
                	<img src="../images/style/name.jpg"/>
                </div>
                <div id="tab1">
                </div>
                <div id="top_right2">
                	<div id="top_text">
                    	<span id="Arial-brown" >
                            <br>
                            <a href="http://www.philia.com.tw/chung-yuan/index.html" class='texthover'>回首頁</a>
                            &nbsp;|&nbsp;&nbsp; 
                            <a href="http://www.philia.com.tw/chung-yuan/index.html" class='texthover'>English</a>
                        </span>
                    </div>
                    <div id="top_input">
                    	<input type="text" name="name" align="right">
                    	<img id="search"  src="../images/icon/search.gif"/>
                    </div>
                </div>
                <div id="top_right3" align="left">
                	<img class="pic_title" class="TopHoverMenu" src="../images/style/top_button/1-1.jpg"/>
                    <img class="pic_title" class="TopHoverMenu" src="../images/style/top_button/2-1.jpg"/>
            		<img class="pic_title" class="TopHoverMenu" src="../images/style/top_button/3-1.jpg"/>
            		<img class="pic_title" class="TopHoverMenu" src="../images/style/top_button/4-1.jpg"/>
            		<img class="pic_title" class="TopHoverMenu" src="../images/style/top_button/5-1.jpg"/>
            		<img class="pic_title" class="TopHoverMenu" src="../images/style/top_button/6-1.jpg"/>
            		<img class="pic_title" class="TopHoverMenu" src="../images/style/top_button/7-1.jpg"/>
                    
                </div>
            </div>
			
			<section>
				<div id="pic_bg">
					<img align="center" src="../images/style/top_banner.jpg"/>
				</div>
				
				<div id="nav" align="center">
					<div id="nav_1" align="center">
						<div id="pic_left" align="center">
							<img src="../images/style/left_shadow.jpg"/>
						</div>
							
						<div id="menu" align="center">
							<img id="menu1" src="../images/curriculum/left_button/left_button_top.gif"/><br/><br/>
							<img id="menu2" src="../images/curriculum/left_button/1-1.gif"/>
							<img id="line1" src="../images/style/left_button_line.gif"/>
							<img id="menu3" src="../images/curriculum/left_button/2-1.gif"/>
							<img id="line2" src="../images/style/left_button_line.gif"/>   
							<img id="menu4" src="../images/curriculum/left_button/3-1.gif"/>
						</div>
						
						<div id="pic_right" align="center">
							<img src="../images/style/right_shadow.jpg"/>
						</div>
						<div id="pic_bottom">
							<img src="../images/style/left_button_down.gif"/>
						</div>
					</div>
				
					<div id="nav_2" align="center">
						<img id="nav2_1" src="../images/style/left_banner_1-1.gif">
						<img id="nav2_2" src="../images/style/left_banner_2-1.gif">
						<img id="nav2_3" src="../images/style/left_banner_3-1.gif">
					</div>
				
					<div id="nav_3"><center>
						<img id="nav3_1" src="../images/style/left_contact-1.gif">
						<img id="nav3_line1" src="../images/style/left_button_line-1.gif">
						<img id="nav3_2" src="../images/style/left_prize-1.gif">
						<img id="nav3_line2" src="../images/style/left_button_line-1.gif">
						<img id="nav3_3" src="../images/style/left_sitemap-1.gif">
					</center></div>
				</div>
				<div id="content">
					<div align="left">
						<img id="title_pic" align="center" src="../images/curriculum_title_1.jpg"/>
					</div>
			   
					<div id="pic4"> 
						<img src="../images/curriculum_pic1.jpg" width="689px" height="32px"/><br/>
					</div>
					
					<div class="list">
						<div class="curriculum1_list1">理學院</div>
						<div class="curruculum1_list2">生科系</div>
						<div class="curruculum1_list3">992生醫科技經營與管理</div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>							
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>							
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>							
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>							
					<div class="list">
						<div class="curriculum1_list1"></div>
						<div class="curriculum1_list2"></div>
						<div class="curriculum1_list3"></div>
						<div class="hr">
							<hr size="1" align="left" color="#DDDDDD" width="689px"/>
						</div>
					</div>							
				</div>
						
			</section>
		</div>
		
    	<div  id="footer" style="background-image:url(../images/style/down_bg.jpg);" align="center">
        	<img src="../images/style/down.jpg">
        </div>
	</body>
</html>
