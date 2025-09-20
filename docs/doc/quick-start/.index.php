<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Quick Start';
		$content = [$this,'content'];
		$nextPage = [
			'url' => base_path('/doc/installation/'),
			'text' => 'Installation',
		];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.quick-start.html';
	}
})();
