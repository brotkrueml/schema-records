<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Schema Records',
    'description' => 'schema.org structured data for your website with records',
    'category' => 'fe',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'state' => 'alpha',
    'version' => '0.4.1-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'schema' => '1.7.0-1.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Brotkrueml\\SchemaRecords\\' => 'Classes'
        ]
    ],
];
