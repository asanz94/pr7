<?php

class Core{ 

      static private $config;

    	static function init(){
         
		            Config::set('hola','adios');

                $config=Config::getIns();

                Config::set('hola','adios');
           

            if(Config::set('hola','adios') == true){

                  echo "Se ha guardat de manera satisfactoria";

            }else{
              echo "El registre existeix <br/>";
            }

            if(Config::get("hola") != null){

                  echo Config::get("hola");
            }else{
                  echo "registre inexistent";
            }

	}
}