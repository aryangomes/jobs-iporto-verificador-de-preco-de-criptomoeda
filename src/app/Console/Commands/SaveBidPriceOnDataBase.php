<?php

namespace App\Console\Commands;

use App\Http\Actions\GuardarPrecoDaCriptomoeda;
use App\Http\Actions\RecuperarPrecoDeUmaCriptomoedaEspecifica;
use App\Http\Actions\RecuperarPrecosDaCriptomoedas;
use Illuminate\Console\Command;

class SaveBidPriceOnDataBase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'c:saveBidPriceOnDataBase {criptomoeda? : Ticket ou símbolo da criptomoeda a ser guardada no banco de dados (Opcional)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Guarda um preço de uma criptomoeda no banco de dados';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $criptomoeda = $this->argument('criptomoeda');

        if (is_null($criptomoeda)) {
            $this->salvarPrecosDasCriptomoedasNoBancoDeDados();
        } else {
            $this->salvarPrecoDeUmaCriptomoedaEspecificaNoBancoDeDados($criptomoeda);
        }

        return 0;
    }

    private function salvarPrecosDasCriptomoedasNoBancoDeDados()
    {
        $recuperarPrecosDasCriptomoedas = new RecuperarPrecosDaCriptomoedas();

        $this->info('Cadastrando novos preços...');

        $this->info('Por favor, aguarde...');

        $this->withProgressBar($recuperarPrecosDasCriptomoedas(), function ($precoCriptomoeda) {

            $dadosParaCadastrarPrecoCriptomoeda = [
                'criptomoeda' => $precoCriptomoeda['symbol'],
                'preco_lance' => $precoCriptomoeda['price'],
            ];

            $this->cadastrarPrecoDaCriptomoedaNoBancoDeDados($dadosParaCadastrarPrecoCriptomoeda);
        });
        $this->newLine();

        $this->info('Novos preços cadastrados com sucesso!');
    }

    private function salvarPrecoDeUmaCriptomoedaEspecificaNoBancoDeDados(string $criptomoeda)
    {
        $recuperarPrecoDaCriptomoeda = new RecuperarPrecoDeUmaCriptomoedaEspecifica();

        $dadosRecuperadosDoPrecoCriptomoeda = $recuperarPrecoDaCriptomoeda($criptomoeda);

        if (is_null($dadosRecuperadosDoPrecoCriptomoeda)) {
            $this->newLine();

            $this->error(__('comandos.criptomoeda_invalida', ['criptomoeda' => $criptomoeda]));
        } else {
            $dadosParaCadastrarPrecoCriptomoeda = [
                'criptomoeda' => $dadosRecuperadosDoPrecoCriptomoeda->get('symbol'),
                'preco_lance' => $dadosRecuperadosDoPrecoCriptomoeda->get('price'),
            ];

            $novoPrecoDaCriptomoeda = $this->cadastrarPrecoDaCriptomoedaNoBancoDeDados($dadosParaCadastrarPrecoCriptomoeda);


            $mensagemDeRespostaParaComando = __('comandos.preco_recente', [
                'criptomoeda' => $novoPrecoDaCriptomoeda->criptomoeda,
                'preco_lance' => $novoPrecoDaCriptomoeda->preco_lance,
            ]);

            $this->newLine();

            $this->info('Novo preço cadastrado com sucesso!');

            $this->info($mensagemDeRespostaParaComando);
        }
    }

    public function cadastrarPrecoDaCriptomoedaNoBancoDeDados(array $dadosParaCadastrarPrecoCriptomoeda)
    {

        $cadastrarNovoPrecoDaCriptomoeda = new GuardarPrecoDaCriptomoeda();

        $novoPrecoDaCriptomoeda = $cadastrarNovoPrecoDaCriptomoeda($dadosParaCadastrarPrecoCriptomoeda);

        return $novoPrecoDaCriptomoeda;
    }
}
