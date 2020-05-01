<?php
declare(strict_types=1);
namespace App\Controller;

use Cake\ORM\TableRegistry;

class MyflowersController extends AppController
{
    public function show()
    {
        $flowers = TableRegistry::getTableLocator()->get('Flowers');    
        
        $query = $flowers->find("all",[
            "contain" => ["Occasions"]
        ]);								    // $query è un Cake\ORM\Query
 
 
 
        $this->set('fiori', $query);

 


    }
}