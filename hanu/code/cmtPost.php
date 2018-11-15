<html>
<body>
	<form  method="post" >
		<table >
			<?php
				include("header.php");
				if(isset($_GET["blid"]) ){ 
	    
	    			$sql="SELECT*FROM article
	    			      INNER JOIN user
	                      ON article.author_id=user.userid
	                      WHERE article_id= '".$_GET['blid']."'

	                   	  ";
        			$query=$conn->prepare($sql);
        			$query->execute();
        			foreach ($query as $k) {
        				echo "<b>".$k['title']."</b>"."<br>";
        				echo $k['last_time_updated']."<br>";
        				echo "Tác giả: ".$k['username']."<br>";
        				echo $k['content']."<br>";
        				echo "<img src='anh/".$k['image']."' width=500px> ";
       			 	}
   			 	}
	    	?>

			
		

<?php
	   include("comment.php"); 
	   if ( isset ($_POST["sub"]) && isset($_SESSION['username'])) {
			$user="SELECT*FROM user
		      	 WHERE username= '".$_SESSION["username"]."'  ";
			$qUser=$conn->prepare($user);
			$qUser->execute();
			foreach ($qUser as $k) {
			
		
				$cmt = $_POST["content"];
 				$user_id = $k["userid"];
 		
				$sql = "INSERT INTO comment (cmt, article_id,user_id) 
		       			 VALUES ( '$cmt', '".$_GET['blid']."' , '$user_id')";
				// thực thi câu $sql với biến conn lấy từ file connect.php
				$query=$conn->prepare($sql);
				$query->execute();
		
			}
		}
		$usercmt=$conn->prepare("SELECT *
		  						FROM comment
		  						INNER JOIN user ON comment.user_id=user.userid
		 	 					INNER JOIN userprofile ON comment.user_id=userprofile.userid 
		 						WHERE comment.article_id= '".$_GET['blid']."'    ");
		$usercmt->execute();
		echo "<h4>Tất cả bình luận</h4>";
		foreach ($usercmt as $item){
			echo "<img src='anh/".$item['Avatar']."' wight='30' height='30' ";
			echo "<br>";
			echo "<b>"."$item[username]"."</b>";
			echo "<br>";
			echo $item["cmt"];
			echo "<br>"."<br>";
		}
		if(!isset($_SESSION['username']) && isset($_POST['sub'])){
			echo "<h3 style=color:red>Xin vui lòng đăng nhập để bình luận</h3>";

		} 
		?>
	
					


	