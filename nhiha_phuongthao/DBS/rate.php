<?php
require_once  'includes/connect.php';

if(isset($_GET['post'], $_GET['rating'])){

	$posts = (int)$_GET['post'];
	$rating = (int)$_GET['rating'];

	if(in_array($rating, [1, 2, 3, 4, 5])){

		$exists = $conn->query("SELECT id 
								FROM posts 
								WHERE id = $post")->num_rows ? true : false;

		if($exists){
			$conn->query("INSERT INTO articles_ratings (post, rating) VALUES ($post, $rating)");
		}
	}
	header('Location: index.php?id=' . $post);
}