<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'overlay-endtime-light' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:extend_page_status_overlay/Resources/Public/Icons/overlay-endtime-light.svg',
    ],
    'overlay-hidden-light' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:extend_page_status_overlay/Resources/Public/Icons/overlay-hidden-light.svg',
    ],
    'overlay-restricted-light' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:extend_page_status_overlay/Resources/Public/Icons/overlay-restricted-light.svg',
    ],
    'overlay-scheduled-light' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:extend_page_status_overlay/Resources/Public/Icons/overlay-scheduled-light.svg',
    ],
];
