<?php
declare(strict_types=1);
namespace App\Controller;

use Cake\ORM\TableRegistry;

class MyflowersController extends AppController
{
    public function show()
    {
        $flowers = TableRegistry::getTableLocator()->get('Flowers');    
    //    $occasions = TableRegistry::getTableLocator()->get('occasions');
        
        $query = $flowers->find("all",[
            "contain" => ["Occasions"]
        ]);								    // $query è un Cake\ORM\Query

       // $query->contain(["Occasions"]);
        debug($query);
        foreach ($query as $row) {
            echo "<pre>";
            debug($row);

        }

        /*
        $query = $occasions->find("all",[
            'join'=>[
                'table'=> 'flowers',
                'alias' => 'flowers',
                'conditions'=>  'flowers.occasion_id = occasions.id'
                ],
        ]);								    // $query è un Cake\ORM\Query

        debug($query);

        $query->contain(["Flowers"]);
        foreach ($query as $row) {
            echo "<pre>";
            debug($row);

        }
*/
          $this->autoRender=false;


    }
}