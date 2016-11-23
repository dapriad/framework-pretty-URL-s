<?php
	class Log {
		private $path;
		static $_instance;

		public function __construct(){
			$this->path=GENERAL_LOG_DIR;
			if(!file_exists(GENERAL_LOG_DIR)){
				mkdir(GENERAL_LOG_DIR, 0777);
			}
		}
		
		public static function getInstance() {
			if (!(self::$_instance instanceof self))
				self::$_instance = new self();
			return self::$_instance;
		}
		
		public function add_log_general($text, $controller, $function){
			$file=fopen($this->path, 'a');
			fwrite($file, date('d/m/y H:i:s A')." | ". $text ." | ". $controller ." | ". $function."\n");
			fclose($file);
		}
		
		public function add_log_user($msg, $username = "", $controller, $function){
			$date = date('d.m.Y H:i:s');
			$log = $msg ." | ". $date ."  |  User:  ". $username ." | ".  $controller ." | ". $function."\n";
			error_log($log, 3, USER_LOG_DIR);
		}
	}
