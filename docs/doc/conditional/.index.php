<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'Conditional';
		$content = [$this,'content'];
		$previousPage = [
			'url' => base_path('/doc/component/'),
			'text' => 'Component',
		];
		$nextPage = [
			'url' => base_path('/doc/loop/'),
			'text' => 'Loop',
		];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.conditional.html';
	}
})();
