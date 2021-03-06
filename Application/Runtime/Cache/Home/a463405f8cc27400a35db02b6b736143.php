<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>This is grid.html</title>
  

<!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/Sky/materialize/css/materialize.min.css"  media="screen,projection"/>
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --><!-- 引用谷歌在线字体，不推荐 -->
  <link href="/Sky/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
  <!-- Css -->
  
   <!-- <link href="/Sky/MaterialDesign-Webfont-master/css/materialdesignicons.min.css" rel="stylesheet" type="text/css"> -->
  <!--
  <link href="/Sky/css/style.css" rel="stylesheet" type="text/css" />
  -->

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
	    /*background-color: #ee6e73;*/
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
	/*table.dataTable thead.sorting_desc:after{
		content: "sort-by-attributes-alt" !important;
	}*/
	.modal{
		width: 400px;
		/*height: auto;*/
		border-radius: 10px;
	}
	.modal .modal-content {
		padding-bottom: 0;
	}
	.control-group input{
		/*position: absolute;*/
		width: 170px;
		/*right:50px;*/
		/*text-align:right;*/
	}
	form span{
		/*padding-left:30px;*/
		width:130px;
		margin-left: 26px;
		padding-top: 10px;

		/*display:block;*/
		float:left;
		/*line-height:26px;*/
	}
	.modal-footer .btn{
		padding: 0 12px !important;
	}
	#toast-container{
		/*position: absolute;*/
		/*position:fixed;*/
		/*top: 500px !important;*/
		right: 240px;
	}
	/*.mytoast{
		position:fixed;
		right: 500px !important;
	}*/

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
	              <li class="active"><a href="/Sky/index.php/Home/Index/grid">网格</a></li>
	              <li><a href="/Sky/index.php/Home/Index/recycle">回收站</a></li>
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
	          </div></li>
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
<!--
<div class="row">
	<div class="col s4">
	</div>

	<div class="col s8">
	</div>
</div>
-->
	<div style="padding-left: 200px;padding-top:50px;">
		<nav>
		<div class="nav-wrapper">
			<!-- <form> -->
		      <div class="input-field">
		        <input type="search" required id="searchbox">
		        <label for="search"><i class="material-icons">search</i></label><!--mdi-action-search-->
		        <i class="material-icons" onclick="clearSearch();">close</i>	<!--mdi-navigation-close-->
		      </div>
		    <!-- </form> -->
	    </div>
	    </nav>

		<!--This is grid.html-->
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
			<!--
			<?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
		    		<tr>
		    			<td><?php echo ($i); ?></td>
						<td><?php echo ($vo['id']); ?></td>
						<td><?php echo ($vo['name']); ?></td>
						<td><?php echo ($vo['password']); ?></td>
						<td><?php echo ($vo['create_time']); ?></td>
					</tr>
		    	</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
		    -->

		    <!-- <tfoot>
			<tr>
				<th>序号</th>
	            <th>姓名</th>
	            <th>密码</th>
	            <th>创建时间</th>
	            <th>操作</th>
			</tr>
			</tfoot> -->
	    </table>
	    
	    <!-- <div class="page">
			<?php echo ($page); ?>
		</div> -->


		<!-- Modal Trigger -->
		<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->

		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<!-- <div class="modal-content">
				<h4>Modal Header</h4>
				<p>A bunch of text</p>
			</div> -->
			<div class="modal-content">
				<h5>修改用户信息</h5>
				<li class="divider"></li>
		        <form class="form-horizontal" id="resForm" action="/Sky/index.php/Home/Data/save" method="post">
		 
		            <div class="control-group">
		            	<!-- <i class="material-icons">done</i>
		                <label class="control-label" for="edit_id">序号：</label> -->
		                <input type="hidden" id="row_id" name="row_id"/>	<!--用来保存被修改的行号-->
		                <input type="hidden" id="edit_id" name="edit_id"/>
		                <!-- <i class="mdi-action-account-circle prefix"></i>
				        <input id="icon_prefix" type="text" class="validate">
				        <label for="icon_prefix">First Name</label> -->
		            </div>
		            <div class="control-group" style="padding-top: 10px;">
		                <!-- <label class="control-label" for="edit_name">姓名：</label> -->
		            	<span><i class="material-icons">account_circle</i>姓名：</span>
		                <input type="text" id="edit_name" name="edit_name"/>
		            </div>
		            <div class="control-group">
		                <!-- <label class="control-label" for="edit_password">密码：</label> -->
		                <span><i class="material-icons">lock_outline</i>密码：</span>
		                <input type="text" id="edit_password" name="edit_password"/>
		            </div>
		            <div class="control-group">
		                <!-- <label class="control-label" for="edit_create_time">创建时间：</label> -->
		                <span><i class="material-icons">date_range</i>创建时间：</span>
		                <input type="date" class="datepicker" id="edit_create_time" name="edit_create_time" onmousedown="setModalHeight();" />
		            </div>
		            <!-- <li class="divider"></li>
			        <div class="modal-footer">
				        <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action" style="margin-right:20px;margin-bottom:20px;">保存</button>
				        <button class="btn waves-effect red " type="button" onclick="$('#modal1').closeModal();" style="margin-right:20px;margin-bottom:20px;">取消</button>
			        </div> -->
		        </form>
		    </div>

			<div class="modal-footer">
				<li class="divider"></li>
		        <button class="btn waves-effect waves-light blue lighten-1" name="action" style="margin-right:20px;margin-bottom:20px;" onclick="savedata();">保存</button>
		        <button class="btn waves-effect red" onclick="$('#modal1').closeModal();" style="margin-right:20px">取消</button>
			</div>
		</div>

		<!-- Modal -->
