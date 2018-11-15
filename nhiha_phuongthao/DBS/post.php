<?php
require_once  'includes/connect.php';

$post = null;

if(isset($_GET['id'])){
	
	$id = (int)$_GET['id'];

	$post = $conn->query("
		SELECT posts.id, posts.title, AVG(posts_ratings.rating) AS rating
		FROM posts
		LEFT JOIN posts_ratings
		ON posts.id = posts_ratings.post
		WHERE posts.id = {$id}
	")->fetch_object();

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>post</title>
  </head>
  <body>
  	<?php if($post): ?>
  		<div class="post">
  			This is post "<?php echo $post->title; ?>".
  			<div class="post-rating">Rating: <?php echo round($post->rating); ?>/5</div>
  			<div class="post-rate">
  				Rate this post:
  				<?php foreach(range(1, 5) as $rating): ?>
  					<a href="rate.php?post=<?php echo $post->id; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
  				<?php endforeach; ?>
  			</div>
  		</div>
  	<?php endif; ?>
  </body>
</html>