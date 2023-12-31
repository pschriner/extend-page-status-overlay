<?php

declare(strict_types=1);

namespace Pschriner\ExtendPageStatusOverlay\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Core\SingletonInterface;

/**
 * As this hook is stateless, there is no harm in making it a singleton
 */
class IconFactoryHook implements SingletonInterface
{
    public function postOverlayPriorityLookup($table, array $row, array $status, $iconName): string
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
                    if ((int)($page['endtime'] ?? 0) > 0 && $GLOBALS['EXEC_TIME'] < (int)($page['endtime'] ?? 0)) {
                        return 'overlay-scheduled-light';
                    }
                    if (!empty($page['fe_group'])) {
                        return 'overlay-restricted-light';
                    }
                }
            }
        }
        return $iconName;
    }
}
