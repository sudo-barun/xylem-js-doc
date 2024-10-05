<?php

// Override environment variables
$env = include __DIR__ . '/env.generate.php';
foreach ($env as $k => $v) {
	$_ENV[$k] = $v;
}

if (str_starts_with($argv[1], '.') || str_starts_with($argv[1], '.')) {
	$dir = realpath(getcwd().'/'.$argv[1]);
} else {
	$dir = $argv[1];
}
if ($dir === false) {
	throw new \Exception('Failed to resolve path: ' . $argv[1]);
}

$ignoredDirectory = [ 'node_modules', 'vendor' ];

function generate($dir) {

	global $ignoredDirectory;

	$dirContents = scandir($dir);

	if (! $dirContents) {
		echo $dir , ' is not a directory';
	}

	$subdirectories = [];
	$indexFile = null;
	foreach ($dirContents as $dirContent) {
		if (in_array($dirContent, ['.', '..'], true)) {
			continue;
		}
		if (in_array($dirContent, $ignoredDirectory, true)) {
			continue;
		}
		if ($dirContent === '.index.php') {
			$indexFile = $dir . '/' . $dirContent;
		}
		if (is_dir($dir . '/' . $dirContent)) {
			$subdirectories[] = $dir . '/' . $dirContent;
		}
	}

	if ($indexFile === null) {
		error_log('.index.php not found in the directory ' . $dir);
	} else {
		ob_start();
		include $indexFile;
		$content = ob_get_contents();
		ob_end_clean();
		file_put_contents($dir . '/index.html', $content);
	}

	return $subdirectories;
}

function generate_recursively($dir) {
	$subdirectories = generate($dir);
	foreach ($subdirectories as $subdir) {
		generate_recursively($subdir);
	}
}

generate_recursively($dir);
