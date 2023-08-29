<?php

declare(strict_types=1);

namespace Pschriner\ExtendPageStatusOverlay\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;

class IconFactoryHook
{
    public function postOverlayPriorityLookup($table, array $row, array $status, $iconName)
    {
        if ($table === 'pages' && $iconName == '') {
            $rootLineUtility = GeneralUtility::makeInstance(RootlineUtility::class, (int)$row['uid']);
            $rootLine = $rootLineUtility->get();
            foreach ($rootLine as $page) {
                if ($page['extendToSubpages'] == 1) {
                    if (!empty($page['hidden'])) {
                        return 'overlay-hidden-light';
                    }
                    if (!empty($page['starttime']) && $GLOBALS['EXEC_TIME'] < (int)($page['starttime'] ?? 0)) {
                        return 'overlay-scheduled-light';
                    }
                    if ((int)($page['endtime'] ?? 0) > 0 && $GLOBALS['EXEC_TIME'] > (int)($page['endtime'] ?? 0)) {
                        return 'overlay-endtime-light';
                    }
                }
            }
        }
        return $iconName;
    }
}
