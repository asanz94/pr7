<?php
    class Request{
        
        static private $extr_arr=array();
        static private $cont;
        static private $accio;
        static private $text_arr;
        static private $param_array=array();
        static private $parametres;
        static function retrieve(){	
            self::$extr_arr =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$extr_arr;    
        }
        static function getCount(){	//cuenta los elementos del Array
            $text_arr = count(self::$extr_arr);
            if($text_arr == 2){
                echo "Controlador";
            }else{
               self::$cont = self::$extr_arr[1];
               return self::$cont; 
            } 
        }

        static function getParams(){	//agarra los parametos.
            $text_arr = count(self::$extr_arr);
            $i2=0;
            if($text_arr >= 5){
                if($text_arr % 2 == 0){
    	            for($i=2;$i < $text_arr;$i++){ 
    	            	self::$param_array[$i2]= self::$extr_arr[$i];
           				$i2++;  
    	            }
                    return self::$param_array;
            	}else{
            		echo "parametres incorrectes";
            	}
            }else{
                echo "parametres correctes";
            }
        }

          static function getAction(){  //Guarda la acción en una variable.
            $text_arr = count(self::$extr_arr);
            if($text_arr >= 4){
                self::$accio = self::$extr_arr[3];
                return self::$accio; 
            }else{
                echo "accio";
            }  
        }
    }
?>