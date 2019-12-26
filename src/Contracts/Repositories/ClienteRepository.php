<?php

namespace erp-core\Contracts\Repositories;

use erp-core\Contracts\RepositoryInterface;

interface ClienteRepository extends RepositoryInterface
{
    /**
     * Retorna um Cliente pelo ID da Pessoa
     *
     * @param int $id
     * @return mixed
     */
    public function getByPessoaId($id);

    /**
     * Aplica condição $like no repositório
     *
     * @param null $like
     * @return ClienteRepository
     */
    public function whereLike($like = null);
}