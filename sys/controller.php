<?php
	namespace X\Sys;

	use X\Sys\Registry;
	/**
	*
	*   Controller: the base controller
	*     in MVC systems
	*
	*
	*
	**/
	class Controller{
		protected $model;
		protected $view;
		protected $params;
		protected $dataView;
		protected $conf;

		function __construct($params, $dataView=null){
			$this->dataView=$dataView;
			$this->params=$params;
			$this->conf=Registry::getInstance();
		}
		function ajax($output){
			ob_clean(); //per netejar el navegador
			if(is_array($output)){
				echo json_encode($output);
			}
		}

	}