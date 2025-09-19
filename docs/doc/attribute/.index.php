<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Attribute';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/loop/'),
			'text' => 'Loop',
		];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.attribute.html';
	}
})();
