<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
  

<!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/Sky/materialize/css/materialize.min.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="/Sky/jquery/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Sky/materialize/js/materialize.min.js"></script>

  <style type="text/css">
  	.sidebar {
	    width: 240px;
	    position: fixed;
	    box-shadow: 2px 2px 2px #ddd;
	    height: 100%;
	    background-color: #fff;
	    z-index: 998;
	}
	.primary-bg {
	    background-color: #ee6e73;
	}
	.sidebar a {

	    font-weight: bolder;
	    display: block;
	}
	ul.nav .collapsible-body li a {
	    font-weight: 400;
	    padding: 0 37.5px 0 45px;
	}
	.collapsible-body li.active{
	    background-color: #ee6e73;
	    color: #fff;
	}
	/*
	ul.side-nav.fixed li a {
	    font-size: 13px;
	    line-height: 44px;
	    height: 44px;
	    padding: 0 30px;
	}
	*/
	
	ul li {
	    line-height: 44px;
	}
	ul.nav li a {
	    
	    padding: 0 1rem;
	}
	main, footer {
	    padding-left: 240px;
	}
  </style>
</head>
<body>
<!--
<div>
	<nav>
	    <ul class="right hide-on-med-and-down">
	      <li><a href="#!">First1 Sidebar Link</a></li>
	      <li><a href="#!">Second Sidebar Link</a></li>
	    </ul>
	    <ul id="slide-out" class="side-nav">
	      <li><a href="#!">First2 Sidebar Link</a></li>
	      <li><a href="#!">Second Sidebar Link</a></li>
	    </ul>
	    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	</nav>
</div>
-->
<aside class="sidebar"  style="overflow-y:auto;">
	<ul class="nav clearfix">
	    <li><a href="index">关于</a></li>
	    <li><a href="/start">快速上手</a></li>
	    <li class="sidebar-collapsible">
	      <ul class="collapsible collapsible-accordion">
	        <li>
	          <a class="collapsible-header  waves-effect waves-teal active">CSS</a>
	          <div class="collapsible-body" style="">
	            <ul>
	              <li class="active"><a href="color">颜色</a></li>
	              <li><a href="/Sky/index.php/Home/Index/grid">网格</a></li>
	              <!--grid-->
	              <!--/Sky/index.php/Home/Index/register-->
	              <li><a href="helpers">帮助类</a></li>
	              <li><a href="media-css">媒体</a></li>
	              <!--<li><a href="sass">Sass</a></li>-->
	              <li><a href="shadow">阴影</a></li>
	              <li><a href="table">表格</a></li>
	              <li><a href="typography">排版</a></li>
	            </ul>
	          </div>
	        </li>
	        <li><a class="collapsible-header waves-effect waves-teal">组件</a>

	          <div class="collapsible-body" style="">
	            <ul>
	              <li><a href="badges">徽章</a></li>
	              <li><a href="buttons">按钮</a></li>
	              <li><a href="cards">卡片</a></li>
	              <li><a href="collections">集合</a></li>
	              <li><a href="footer">页脚</a></li>
	              <li><a href="forms">表单</a></li>
	              <li><a href="icons">图标</a></li>
	              <li><a href="navbar">顶部导航条</a></li>
	              <li><a href="pagination">分页</a></li>
	              <li><a href="preloader">加载动画</a></li>
	            </ul>
	          </div></li>
	        <li><a class="collapsible-header waves-effect waves-teal">Javascript</a>
	          <div class="collapsible-body" style="">
	            <ul>
	              <li><a href="collapsible">折叠</a></li>
	              <li><a href="dialogs">对话框</a></li>
	              <li><a href="dropdown">下拉框</a></li>
	              <li><a href="media">多媒体</a></li>
	              <li><a href="modals">模态框</a></li>
	              <li><a href="parallax">视差滚动</a></li>
	              <li><a href="pushpin">图钉</a></li>
	              <li><a href="scrollfire">滚动触发</a></li>
	              <li><a href="scrollspy">滚动监听</a></li>
	              <li><a href="side-nav">导航</a></li>
	              <li><a href="tabs">标签</a></li>
	              <li><a href="transitions">渐现</a></li>
	              <li><a href="waves">波浪特效</a></li>
	            </ul>
	          </div>
	        </li>
	      </ul>
	    </li>
	    <li><a href="mobile">手机</a></li>
	    <li><a href="showcase">案例</a></li>
	</ul>
