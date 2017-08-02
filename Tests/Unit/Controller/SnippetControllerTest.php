<?php
namespace Codekapitaen\DdSnippets\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Dennis Donzelmann <ahoi@codekapitaen.de>
 */
class SnippetControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Codekapitaen\DdSnippets\Controller\SnippetController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Codekapitaen\DdSnippets\Controller\SnippetController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSnippetsFromRepositoryAndAssignsThemToView()
    {

        $allSnippets = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $snippetRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $snippetRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSnippets));
        $this->inject($this->subject, 'snippetRepository', $snippetRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('snippets', $allSnippets);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
