# TYPO3 Extension "extend page status overlay"

Extends the TYPO3 backend to add an indicator if a page is "shadowed" by a parent page. MVP

## Limitations

As it would mean a lot of code duplication I'm not taking `$GLOBALS['TYPO3_CONF_VARS']['SYS']['IconFactory']` into account