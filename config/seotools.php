<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Rico van Zelst", // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Ricovz.me is the personal website of Rico, a full-stack developer specializing in Laravel. Visit to learn more about Rico and his skills, and to see some of his past projects and work experience.', // set false to total remove
            'separator'    => ' | ',
            'keywords'     => ['laravel', 'php', 'full-stack', 'developer', 'web', 'design', 'designer', 'portfolio', 'project', 'experience', 'work', 'skills', 'Rico van Zelst', 'Rico', 'Ricovz', 'Ricovz.me', 'rico zelst'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Rico van Zelst', // set false to total remove
            'description' => 'Ricovz.me is the personal website of Rico, a full-stack developer specializing in Laravel. Visit to learn more about Rico and his skills, and to see some of his past projects and work experience.', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */

        // TODO: Create a twitter account and add the username here
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Rico van Zelst', // set false to total remove
            'description' => 'Ricovz.me is the personal website of Rico, a full-stack developer specializing in Laravel. Visit to learn more about Rico and his skills, and to see some of his past projects and work experience.', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];