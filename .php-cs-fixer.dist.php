<?php

declare(strict_types=1);

require __DIR__.'/tools/php-cs-fixer/vendor/autoload.php';

return (new PhpCsFixer\Config())
    ->setRules([
        '@PhpCsFixer' => true,
        '@Symfony' => true,
        '@PHP80Migration:risky' => true,
        '@PHP81Migration' => true,
        'no_superfluous_phpdoc_tags' => [
            'remove_inheritdoc' => true,
        ],
        'yoda_style' => true,
    ])
;
