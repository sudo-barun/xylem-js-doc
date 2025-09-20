<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'JSX';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/typescript/'),
			'text' => 'Typescript',
		];
		$nextPage = [
			'url' => base_path('/doc/hello-world-example/'),
			'text' => 'Hello World example',
		];
		$pageDir =__DIR__;
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.jsx.html';
	}
})();
