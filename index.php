<?php
$jsonData = file_get_contents('https://cdn.pinkvilla.com/feed/fashion-section.json');

function compare($object1, $object2) { 
    return $object1->viewCount < $object2->viewCount; 
}

$data = json_decode($jsonData);

usort($data, 'compare');

$link = 'http://www.pinkvilla.com';

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner-wrapper">
				<?php foreach($data as $key => $article) { $href = $link.$article->path; ?>
					<div class="card">
						<div class="details">
							<a href="<?= $href ?>" target="_blank"><img src="<?= $article->imageUrl; ?>"></a>
							<a href="<?= $href ?>" target="_blank"><h3 class="title"><?= $article->title; ?></h3></a>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		<script src="index.min.js"></script>
		<script src="index.js"></script>
	</body>
</html>