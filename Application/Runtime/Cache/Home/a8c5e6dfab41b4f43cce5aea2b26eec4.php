<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title></title>
</head>
<body>
	<FORM method="post" action="/thinkphp3/index.php/Home/Form/update">
	用户名：<INPUT type="text" name="name" value="<?php echo ($u["name"]); ?>"><br/>
	密  码：<INPUT type="text" name="password" value="<?php echo ($u["password"]); ?>"><br/>

	<INPUT type="hidden" name="id" value="<?php echo ($u["id"]); ?>">
	<INPUT type="submit" value="提交">
	</FORM>

</body>
</html>