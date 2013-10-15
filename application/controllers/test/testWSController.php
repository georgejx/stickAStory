<?php
require_once('WS/testUser.php');
class TestWSController extends CI_Controller{
	function testUserWS(){
		$tester = new baseRestClientTester('http://stickastory/index.php/api/example');
		$result = $tester->testClientExample(1);
		print_r($result);
	}
}

