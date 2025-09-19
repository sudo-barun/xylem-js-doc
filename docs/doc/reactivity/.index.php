<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Reactivity';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/hello-world-example/'),
			'text' => 'Hello World example',
		];
		$nextPage = [
			'url' => base_path('/doc/component/'),
			'text' => 'Component',
		];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.reactivity.html';
	}
})();
