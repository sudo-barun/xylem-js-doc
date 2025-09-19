<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Component';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/reactivity/'),
			'text' => 'Reactivity',
		];
		$nextPage = [
			'url' => base_path('/doc/conditional/'),
			'text' => 'Conditional',
		];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.component.html';
	}
})();
