<?php

namespace erpCore\Contracts\Repositories;

use erpCore\Contracts\RepositoryInterface;

interface UnidadeMedidaFatorSinonimoRepository extends RepositoryInterface
{
    /**
     * Retorna uma sininimo de fator de unidade de medida pelo simbolo
     *
     * @param string $simbolo
     * @return mixed
     */
    public function getBySimbolo($simbolo);
}