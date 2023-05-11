<?php

namespace Model;

class Dia extends ActiveRecord {
    protected static $tabla = 'dias';
    protected static $columnasDB = ['id', 'name',];

    public $id;
    public $name;
}