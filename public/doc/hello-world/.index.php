<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Hello World example';
		$content = [$this,'content'];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.hello-world.html';
?>

<h2>Live Example</h2>
<div class="my-2">
	<a href="<?= base_url('code/hello-world/hello-world.html') ?>" target="_blank">Open in new tab</a>
</div>
<iframe src="<?= base_url('code/hello-world/hello-world.html') ?>" loading="lazy" style="border: 2px solid; width: 100%;"></iframe>

<?php
		include __DIR__ . '/.hello-world-jsx.html';
?>

<h2>Live Example (JSX)</h2>
<div class="my-2">
	<a href="<?= base_url('code/hello-world/hello-world-jsx.html') ?>" target="_blank">Open in new tab</a>
</div>
<iframe src="<?= base_url('code/hello-world/hello-world-jsx.html') ?>" loading="lazy" style="border: 2px solid; width: 100%;"></iframe>

<?php
	}
})();
