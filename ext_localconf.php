<?php
use \TYPO3\CMS\Core\Imaging\IconFactory;

defined('TYPO3') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][IconFactory::class]['overrideIconOverlay'][] = \Pschriner\ExtendPageStatusOverlay\Hooks\IconFactoryHook::class;