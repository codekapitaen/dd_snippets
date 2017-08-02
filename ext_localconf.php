<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
	    
	    if (TYPO3_MODE === 'BE') {
	        $icons = [
	            'extension-dd_snippets-main' => 'user_plugin_pi1.svg',
	        ];
	        
	        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	        
	        foreach ($icons as $identifier => $file) {
	            $iconRegistry->registerIcon(
	                $identifier,
	                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
	                ['source' => 'EXT:dd_snippets/Resources/Public/Icons/' . $file]
	            );
	        }
	        
	    }

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Codekapitaen.DdSnippets',
            'Pi1',
            [
                'Snippet' => 'list'
            ],
            // non-cacheable actions
            [
                'Snippet' => ''
            ]
        );

	    // wizards
	    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	        'mod {
	            wizards.newContentElement.wizardItems.plugins {
	                elements {
	                    dd_snippets_pi1 {
	                        iconIdentifier = extension-dd_snippets-main
	                        title = LLL:EXT:dd_snippets/Resources/Private/Language/locallang_db.xlf:tx_dd_snippets_domain_model_pi1
	                        description = LLL:EXT:dd_snippets/Resources/Private/Language/locallang_db.xlf:tx_dd_snippets_domain_model_pi1.description
	                        tt_content_defValues {
	                            CType = list
	                            list_type = ddsnippets_pi1
	                        }
	                    }
	                }
	                show = *
	            },
	            
	            web_layout.tt_content.preview.list.ddsnippets_pi1 = EXT:dd_snippets/Resources/Private/Backend/Preview.html
	       }'
	    );
    }
);