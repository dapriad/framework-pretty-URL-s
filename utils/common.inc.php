<?php
    function loadView($rutaVista = '', $templateName = '', $arrPassValue = '') {
		$view_path = $rutaVista . $templateName;
		$arrData = '';
		
		if (file_exists($view_path)) {
			if (isset($arrPassValue))
				$arrData = $arrPassValue;
			include_once($view_path);
		} else {
			$log = Log::getInstance();
			$log->add_log_general("error loadView", $_GET['module'], "response ".http_response_code()); //$text, $controller, $function
			$log->add_log_user("error loadView", "", $_GET['module'], "response ".http_response_code()); //$msg, $username = "", $controller, $function
	
			$result = response_code(http_response_code());
			$arrData = $result;
			require_once VIEW_PATH_INC_ERROR. $result['code'] .'.php';
			die();
		}
	}
	
    //idem loadmodel a loadview quant a fer un log i pintar template_error
    function loadModel($model_path, $model_name, $function, $arrArgument = '') {
        $model = $model_path . $model_name . '.class.singleton.php';
        
        if (file_exists($model)) {
            include_once($model);

            $modelClass = $model_name;

            if (!method_exists($modelClass, $function)){
                throw new Exception();
            }

            $obj = $modelClass::getInstance();
 
            if (isset($arrArgument)) {
                return $obj->$function($arrArgument);
            }
        } else {
            throw new Exception();
        }
    }
    