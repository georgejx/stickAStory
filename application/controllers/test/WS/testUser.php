<?php 
class baseRestClientTester{
	public function __construct($server, $http_user ='admin', $http_pass = '1234', $http_auth='basic'){
		$this->load->library('rest', array(
				'server' => $server,
				'http_user' => $http_user,
				'http_pass' => $http_pass,
				'http_auth' => $http_auth // or 'digest'
		));
	}
	public function testClientExample($id){
		$user = $this->rest->get('user', array('id' => $id), 'json');
	}
}