<?php

if (! function_exists('attr')) {
	function attr(string $text) {
		return htmlspecialchars($text);
	}
}

if (! function_exists('env')) {
	function env(string $key, $fallback = null) {
		foreach ($_ENV as $k => $v) {
			if ($key === $k) {
				return $v;
			}
		}
		$env = require __DIR__ . '/env.php';
		foreach ($env as $k => $v) {
			if ($key === $k) {
				return $v;
			}
		}
		if (func_num_args() > 1) {
			return $fallback;
		}
		throw new \Exception("Environment variable $key not found.");
	}
}

if (! function_exists('base_path')) {
	function base_path(string $path = '') {
		if (trim($path) === '') {
			return env('BASE_PATH');
		}
		$basePath = trim(env('BASE_PATH'), '/');
		return $basePath
			? sprintf('/%s/%s', $basePath, ltrim($path, '/'))
			: sprintf('/%s', ltrim($path, '/'))
		;
	}
}

if (! function_exists('base_url')) {
	function base_url(string $path = '') {
		$BASE_PATH = base_path($path);
		return $BASE_PATH
			? sprintf('%s://%s/%s', env('PROTOCOL'), env('DOMAIN'), ltrim($BASE_PATH, '/'))
			: sprintf('%s://%s', $_SERVER['REQUEST_SCHEME'], $_SERVER['SERVER_NAME'])
		;
	}
}

if (! function_exists('partial')) {
	function partial($name) {
		is_callable($name) ? $name() : $name;
	}
}
