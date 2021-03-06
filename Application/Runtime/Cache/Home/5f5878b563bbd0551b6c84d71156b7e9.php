<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
  

<!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <link href="materialize/css/mako.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!---
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
	引入该文件会与其他样式冲突
  -->
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="jquery/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>

  <style type="text/css">
  	i.right{
  		margin: 10px !important;
  	}
  	.slider .indicators .indicator-item.active{
  		background-color:#0d47a1;
  	}
  	.dropdown-content li>a{
  		color: #ffffff;
  		
  	}
	.dropdown-content li>a:hover{
  		color: #000000;
  		
  	}
  	#loginmodal {
  		top:30% !important;
	 	width: 300px;
	 	padding: 15px 20px;
	 	background: #f3f6fa;
	 	-webkit-border-radius: 6px;
	 	-moz-border-radius: 6px;
	 	border-radius: 6px;
	 	-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
	 	-moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
	 	box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
	}
  	#loginmodal h1{
  		font-size: 2em;
	    /*line-height: 1.5em;*/
	    margin: 0px;
	    padding: .1em 0;

		text-align: center;
  	}
  	#lean_overlay{
	  	position: fixed;
	    z-index:100;
	    top: 0px;
	    left: 0px;
	    height:100%;
	    width:100%;
	    background: #000;
	    display: none;
  	}
	/*input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
	    background-color: rgba(255,255,255,0) !important;
	    -webkit-box-shadow: 0 0 0px 300px #f3f6fa inset !important;
	}*/
	#username{
		-webkit-box-shadow: 0 0 0px 300px #f3f6fa inset !important;
	}
	label{
		left: 0px;
	}
  </style>
  	



</head>
<body>

<div class="welcome  blue darken-1">

	<nav class="blue darken-4" style="height:68px;color:#000000;">
		<div class="nav-wrapper">
	      <!---->
	      	<a href="#" class="brand-logo hide-on-med-and-down"><img src="img/sky.png"></a>
	      	
	      	<ul id="nav-mobile" class="right ">		<!--hide-on-med-and-down 小屏幕隐藏-->
	      	  	<li><a href="#loginmodal" class="modal-trigger" id="modaltrigger">登录</a></li>

				
	      	  	<li><a href="<?php echo U('Index/r');?>">注册</a></li>
	      	  	<!--<?php echo U('Index/r');?>-->
	      	  	<!--/Sky/index.php/Home/Index/register-->
	      	  	<!-- Dropdown Trigger --><!-- 下拉框 -->
	      	  	<li>
	      	  		<a href="#" class='dropdown-button' data-beloworigin="true" data-hover="true" data-activates='dropdown1' >
	      	  			<span>更多<i class="material-icons right" style="height:30px;margin: 0px !important;">apps</i></span>
	      	  		</a>
	      	  	</li>

				<!-- Dropdown Structure -->
				<ul id='dropdown1' class='dropdown-content blue darken-1 '>
				  	<li><a href="#!" >我的视觉</a></li>
				  	<li class="divider"></li>
				  	<li><a href="#!">新闻中心</a></li>
				  	<li><a href="#!">专业合作</a></li>
				  	<li><a href="#!">公益行动</a></li>
				  	<li class="divider"></li>
				  	<li><a href="#!">关于我们</a></li>
				  	<li><a href="#!">联系我们</a></li>
				</ul>
	      	</ul>
	    </div>
	</nav>
	<div id="loginmodal" style="display:none;">
	    <h1>用户登录</h1>
	    <form id="loginform" name="loginform" method="post" action="/Sky/index.php/Home/Login/login">
	        <!--
	        <label for="username">用户名</label>
	        <input type="text" name="username" id="username" >
	        
	        <label for="password">密码</label>
	        <input type="password" name="password" id="password"  >
	        -->
	        <div class="input-field">
	          	<input id="username" name="username" type="text" class="validate" style="background-color:rgba(255,255,255,0) !important;"  >
	          	<label for="username">用户名</label>
	        </div>
	        <div class="input-field">
	         	<input id="password" name="password" type="password" class="validate">
	         	<label for="password">密码</label>
	        </div>
	        <!--
	        <div class="center">
	        	<input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="登录">
	        </div>
	        -->
	        <div class="center">
		        <button class="btn waves-effect waves-light" type="submit" name="action">登录
					<i class="material-icons right" style="margin:auto !important;">send</i>
				</button>
			</div>
	    </form>
	</div>
	<!--
	<div class="links blue darken-4">
		<a href="#">首页</a>
		| <a href="#">关于我们</a>
		| <a href="#">我的视觉</a>
		| <a href="#">专业合作</a>
		| <a href="#">新闻中心</a>
		| <a href="#">公益行动</a>
		| <a href="#">问卷调查</a>
		| <a href="#">联系我们</a>
		


		<!-- Modal Trigger 
  		<a class="right waves-effect waves-light btn modal-trigger" href="#modal1"
  			style="font-size:10px;padding-left:15px;padding-right:15px;text-shadow:none;">登录 / 注册</a>
		<!-- Modal Structure 
		<div id="modal1" class="modal">
		  	<div class="modal-content">
		  	  <h4>Modal Header</h4>
		  	  <p>A bunch of text</p>
		  	</div>
		  	<div class="modal-footer">
		  	  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">同意</a>
		  	</div>
		</div>
	</div>
