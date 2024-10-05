<?php

include __DIR__ . '/../../../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'JSX';
		$content = [$this,'content'];
		include __DIR__ . '/../.doc-skeleton.php';
	}

	public function content()
	{
		include __DIR__ . '/.jsx.html';
	}
})();