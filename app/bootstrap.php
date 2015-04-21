<?php
define("ROOT_PATH", dirname(dirname(__FILE__)));
define("CONFIG_PATH", dirname(__FILE__) . "/config");
define("HELPERS_PATH", dirname(__FILE__) . "/helpers");
define("MODELS_PATH", dirname(__FILE__) . "/models");

function requirOnceAllFilesInPath($path){
    $files = scandir($path);
    foreach($files as $file){
        $fullPath = $path . '/' . $file;
        if(is_file($fullPath)){
            require_once($fullPath);
        }
    }
}

function loadConfig(){
    requirOnceAllFilesInPath(CONFIG_PATH);
}
require_once ROOT_PATH . '/vendor/autoload.php';
loadConfig();

function loadClass($path, $className){
    $classFullPath = $path . '/' . $className . '.php';
    if(file_exists($classFullPath)) {
        require_once($classFullPath);
        return true;
    }
}

function loadHelper($helperName){
    return loadClass(HELPERS_PATH, $helperName);
}

function loadModel($modelName){
    return loadClass(MODELS_PATH, $modelName);
}

spl_autoload_register(function ($class) {
    return loadHelper($class) || loadModel($class);
});