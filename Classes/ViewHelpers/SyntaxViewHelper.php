<?php
namespace Codekapitaen\DdSnippets\ViewHelpers;

class SyntaxViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
	
	/**
      * Syntax
      * @param string $argument
      * @return string
      * @author Dennis Donzelmann
      */
	public function render($argument)
	{
		
		switch ($argument)
		{
		    case 'html':
		        return 'HTML';
		        break;
		    case 'css':
		        return 'CSS';
		        break;
		    case 'javascript':
		        return 'JavaScript';
		        break;
		    case 'xml':
		        return 'XML';
		        break;
		    case 'php':
		        return 'PHP';
		        break;
		    case 'sql':
		        return 'SQL';
		        break;
		    case 'abap':
		        return 'ABAP';
		        break;
		    case 'actionscript':
		        return 'ActionScript';
		        break;
		    case 'apacheconf':
		        return 'Apache Configuration';
		        break;
		    case 'applescript':
		        return 'AppleScript';
		        break;
		    case 'asciidoc':
		        return 'AsciiDoc';
		        break;
		    case 'aspnet':
		        return 'ASP.NET (C#)';
		        break;
		    case 'autoit':
		        return 'AutoIt';
		        break;
		    case 'autohotkey':
		        return 'AutoHotkey';
		        break;
		    case 'bash':
		        return 'Bash';
		        break;
		    case 'basic':
		        return 'BASIC';
		        break;
		    case 'batch':
		        return 'Batch';
		        break;
		    case 'bison':
		        return 'Bison';
		        break;
		    case 'brainfuck':
		        return 'Brainfuck';
		        break;
		    case 'bro':
		        return 'Bro';
		        break;
		    case 'c':
		        return 'C';
		        break;
		    case 'csharp':
		        return 'C#';
		        break;
		    case 'cpp':
		        return 'C++';
		        break;
		    case 'clike':
		        return 'C-like';
		        break;
		    case 'coffeescript':
		        return 'CoffeeScript';
		        break;
		    case 'crystal':
		        return 'Crystal';
		        break;
		    case 'css-extras':
		        return 'CSS Extras';
		        break;
		    case 'd':
		        return 'D';
		        break;
		    case 'dart':
		        return 'Dart';
		        break;
		    case 'django':
		        return 'Django/Jinja2';
		        break;
		    case 'diff':
		        return 'Diff';
		        break;
		    case 'docker':
		        return 'Docker';
		        break;
		    case 'eiffel':
		        return 'Eiffel';
		        break;
		    case 'elixir':
		        return 'Elixir';
		        break;
		    case 'erlang':
		        return 'Erlang';
		        break;
		    case 'fsharp':
		        return 'F#';
		        break;
		    case 'fortran':
		        return 'Fortran';
		        break;
		    case 'gherkin':
		        return 'Gherkin';
		        break;
		    case 'git':
		        return 'Git';
		        break;
		    case 'glsl':
		        return 'GLSL';
		        break;
		    case 'go':
		        return 'Go';
		        break;
		    case 'graphql':
		        return 'GraphQL';
		        break;
		    case 'groovy':
		        return 'Groovy';
		        break;
		    case 'haml':
		        return 'Haml';
		        break;
		    case 'handlebars':
		        return 'Handlebars';
		        break;
		    case 'haskell':
		        return 'Haskell';
		        break;
		    case 'haxe':
		        return 'Haxe';
		        break;
		    case 'http':
		        return 'HTTP';
		        break;
		    case 'icon':
		        return 'Icon';
		        break;
		    case 'inform7':
		        return 'Inform 7';
		        break;
		    case 'ini':
		        return 'Ini';
		        break;
		    case 'j':
		        return 'J';
		        break;
		    case 'jade':
		        return 'Jade';
		        break;
		    case 'java':
		        return 'Java';
		        break;
		    case 'jolie':
		        return 'Jolie';
		        break;
		    case 'json':
		        return 'JSON';
		        break;
		    case 'julia':
		        return 'Julia';
		        break;
		    case 'keyman':
		        return 'Keyman';
		        break;
		    case 'kotlin':
		        return 'Kotlin';
		        break;
		    case 'latex':
		        return 'LaTeX';
		        break;
		    case 'less':
		        return 'Less';
		        break;
		    case 'livescript':
		        return 'LiveScript';
		        break;
		    case 'lolcode':
		        return 'LOLCODE';
		        break;
		    case 'lua':
		        return 'Lua';
		        break;
		    case 'makefile':
		        return 'Makefile';
		        break;
		    case 'markdown':
		        return 'Markdown';
		        break;
		    case 'markup':
		        return 'Markup';
		        break;
		    case 'matlab':
		        return 'MATLAB';
		        break;
		    case 'mel':
		        return 'MEL';
		        break;
		    case 'mizar':
		        return 'Mizar';
		        break;
		    case 'monkey':
		        return 'Monkey';
		        break;
		    case 'nasm':
		        return 'NASM';
		        break;
		    case 'nginx':
		        return 'nginx';
		        break;
		    case 'nim':
		        return 'Nim';
		        break;
		    case 'nix':
		        return 'Nix';
		        break;
		    case 'nsis':
		        return 'NSIS';
		        break;
		    case 'objectivec':
		        return 'Objective-C';
		        break;
		    case 'ocaml':
		        return 'OCaml';
		        break;
		    case 'oz':
		        return 'Oz';
		        break;
		    case 'parigp':
		        return 'PARI/GP';
		        break;
		    case 'parser':
		        return 'Parser';
		        break;
		    case 'pascal':
		        return 'Pascal';
		        break;
		    case 'perl':
		        return 'Perl';
		        break;
		    case 'php-extras':
		        return 'PHP Extras';
		        break;
		    case 'powershell':
		        return 'PowerShell';
		        break;
		    case 'processing':
		        return 'Processing';
		        break;
		    case 'prolog':
		        return 'Prolog';
		        break;
		    case 'properties':
		        return '.properties';
		        break;
		    case 'protobuf':
		        return 'Protocol Buffers';
		        break;
		    case 'puppet':
		        return 'Puppet';
		        break;
		    case 'pure':
		        return 'Pure';
		        break;
		    case 'python':
		        return 'Python';
		        break;
		    case 'q':
		        return 'Q';
		        break;
		    case 'qore':
		        return 'Qore';
		        break;
		    case 'r':
		        return 'R';
		        break;
		    case 'jsx':
		        return 'React JSX';
		        break;
		    case 'reason':
		        return 'Reason';
		        break;
		    case 'rest':
		        return 'reST (reStructuredText)';
		        break;
		    case 'rip':
		        return 'Rip';
		        break;
		    case 'roboconf':
		        return 'Roboconf';
		        break;
		    case 'ruby':
		        return 'Ruby';
		        break;
		    case 'rust':
		        return 'Rust';
		        break;
		    case 'sas':
		        return 'SAS';
		        break;
		    case 'sass':
		        return 'Sass (Sass)';
		        break;
		    case 'scss':
		        return 'Sass (Scss)';
		        break;
		    case 'scala':
		        return 'Scala';
		        break;
		    case 'scheme':
		        return 'Scheme';
		        break;
		    case 'smalltalk':
		        return 'Smalltalk';
		        break;
		    case 'smarty':
		        return 'Smarty';
		        break;
		    case 'stylus':
		        return 'Stylus';
		        break;
		    case 'swift':
		        return 'Swift';
		        break;
		    case 'tcl':
		        return 'Tcl';
		        break;
		    case 'textile':
		        return 'Textile';
		        break;
		    case 'twig':
		        return 'Twig';
		        break;
		    case 'typescript':
		        return 'TypeScript';
		        break;
		    case 'vbnet':
		        return 'VB.Net';
		        break;
		    case 'verilog':
		        return 'Verilog';
		        break;
		    case 'vhdl':
		        return 'VHDL';
		        break;
		    case 'vim':
		        return 'vim';
		        break;
		    case 'wiki':
		        return 'Wiki markup';
		        break;
		    case 'xojo':
		        return 'Xojo (REALbasic)';
		        break;
		    case 'yaml':
		        return 'YAML';
		        break;
		    default:
		    	return 'none';
		}
		
	}
}