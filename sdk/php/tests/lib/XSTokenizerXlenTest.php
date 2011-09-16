<?php
require_once dirname(__FILE__) . '/../../lib/XSTokenizer.class.php';
require_once dirname(__FILE__) . '/../../lib/XSDocument.class.php';

/**
 * Test class for XSTokenizerXlen.
 * Generated by PHPUnit on 2011-09-14 at 16:32:59.
 */
class XSTokenizerXlenTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var XSTokenizerXlen
	 */
	protected $object;
	/**	 
	 * @var XSDocument
	 */
	protected $doc;		

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new XSTokenizerXlen;
		$this->doc = new XSDocument;		
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
		$this->doc = null;		
	}

    /**
     * @dataProvider provider
     */	
	public function testGetTokens($words, $str)
	{
		$this->assertEquals($words, $this->object->getTokens($str, $this->doc));
	}
	
    /**
     * @dataProvider provider3
     */	
	public function testGetTokens3($words, $str)
	{
		$this->object = new XSTokenizerXlen('3');
		$this->assertEquals($words, $this->object->getTokens($str, $this->doc));
	}
	
	public function provider()
	{
		return array(
			array(
				array('he', 'll', 'o'),
				'hello'
			),
			array(
				array('he', 'll', 'o ', 'wo', 'rl', 'd'),
				'hello world'
			)
		);
	}
	
	public function provider3()
	{
		return array(
			array(
				array('hel', 'lo'),
				'hello'
			),
			array(
				array('hel', 'lo ', 'wor', 'ld'),
				'hello world'				
			),
			array(
				array('测', '试', '一', '下'),
				'测试一下'
			)
		);	
	}
}