</aside>



<main>
 <div id="index-banner" class="index-banner section no-pad-bot primary-bg">
  <div class="container">
    <h1 class=" center-on-small-only  text-light ">颜色</h1>
    <br>
    <br>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="section col s12 m9 l10">
      <div id="color-usage" class="section scrollspy">
        <h2 class="header">用法</h2>

        <p class="caption">
          本套框架提供的所有颜色完全遵循Material的设计原则，且每种颜色均由一个基本色及暗化和亮化的扩展组成。
        </p>

        <div class="row section">
          <h5 class="col s12 m3">背景色</h5>

          <div class="col s12 m9">
            <p>使用已经定义好的颜色类名，即可应用，想要明或暗则添加上相应的类名即可。</p>

            <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>
            <pre class=" language-markup"><code class=" language-markup">
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-panel teal lighten-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>This is a card panel with a teal lighten-2 class<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            </code></pre>
          </div>

          <br>

          <h5 class="col s12 m3">文本颜色</h5>

          <div class="col s12 m9">
            <p>在定义好的颜色类名加上<strong>-text</strong>后缀即可，例如:</p>

            <div class="card-panel"><span class="blue-text text-darken-2">This is a card panel with dark blue text</span></div>
            <!--
            <pre class=" language-markup"><code class=" language-markup">
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-panel<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>blue-text text-darken-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>This is a card panel with dark blue text<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            </code></pre>
            -->
          </div>
        </div>


      </div>

      <div id="sass" class="section scrollspy">
        <h2 class="pink-text text-lighten-2">Sass</h2>

        <p>
          借助Sass可以非常简单的对颜色进行扩展，对于背景色，可以这样做
        </p>
        <!--
        <pre class=" language-scss"><code class=" col s12 language-scss"><span class="token selector">
  .ilike-blue-container </span><span class="token punctuation">{</span>
    <span class="token keyword">@extend</span> .blue, .lighten-4<span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
        </code></pre>
        -->

        <p>
          对于文本色，这样做
        </p>
        <!--
        <pre class=" language-scss"><code class=" col s12 language-scss"><span class="token selector">
  .ilike-blue-container </span><span class="token punctuation">{</span>
    <span class="token keyword">@extend</span> .blue-text, .text-lighten-4<span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
        </code></pre>
        -->
      </div>
      <div id="palette" class="section scrollspy">

        <h2 class="header">调色板</h2>


      </div>
    </div>

    <!-- Table of contents -->
    <div class="col hide-on-small-only m3 l2">
      <div class="toc-wrapper pin-top" style="top: 0px;">
        <div style="height: 1px;">
          <ul class="section table-of-contents">
            <li><a href="#color-usage" class="active">用法</a></li>
            <li><a href="#sass">Sass</a></li>
            <li><a href="#palette">调色</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</main>



<footer class="page-footer">
  <div class="container">

    <div class="row">
      <div class="col s12">
        <h5 class="white-text">Materialize中文网</h5>
        <p class="grey-text text-lighten-4">本网站所列开源项目的中文版文档全由Materialize中文网成员翻译整理，并全部遵循MIT协议发布。</p>
      </div>
    </div>
  </div>

  <div class="footer-copyright">
    <div class="container">
      © 2015 Copyright
    </div>
  </div>
</footer>






<script type="text/javascript">
    $(document).ready(function(){
    	// Initialize collapse button
    	//alert("!");
		$(".button-collapse").sideNav();
		// Initialize collapsible (uncomment the line below if you use the dropdown variation)
		$('.collapsible').collapsible();
		$('.toc-wrapper').pushpin({ top: $('.toc-wrapper').offset().top });
	});

</script>
</body>
</html>