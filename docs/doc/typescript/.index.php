<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'TypeScript';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/installation/'),
			'text' => 'Installation',
		];
		$nextPage = [
			'url' => base_path('/doc/jsx/'),
			'text' => 'JSX',
		];
		$pageDir =__DIR__;
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.typescript.html';
	}
})();
