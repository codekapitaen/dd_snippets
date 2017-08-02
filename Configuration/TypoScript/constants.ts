
plugin.tx_ddsnippets_pi1 {
    view {
        # cat=plugin.tx_ddsnippets_pi1/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:dd_snippets/Resources/Private/Templates/
        # cat=plugin.tx_ddsnippets_pi1/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:dd_snippets/Resources/Private/Partials/
        # cat=plugin.tx_ddsnippets_pi1/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:dd_snippets/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_ddsnippets_pi1//a; type=string; label=Default storage PID
        storagePid =
    }
    settings {
	     # cat=plugin.tx_ddsnippets_pi1/file; type=string; label=Path to prism theme (override by "_dark, _coy" etc.)
	    css = EXT:dd_snippets/Resources/Public/CSS/prism.css
	    
	     # cat=plugin.tx_ddsnippets_pi1/file; type=string; label=Path to prism script
	    js = EXT:dd_snippets/Resources/Public/Scripts/prism.js
    }
}