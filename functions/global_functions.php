<?php

	function chk_array ( $array, $key ) {
		// Verifica se a chave existe no array
		if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
			// Retorna o valor da chave
			return $array[ $key ];
		}
		
		// Retorna nulo por padrão
		return null;
	}

	function return_array_files( $file_post ){

		$file_ary = array();
		$file_count = count($file_post['name']);
		$file_keys = array_keys($file_post);

		for ($i=0; $i<$file_count; $i++) {
			foreach ($file_keys as $key) {
		    	$file_ary[$i][$key] = $file_post[$key][$i];
		    }
		}

		return $file_ary;

	}

	function debug_to_console( $data, $label = 'Debug' ) {

		$output = "<script>console.log('" . $label . " : " . $data . "');</script>";

	    echo $output;

	}

	function getView($view){

		require ABSPATH . '/view/include/template-header.php';
		require ABSPATH . '/view/usuario/'.$view.'.php';
		require ABSPATH . '/view/include/template-footer.php';
	}
				

	function autoload($class_name) {
		
		$file = $class_name . '.php';

		$dir = dirname( dirname( __FILE__ ) );
		
		if ( file_exists( $dir.'/system/'.$file ) ) {
			
			require_once( $dir.'/system/'.$file);
		}elseif ( file_exists( $dir.'/libs/'.$file )) {
			
			require_once( $dir.'/libs/'.$file);
		}
		
	}

	spl_autoload_register('autoload');
?>