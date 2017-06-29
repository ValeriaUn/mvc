<?php

namespace app\core;

abstract class Controller
{
    private $path = __DIR__ . '/../views/';

    protected function render($viewName, array $data = [])
    {
        
        $path = $this->path . $viewName . '.php';

        if (!file_exists($path)) {

            throw new \Exception('Template file ' . $path . ' does not exists');

        }

        extract($data);
        ob_start();
        include($path);
        return ob_get_clean();

    }
}