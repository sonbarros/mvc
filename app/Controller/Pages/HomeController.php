<?php

namespace App\Controller\Pages;
use \App\Utils\View;

class HomeController extends PageController
{
    /*
     * Método responsável por retornar o conteúdo (view) da nossa home
     * @return String
     */
    public static function getHome()
    {
        $content = View::render('pages/home', [
            'name' => 'Jesus Cristo é o Senhor',
            'description' => 'O Senhor é o meu pastor e nada me faltará'
        ]);

        // Retorna a view da página
        return parent::getPage('MDEV - CANAL - HOME', $content);
    }

}
