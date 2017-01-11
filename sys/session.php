<?php
	namespace X\Sys;

	class Session{
		static function init(){ //inici de sessio
			session_start();
			self::set('id', session_id());
		}

		static function set($key, $value){
			if(!array_key_exists($key, $_SESSION)){
				$_SESSION[$key]=$value;
			}
		}
		//ALTRES METODES DE SESSION PER MES INFORMACIO O ELIMINAR LA SESIO
		static function get(){
			if(self::exists($key)){
				return $_SESSION[$key];
			}else{
				return null;
			}
		}

		static function exists($key){
			if(array_key_exists($key, $_SESSION)){
				return true;
			}else{
				return false;
			}
		}

		static function del($key){
			if(self::exists($key)){
				unset($_SESSION[$key]);
			}
		}

		static function destroy($key){
			session_destroy();
		}
	}