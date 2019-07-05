<?php

/*
fix
"$FileDir$\$FileName$"
--rules=@Symfony
--verbose
--using-cache=no
 */
$finder = PhpCsFixer\Finder::create();

$config = PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony'          => true,
        // 'phpdoc_separation' => false,
    ])
    ->setUsingCache(false)
    ->setFinder($finder);

return $config;
