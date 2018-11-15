<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="style/css.css" />
		<style >
		.wrapper{
			width:1300;
			margin:3;
			padding:0;
			height:auto;
			
		}
		.header{
			width:1300;
			height:auto;
			text-align:center;
			

		}
		.content{
			
			width:1300;
			height:auto;
			;

		}
		.left{
			width:700;
			
			float:left;
		}
		.right{
			width:550;
			float:right;
			
		
		}

		.footer{
			width:1300;
			height:auto;
			border:1px ;
		}
			
			</style>
		
</head>
	
<body>	
<div class="wrapper">	
	<div class="header">
		<?php
			include("connect.php");
			include("header.php");
		?>

	</div>
	<div class="content">

		<div class="left">
			<?php
				include("outstanding_article.php");
			
			?>

		</div>
		
		<div class="right">
			
			

			
				<?php
					include("userpost.php");
				?>
			
		</div>
	</div>
	
	<div class="footer">

		<?php
		include("footer.php");
		?>
	</div>
	</div>

			






</body>
</html>

