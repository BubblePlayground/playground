<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

$finder = Finder::create()
    ->in(__DIR__)
;

$rules = [
    '@PhpCsFixer' => true
];

return (new Config())
    ->setCacheFile('.cache/php-cs-fixer/.php-cs-fixer.cache')
    ->setFinder($finder)
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setUsingCache(true)
;
