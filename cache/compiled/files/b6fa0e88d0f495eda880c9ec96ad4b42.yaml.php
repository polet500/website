<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/inetpub/webs/nuovorinascimentoorg/polet500/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1490280274,
    'data' => [
        'enabled' => false,
        'built_in_css' => true,
        'display_button' => true,
        'min_query_length' => 3,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            0 => [
                'category' => 'blog'
            ],
            1 => [
                '@taxonomy' => false
            ]
        ],
        'filter_combinator' => 'and',
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
