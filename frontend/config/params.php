<?php
return [
    //'adminEmail' => 'admin@example.com',
    'custom_view_for_modules' => [
        'page_front' => [
            'view' => '@frontend/themes/basic/views/page/view',
        ],
        'blog_front' => [
            'index' => '@frontend/themes/basic/views/blog/index',
            'view' => '@frontend/themes/basic/views/blog/view',
        ],
        'gallery_front' => [
            'index' => '@frontend/themes/basic/views/gallery/index',
            'view' => '@frontend/themes/basic/views/gallery/view'
        ],
        'poll_front' => [
            'index' => '@frontend/themes/basic/views/poll/index',
            'view' => '@frontend/themes/basic/views/poll/view',
            'thanks' => '@frontend/themes/basic/views/poll/thanks'
        ]
    ],

    // Meta Tags for default
    'meta_keywords' => [
		'name' => 'keywords',
		'content' => 'IT Yakutia, Admin14, Разработка, продвижение, сайтов, Создание, сайта, Сайтостроение, Якутск, СММ, социальные сети, соцсеть, видеоролики, реклама',
	],
    'meta_description' => [
	    'name' => 'description',
	    'content' => 'IT Yakutia - Разработка, поддержка и продвижение сайтов и социальных сетей',
	],
    'meta_image' => ['name' => 'image', 'content' => '/themes/basic/img/logo.svg'],
    'meta_type' => ['name' => 'type', 'content' => 'website'],
    'meta_url' => ['name' => 'url', 'content' => null],
];
