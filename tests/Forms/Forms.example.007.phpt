<?php

/**
 * Test: Nette\Forms example.
 *
 * @author     David Grudl
 * @package    Nette\Forms
 * @subpackage UnitTests
 */

use Nette\Forms\Form;



require __DIR__ . '/../bootstrap.php';



ob_start();
require '../../examples/forms/manual-rendering.php';
Assert::match( file_get_contents(__DIR__ . '/Forms.example.007.expect'), ob_get_clean() );