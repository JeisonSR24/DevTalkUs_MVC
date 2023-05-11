<?php

namespace Model;

class Hora extends ActiveRecord {
    protected static $tabla = 'horas';
    protected static $columnasDB = ['id', 'hour',];

    public $id;
    public $hour;
}