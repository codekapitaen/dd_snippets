<?php
namespace Codekapitaen\DdSnippets\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dennis Donzelmann <ahoi@codekapitaen.de>
 */
class SnippetTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Codekapitaen\DdSnippets\Domain\Model\Snippet
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Codekapitaen\DdSnippets\Domain\Model\Snippet();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
