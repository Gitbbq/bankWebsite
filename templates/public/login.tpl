<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			无标题文档
		</title>
		<style type="text/css">
.titleStyle{
		/*  border: solid 1px red;*/
		text-align: center;
		height: 190px;
		line-height: 170px;
		}

		.rowLogoStyle{
		/*border: solid 1px red;*/
		text-align: center;

		}
		.rowListStyle{
		/*border: solid 1px red;*/
		height: 200px;
		}
		.roundedBorder{
		/*border: 2px solid #000;*/
		border-radius: 25px;
		width: 120px;
		height: 25px;
		/*background-color: black;*/
		color: #fff;
		text-align: center;
		line-height: 25px;
		-moz-border-radius: 25px;
		font-size: 14px;

		margin-top: 9px;
		margin-left: 22px;

		}
		.systemCache{
		/*border: solid 1px red;*/
		width: 12%;
		height: 200px;
		float: left;
		text-align: center;
		margin-left: 10px;
		}

		.imgWarp{
		/*  border: solid 1px red;*/
		height: 150px;
		}
		.imgStyle{
		width: 90px;
		height: 90px;
		margin-top: 50px;

		}
		.spanlogin{
			display: inline-block;
		}

		.spanLoginText{
			width: 207px;
		}

		.spanLoginFrist{
			width: 73px;
		}

		.divLogin{
			height: 40px;
		}

		.spanFontColor{
			color: rgb(167,167,167);
		}
		</style>
	</head>
	<body style=" background-image:url(./public/image/loginback.png); background-position: center -85px; background-repeat: no-repeat;'">
		<div class="warp" style='position: relative;'>	


			    <div style=' height: 200px;'>&nbsp;</div>
				<div style=' width: 350px; position: absolute;  left: 37%;'>
					<div class='divLogin'>
						<span class='spanlogin spanLoginFrist spanFontColor'>用户名：</span> <span class='spanlogin'><input type='text' name='username' class='spanLoginText'></span>
					</div>
					<div class='divLogin'>
						<span class='spanlogin spanLoginFrist spanFontColor'>密码:</span> <span class='spanlogin'><input type='text' name='password' class='spanLoginText'></span>
					</div>
					<div class='divLogin'>
						<span class='spanlogin spanLoginFrist spanFontColor'>验证码:</span> <span class='spanlogin'><input type='text' name='yanzhengma'></span> <span class='spanlogin' style='width: 25px;'>&nbsp;</span> <span class='spanlogin' style=' background-color: rgb(175,175,175); width: 50px; height: 19px;'>&nbsp;</span>
					</div>
					<div class='divLogin'>
						<span class='spanlogin' style='width: 78px;'>&nbsp;</span> 

						<span class='spanlogin' style='width: 85px; height:35px;background-image:url(./public/image/loginbutton.png); color:white; font-size: 14px; text-indent: 20px; letter-spacing: 10px; line-height: 35px; font-weight: bold;'>
							<a href='{$URLController}?{$CONTROLLER}=homePage&{$FUNCTIONS}=index'>登入</a>
						</span>
				
				</div>
			</div>
		</div>
	</body>
</html>