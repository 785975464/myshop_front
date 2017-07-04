<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>This is recycle.html</title>
  

<!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/Sky/materialize/css/materialize.min.css"  media="screen,projection"/>
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --><!-- 引用谷歌在线字体，不推荐 -->
  <link href="/Sky/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
  <!-- Css -->

 <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
 <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="/Sky/jquery/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/Sky/materialize/js/materialize.min.js"></script>
  <!-- <script src="/Sky/bootstrap/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="/Sky/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="/Sky/js/dataTables.bootstrap.js"></script>


  <style type="text/css">

	@font-face {
		font-family: 'Material Icons';
		font-style: normal;
		font-weight: 400;
		src: url(/Sky/iconfont/MaterialIcons-Regular.eot); /* For IE6-8 */
			src: local('Material Icons'),
			local('MaterialIcons-Regular'),
			url(/Sky/iconfont/MaterialIcons-Regular.woff2) format('woff2'),
			url(/Sky/iconfont/MaterialIcons-Regular.woff) format('woff'),
			url(/Sky/iconfont/MaterialIcons-Regular.ttf) format('truetype');
	}

	.material-icons {
		font-family: 'Material Icons';
		font-weight: normal;
		font-style: normal;
		font-size: 24px; /* Preferred icon size */
		display: inline-block;
		width: 1em;
		height: 1em;
		line-height: 1;
		text-transform: none;

		/* Support for all WebKit browsers. */
		-webkit-font-smoothing: antialiased;
		/* Support for Safari and Chrome. */
		text-rendering: optimizeLegibility;

		/* Support for Firefox. */
		-moz-osx-font-smoothing: grayscale;

		/* Support for IE. */
		font-feature-settings: 'liga';
	}

  	html, body {
  		height: 100%; 
  	}
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
	.collapsible-header {
		background-color:#64B5F6;
	}
	ul.nav .collapsible-body li a {
	    font-weight: 400;
	    /**/
	    padding: 0 37.5px 0 45px;
	    
	}
	.collapsible-body li.active{
	    background-color:#42a5f5; /*blue lighten-1*/
	}
	aside a{
		color: #fff;
	}
	aside a:active{
		background-color:grey;
	}
	ul li {
	    line-height: 44px;
	}
	ul.nav li a {
	    
	    padding: 0 1rem;
	}
	header{
		color: white;
		margin: 0;
	}
	aside{
		padding: 0;
	}
	aside, main{
		overflow-y:auto;
		height: 95% !important;
	}
	main {
	    padding-right: 240px;
	}
	main, footer {
	    padding-left: 240px;
	}
	.page{
		padding-top: 40px;
	}
	.num{
		padding: 10px;
	}
	.nav-wrapper{
		background-color:#64B5F6;
	}
	div.dataTables_length select{
		height: inherit;
	}
	.dataTables_filter {
	   display: none;
	}
	/*.modal{
		width: 400px;
		border-radius: 10px;
	}
	.modal .modal-content {
		padding-bottom: 0;
	}*/
	.control-group input{
		width: 170px;
	}
	form span{
		width:130px;
		margin-left: 26px;
		padding-top: 10px;
		float:left;
	}
	.modal-footer .btn{
		padding: 0 12px !important;
	}
	#toast-container{
		right: 240px;
	}

  </style>

</head>
<body>
<header style="height: 5% !important;">
	<div class="valign-wrapper black" style="height: 100%;" >
		<div style="margin: auto;">
			视康云
		</div>
	</div>
</header>

