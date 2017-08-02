<?php
namespace Codekapitaen\DdSnippets\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Service\FlexFormService;


class FlexViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
	
	/**
      * FlexForms
      * @param string $argument
      * @return array
      * @author Dennis Donzelmann
      * Usuage <dd:flex argument="{pi_flexform}" /> or inline {dd:flex(argument: pi_flexform)}
      */
	public function render($argument)
	{
		$flexformService = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Service\\FlexFormService');
		$flexArr = $flexformService->convertFlexFormContentToArray($argument);
		
		return $flexArr;
	}
}