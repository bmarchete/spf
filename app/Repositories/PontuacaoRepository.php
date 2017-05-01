<?php
/**
 * Created by PhpStorm.
 * User: binho
 * Date: 04/05/2016
 * Time: 17:05
 */

namespace App\Repositories;


use Illuminate\Support\Facades\DB;

class PontuacaoRepository
{

    public static function pontuacaoEquipe($id)
    {
       return DB::select(' select atividade.codigo as codigo, atividade.nome as nome,
posicoes.posicao as posicao, posicoes.pontuacao as pontuacao, equipe.codigo as equipe_codigo, equipe.tema as tema
 from atividade
inner join posicoes
on atividade.codigo = posicoes.atividade_codigo
inner join classificacao
on posicoes.posicao = classificacao.posicoes_posicao and posicoes.atividade_codigo = classificacao.posicoes_atividade_codigo
inner join equipe
on equipe.codigo = classificacao.equipe_codigo
where equipe_codigo = ?', [$id]);
    }

    public  static function pontuacaoGeral()
    {
        return DB::select('select atividade.codigo as codigo, atividade.nome as nome,
posicoes.posicao as posicao, posicoes.pontuacao as pontuacao, equipe.codigo as equipe_codigo, equipe.tema as tema
 from atividade
inner join posicoes
on atividade.codigo = posicoes.atividade_codigo
inner join classificacao
on posicoes.posicao = classificacao.posicoes_posicao and posicoes.atividade_codigo = classificacao.posicoes_atividade_codigo
inner join equipe
on equipe.codigo = classificacao.equipe_codigo
order by codigo desc');
    }

    public static function total()
    {
        return DB::select('select sum(posicoes.pontuacao) as pontuacao, equipe.codigo as equipe_codigo, equipe.tema as tema
 from atividade
inner join posicoes
on atividade.codigo = posicoes.atividade_codigo
inner join classificacao
on posicoes.posicao = classificacao.posicoes_posicao and posicoes.atividade_codigo = classificacao.posicoes_atividade_codigo
inner join equipe
on equipe.codigo = classificacao.equipe_codigo
group by equipe_codigo
order by sum(posicoes.pontuacao) desc');
    }
}