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
        return DB::select('select atividades.codigo as codigo, atividades.nome as nome,
                    posicaos.posicao as posicao, posicaos.pontuacao as pontuacao, equipes.codigo as equipe_codigo, equipes.tema as tema
                    from atividades
                    inner join posicaos
                    on atividades.codigo = posicaos.atividade_codigo
                    inner join classificacaos
                    on posicaos.posicao = classificacaos.posicoes_posicao and posicaos.atividade_codigo = classificacaos.posicoes_atividade_codigo
                    inner join equipes
                    on equipes.codigo = classificacaos.equipe_codigo
                    order by codigo desc');
    }

    public static function total()
    {
        return DB::select('select sum(posicaos.pontuacao) as pontuacao, 
                           equipes.codigo as equipe_codigo, equipes.tema as tema 
                           from atividades 
                           inner join posicaos on atividades.codigo = posicaos.atividade_codigo 
                           inner join classificacaos on posicaos.posicao = classificacaos.posicoes_posicao 
                           and posicaos.atividade_codigo = classificacaos.posicoes_atividade_codigo 
                           inner join equipes on equipes.codigo = classificacaos.equipe_codigo 
                           group by equipe_codigo order by sum(posicaos.pontuacao) desc');
    }
}