<?php 

require_once 'includes/connect.php';

if(isset($_GET['keywords'])){
$keywords = $conn->escape_string($_GET['keywords']);

$query = $conn->query("
	SELECT title, createdate
	FROM posts 
	WHERE content LIKE '%{$keywords}%'
	OR title LIKE '{$keywords}%'  
	");
?>

<div class=" result-count">
	Found <?php echo $query->num_rows; ?> results.
</div>

<?php 

if($query->num_rows) {
	while($r = $query->fetch_object()){
		?>
		<div class="result">
			<a href="postdetail.php"><?php echo $r->title; ?></a>
		</div>
<?php 
	}
}
}