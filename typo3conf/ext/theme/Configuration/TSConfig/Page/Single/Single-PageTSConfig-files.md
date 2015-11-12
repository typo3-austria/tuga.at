# TSConfig/Page/Single

## TL;DR

This folder contains all PageTSConfig which is expecially for (single) sysFolders containing news records or specific configurations.

## Register new file

Each file must be registered with \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile() within the file EXT:theme/Configuration/TCA/Overrides/pages.php

## Add a file to a page/pagetree

Open page properties → Resources → Select the TSConfig which you want to include
