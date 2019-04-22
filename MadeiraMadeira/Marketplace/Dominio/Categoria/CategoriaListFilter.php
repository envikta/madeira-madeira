<?php

namespace MadeiraMadeira\Marketplace\Dominio\Categoria;

use \MadeiraMadeira\Marketplace\Dominio;

/**
 * Description of CategoriaListFilter
 *
 * @author Gabriel Cury
 */
class CategoriaListFilter extends Dominio\ListFilter
{

    protected $nome;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}
