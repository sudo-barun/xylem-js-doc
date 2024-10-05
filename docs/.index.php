<?php

include __DIR__ . '/../bootstrap.php';

(new class()
{
	public function __invoke()
	{
		$h1 = 'XylemJS';
		$content = [$this,'content'];
		include __DIR__ . '/.skeleton.index.php';
	}

	public function content()
	{
		include __DIR__ . '/.home.html';
	}
})();
