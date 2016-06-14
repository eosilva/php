<?php 
	class Pessoa {

		private $token;
		private $name;
		private $birthday;
		private $schooling;

		function __construct( $name, $birthday, $schooling ) {
			$this->setToken();

			$this->setName( $name );
			$this->setBirthday( $birthday );
			$this->setSchooling( $schooling );
		}

		public function getToken() {
			return $this->token;
		}

		public function getName() {
			return $this->name;
		}

		public function getBirthday() {
			return $this->birthday;
		}

		public function getSchooling() {
			return $this->schooling;
		}

		public function setToken() {
			$this->token = md5( uniqid( rand(), true ) );
		}

		public function setName( $name ) {
			$this->name = $name;
		}

		public function setBirthday( $birthday ) {
			$this->birthday = $birthday;
		}

		public function setSchooling( $schooling ) {
			$this->schooling = $schooling;
		}

	}
?>