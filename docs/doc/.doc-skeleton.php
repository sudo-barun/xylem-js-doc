<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Xylem-JS Documentation</title>
<meta name="description" content="Xylem-JS Documentation">
<link rel="stylesheet" href="<?= attr(base_path('node_modules/bootstrap/dist/css/bootstrap.min.css')) ?>">

<link rel="stylesheet" href="<?= attr(base_path('node_modules/@highlightjs/cdn-assets/styles/default.min.css')) ?>">

<style>

:root {
	tab-size: 4;
}

pre {
	border: 2px solid #888;
	padding: 8px;
}

article > h2:not(:first-child) {
	margin-top: 2.5rem;
}

article > h3 {
	margin-top: 2rem;
}

.top-container {
	min-height: 100dvh;
	display: grid;
	grid-template-rows: auto 1fr auto;
	grid-template-columns: minmax(0, 1fr);
}

@media (min-width: 992px) {
	.top-container {
		grid-template-rows: auto 1fr auto;
	}
}

.sidenav {
	max-height: 100vh;
	overflow: auto;
}

@media (min-width: 992px) {
	.sidenav {
		position: sticky;
		top: 0;
	}
}

</style>

</head>
<body>

<div class="top-container">

	<div>
		<?php include __DIR__ . '/../._navbar.php' ?>
	</div>

	<div>
		<div class="container" style="margin-block: 24px;">

			<div class="row">

				<nav class="col-12 col-md-3 py-3 align-self-start sidenav">
					<?php include __DIR__ . '/../._sidebar.php' ?>
				</nav>

				<article class="col-12 col-md-9 py-3">

					<h1><?= $h1 ?? '' ?></h1>

					<?= partial($content ?? '') ?>

				</article>

			</div>

		</div>
	</div>

	<div>
		<?php include __DIR__ . '/../._footer.php' ?>
	</div>

</div>

<script src="<?= attr(base_path('node_modules/@highlightjs/cdn-assets/highlight.min.js')) ?>"></script>

<script src="<?= attr(base_path('node_modules/@highlightjs/cdn-assets/languages/xml.min.js')) ?>"></script>
<script src="<?= attr(base_path('node_modules/@highlightjs/cdn-assets/languages/css.min.js')) ?>"></script>
<script src="<?= attr(base_path('node_modules/@highlightjs/cdn-assets/languages/javascript.min.js')) ?>"></script>

<script src="<?= attr(base_path('modules/app.js')) ?>" type="module"></script>

</body>
</html>
