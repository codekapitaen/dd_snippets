# TYPO3 Extension dd_snippets 

A simple code snippet extension based on Prism.js [http://prismjs.com](http://prismjs.com). 

## Usage


### Installation

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install the extension with the extension manager module.

### Setup

1. Include the static TypoScript of the extension.
2. Create a plugin on a page, select the coding language you want to highlight and insert the code snippet.

### Prism.js Themes

You can easily switch the Prism.js theme by changing the extension constants. `prism.css` is the default stylesheet. Following stylesheets are available:

* prism_coy.css
* prism_dark.css
* prism_funky.css
* prism_okaido.css
* prism_solarizedlight.css
* prism_twilight.css

## Supported version

| Software    | Versions   |
| ----------- | ---------- |
| TYPO3       | 8.7.0 - 8.7.99  |
| PHP         | 5.5 - 7.1  |

## Whats the difference between version 3 and 2

* The extension has been completely rebuilt
* GeSHi was replaced by Prism.js