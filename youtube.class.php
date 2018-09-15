<?php 
	/**
	*	Classe com funções úteis para Youtube
	*	Author: Gabriel Azuaga Barbosa <gabrielbarbosaweb7@gmail.com>
	*	Github: https://github.com/gabrielweb7
	*	Site pessoal: http://gabrieldaluz.com.br
	*	Version: 1.0.0
	*/
	class youtube {
		public static function getIdFromURL($url)
		{
			if($url) { 
				$url_string = parse_url($url, PHP_URL_QUERY);
				parse_str($url_string, $args);
				return isset($args['v']) ? $args['v'] : false;
			}
			return false;
		}
	}
?>