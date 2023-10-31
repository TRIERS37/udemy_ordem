<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Usuario extends Entity {

    protected $dates = ['criado_em', 'atualizado_em', 'deletado_em'];

    public function original() {
        return $this->original;
    }

    public function atributos() {
        return $this->attributes;
    }
}
