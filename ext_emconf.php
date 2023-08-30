<?php

/*
 * This file is part of the Extend Page Status Indicator extension.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = [
    'title'          => 'Extend Page Status Overlay',
    'description'    => 'See extendToSubpages status on subpage icons',
    'author'         => 'Patrick Schriner',
    'author_email'   => 'patrick.schriner@diemedialen.de',
    'author_company' => 'Die Medialen GmbH',
    'category'       => 'backend',
    'state'          => 'alpha',
    'version'        => '0.0.1',
    'constraints'    => [
        'depends'   => [
            'typo3' => '12.4.0-12.4.99',
        ],
    ],
];
