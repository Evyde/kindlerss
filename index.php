<html>
<head>
<meta charset="utf-8" />
<title>kindle推送设置</title>
</head>
<body>
<form action="./index.php">
<p>推送邮箱：<input type="text" name="mailAdress" /></p>
<p>密码：<input type="password" name="password" /></p>
<p>推送频率（单位：秒）<input type="number" name="times" /></p>
<p>选择推送源：</p>
<p>如果想加入推送源，在下面按格式加即可，<br />
但是注意必须有相应的文本处理文件，<br />
主程序会调用文本处理文件的函数：<br />
(String) getContent ($html)<br />
函数说明：主程序调用此函数，获得文章内容。<br />
参数说明：html：主程序通过推送源得到的HTML源码<br />
返回值：需要一个String类型的返回值，主程序<br />
不进行校验，如果检测不到建议返回“抓取内容失败”等明文内容<br />
(String) getItemURL (void)<br />
函数说明：主程序调用此函数，获得RSS源地址<br />
参数：无<br />
返回值：RSS源地址<br />

</p>
</form>
</body>
</html>