<aside class="sidebar blue lighten-2 hide-on-med-and-down" >
	<ul class="nav clearfix">
	    <li><a href="index">关于</a></li>
	    <li><a href="/start">快速上手</a></li>
	    <li class="sidebar-collapsible">
	      <ul class="collapsible collapsible-accordion">
	        <li>
	          <a class="collapsible-header  waves-effect waves-bule active">CSS</a>
	          <div class="collapsible-body" style="">
	            <ul>
	              <li><a href="/Sky/index.php/Home/Index/color">颜色</a></li>
	              <li><a href="/Sky/index.php/Home/Index/grid">网格</a></li>
	              <li class="active"><a href="/Sky/index.php/Home/Index/recycle">回收站</a></li>
	              <li><a href="media-css">媒体</a></li>
	              <!--<li><a href="sass">Sass</a></li>-->
	              <li><a href="shadow">阴影</a></li>
	              <li><a href="table">表格</a></li>
	              <li><a href="typography">排版</a></li>
	            </ul>
	          </div>
	        </li>
	        <li><a class="collapsible-header waves-effect waves-bule">组件</a>
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
	          </div>
	        </li>
	        <li><a class="collapsible-header waves-effect waves-bule">Javascript</a>
	          <div class="collapsible-body" style="display: block;">
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
	<div style="padding-left: 200px;padding-top:50px;">
		<nav>
		<div class="nav-wrapper">
		      <div class="input-field">
		        <input type="search" required id="searchbox">
		        <label for="search"><i class="material-icons">search</i></label><!--mdi-action-search-->
		        <i class="material-icons" onclick="clearSearch();">close</i>	<!--mdi-navigation-close-->
		      </div>
	    </div>
	    </nav>

		<!--This is recycle.html-->
		<table id="mytable" class="table bordered hoverable striped centered responsive-table">
		    
		    <thead>
		      <tr>
		        <!-- <th data-field="id">Num</th> -->
		        <th data-field="id">Id</th>
		        <th data-field="name">Name</th>
		        <th data-field="password">Password</th>
		        <th data-field="time">Create_time</th>
		        <th>Action</th>
		      </tr>
		    </thead>
	    </table>

	</div>
	
</main>

