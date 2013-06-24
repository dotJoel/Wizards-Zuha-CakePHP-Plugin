<?php
App::uses('Wizard', 'Wizards.Model');

/**
 * Wizard Test Case
 *
 */
class WizardTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('plugin.wizards.wizard');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Wizard = ClassRegistry::init('Wizard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Wizard);

		parent::tearDown();
	}

}
