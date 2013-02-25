<?php
/**
 * Copyright (c) 2012 Bernhard Posselt <nukeawhale@gmail.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

class Test_App extends PHPUnit_Framework_TestCase {

	
	public function testIsAppVersionCompatibleSingleOCNumber(){
		$oc = array(4);
		$app = '4.0';

		$this->assertTrue(OC_App::isAppVersionCompatible($oc, $app));
	}

	
	public function testIsAppVersionCompatibleMultipleOCNumber(){
		$oc = array(4, 3, 1);
		$app = '4.3';

		$this->assertTrue(OC_App::isAppVersionCompatible($oc, $app));
	}


	public function testIsAppVersionCompatibleMultipleAppNumber(){
		$oc = array(4);
		$app = '4';

		$this->assertTrue(OC_App::isAppVersionCompatible($oc, $app));
	}


	public function testIsAppVersionCompatibleSingleAppNumber(){
		$oc = array(4, 3);
		$app = '4';

		$this->assertTrue(OC_App::isAppVersionCompatible($oc, $app));
	}

	
	public function testIsAppVersionCompatibleShouldFail(){
		$oc = array(4, 3, 1);
		$app = '4.3.2';

		$this->assertFalse(OC_App::isAppVersionCompatible($oc, $app));
	}


}