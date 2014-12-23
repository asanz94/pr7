<?php
	
	class Config{
			private static $inst;
			private static $data=array();

			private function __construct(){}


			public static function getIns(){
				
		if(self::$inst != null){					
					self::$inst = new Config();
				}
					return self::$inst;

		}

			public function set($nom,$valor){

		if(!array_key_exists($nom, self::$data)){
				self::$data[$nom] = $valor;
				return true;

		}else{
				return false;
	
			}
		}

			public function get($nom){
		if(!array_key_exists($nom,self::$data)){
				return self::$data[$nom];
		}else{
				return null;
			}				
		}

		public static function clearing(){

			self::$data=array();

		}

	}



