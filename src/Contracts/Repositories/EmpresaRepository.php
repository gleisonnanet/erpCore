<?php

namespace erpcore\Contracts\Repositories;

use erpcore\Contracts\RepositoryInterface;

interface EmpresaRepository extends RepositoryInterface
{
    /**
     * Retorna uma Empresa pelo ID da Pessoa
     *
     * @param int $id
     * @return mixed
     */
    public function getByPessoaId($id);

    /**
     * Retorna o primeira empresa do repositorio
     *
     * @return mixed
     */
    public function getFirst();
}