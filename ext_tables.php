<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Codekapitaen.DdSnippets',
            'Pi1',
            'Code Snippets'
        );

        $pluginSignature = str_replace('_', '', 'dd_snippets') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:dd_snippets/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('dd_snippets', 'Configuration/TypoScript', 'Code Snippets');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ddsnippets_domain_model_snippet', 'EXT:dd_snippets/Resources/Private/Language/locallang_csh_tx_ddsnippets_domain_model_snippet.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ddsnippets_domain_model_snippet');

    }
);
