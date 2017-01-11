<?php
   //la segona fase comença amb els controladors en MVC
   namespace X\App\Controllers;

   use X\Sys\Controller;


   class Home extends Controller{ //HOME extendexi del controlador principal del systema qui registra les instancies despres fent trucades a la clase Registry(3a fase)

      //HOME es un exemple de controlador de un model mhome
      //que s'utilitza despres a la vista qui sera criada a la template en mode cascada/reversiu per efectuar canvis al html (4 fase)
   		public function __construct($params){
   			parent::__construct($params);
            $this->dataView=array('title'=>'Titulo', 'name'=>'ALEX');
   			$this->model=new \X\App\Models\mHome();
   			$this->view =new \X\App\Views\vHome($this->dataView);
            //var_dump($this->view);
   		}

   		function home(){
   			//echo 'HOME!!';

   		}
   }
