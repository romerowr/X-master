<?php
	namespace X\Sys;
	
	/**
	* Core: Front Controller
	*
	*  @author: alex
	*  @package: sys
	*
	*
	**/

	//usem aqui els autoloads per carregar clases
	use X\Sys\Request;
	use X\Sys\Session;

	class Core{
		static private $controller; //el cap del programa te un controler
		static private $action;//que fara una accio 
		static private $params;//amb parametres(AMB ELS SEUS VALORS)- sempre pars

		//aixo es per fer una URL FRIENDLY

		public static function init(){ 
			Session::init(); //INICIA LA SESSIO/CAP
			Request::exploding(); //BUSCA ACCIONS AMB PARAMETRES $arrayquery preparat per extreure controlador

			//AGAFEM VARIABLES DE LA PART REQUEST PERO DESPRES FER UN ROUTING ON TRANSFORMEM LES ARRAYS OBTINGUDES PER A CADA CAS
			self::$controller=Request::getVariable();
			
			self::$action=Request::getVariable();
			
			self::$params=Request::getParams();
			
			// Fer routing			
			self::router();
		}
		/**
		* router: Looks for controller and action
		*
		*
		*
		*/
		static function router(){
			//si no hi ha controller busquem 'home'
			self::$controller=(self::$controller!="")?self::$controller:'home';
			self::$action=(self::$action!="")?self::$action:'home';
			//trobar controladors
			$filename=strtolower(self::$controller).'.php';
			$fileroute=APP.'controllers'.DS.$filename;
		
			if(is_readable($fileroute)){
				$contr_class='\X\App\Controllers\\'.ucfirst(self::$controller);
				self::$controller=new $contr_class(self::$params);
				// cal cridar ara l'accio
				if (is_callable(array(self::$controller,self::$action))){
					call_user_func(array(self::$controller,self::$action));
				}
				else{ echo self::$action.': Mètode inexistent';}
			}else{
				echo self::$controller.': Controlador inexistent';
			}
		}
	}
	//1FASE TERMINA