<script>
	var table;	//申明全局变量
	$(document).ready( function () {
			
	 		table =$('#mytable').DataTable({
	 			"paging":true,
				// "pagingType":"full_numbers",
				"lengthMenu":[5,10,25,50],                             
				"processing": true,
				// 'bStateSave': true,
				"searching": true, //是否开启搜索
		        //"serverSide": true,//开启服务器获取数据，true代表后台处理分页，false代表前台处理分页  
		        // "order": [[ 0, "desc" ]], //默认排序
	 			"ajax":{ // 获取数据
		        	"url":"../Data/recycle",
		        	"dataType":"json" //返回来的数据形式
		        },
		        "columns":[ //定义列数据来源
					{'title':"id",'data':"id"},
					{'title':"name",'data':"name"},
					{'title':"pwd",'data':"password"},//隐藏
					{'title':"date",'data':"create_time"},
					{'title':"action",'data':null,'class':"align-center"} // 自定义列
				],

	      		"aoColumns": [
      				{"mDataProp":"id"},
		            {"mDataProp":"name"},
		            {"mDataProp":"password"},
		            {"mDataProp":"create_time"},
		            {"mDataProp":"",
		   				"sDefaultContent" : "<button data-target='modal1' class='waves-effect waves-light btn ' onclick='undoDelete(this)'>恢复</button>"+ "   <button name='btn-del' class='waves-effect waves-light btn red' onclick='removeFun(this)'>彻底删除</button>",
		   				"sClass" : "center"}
	            ],
	            // "aoColumnDefs": [
             //        { "bSearchable": false, "aTargets": [2,3]},	//"aTargets"后面禁用不想搜的列数
             //    ],


	      		"language":{ // 定义语言
		        	"sProcessing":"加载中...",
		        	"sLengthMenu":"每页显示 _MENU_ 条记录",
		        	"sZeroRecords":"没有匹配的结果",
		        	"sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
	                "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
	                "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
	                "sInfoPostFix": "",
	                "sSearch": "搜索:",
	                "sUrl": "",
	                "sEmptyTable": "表中数据为空",
	                "sLoadingRecords": "载入中...",
	                "sInfoThousands": ",",
	                "oPaginate": {
	                    "sFirst": "首页",
	                    "sPrevious": "上一页",
	                    "sNext": "下一页",
	                    "sLast": "末页"
	                },
	                // "oAria": {
	                //     "sSortAscending": ": 以升序排列此列",
	                //     "sSortDescending": ": 以降序排列此列"
	                // }
	            }

	 		});
	 		var dataTable = $('#mytable').dataTable();
	 		$("#searchbox").keyup(function() {
				//alert("searchbox");
				dataTable.fnFilter(this.value);
				// console.log(table);
				// table.fnFilter(this.value);
			}); 
	});

	function clearSearch(){
		//alert("clearSearch");
		$("#searchbox").val('');//清空内容
	}

	//彻底删除操作，待完成
	function removeFun(obj) {
		var tr=obj.parentNode.parentNode;	// 按钮的父节点的父节点是tr
		var id = tr.cells[0].innerText;
		if(!confirm('确定要删除吗？')){
			return;
		}
		$.ajax({
		    url: "/Sky/index.php/Home/Data/datadelete",
		    data: {"id": id},
		    type: "post",
		    success: function (backdata) {
		        if (backdata.indexOf("成功")>0) {
		        	// alert(backdata.status);
		            // oTable.fnReloadAjax(oTable.fnSettings());
		            //alert("删除成功");
		            // tr.remove();

		   			// start = $("#mytable").dataTable().fnSettings()._iDisplayStart; 
					// total = $("#mytable").dataTable().fnSettings().fnRecordsDisplay(); 
					// start = table.fnSettings()._iDisplayStart; 
					// total = table.fnSettings().fnRecordsDisplay(); 

					//alert(start+" "+total);
					// window.location.reload(); 
					table.ajax.reload();

					// if((total-start)==1){ 
					// 	if (start > 0) { 
					// 		// $("#mytable").dataTable().fnPageChange( 'previous', true ); 
					// 		// table.dataTable().fnPageChange( 'previous', true ); 
					// 		table.fnPageChange( 'previous', true );
					// 	}
					// }
					// Materialize.toast(backdata, 2000);
					// else {
					// 	Materialize.toast('删除发生错误，请联系管理员!', 2000); 
					// }
		        } 
		        // else {
		        //     Materialize.toast("页面删除失败", 2000);
		        // }
		        Materialize.toast(backdata, 5000);
		    },
		    error: function (error) {
		    	Materialize.toast("网络异常，请稍后再试！", 2000);
		        console.log(error);
		    }
		});
	}

	//撤销删除操作
	function undoDelete(obj){
		// alert($("#edit_id").val());
		// $("#mytable").dataTable({"bStateSave":true});
		// alert($("#mytable").dataTable().stateSave);
		var tr = obj.parentNode.parentNode;	// 按钮的父节点的父节点是tr
		var id = tr.cells[0].innerText;

		$.ajax({
	        type: "POST",   
	        data:{"id":id},
	        // dataType: "json",
	        // async: false,   
	        url: "/Sky/index.php/Home/Data/undoDeleteData",
	        success:function(data){
                // Materialize.toast(message, displayLength, className, completeCallback);
				if(data.indexOf("成功")>0){
					// window.location.reload();
					table.ajax.reload();
				}
				Materialize.toast(data, 2000); // 2000是Toast持续时间
				// alert(document.getElementById('mytable_wrapper').offsetLeft +" "+ document.getElementById('mytable_wrapper').clientWidth);
				// document.getElementById('toast-container').offsetLeft= document.getElementById('mytable_wrapper').offsetLeft + document.getElementById('mytable_wrapper').clientWidth +"px";
				// alert( document.getElementByClassName('mytoast').right );
				// alert( document.getElementById('toast-container').offsetLeft );
				// console.log( $('#mytable_wrapper').clientWidth );
            },
            error: function(data) {   
	            //alert("系统异常，请稍后再试！");
	            Materialize.toast("网络异常，请稍后再试！", 2000);
	        } 
    	});   
	}

	function setModalHeight(){
		//alert(123);
		document.getElementById('modal1').style.height="700px";
		//console.log(document.getElementById('modal1').style);
	}

</script>
</body>
</html>