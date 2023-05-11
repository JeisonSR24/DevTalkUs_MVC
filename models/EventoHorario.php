<?php

namespace Model;

class EventoHorario extends ActiveRecord {
    protected static $tabla = 'eventos';
    protected static $columnasDB = ['id', 'dia_id', 'categoria_id', 'hora_id'];

    public $id;
    public $dia_id;
    public $categoria_id;
    public $hora_id;
}