<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrecoCriptomoeda>
 */
class PrecoCriptomoedaFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'criptomoeda' => $this->faker->randomElement($this->gerarNomesDasCriptomoedas()),
            'preco_lance' => $this->faker->randomFloat(8, 0.00000100, 10000000)
        ];
    }

    /**
     * Retornar um array com os "símbolos" das criptomoedas
     * @return array
     */
    public function gerarNomesDasCriptomoedas(): array
    {
        return [
            "BTCUSDT",
            "REEFUSDT",
            "TRXUSDT",
            "SKLUSDT",
            "TRXBUSD",
            "QTUMUSDT",
            "IOTXUSDT",
            "ONTUSDT",
            "KSMUSDT",
            "AKROUSDT",
            "ICXUSDT",
            "1000XECUSDT",
            "CELOUSDT",
            "SXPUSDT",
            "LINKUSDT",
            "DGBUSDT",
            "DARUSDT",
            "RSRUSDT",
            "COMPUSDT",
            "ICPUSDT",
            "SUSHIUSDT",
            "YFIUSDT",
            "BNBUSDT",
            "NKNUSDT",
            "DOGEBUSD",
            "LPTUSDT",
            "TLMUSDT",
            "DEFIUSDT",
            "ALICEUSDT",
            "DENTUSDT",
            "CTKUSDT",
            "OCEANUSDT",
            "FTMBUSD",
            "ATOMUSDT",
            "FTMUSDT",
            "MTLUSDT",
            "ENSUSDT",
            "BTCDOMUSDT",
            "BLZUSDT",
            "FTTBUSD",
            "XRPBUSD",
            "GTCUSDT",
            "BTSUSDT",
            "ANTUSDT",
            "ENJUSDT",
            "BATUSDT",
            "DOGEUSDT",
            "TRBUSDT",
            "CVCUSDT",
            "DASHUSDT",
            "ARPAUSDT",
            "BNBBUSD",
            "ONEUSDT",
            "RLCUSDT",
            "IOTAUSDT",
            "AVAXBUSD",
            "WOOUSDT",
            "EOSUSDT",
            "ALPHAUSDT",
            "GMTBUSD",
            "MASKUSDT",
            "SFPUSDT",
            "IMXUSDT",
            "CHZUSDT",
            "BTCUSDT_220624",
            "RUNEUSDT",
            "LTCUSDT",
            "DODOBUSD",
            "STMXUSDT",
            "SOLUSDT",
            "ATAUSDT",
            "AXSUSDT",
            "RENUSDT",
            "BALUSDT",
            "BELUSDT",
            "XMRUSDT",
            "APEBUSD",
            "UNFIUSDT",
            "NEARBUSD",
            "ZRXUSDT",
            "RVNUSDT",
            "ETHUSDT",
            "CHRUSDT",
            "DUSKUSDT",
            "CTSIUSDT",
            "ARUSDT",
            "COTIUSDT",
            "BTCSTUSDT",
            "XTZUSDT",
            "BCHUSDT",
            "SCUSDT",
            "APEUSDT",
            "ROSEUSDT",
            "CRVUSDT",
            "WAVESUSDT",
            "ZILUSDT",
            "1INCHUSDT",
            "AUDIOUSDT",
            "HOTUSDT",
            "AAVEUSDT",
            "SANDUSDT",
            "EGLDUSDT",
            "FTTUSDT",
            "ETHBUSD",
            "FLMUSDT",
            "JASMYUSDT",
            "BNXUSDT",
            "ADABUSD",
            "MKRUSDT",
            "GALAUSDT",
            "GMTUSDT",
            "SOLBUSD",
            "VETUSDT",
            "FLOWUSDT",
            "API3USDT",
            "FILUSDT",
            "1000SHIBUSDT",
            "OMGUSDT",
            "IOSTUSDT",
            "KLAYUSDT",
            "AVAXUSDT",
            "ANKRUSDT",
            "GALUSDT",
            "BNTUSDT",
            "LITUSDT",
            "NEARUSDT",
            "ETHUSDT_220624",
            "KNCUSDT",
            "ADAUSDT",
            "BTCBUSD",
            "KAVAUSDT",
            "GALABUSD",
            "SNXUSDT",
            "MANAUSDT",
            "DODOUSDT",
            "CELRUSDT",
            "DOTUSDT",
            "DYDXUSDT",
            "BANDUSDT",
            "STORJUSDT",
            "RAYUSDT",
            "PEOPLEUSDT",
            "ETCUSDT",
            "BAKEUSDT",
            "GALBUSD",
            "TOMOUSDT",
            "UNIUSDT",
            "THETAUSDT",
            "LRCUSDT",
            "GRTUSDT",
            "XEMUSDT",
            "XLMUSDT",
            "LINAUSDT",
            "HNTUSDT",
            "ALGOUSDT",
            "HBARUSDT",
            "ZECUSDT",
            "OGNUSDT",
            "ZENUSDT",
            "NEOUSDT",
            "SRMUSDT",
            "MATICUSDT",
            "XRPUSDT",
            "C98USDT"
        ];
    }
}
