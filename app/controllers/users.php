<?php

namespace X\App\Controllers;

   use X\Sys\Controller;


   class Users extends Controller{
   		protected $model;
   		protected $view;
   		protected $params;

   		public function __construct($params){
   			parent::__construct($params); //esto es un super de java
   			$this->model=new \X\App\Models\mHome(); //podremos poner models
   			$this->view =new \X\App\Views\vHome();
   		}

   		function home(){
   			echo 'USERS!!';
   		}
   }