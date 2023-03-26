<?php

namespace App\Table;

use PDO;

use Reald\Core\Debug;
use Reald\Orm\Table;

class Test01Table extends Table{

    public $tableName = "test01";
    public $createDateColumn = "create_at";
    public $updateDateColumn = "update_at";

    public function handleSelectBefore($std){

//        $std->where("id","=",2);

    }

    public function handleSelectAfter($response){
/*
        foreach($response->out() as $r_){

            $r_->ok="OK!";
        }

        return $response;
        */
    }

    public function handleInsertBefore($insertData){

    }
    
    public function handleInsertAfter($std){

    }

    public function handleUpdateBefore($updateData){

    }

    
    public function handleUpdateAfter($std){

    }
}