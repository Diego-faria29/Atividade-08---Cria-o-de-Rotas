<?php

namespace App\Models;

use UNIS\DB\Table;

class Task extends Table
{
    protected $table = "tasks";

    public function changeCompleted($id)
    {
        $task = parent::find($id);
        $task ['complete'] = $this->isComplete($task['complete']) ? 0 : 1;
        array_push($task, 'statusChanged');

        parent::update($task, $id);
    }
    private function isComplete($taskStatus)
    {
        if ($taskStatus == 1){
            return true;
        }
        return false;
    }

    public function changeSize($id)
    {
        $task = parent::find($id);
        $task ['priority'] = $this->isPriority($task['priority']);
        array_push($task, 'statusChanged');

        parent::update($task, $id);
    }
    private function isPriority($taskStatus)
    {
        if ($taskStatus == "Pequeno"){
            return "Médio";
        }
        elseif  ($taskStatus == "Médio")
        {
            return "Grande";
        }
        else {
            return "Pequeno";
        }
    }

}