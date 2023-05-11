<?php

namespace Model;

class Ponente extends ActiveRecord {
    protected static $tabla = 'ponentes';
    protected static $columnasDB = ['id', 'name', 'lastname', 'city', 'country', 'image', 'tags', 'socials'];
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? '';
        $this->lastname = $args['lastname'] ?? '';
        $this->city = $args['city'] ?? '';
        $this->country = $args['country'] ?? '';
        $this->image = $args['image'] ?? '';
        $this->tags = $args['tags'] ?? '';
        $this->socials = $args['socials'] ?? '';
    }

    public function validar() {
        if(!$this->name) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->lastname) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->city) {
            self::$alertas['error'][] = 'El Campo Ciudad es Obligatorio';
        }
        if(!$this->country) {
            self::$alertas['error'][] = 'El Campo País es Obligatorio';
        }
        if(!$this->image) {
            self::$alertas['error'][] = 'La imagen es obligatoria';
        }
        if(!$this->tags) {
            self::$alertas['error'][] = 'El Campo áreas es obligatorio';
        }
    
        return self::$alertas;
    }
}