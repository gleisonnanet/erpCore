<?php

namespace erp-core\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erp-core\Ordination\OrdinationTrait;

class Fornecedor extends Model
{
    use OrdinationTrait;

    protected $fillable = ['id', 'pessoa_id', 'empresa_id', 'inscricao_estadual', 'inscricao_municipal'];

    /*
     * Belong To Pessoa
     */
    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}
