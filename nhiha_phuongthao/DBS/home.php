<?php
require_once  'includes/connect.php';

$query = $conn->query("
  SELECT posts.id, posts.title, AVG(posts_ratings.rating) AS rating
  FROM posts
  LEFT JOIN posts_ratings
  ON posts.id = posts_ratings.post
  GROUP BY posts.id
");

$posts = [];

while($row = $query->fetch_object()){
	$posts[] = $row;
}

// echo '<pre>', print_r($posts, true), '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>posts</title>
  </head>
  <body>
    <?php foreach($posts as $post): ?>
      <div class="post">
        <h3><a href="post.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></h3>
        <div class="post-rating">Rating: <?php echo round($post->rating); ?>/5</div>
      </div>
    <?php endforeach; ?>
  </body>
</html>