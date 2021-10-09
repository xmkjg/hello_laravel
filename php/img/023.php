<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<form action="0230.php" method="post">
			<p>输入姓名:
				<input name="user" type="text" placeholder="请输入真实姓名"  />
			</p>
			<p>性别:
				<input type="radio" name="sex" value="男" />男
				<input type="radio" name="sex" value="女"/>女
				<input type="radio" name="sex" checked="checked" value="保密" />保密
			</p>
			<p>爱好:
				<input type="checkbox" name="hobby[]" value="阅读" />阅读
				<input type="checkbox" name="hobby[]" value="旅游" />旅游
				<input type="checkbox" name="hobby[]" value="运动" />运动
				</p>
				<p><select name="work">
					<option value="PHP程序员">PHP程序员</option> />
					<option value="JAVA程序员">JAVA程序员</option> />
					<option value="NET程序员">NET程序员</option> />
				</select>
					</p>
					<input type="submit" value="提交数据" /></p>
		</form>
	</body>
	
	
</html>