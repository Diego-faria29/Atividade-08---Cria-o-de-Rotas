<?php

namespace App;

use UNIS\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        // definicao das rotas do app

        $taskRoutes['home'] = [
            'route' => '/',
            'controller' => 'index',
            'action' => 'index'
         ];
 
         $taskRoutes['add'] = [
            'route' => '/add',
            'controller' => 'index',
            'action' => 'add'	
         ];

         $taskRoutes['delete'] = [
            'route' => '/delete',
            'controller' => 'index',
            'action' => 'delete'	
         ];

 
         $this->setRoutes($taskRoutes);
        
    }
}

//tasks.test/ [home]
//tasks.test/usuario/add
//tasks.test/usuario/update