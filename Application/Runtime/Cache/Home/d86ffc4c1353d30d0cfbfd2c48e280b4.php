<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title></title>
</head>
<body>
<table>
 <tr>
    <td>id:</td>
    <td><?php echo ($data["id"]); ?></td>
 </tr>
 <tr>
    <td>用户名：</td>
    <td><?php echo ($data["name"]); ?></td>
 </tr>
 <tr>
    <td>密码：</td>
    <td><?php echo ($data["password"]); ?></td>
 </tr>
 <tr>
    <td>创建时间：</td>
    <td><?php echo ($time[0]['create_time']); ?></td>
 </tr>
 </table>
 </body>
</html>