-->
	<div class="slider" style="top:10%;" >
	 	<ul class="slides">
	 	   <li>
	 	     <img src="img/slide-1.png">
	 	     <div class="caption center-align">
	 	     <h3>热点新闻!</h3>
	 	     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	 	     </div>
	 	   </li>
	 	   <li>
	 	     <img src="img/slide-2.png">
	 	     <div class="caption left-align">
	 	     <h3>公益行动</h3>
	 	     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	 	     </div>
	 	   </li>
	 	   <li>
	 	     <img src="img/slide-3.png">
	 	     <div class="caption right-align">
	 	     <h3>普及教育</h3>
	 	     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	 	     </div>
	 	   </li>
	 	   <li>
	 	     <img src="img/slide-4.png">
	 	     <div class="caption center-align">
	 	     <h3>视觉关爱!</h3>
	 	     <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	 	     </div>
	 	   </li>
	 	</ul>
	</div>
</div>




<div style="margin:5%;margin-top:100px;">
	<div class="row">
		<div class="col s12 l4">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/health-image.png">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">视康云平台
				  <i class="material-icons right"> more_vert</i></span>
				  <p><a href="#">查看更多</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">视康云平台
				  <i class="material-icons right">close</i></span>
				  <p>视康云平台旨在集结视觉健康产业中保健及诊疗资源，建立集视觉健康评估、保健咨询、治疗方案、科研、学术交流及社会学统计为一体的视觉健康云数据公共服务平台。</p>
				</div>
			</div>
		</div>



		<div class="col s12 l4">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/ldgh.png">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">视觉健康服务
				  <i class="material-icons right">more_vert</i></span>
				  <p><a href="#">查看更多</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">视觉健康服务
				  <i class="material-icons right">close</i></span>
				  <p>为大众提供视觉健康全生命周期的服务，利用视觉健康新技术实现科学指导的、及时有效的个性化视觉健康的保健与专家远程诊断服务，特别是建立和推广青少年视觉健康保健体系。缓解看病难、医疗资源分布不均的难题，提升国民视觉健康整体素质。</p>
				</div>
			</div>
		</div>

		<div class="col s12 l4">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/news_center.png">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">新闻
				  <i class="material-icons right">more_vert</i></span>
				  <p><a href="#">查看更多</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">新闻
				  <i class="material-icons right">close</i></span>
				  <p>“视觉健康关爱服务站”儿童手绘呵护眼睛图案</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col s12 l4">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/weixinlogo.png" style="max-width:200px;margin:auto;">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">关注视康云

				  <i class="material-icons right">more_vert</i></span>
				  <p><a href="#">查看更多</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">关注视康云
				  <i class="material-icons right">close</i></span>
				  <p>扫码关注“视康云”微信公众平台。</p>
				</div>
			</div>
		</div>



		<div class="col s12 l4">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/ldgh.png">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">视觉健康服务
				  <i class="material-icons right">more_vert</i></span>
				  <p><a href="#">查看更多</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">视觉健康服务
				  <i class="material-icons right">close</i></span>
				  <p>为大众提供视觉健康全生命周期的服务，利用视觉健康新技术实现科学指导的、及时有效的个性化视觉健康的保健与专家远程诊断服务，特别是建立和推广青少年视觉健康保健体系。缓解看病难、医疗资源分布不均的难题，提升国民视觉健康整体素质。</p>
				</div>
			</div>
		</div>

		<div class="col s12 l4">
			<div class="card hoverable">
				<div class="card-image waves-effect waves-block waves-light">
				  <img class="activator" src="img/news_center.png">
				</div>
				<div class="card-content">
				  <span class="card-title activator grey-text text-darken-4">新闻中心
				  <i class="material-icons right">more_vert</i></span>
				  <p><a href="#">查看更多</a></p>
				</div>
				<div class="card-reveal">
				  <span class="card-title grey-text text-darken-4">新闻中心
				  <i class="material-icons right">close</i></span>
				  <p>“视觉健康关爱服务站”儿童手绘呵护眼睛图案。</p>
				</div>
			</div>
		</div>

	</div>

