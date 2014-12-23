<?php
	
	spl_autoload_register(null, false);
	spl_autoload_register('KAutoloader::Sysloader');
	
	

	class KAutoloader{
		static function SysLoader($clase){
			$nomfitx = strtolower($clase) . '.php';
			$fitxer =ROOT.'sys/' .DS. $nomfitx;
			
			if (!fitxer_exists($fitxer)){
				return false;
			}
			include $fitxer;
		}
		
	static function ContLoader($clase){
			$nomfitx = strtolower($clase) . '.php';
			$fitxer =ROOT.'app'.DS.'controllers'.DS.$nomfitx;
			
			if (!fitxer_exists($fitxer)){
				return false;
			}
			include $fitxer;
		}
		static function ModLoader($clase){
			$nomfitx = strtolower($clase) . '.php';
			$fitxer =ROOT.'app'.DS.'models'.DS.$nomfitx;
			
			if (!fitxer_exists($fitxer)){
				return false;
			}
			include $fitxer;
		}
		static function ViewsLoader($clase){
			$nomfitx = strtolower($clase) . '.php';
			$fitxer =ROOT.'app'.DS.'views' .DS. $nomfitx;
			
			if (!fitxer_exists($fitxer)){
				return false;
			}
			include $fitxer;
		}
		
	}

	class Coder{

		static function code($var){
			echo '<pre>'.$var.'</pre>';
		}

		static function code_var($var){
			echo '<pre>'.var_dump($var).'</pre>';
		}

	
		
		
	}
