<?php

namespace Model;

class Categoria extends ActiveRecord {
    protected static $tabla = 'categorias';
    protected static $columnasDB = ['id', 'name',];

    public $id;
    public $name;
}