<!-- 		<div id="myModal" class="modal hide fade" data-backdrop="false">
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"
		                aria-hidden="true">×
		        </button>
		        <h3 id="myModalLabel">用户信息</h3>
		    </div>
		    <div class="modal-body">
		        <form class="form-horizontal" id="resForm">
		            <input type="hidden" id="objectId"/>
		 
		            <div class="control-group">
		                <label class="control-label" for="edit_id">序号：</label> <input
		                    type="text" id="edit_id" name="edit_id"/>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="edit_name">姓名：</label> <input
		                    type="text" id="edit_name" name="edit_name"/>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="edit_create_time">创建时间：</label>
		                <textarea name="edit_create_time" id="edit_create_time" cols="30" rows="4"></textarea>
		            </div>
		        </form>
		    </div>
		    <div class="modal-footer">
		        <button class="btn btn-primary" id="btnSave">确定</button>
		        <button class="btn btn-primary" id="btnEdit">保存</button>
		        <button class="btn btn-danger" data-dismiss="modal"
		                aria-hidden="true">取消
		        </button>
		    </div>
		</div> -->
	</div>
	
</main>

<script>
	var table;	//申明全局变量
	$(document).ready( function () {
			
	 		table = $('#mytable').DataTable({
	 			"paging":true,
				"pagingType":"full_numbers",
				"lengthMenu":[5,10,25,50],                             
				"processing": true,
				// 'bStateSave': true,	//状态保存
				"searching": true, //是否开启搜索
		        //"serverSide": true,//开启服务器获取数据，true代表后台处理分页，false代表前台处理分页  
		        // "order": [[ 0, "desc" ]], //默认排序
	 			"ajax":{ // 获取数据
		        	"url":"getgrid",
		        	"dataType":"json" //返回来的数据形式
		        },
		        "columns":[ //定义列数据来源
					{'title':"id",'data':"id"},
					{'title':"name",'data':"name"},
					{'title':"pwd",'data':"password"},//隐藏
					{'title':"date",'data':"create_time"},
					{'title':"action",'data':null,'class':"align-center"} // 自定义列
				],

				// "columnDefs": [ //自定义列
			 //        {
			 //          "targets": [4], //改写哪一列
			 //          "data": "id",
			 //          "render": function(data, type, row) {
			            // return "<a href='"+full.teacher_id+"'>look at my href</a>";
			            // var html = "<button class='btn btn-info' onclick='edit("+row.id+")'>修改</button>" + "   <button name='btn-del' class='btn btn-danger' onclick='del("+row.id+")'>删除</button>";
			            // return html;
			 //          }
			 //        }
				// ],


				// "columnDefs": [ //自定义列
			        // {
			        //   "targets": -1, //改写哪一列
			        //   "data": "id",
			        //   "render": function(data, type, row) {
			        //     // return "<a href='"+full.teacher_id+"'>look at my href</a>";
			        //     var html = "<button class='btn btn-info' onclick='edit("+row.id+")'>修改</button>" + "   <button name='btn-del' class='btn btn-danger' onclick='del("+row.id+")'>删除</button>";
			        //     return html;
			        //   }
			        // },
			        // {
			        // 	"targets":2,
			        // 	"visible":false //隐藏列
			        // },
			        // {
			        // 	"targets":[-1,-2],
			        // 	"orderable":false  //禁止排序
			        // },
			        // {
			        // 	"targets":[-1,-3],
			        // 	"searchable":false //禁止搜索
			        // }
	      		// ],

	      		"aoColumns": [
      				{"mDataProp":"id"},
		            {"mDataProp":"name"},
		            {"mDataProp":"password"},
		            {"mDataProp":"create_time"},
		            {"mDataProp":"",
		   				"sDefaultContent" : "<button data-target='modal1' class='waves-effect waves-light btn ' onclick='_editFun(this)'>修改</button>"+ "   <button name='btn-del' class='waves-effect waves-light btn red' onclick='_deleteFun(this)'>删除</button>",
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
	                "oAria": {
	                    "sSortAscending": ": 以升序排列此列",
	                    "sSortDescending": ": 以降序排列此列"
	                }
	            }

	 		});
	 		var dataTable = $('#mytable').dataTable();
	 		$("#searchbox").keyup(function() {
				//alert("searchbox");
				dataTable.fnFilter(this.value);
				// table.fnFilter(this.value);
			}); 
			// $('.modal-trigger').leanModal(
			// {
			//     dismissible: true, // 点击模态框外部则关闭模态框
			//     opacity: .5, // 背景透明度
			//     in_duration: 300, // 切入时间
			//     out_duration: 200, // 切出时间
			//     ready: function() { alert('Ready'); }, // 当模态框打开时执行的函数
			//     complete: function() { alert('Closed'); } // 当模态框关闭时执行的函数
			//     }
			// );
			$('.datepicker').pickadate({	//初始化日期组件
				format: 'yyyy-mm-dd',
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 5, // Creates a dropdown of 15 years to control year
			    close: '关闭',
			 //    monthPrev: '<上月',
				// monthNext: '下月>',
				today: '今天',
				clear: '清除',
				monthsFull: [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' ],
				 monthsShort: [ '一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月' ],
				// monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
				weekdaysFull: [ '周日', '周一', '周二', '周三', '周四', '周五', '周六' ],
				weekdaysShort: [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ],
			    onClose: function() {
			        // console.log( 'Closed' )
			        document.getElementById('modal1').style.height="auto";
			    }
			    // onSelect: function() {
			    //     console.log( 'Selected: ' + this.getDate() )
			    // },
			    // onStart: function() {
			    //     console.log( 'Hello there :)' )
			    // }
			});
	});

	function clearSearch(){
		//alert("clearSearch");
		$("#searchbox").val('');//清空内容
	}
	// function edit(obj){
	// 	var tr=obj.parentNode.parentNode;	// 按钮的父节点的父节点是tr
	// 	alert("第"+tr.rowIndex+"行为："+tr.cells[0].innerText);
	// 	//alert(tr.cells[0].childNodes[0].value);
	// }

	//编辑操作
	function _editFun(obj) {
		$('#modal1').openModal();
		
		var tr=obj.parentNode.parentNode;	// 按钮的父节点的父节点是tr
		
		$("#row_id").val(tr.rowIndex);
		$("#edit_id").val(tr.cells[0].innerText);
		$("#edit_name").val(tr.cells[1].innerText);
		$("#edit_password").val(tr.cells[2].innerText);
		$("#edit_create_time").val(tr.cells[3].innerText);
		// $("#objectId").val(id);
		// $("#myModal").modal("show");
		// $("#btnSave").hide();
		// $("#btnEdit").show();
	}

	//删除操作
	function _deleteFun(obj) {
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
		            // var dataTable = $('#mytable').dataTable();
		            // dataTable.Rows.RemoveAt(tr.rowIndex);
		            start = $("#mytable").dataTable().fnSettings()._iDisplayStart; 
					total = $("#mytable").dataTable().fnSettings().fnRecordsDisplay(); 

					// start = table.fnSettings()._iDisplayStart; 
					// total = table.fnSettings().fnRecordsDisplay();

					//alert(start+" "+total);
					// window.location.reload(); 
					table.ajax.reload();

					if((total-start)==1){ 
						if (start > 0) { 
							// $("#mytable").dataTable().fnPageChange( 'previous', true ); 
							table.fnPageChange( 'previous', true );
						}
					}
					// Materialize.toast(backdata, 2000);
					// else {
					// 	Materialize.toast('删除发生错误，请联系管理员!', 2000); 
					// }
		        } 
		        // else {
		        //     Materialize.toast("页面删除失败", 2000);
		        // }
		        Materialize.toast(backdata, 2000);
		    },
		    error: function (error) {
		    	Materialize.toast("网络异常，请稍后再试！", 2000);
		        console.log(error);
		    }
		});
	}

	function savedata(){
		// alert($("#edit_id").val());
		$.ajax({
	        type: "POST",   
	        // cache: false,   
	        // data: "type=exlogin&tp=" + tp,
	        data:{"edit_id":$("#edit_id").val(),"edit_name":$("#edit_name").val(),"edit_password":$("#edit_password").val(),"edit_create_time":$("#edit_create_time").val()},
	        // dataType: "json",
	        // async: false,   
	        url: "/Sky/index.php/Home/Data/datasave",
	        success:function(data){
                // alert("success"+data);
                // Materialize.toast(message, displayLength, className, completeCallback);
				if(data.indexOf("成功")>0){
					// alert("第"+$("#row_id").val()+"行："+$("#edit_name").val()+" "+$("#edit_password").val()+" "+$("#edit_create_time").val())

					//修改表格内容
					var tb=document.getElementById("mytable");//通过“ID”取得表格对象
					tb.rows[$("#row_id").val()].cells[1].innerText=$("#edit_name").val();
					tb.rows[$("#row_id").val()].cells[2].innerText=$("#edit_password").val();
					tb.rows[$("#row_id").val()].cells[3].innerText=$("#edit_create_time").val();

					$('#modal1').closeModal();
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






	// function del(obj){
	// 	var tr=obj.parentNode.parentNode;	// 按钮的父节点的父节点是tr
	// 	alert("第"+tr.rowIndex+"行为："+tr.cells[0].innerText);
	// 	//alert(tr.cells[0].childNodes[0].value);
	// }
	function setModalHeight(){
		//alert(123);
		document.getElementById('modal1').style.height="700px";
		//console.log(document.getElementById('modal1').style);
	}

</script>
</body>
</html>