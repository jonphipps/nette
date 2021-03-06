<?php

/**
 * Test: Nette\Config\Configurator and createContainer errors.
 *
 * @author     David Grudl
 * @package    Nette\Config
 * @subpackage UnitTests
 */

use Nette\Config\Configurator;



require __DIR__ . '/../bootstrap.php';



$configurator = new Configurator;

Assert::throws(function() use ($configurator) {
	$configurator->addConfig('files/config1.neon')
		->createContainer();
}, 'Nette\InvalidStateException', "Set path to temporary directory using setTempDirectory().");