<!--
<?php echo ($result["id"]); ?>--<?php echo ($result["name"]); ?>--<?php echo ($result["password"]); ?>
-->
</div>
<footer class="page-footer blue darken-1">
    <div class="container">
        <div class="row white-text">
            <div class="col l12 s12">
                <!--
                <h5>Footer Content</h5>
                -->
                <p class="grey-text text-lighten-4">其他信息</p>
                <div class="divider"></div>
                <!--
                <div class="row">
                </div>
                -->
                <div class="col s3">
                	<h5>
                		专业机构及合作伙伴
                	</h5>
					<ul class="">
					    <li class="">Bariatric</li>
					    <li class="">Behavioral Health</li>
					    <li class="">Cancer</li>
					    <li class="">Heart</li>
					    <li class="">Kidney</li>
					    <li class="">Nasal & Sinus</li>
					</ul>

                </div>
                <div class="col s3">
                	<h5>
                		For Patients
                	</h5>
					<ul class="">
					    <li class="">Admission</li>
					    <li class="">About Your Stay</li>
					    <li class="">Admission Process</li>
					    <li class="">Health Plans</li>
					    <li class="">Medical Records</li>
					    <li class="">Patient and Family</li>
					</ul>
                </div>
                <div class="col s3">
                	<h5>
                		For Visitors
                	</h5>
					<ul class="">
					    <li class="">Locations</li>
					    <li class="">Patient Guide</li>
					    <li class="">Find a Doctor</li>
					    <li class="">Visiting</li>
					    <li class="">Contact</li>
					    <li class="">Education & Events</li>
					</ul>
                </div>
	            <div class="col s3">
                	<h5>
                		联系我们
                	</h5> 
					<ul class="">
					    <li class="">南京市建邺区嘉陵江东街18号4栋411室</li>
					    <li class="">Call : 86-25-84343889</li>
					    <li class="">Mail : tracy@vh-cloud.net</li>
					</ul>
                </div>
	            
            </div>

			<!--
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
            -->
        </div>
    </div>
    <div class="footer-copyright blue darken-4">
        <div class="container center">
          <a href="http://www.miitbeian.gov.cn/" class="black-text" style="font-weight:bold;">
          苏ICP备14000201号-1 Copyright© 2012- 2013 Nanjing Vision Health Cloud Information Technology Co.,Ltd.
          </a>
          <!--
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          -->
        </div>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function(){
    	/**/
    	
    	
		
		$('#modaltrigger').leanModal({
			top: 110,
			overlay: 0.45,
			closeButton: ".hidemodal" 
		});

		/*
		$('.modal-trigger').leanModal({
			dismissible: true, // 点击模态框外部则关闭模态框
		    opacity: .5 // 背景透明度
			}

		);
		*/
    	$('.slider').slider(
	    	{

		    	//indicators:false,
		    	height:450,
		    	//interval:1000
		    }

    	);
    

  	});


</script>
</body>
</html>