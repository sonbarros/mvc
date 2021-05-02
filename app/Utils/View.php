<?php

namespace App\Utils;

class View
{   
    /* 
     * Método responsável por retorna o conteúdo de uma view
     * @param String $view
     * @return String
     */
    private static function getContentView($view)
    {
        $file = __DIR__ .'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }
     
    /*
     * Método responsável por retornar o conteúdo redenrizado de uma view
     * @param String $view
     * @param Array $vars
     * @return String
     */
    public static function render($view, $vars = [])
    {
        // CONTEÚDO DA VIEW
        $contentView = self::getContentView($view);
        
        // CHAVES DO ARRAY DE VARIÁVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{' . $item . '}}';
        }, $keys);
        
        
        // RETORNA O CONTEÚDO REDENRIZADO
        return str_replace($keys, array_values($vars), $contentView);
    }
}


