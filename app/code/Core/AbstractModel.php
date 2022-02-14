<?php

namespace Core;

use Helper\DBHelper;

class AbstractModel
{
    protected $data;

    protected $table;

    protected $id;

    public function getId()
    {
        return $this->id;
    }


    public function save()
    {
        $this->assignData();
        if (!isset($this->id)) {
            $this->create();
        } else {
            $this->update();
        }
    }

    protected function update()
    {
        $db = new DBHelper();
        $db->update($this->table, $this->data)->where('id', $this->id)->exec();
    }

    protected function create()
    {
        $db = new DBHelper();
        $db->insert($this->table, $this->data)->exec();
    }

    protected function assignData()
    {
        $this->data = [];
    }

    public function delete()
    {
        $db = new DBHelper();
        $db->delete()->from($this->table)->where('id', $this->id)->exec();
    }


}
