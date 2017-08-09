
plugin.tx_ddsnippets_pi1 {
    view {
        templateRootPaths.0 = EXT:dd_snippets/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_ddsnippets_pi1.view.templateRootPath}
        partialRootPaths.0 = EXT:dd_snippets/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_ddsnippets_pi1.view.partialRootPath}
        layoutRootPaths.0 = EXT:dd_snippets/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_ddsnippets_pi1.view.layoutRootPath}
    }
    persistence {
        #storagePid = {$plugin.tx_ddsnippets_pi1.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_ddsnippets._CSS_DEFAULT_STYLE (

)

page {
	includeCSS {
		ddSnippets = {$plugin.tx_ddsnippets_pi1.settings.css}
	}
	
	includeJS {
		ddSnippets = {$plugin.tx_ddsnippets_pi1.settings.js}
	}
}