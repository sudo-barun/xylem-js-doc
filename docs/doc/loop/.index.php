<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Loop';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/conditional/'),
			'text' => 'Conditional',
		];
		$nextPage = [
			'url' => base_path('/doc/attribute/'),
			'text' => 'Attribute',
		];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.loop.html';
	}
})();
