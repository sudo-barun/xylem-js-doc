<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Installation';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/quick-start/'),
			'text' => 'Quick Start',
		];
		$nextPage = [
			'url' => base_path('/doc/typescript/'),
			'text' => 'Typescript',
		];
		$pageDir =__DIR__;
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.installation.html';
	}
})();
