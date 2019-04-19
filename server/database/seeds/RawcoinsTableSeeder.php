<?php

use Illuminate\Database\Seeder;

class RawcoinsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rawcoins')->delete();
        
        \DB::table('rawcoins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bitcoin',
                'symbol' => 'BTC',
                'active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Litecoin',
                'symbol' => 'LTC',
                'active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dogecoin',
                'symbol' => 'DOGE',
                'active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Vertcoin',
                'symbol' => 'VTC',
                'active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ReddCoin',
                'symbol' => 'RDD',
                'active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'NXT',
                'symbol' => 'NXT',
                'active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'DarkCoin',
                'symbol' => 'DRK',
                'active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'PotCoin',
                'symbol' => 'POT',
                'active' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'BlackCoin',
                'symbol' => 'BC',
                'active' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'MyriadCoin',
                'symbol' => 'MYR',
                'active' => 1,
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'OctoCoin',
                'symbol' => '888',
                'active' => 1,
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'ElectronicGulden',
                'symbol' => 'EFL',
                'active' => 1,
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'DimeCoin',
                'symbol' => 'DIME',
                'active' => 1,
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'RotoCoin',
                'symbol' => 'RT2',
                'active' => 0,
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'SolarCoin',
                'symbol' => 'SLR',
                'active' => 1,
            ),
            15 => 
            array (
                'id' => 21,
                'name' => 'FlutterCoin ',
                'symbol' => 'FLT',
                'active' => 0,
            ),
            16 => 
            array (
                'id' => 23,
                'name' => 'CryptoEscudoCoin',
                'symbol' => 'CESC',
                'active' => 1,
            ),
            17 => 
            array (
                'id' => 24,
                'name' => 'PesetaCoin ',
                'symbol' => 'PTC',
                'active' => 1,
            ),
            18 => 
            array (
                'id' => 25,
                'name' => 'IsraelCoin ',
                'symbol' => 'ISR',
                'active' => 1,
            ),
            19 => 
            array (
                'id' => 26,
                'name' => 'CleanWaterCoin ',
                'symbol' => 'WATER',
                'active' => 1,
            ),
            20 => 
            array (
                'id' => 29,
                'name' => 'GuldenCoin',
                'symbol' => 'NLG',
                'active' => 1,
            ),
            21 => 
            array (
                'id' => 30,
                'name' => 'RubyCoin',
                'symbol' => 'RBY',
                'active' => 1,
            ),
            22 => 
            array (
                'id' => 31,
                'name' => 'GiveCoin',
                'symbol' => 'GIVE',
                'active' => 1,
            ),
            23 => 
            array (
                'id' => 32,
                'name' => 'WhiteCoin',
                'symbol' => 'WC',
                'active' => 1,
            ),
            24 => 
            array (
                'id' => 34,
                'name' => 'MonaCoin',
                'symbol' => 'MONA',
                'active' => 1,
            ),
            25 => 
            array (
                'id' => 36,
                'name' => 'NobleCoin',
                'symbol' => 'NOBL',
                'active' => 1,
            ),
            26 => 
            array (
                'id' => 37,
                'name' => 'CinniCoin',
                'symbol' => 'CINNI',
                'active' => 0,
            ),
            27 => 
            array (
                'id' => 38,
                'name' => 'BitStarCoin',
                'symbol' => 'BITS',
                'active' => 1,
            ),
            28 => 
            array (
                'id' => 39,
                'name' => 'BlueCoin',
                'symbol' => 'BLU',
                'active' => 1,
            ),
            29 => 
            array (
                'id' => 40,
                'name' => 'OrangeCoin',
                'symbol' => 'OC',
                'active' => 1,
            ),
            30 => 
            array (
                'id' => 42,
                'name' => 'HempCoin',
                'symbol' => 'THC',
                'active' => 1,
            ),
            31 => 
            array (
                'id' => 46,
                'name' => 'EnergyCoin',
                'symbol' => 'ENRG',
                'active' => 1,
            ),
            32 => 
            array (
                'id' => 47,
                'name' => 'ShibeCoin',
                'symbol' => 'SHIBE',
                'active' => 1,
            ),
            33 => 
            array (
                'id' => 49,
                'name' => 'SaffronCoin',
                'symbol' => 'SFR',
                'active' => 1,
            ),
            34 => 
            array (
                'id' => 53,
                'name' => 'LibertyCoin',
                'symbol' => 'XLB',
                'active' => 0,
            ),
            35 => 
            array (
                'id' => 55,
                'name' => 'NautilusCoin',
                'symbol' => 'NAUT',
                'active' => 1,
            ),
            36 => 
            array (
                'id' => 56,
                'name' => 'VeriCoin',
                'symbol' => 'VRC',
                'active' => 1,
            ),
            37 => 
            array (
                'id' => 57,
                'name' => 'CureCoin',
                'symbol' => 'CURE',
                'active' => 1,
            ),
            38 => 
            array (
                'id' => 60,
                'name' => 'UroCoin',
                'symbol' => 'URO',
                'active' => 1,
            ),
            39 => 
            array (
                'id' => 62,
                'name' => 'SyncCoin',
                'symbol' => 'SYNC',
                'active' => 1,
            ),
            40 => 
            array (
                'id' => 64,
                'name' => 'BlakeCoin',
                'symbol' => 'BLC',
                'active' => 1,
            ),
            41 => 
            array (
                'id' => 66,
                'name' => 'StabilitySharesXSI',
                'symbol' => 'XSI',
                'active' => 1,
            ),
            42 => 
            array (
                'id' => 67,
                'name' => 'XCurrency',
                'symbol' => 'XC',
                'active' => 1,
            ),
            43 => 
            array (
                'id' => 68,
                'name' => 'Dirac',
                'symbol' => 'XDQ',
                'active' => 1,
            ),
            44 => 
            array (
                'id' => 71,
                'name' => 'GraniteCoin',
                'symbol' => 'GRN',
                'active' => 1,
            ),
            45 => 
            array (
                'id' => 73,
                'name' => 'SuperCoin',
                'symbol' => 'SUPER',
                'active' => 1,
            ),
            46 => 
            array (
                'id' => 74,
                'name' => 'JackpotCoin ',
                'symbol' => 'JPC',
                'active' => 1,
            ),
            47 => 
            array (
                'id' => 76,
                'name' => 'Maieuticoin',
                'symbol' => 'MMXIV',
                'active' => 1,
            ),
            48 => 
            array (
                'id' => 77,
                'name' => 'BoostCoin ',
                'symbol' => 'BOST',
                'active' => 0,
            ),
            49 => 
            array (
                'id' => 78,
                'name' => 'CAIx',
                'symbol' => 'CAIX',
                'active' => 1,
            ),
            50 => 
            array (
                'id' => 81,
                'name' => 'Boolberry',
                'symbol' => 'BBR',
                'active' => 1,
            ),
            51 => 
            array (
                'id' => 83,
                'name' => 'Hyper',
                'symbol' => 'HYPER',
                'active' => 1,
            ),
            52 => 
            array (
                'id' => 84,
                'name' => 'CannaCoin',
                'symbol' => 'CCN',
                'active' => 1,
            ),
            53 => 
            array (
                'id' => 90,
                'name' => 'KryptKoin',
                'symbol' => 'KTK',
                'active' => 1,
            ),
            54 => 
            array (
                'id' => 91,
                'name' => 'Mugatu',
                'symbol' => 'MUGA',
                'active' => 1,
            ),
            55 => 
            array (
                'id' => 93,
                'name' => 'VootCoin',
                'symbol' => 'VOOT',
                'active' => 1,
            ),
            56 => 
            array (
                'id' => 94,
                'name' => 'BankNote',
                'symbol' => 'BN',
                'active' => 1,
            ),
            57 => 
            array (
                'id' => 95,
                'name' => 'Monero',
                'symbol' => 'XMR',
                'active' => 1,
            ),
            58 => 
            array (
                'id' => 96,
                'name' => 'CloakCoin',
                'symbol' => 'CLOAK',
                'active' => 1,
            ),
            59 => 
            array (
                'id' => 100,
                'name' => 'TalkCoin',
                'symbol' => 'TAC',
                'active' => 1,
            ),
            60 => 
            array (
                'id' => 103,
                'name' => 'CHCCoin',
                'symbol' => 'CHCC',
                'active' => 1,
            ),
            61 => 
            array (
                'id' => 107,
                'name' => 'GlyphCoin',
                'symbol' => 'GLYPH',
                'active' => 0,
            ),
            62 => 
            array (
                'id' => 109,
                'name' => 'CoolCoin',
                'symbol' => 'COOL',
                'active' => 0,
            ),
            63 => 
            array (
                'id' => 110,
                'name' => 'BurnerCoin',
                'symbol' => 'BURN',
                'active' => 1,
            ),
            64 => 
            array (
                'id' => 112,
                'name' => 'CryptCoin',
                'symbol' => 'CRYPT',
                'active' => 1,
            ),
            65 => 
            array (
                'id' => 115,
                'name' => 'StartCoin',
                'symbol' => 'START',
                'active' => 1,
            ),
            66 => 
            array (
                'id' => 116,
                'name' => 'FractalCoin',
                'symbol' => 'FRAC',
                'active' => 0,
            ),
            67 => 
            array (
                'id' => 119,
                'name' => 'KoreCoin',
                'symbol' => 'KORE',
                'active' => 1,
            ),
            68 => 
            array (
                'id' => 122,
                'name' => 'Razor',
                'symbol' => 'RZR',
                'active' => 1,
            ),
            69 => 
            array (
                'id' => 123,
                'name' => 'Guerillacoin',
                'symbol' => 'GUE',
                'active' => 0,
            ),
            70 => 
            array (
                'id' => 124,
                'name' => 'DuckNote',
                'symbol' => 'XDN',
                'active' => 1,
            ),
            71 => 
            array (
                'id' => 128,
                'name' => 'Minerals',
                'symbol' => 'MIN',
                'active' => 1,
            ),
            72 => 
            array (
                'id' => 133,
                'name' => 'TechCoin',
                'symbol' => 'TECH',
                'active' => 1,
            ),
            73 => 
            array (
                'id' => 135,
                'name' => 'CoffeeCoin',
                'symbol' => 'CFC2',
                'active' => 1,
            ),
            74 => 
            array (
                'id' => 136,
                'name' => 'GameLeagueCoin',
                'symbol' => 'GML',
                'active' => 1,
            ),
            75 => 
            array (
                'id' => 137,
                'name' => 'TruckCoin',
                'symbol' => 'TRK',
                'active' => 1,
            ),
            76 => 
            array (
                'id' => 139,
                'name' => 'WankCoin',
                'symbol' => 'WKC',
                'active' => 1,
            ),
            77 => 
            array (
                'id' => 143,
                'name' => 'Quatloo',
                'symbol' => 'QTL',
                'active' => 1,
            ),
            78 => 
            array (
                'id' => 144,
                'name' => 'Saturn2Coin',
                'symbol' => 'SAT2',
                'active' => 0,
            ),
            79 => 
            array (
                'id' => 145,
                'name' => 'XXXCoin',
                'symbol' => 'XXX',
                'active' => 1,
            ),
            80 => 
            array (
                'id' => 151,
                'name' => 'AeroCoin',
                'symbol' => 'AERO',
                'active' => 1,
            ),
            81 => 
            array (
                'id' => 156,
                'name' => 'TrustPlus',
                'symbol' => 'TRUST',
                'active' => 1,
            ),
            82 => 
            array (
                'id' => 157,
                'name' => 'BritCoin',
                'symbol' => 'BRIT',
                'active' => 1,
            ),
            83 => 
            array (
                'id' => 158,
                'name' => 'JudgeCoin',
                'symbol' => 'JUDGE',
                'active' => 1,
            ),
            84 => 
            array (
                'id' => 159,
                'name' => 'NavajoCoin',
                'symbol' => 'NAV',
                'active' => 1,
            ),
            85 => 
            array (
                'id' => 160,
                'name' => 'IcebergCoin',
                'symbol' => 'ICB',
                'active' => 0,
            ),
            86 => 
            array (
                'id' => 161,
                'name' => 'FreshCoin',
                'symbol' => 'FRSH',
                'active' => 1,
            ),
            87 => 
            array (
                'id' => 162,
                'name' => 'ShieldCoin',
                'symbol' => 'SHLD',
                'active' => 0,
            ),
            88 => 
            array (
                'id' => 163,
                'name' => 'StealthCoin',
                'symbol' => 'XST',
                'active' => 1,
            ),
            89 => 
            array (
                'id' => 164,
                'name' => 'AegisCoin',
                'symbol' => 'AGS',
                'active' => 0,
            ),
            90 => 
            array (
                'id' => 168,
                'name' => 'ApexCoin',
                'symbol' => 'APEX',
                'active' => 1,
            ),
            91 => 
            array (
                'id' => 171,
                'name' => 'ZetaCoin',
                'symbol' => 'ZET',
                'active' => 1,
            ),
            92 => 
            array (
                'id' => 172,
                'name' => 'BitcoinDark',
                'symbol' => 'BTCD',
                'active' => 1,
            ),
            93 => 
            array (
                'id' => 173,
                'name' => 'PseudoCash',
                'symbol' => 'PSEUD',
                'active' => 0,
            ),
            94 => 
            array (
                'id' => 176,
                'name' => 'KeyCoin',
                'symbol' => 'KEY',
                'active' => 1,
            ),
            95 => 
            array (
                'id' => 178,
                'name' => 'NewUniversalDollar',
                'symbol' => 'NUD',
                'active' => 1,
            ),
            96 => 
            array (
                'id' => 180,
                'name' => 'ViaCoin',
                'symbol' => 'VIA',
                'active' => 1,
            ),
            97 => 
            array (
                'id' => 181,
                'name' => 'Triangles',
                'symbol' => 'TRI',
                'active' => 1,
            ),
            98 => 
            array (
                'id' => 182,
                'name' => 'PlanktonCoin',
                'symbol' => 'FOOD',
                'active' => 0,
            ),
            99 => 
            array (
                'id' => 183,
                'name' => 'ConcealCoin',
                'symbol' => 'CNL',
                'active' => 0,
            ),
            100 => 
            array (
                'id' => 186,
                'name' => 'Pesa',
                'symbol' => 'PES',
                'active' => 1,
            ),
            101 => 
            array (
                'id' => 187,
                'name' => 'IncognitoCoin',
                'symbol' => 'ICG',
                'active' => 1,
            ),
            102 => 
            array (
                'id' => 189,
                'name' => 'Unobtanium',
                'symbol' => 'UNO',
                'active' => 1,
            ),
            103 => 
            array (
                'id' => 192,
                'name' => 'EsportsCoin',
                'symbol' => 'ESC',
                'active' => 1,
            ),
            104 => 
            array (
                'id' => 193,
                'name' => 'DarkCash',
                'symbol' => 'DRKC',
                'active' => 0,
            ),
            105 => 
            array (
                'id' => 198,
                'name' => 'PinkCoin',
                'symbol' => 'PINK',
                'active' => 1,
            ),
            106 => 
            array (
                'id' => 199,
                'name' => 'IOCoin',
                'symbol' => 'IOC',
                'active' => 1,
            ),
            107 => 
            array (
                'id' => 202,
                'name' => 'ShadowCash',
                'symbol' => 'SDC',
                'active' => 1,
            ),
            108 => 
            array (
                'id' => 204,
                'name' => 'RawCoin',
                'symbol' => 'RAW',
                'active' => 1,
            ),
            109 => 
            array (
                'id' => 207,
                'name' => 'MaxCoin',
                'symbol' => 'MAX',
                'active' => 1,
            ),
            110 => 
            array (
                'id' => 208,
                'name' => 'LibrexCoin',
                'symbol' => 'LXC',
                'active' => 1,
            ),
            111 => 
            array (
                'id' => 209,
                'name' => 'BoomCoin',
                'symbol' => 'BOOM',
                'active' => 1,
            ),
            112 => 
            array (
                'id' => 210,
                'name' => 'DobbsCoin',
                'symbol' => 'BOB',
                'active' => 1,
            ),
            113 => 
            array (
                'id' => 215,
                'name' => 'Unattainium',
                'symbol' => 'UNAT',
                'active' => 1,
            ),
            114 => 
            array (
                'id' => 216,
                'name' => 'MultiWalletCoin',
                'symbol' => 'MWC',
                'active' => 1,
            ),
            115 => 
            array (
                'id' => 217,
                'name' => 'CannabisCoin',
                'symbol' => 'CANN',
                'active' => 1,
            ),
            116 => 
            array (
                'id' => 220,
                'name' => 'VaultCoin',
                'symbol' => 'VAULT',
                'active' => 1,
            ),
            117 => 
            array (
                'id' => 224,
                'name' => 'Fuel2Coin',
                'symbol' => 'FC2',
                'active' => 1,
            ),
            118 => 
            array (
                'id' => 225,
                'name' => 'SonicScrewDriver',
                'symbol' => 'SSD',
                'active' => 1,
            ),
            119 => 
            array (
                'id' => 229,
                'name' => 'JoinCoin',
                'symbol' => 'J',
                'active' => 1,
            ),
            120 => 
            array (
                'id' => 230,
                'name' => 'SoleCoin',
                'symbol' => 'SOLE',
                'active' => 0,
            ),
            121 => 
            array (
                'id' => 231,
                'name' => 'UmbrellaLTC',
                'symbol' => 'ULTC',
                'active' => 1,
            ),
            122 => 
            array (
                'id' => 233,
                'name' => 'SysCoin',
                'symbol' => 'SYS',
                'active' => 1,
            ),
            123 => 
            array (
                'id' => 235,
                'name' => 'Halcyon',
                'symbol' => 'HAL',
                'active' => 1,
            ),
            124 => 
            array (
                'id' => 237,
                'name' => 'BigBullion',
                'symbol' => 'BIG',
                'active' => 1,
            ),
            125 => 
            array (
                'id' => 239,
                'name' => 'NeosCoin',
                'symbol' => 'NEOS',
                'active' => 1,
            ),
            126 => 
            array (
                'id' => 240,
                'name' => 'Digibyte',
                'symbol' => 'DGB',
                'active' => 1,
            ),
            127 => 
            array (
                'id' => 242,
                'name' => 'GreenBacks',
                'symbol' => 'GB',
                'active' => 1,
            ),
            128 => 
            array (
                'id' => 243,
                'name' => 'RootCoin',
                'symbol' => 'ROOT',
                'active' => 1,
            ),
            129 => 
            array (
                'id' => 245,
                'name' => 'Axron',
                'symbol' => 'AXR',
                'active' => 1,
            ),
            130 => 
            array (
                'id' => 246,
                'name' => 'RipoffCoin',
                'symbol' => 'RIPO',
                'active' => 1,
            ),
            131 => 
            array (
                'id' => 249,
                'name' => 'Fibre',
                'symbol' => 'FIBRE',
                'active' => 1,
            ),
            132 => 
            array (
                'id' => 252,
                'name' => 'Nimbus',
                'symbol' => 'NMB',
                'active' => 1,
            ),
            133 => 
            array (
                'id' => 253,
                'name' => 'ACoin',
                'symbol' => 'ACOIN',
                'active' => 0,
            ),
            134 => 
            array (
                'id' => 254,
                'name' => 'ShadeCoin',
                'symbol' => 'SHADE',
                'active' => 1,
            ),
            135 => 
            array (
                'id' => 255,
                'name' => 'FlexibleCoin',
                'symbol' => 'FLEX',
                'active' => 1,
            ),
            136 => 
            array (
                'id' => 256,
                'name' => 'CoinMarketsCoin',
                'symbol' => 'JBS',
                'active' => 1,
            ),
            137 => 
            array (
                'id' => 257,
                'name' => 'SSVCoin',
                'symbol' => 'SSV',
                'active' => 0,
            ),
            138 => 
            array (
                'id' => 258,
                'name' => 'SocialXBot',
                'symbol' => 'XBOT',
                'active' => 1,
            ),
            139 => 
            array (
                'id' => 259,
                'name' => 'XCash',
                'symbol' => 'XCASH',
                'active' => 1,
            ),
            140 => 
            array (
                'id' => 260,
                'name' => 'BURST',
                'symbol' => 'BURST',
                'active' => 1,
            ),
            141 => 
            array (
                'id' => 262,
                'name' => 'LitecoinDark',
                'symbol' => 'LTCD',
                'active' => 1,
            ),
            142 => 
            array (
                'id' => 263,
                'name' => 'LightSpeed',
                'symbol' => 'LSD',
                'active' => 0,
            ),
            143 => 
            array (
                'id' => 264,
                'name' => 'BancorCoin',
                'symbol' => 'BNCR',
                'active' => 0,
            ),
            144 => 
            array (
                'id' => 265,
                'name' => 'CraigsCoin',
                'symbol' => 'CRAIG',
                'active' => 1,
            ),
            145 => 
            array (
                'id' => 266,
                'name' => 'TitCoin',
                'symbol' => 'TIT',
                'active' => 1,
            ),
            146 => 
            array (
                'id' => 267,
                'name' => 'GlobalBoost-Y',
                'symbol' => 'BSTY',
                'active' => 1,
            ),
            147 => 
            array (
                'id' => 268,
                'name' => 'Gnosis',
                'symbol' => 'GNS',
                'active' => 1,
            ),
            148 => 
            array (
                'id' => 269,
                'name' => 'VolatilityCoin',
                'symbol' => 'VLTY',
                'active' => 1,
            ),
            149 => 
            array (
                'id' => 270,
                'name' => 'DeepCoin',
                'symbol' => 'DCN',
                'active' => 1,
            ),
            150 => 
            array (
                'id' => 271,
                'name' => 'Prime-XI',
                'symbol' => 'PXI',
                'active' => 1,
            ),
            151 => 
            array (
                'id' => 272,
                'name' => 'MozzShare',
                'symbol' => 'MLS',
                'active' => 1,
            ),
            152 => 
            array (
                'id' => 273,
                'name' => 'CrackCoin',
                'symbol' => 'CRACK',
                'active' => 0,
            ),
            153 => 
            array (
                'id' => 274,
                'name' => 'DigitalCoin',
                'symbol' => 'DGC',
                'active' => 1,
            ),
            154 => 
            array (
                'id' => 275,
                'name' => 'Bitmark',
                'symbol' => 'BTM',
                'active' => 1,
            ),
            155 => 
            array (
                'id' => 278,
                'name' => 'CoinWorksCoin',
                'symbol' => 'LAB',
                'active' => 0,
            ),
            156 => 
            array (
                'id' => 279,
                'name' => 'SterlingCoin',
                'symbol' => 'SLG',
                'active' => 1,
            ),
            157 => 
            array (
                'id' => 280,
                'name' => 'DarkToken',
                'symbol' => 'DT',
                'active' => 0,
            ),
            158 => 
            array (
                'id' => 281,
                'name' => 'RosCoin',
                'symbol' => 'ROS',
                'active' => 1,
            ),
            159 => 
            array (
                'id' => 282,
                'name' => '42Coin',
                'symbol' => '42',
                'active' => 0,
            ),
            160 => 
            array (
                'id' => 283,
                'name' => 'AsiaCoin',
                'symbol' => 'AC',
                'active' => 0,
            ),
            161 => 
            array (
                'id' => 284,
                'name' => 'AlphaCoin',
                'symbol' => 'ALF',
                'active' => 0,
            ),
            162 => 
            array (
                'id' => 285,
                'name' => 'AlienCoin',
                'symbol' => 'ALN',
                'active' => 0,
            ),
            163 => 
            array (
                'id' => 286,
                'name' => 'AmericanCoin',
                'symbol' => 'AMC',
                'active' => 0,
            ),
            164 => 
            array (
                'id' => 287,
                'name' => 'AnonCoin',
                'symbol' => 'ANC',
                'active' => 1,
            ),
            165 => 
            array (
                'id' => 288,
                'name' => 'Argentum',
                'symbol' => 'ARG',
                'active' => 0,
            ),
            166 => 
            array (
                'id' => 289,
                'name' => 'AuroraCoin',
                'symbol' => 'AUR',
                'active' => 0,
            ),
            167 => 
            array (
                'id' => 290,
                'name' => 'BattleCoin',
                'symbol' => 'BCX',
                'active' => 0,
            ),
            168 => 
            array (
                'id' => 291,
                'name' => 'Benjamins',
                'symbol' => 'BEN',
                'active' => 0,
            ),
            169 => 
            array (
                'id' => 292,
                'name' => 'Betacoin',
                'symbol' => 'BET',
                'active' => 0,
            ),
            170 => 
            array (
                'id' => 293,
                'name' => 'BBQCoin',
                'symbol' => 'BQC',
                'active' => 0,
            ),
            171 => 
            array (
                'id' => 294,
                'name' => 'BitBar',
                'symbol' => 'BTB',
                'active' => 0,
            ),
            172 => 
            array (
                'id' => 295,
                'name' => 'ByteCoin',
                'symbol' => 'BTE',
                'active' => 0,
            ),
            173 => 
            array (
                'id' => 296,
                'name' => 'BitGem',
                'symbol' => 'BTG',
                'active' => 0,
            ),
            174 => 
            array (
                'id' => 297,
                'name' => 'CryptoBuck',
                'symbol' => 'BUK',
                'active' => 0,
            ),
            175 => 
            array (
                'id' => 298,
                'name' => 'CACHeCoin',
                'symbol' => 'CACH',
                'active' => 0,
            ),
            176 => 
            array (
                'id' => 299,
                'name' => 'BottleCaps',
                'symbol' => 'CAP',
                'active' => 0,
            ),
            177 => 
            array (
                'id' => 300,
                'name' => 'CashCoin',
                'symbol' => 'CASH',
                'active' => 0,
            ),
            178 => 
            array (
                'id' => 301,
                'name' => 'CatCoin',
                'symbol' => 'CAT',
                'active' => 0,
            ),
            179 => 
            array (
                'id' => 302,
                'name' => 'CryptogenicBullion',
                'symbol' => 'CGB',
                'active' => 0,
            ),
            180 => 
            array (
                'id' => 303,
                'name' => 'CopperLark',
                'symbol' => 'CLR',
                'active' => 1,
            ),
            181 => 
            array (
                'id' => 304,
                'name' => 'Cosmoscoin',
                'symbol' => 'CMC',
                'active' => 0,
            ),
            182 => 
            array (
                'id' => 305,
                'name' => 'CHNCoin',
                'symbol' => 'CNC',
                'active' => 0,
            ),
            183 => 
            array (
                'id' => 306,
                'name' => 'CommunityCoin',
                'symbol' => 'COMM',
                'active' => 0,
            ),
            184 => 
            array (
                'id' => 307,
                'name' => 'CraftCoin',
                'symbol' => 'CRC',
                'active' => 0,
            ),
            185 => 
            array (
                'id' => 308,
                'name' => 'CasinoCoin',
                'symbol' => 'CSC',
                'active' => 0,
            ),
            186 => 
            array (
                'id' => 309,
                'name' => 'eMark',
                'symbol' => 'DEM',
                'active' => 0,
            ),
            187 => 
            array (
                'id' => 310,
                'name' => 'Diamond',
                'symbol' => 'DMD',
                'active' => 0,
            ),
            188 => 
            array (
                'id' => 311,
                'name' => 'DevCoin',
                'symbol' => 'DVC',
                'active' => 0,
            ),
            189 => 
            array (
                'id' => 312,
                'name' => 'EarthCoin',
                'symbol' => 'EAC',
                'active' => 0,
            ),
            190 => 
            array (
                'id' => 313,
                'name' => 'ElaCoin',
                'symbol' => 'ELC',
                'active' => 0,
            ),
            191 => 
            array (
                'id' => 314,
                'name' => 'Einsteinium',
                'symbol' => 'EMC2',
                'active' => 0,
            ),
            192 => 
            array (
                'id' => 315,
                'name' => 'Emerald',
                'symbol' => 'EMD',
                'active' => 0,
            ),
            193 => 
            array (
                'id' => 316,
                'name' => 'ExeCoin',
                'symbol' => 'EXE',
                'active' => 0,
            ),
            194 => 
            array (
                'id' => 317,
                'name' => 'EZCoin',
                'symbol' => 'EZC',
                'active' => 0,
            ),
            195 => 
            array (
                'id' => 318,
                'name' => 'FireflyCoin',
                'symbol' => 'FFC',
                'active' => 0,
            ),
            196 => 
            array (
                'id' => 319,
                'name' => 'FreiCoin',
                'symbol' => 'FRC',
                'active' => 1,
            ),
            197 => 
            array (
                'id' => 320,
                'name' => 'Franko',
                'symbol' => 'FRK',
                'active' => 0,
            ),
            198 => 
            array (
                'id' => 321,
                'name' => 'FastCoin',
                'symbol' => 'FST',
                'active' => 0,
            ),
            199 => 
            array (
                'id' => 322,
                'name' => 'FeatherCoin',
                'symbol' => 'FTC',
                'active' => 1,
            ),
            200 => 
            array (
                'id' => 323,
                'name' => 'GrandCoin',
                'symbol' => 'GDC',
                'active' => 0,
            ),
            201 => 
            array (
                'id' => 324,
                'name' => 'Globalcoin',
                'symbol' => 'GLC',
                'active' => 0,
            ),
            202 => 
            array (
                'id' => 325,
                'name' => 'GoldCoin',
                'symbol' => 'GLD',
                'active' => 0,
            ),
            203 => 
            array (
                'id' => 326,
                'name' => 'Galaxycoin',
                'symbol' => 'GLX',
                'active' => 0,
            ),
            204 => 
            array (
                'id' => 327,
                'name' => 'HoboNickels',
                'symbol' => 'HBN',
                'active' => 0,
            ),
            205 => 
            array (
                'id' => 328,
                'name' => 'HunterCoin',
                'symbol' => 'HUC',
                'active' => 0,
            ),
            206 => 
            array (
                'id' => 329,
                'name' => 'HeavyCoin',
                'symbol' => 'HVC',
                'active' => 0,
            ),
            207 => 
            array (
                'id' => 330,
                'name' => 'InfiniteCoin',
                'symbol' => 'IFC',
                'active' => 1,
            ),
            208 => 
            array (
                'id' => 331,
                'name' => 'IXCoin',
                'symbol' => 'IXC',
                'active' => 0,
            ),
            209 => 
            array (
                'id' => 332,
                'name' => 'JunkCoin',
                'symbol' => 'JKC',
                'active' => 0,
            ),
            210 => 
            array (
                'id' => 333,
                'name' => 'KlondikeCoin',
                'symbol' => 'KDC',
                'active' => 0,
            ),
            211 => 
            array (
                'id' => 334,
                'name' => 'KrugerCoin',
                'symbol' => 'KGC',
                'active' => 0,
            ),
            212 => 
            array (
                'id' => 335,
                'name' => 'LegendaryCoin',
                'symbol' => 'LGD',
                'active' => 0,
            ),
            213 => 
            array (
                'id' => 336,
                'name' => 'Lucky7Coin',
                'symbol' => 'LK7',
                'active' => 0,
            ),
            214 => 
            array (
                'id' => 337,
                'name' => 'LuckyCoin',
                'symbol' => 'LKY',
                'active' => 0,
            ),
            215 => 
            array (
                'id' => 338,
                'name' => 'LiteBar',
                'symbol' => 'LTB',
                'active' => 0,
            ),
            216 => 
            array (
                'id' => 339,
                'name' => 'LiteCoinX',
                'symbol' => 'LTCX',
                'active' => 0,
            ),
            217 => 
            array (
                'id' => 340,
                'name' => 'LycanCoin',
                'symbol' => 'LYC',
                'active' => 0,
            ),
            218 => 
            array (
                'id' => 341,
                'name' => 'MegaCoin',
                'symbol' => 'MEC',
                'active' => 1,
            ),
            219 => 
            array (
                'id' => 342,
                'name' => 'Mediterraneancoin',
                'symbol' => 'MED',
                'active' => 0,
            ),
            220 => 
            array (
                'id' => 343,
                'name' => 'MintCoin',
                'symbol' => 'MINT',
                'active' => 1,
            ),
            221 => 
            array (
                'id' => 346,
                'name' => 'MinCoin',
                'symbol' => 'MNC',
                'active' => 0,
            ),
            222 => 
            array (
                'id' => 347,
                'name' => 'MurrayCoin',
                'symbol' => 'MRY',
                'active' => 0,
            ),
            223 => 
            array (
                'id' => 348,
                'name' => 'MazaCoin',
                'symbol' => 'MZC',
                'active' => 0,
            ),
            224 => 
            array (
                'id' => 349,
                'name' => 'NanoToken',
                'symbol' => 'NAN',
                'active' => 0,
            ),
            225 => 
            array (
                'id' => 350,
                'name' => 'Nibble',
                'symbol' => 'NBL',
                'active' => 0,
            ),
            226 => 
            array (
                'id' => 351,
                'name' => 'NeoCoin',
                'symbol' => 'NEC',
                'active' => 0,
            ),
            227 => 
            array (
                'id' => 352,
                'name' => 'Netcoin',
                'symbol' => 'NET',
                'active' => 1,
            ),
            228 => 
            array (
                'id' => 353,
                'name' => 'NameCoin',
                'symbol' => 'NMC',
                'active' => 1,
            ),
            229 => 
            array (
                'id' => 354,
                'name' => 'NoirBits',
                'symbol' => 'NRB',
                'active' => 0,
            ),
            230 => 
            array (
                'id' => 355,
                'name' => 'NoirShares',
                'symbol' => 'NRS',
                'active' => 0,
            ),
            231 => 
            array (
                'id' => 356,
                'name' => 'NovaCoin',
                'symbol' => 'NVC',
                'active' => 0,
            ),
            232 => 
            array (
                'id' => 357,
                'name' => 'NyanCoin',
                'symbol' => 'NYAN',
                'active' => 0,
            ),
            233 => 
            array (
                'id' => 358,
                'name' => 'Orbitcoin',
                'symbol' => 'ORB',
                'active' => 1,
            ),
            234 => 
            array (
                'id' => 359,
                'name' => 'OpenSourceCoin',
                'symbol' => 'OSC',
                'active' => 0,
            ),
            235 => 
            array (
                'id' => 360,
                'name' => 'PhilosopherStone',
                'symbol' => 'PHS',
                'active' => 0,
            ),
            236 => 
            array (
                'id' => 361,
                'name' => 'CryptsyPoints',
                'symbol' => 'Points',
                'active' => 0,
            ),
            237 => 
            array (
                'id' => 362,
                'name' => 'Peercoin',
                'symbol' => 'PPC',
                'active' => 1,
            ),
            238 => 
            array (
                'id' => 363,
                'name' => 'Bitshares PTS',
                'symbol' => 'PTS',
                'active' => 0,
            ),
            239 => 
            array (
                'id' => 364,
                'name' => 'PhoenixCoin',
                'symbol' => 'PXC',
                'active' => 0,
            ),
            240 => 
            array (
                'id' => 365,
                'name' => 'PayCoin',
                'symbol' => 'PYC',
                'active' => 0,
            ),
            241 => 
            array (
                'id' => 366,
                'name' => 'Quark',
                'symbol' => 'QRK',
                'active' => 1,
            ),
            242 => 
            array (
                'id' => 367,
                'name' => 'RonPaulCoin',
                'symbol' => 'RPC',
                'active' => 0,
            ),
            243 => 
            array (
                'id' => 368,
                'name' => 'RoyalCoin',
                'symbol' => 'RYC',
                'active' => 0,
            ),
            244 => 
            array (
                'id' => 369,
                'name' => 'StableCoin',
                'symbol' => 'SBC',
                'active' => 0,
            ),
            245 => 
            array (
                'id' => 370,
                'name' => 'SilkCoin',
                'symbol' => 'SILK',
                'active' => 0,
            ),
            246 => 
            array (
                'id' => 371,
                'name' => 'SmartCoin',
                'symbol' => 'SMC',
                'active' => 0,
            ),
            247 => 
            array (
                'id' => 372,
                'name' => 'SpainCoin',
                'symbol' => 'SPA',
                'active' => 0,
            ),
            248 => 
            array (
                'id' => 373,
                'name' => 'Spots',
                'symbol' => 'SPT',
                'active' => 0,
            ),
            249 => 
            array (
                'id' => 374,
                'name' => 'SecureCoin',
                'symbol' => 'SRC',
                'active' => 0,
            ),
            250 => 
            array (
                'id' => 375,
                'name' => 'StarCoin',
                'symbol' => 'STR',
                'active' => 0,
            ),
            251 => 
            array (
                'id' => 376,
                'name' => 'SexCoin',
                'symbol' => 'SXC',
                'active' => 1,
            ),
            252 => 
            array (
                'id' => 377,
                'name' => 'TagCoin',
                'symbol' => 'TAG',
                'active' => 0,
            ),
            253 => 
            array (
                'id' => 378,
                'name' => 'TakCoin',
                'symbol' => 'TAK',
                'active' => 0,
            ),
            254 => 
            array (
                'id' => 379,
                'name' => 'TekCoin',
                'symbol' => 'TEK',
                'active' => 0,
            ),
            255 => 
            array (
                'id' => 380,
                'name' => 'TeslaCoin',
                'symbol' => 'TES',
                'active' => 0,
            ),
            256 => 
            array (
                'id' => 381,
                'name' => 'TigerCoin',
                'symbol' => 'TGC',
                'active' => 0,
            ),
            257 => 
            array (
                'id' => 382,
                'name' => 'TorCoin',
                'symbol' => 'TOR',
                'active' => 0,
            ),
            258 => 
            array (
                'id' => 383,
                'name' => 'TerraCoin',
                'symbol' => 'TRC',
                'active' => 0,
            ),
            259 => 
            array (
                'id' => 384,
                'name' => 'UnbreakableCoin',
                'symbol' => 'UNB',
                'active' => 0,
            ),
            260 => 
            array (
                'id' => 385,
                'name' => 'USDe',
                'symbol' => 'USDe',
                'active' => 0,
            ),
            261 => 
            array (
                'id' => 386,
                'name' => 'UltraCoin',
                'symbol' => 'UTC',
                'active' => 1,
            ),
            262 => 
            array (
                'id' => 387,
                'name' => 'WorldCoin',
                'symbol' => 'WDC',
                'active' => 1,
            ),
            263 => 
            array (
                'id' => 388,
                'name' => 'Crypti',
                'symbol' => 'XCR',
                'active' => 0,
            ),
            264 => 
            array (
                'id' => 389,
                'name' => 'JouleCoin',
                'symbol' => 'XJO',
                'active' => 0,
            ),
            265 => 
            array (
                'id' => 390,
                'name' => 'PrimeCoin',
                'symbol' => 'XPM',
                'active' => 1,
            ),
            266 => 
            array (
                'id' => 391,
                'name' => 'YaCoin',
                'symbol' => 'YAC',
                'active' => 0,
            ),
            267 => 
            array (
                'id' => 392,
                'name' => 'YBCoin',
                'symbol' => 'YBC',
                'active' => 0,
            ),
            268 => 
            array (
                'id' => 393,
                'name' => 'ZcCoin',
                'symbol' => 'ZCC',
                'active' => 0,
            ),
            269 => 
            array (
                'id' => 394,
                'name' => 'ZedCoin',
                'symbol' => 'ZED',
                'active' => 0,
            ),
            270 => 
            array (
                'id' => 395,
                'name' => 'AndroidsTokensV2',
                'symbol' => 'ADT',
                'active' => 0,
            ),
            271 => 
            array (
                'id' => 396,
                'name' => 'AsicCoin',
                'symbol' => 'ASC',
                'active' => 0,
            ),
            272 => 
            array (
                'id' => 397,
                'name' => 'BatCoin',
                'symbol' => 'BAT',
                'active' => 0,
            ),
            273 => 
            array (
                'id' => 398,
                'name' => 'ColossusCoin',
                'symbol' => 'COL',
                'active' => 0,
            ),
            274 => 
            array (
                'id' => 399,
                'name' => 'CopperBars',
                'symbol' => 'CPR',
                'active' => 0,
            ),
            275 => 
            array (
                'id' => 400,
                'name' => 'Continuumcoin',
                'symbol' => 'CTM',
                'active' => 0,
            ),
            276 => 
            array (
                'id' => 401,
                'name' => 'Doubloons',
                'symbol' => 'DBL',
                'active' => 0,
            ),
            277 => 
            array (
                'id' => 402,
                'name' => 'DamaCoin',
                'symbol' => 'DMC',
                'active' => 0,
            ),
            278 => 
            array (
                'id' => 403,
                'name' => 'ElephantCoin',
                'symbol' => 'ELP',
                'active' => 0,
            ),
            279 => 
            array (
                'id' => 404,
                'name' => 'FlappyCoin',
                'symbol' => 'FLAP',
                'active' => 0,
            ),
            280 => 
            array (
                'id' => 405,
                'name' => 'FlorinCoin',
                'symbol' => 'FLO',
                'active' => 0,
            ),
            281 => 
            array (
                'id' => 406,
                'name' => 'GameCoin',
                'symbol' => 'GME',
                'active' => 0,
            ),
            282 => 
            array (
                'id' => 407,
                'name' => 'KarmaCoin',
                'symbol' => 'KARM',
                'active' => 1,
            ),
            283 => 
            array (
                'id' => 408,
                'name' => 'LeafCoin',
                'symbol' => 'LEAF',
                'active' => 0,
            ),
            284 => 
            array (
                'id' => 409,
                'name' => 'LottoCoin',
                'symbol' => 'LOT',
                'active' => 0,
            ),
            285 => 
            array (
                'id' => 410,
                'name' => 'MemeCoin',
                'symbol' => 'MEM',
                'active' => 0,
            ),
            286 => 
            array (
                'id' => 411,
                'name' => 'KittehCoin',
                'symbol' => 'MEOW',
                'active' => 0,
            ),
            287 => 
            array (
                'id' => 412,
                'name' => 'MoonCoin',
                'symbol' => 'MOON',
                'active' => 1,
            ),
            288 => 
            array (
                'id' => 413,
            'name' => 'MasterCoin (Hydro)',
                'symbol' => 'MST',
                'active' => 0,
            ),
            289 => 
            array (
                'id' => 414,
                'name' => 'RabbitCoin',
                'symbol' => 'RBBT',
                'active' => 0,
            ),
            290 => 
            array (
                'id' => 415,
                'name' => 'RedCoin',
                'symbol' => 'RED',
                'active' => 0,
            ),
            291 => 
            array (
                'id' => 416,
                'name' => 'FedoraCoin',
                'symbol' => 'TIPS',
                'active' => 0,
            ),
            292 => 
            array (
                'id' => 417,
                'name' => 'Tickets',
                'symbol' => 'TIX',
                'active' => 0,
            ),
            293 => 
            array (
                'id' => 418,
                'name' => 'XenCoin',
                'symbol' => 'XNC',
                'active' => 0,
            ),
            294 => 
            array (
                'id' => 419,
                'name' => 'ZeitCoin',
                'symbol' => 'ZEIT',
                'active' => 0,
            ),
            295 => 
            array (
                'id' => 420,
                'name' => '',
                'symbol' => 'ABC2',
                'active' => 0,
            ),
            296 => 
            array (
                'id' => 421,
                'name' => '',
                'symbol' => 'AID',
                'active' => 0,
            ),
            297 => 
            array (
                'id' => 424,
                'name' => '',
                'symbol' => 'BTQ',
                'active' => 0,
            ),
            298 => 
            array (
                'id' => 426,
                'name' => '',
                'symbol' => 'CHILD',
                'active' => 1,
            ),
            299 => 
            array (
                'id' => 428,
                'name' => 'Checkcoin',
                'symbol' => 'CKC',
                'active' => 1,
            ),
            300 => 
            array (
                'id' => 437,
                'name' => '',
                'symbol' => 'GRC',
                'active' => 0,
            ),
            301 => 
            array (
                'id' => 438,
                'name' => '',
                'symbol' => 'IMAC',
                'active' => 0,
            ),
            302 => 
            array (
                'id' => 440,
                'name' => 'Lemurcoin',
                'symbol' => 'LMR',
                'active' => 1,
            ),
            303 => 
            array (
                'id' => 441,
                'name' => '',
                'symbol' => 'MOTO',
                'active' => 0,
            ),
            304 => 
            array (
                'id' => 442,
                'name' => '',
                'symbol' => 'MSC',
                'active' => 0,
            ),
            305 => 
            array (
                'id' => 444,
                'name' => '',
                'symbol' => 'NIC',
                'active' => 0,
            ),
            306 => 
            array (
                'id' => 445,
                'name' => '',
                'symbol' => 'NOTE',
                'active' => 0,
            ),
            307 => 
            array (
                'id' => 446,
                'name' => '',
                'symbol' => 'NWO',
                'active' => 0,
            ),
            308 => 
            array (
                'id' => 447,
                'name' => '',
                'symbol' => 'ONE',
                'active' => 1,
            ),
            309 => 
            array (
                'id' => 448,
                'name' => 'OpalCoin',
                'symbol' => 'OPAL',
                'active' => 1,
            ),
            310 => 
            array (
                'id' => 450,
                'name' => '',
                'symbol' => 'PLCN',
                'active' => 0,
            ),
            311 => 
            array (
                'id' => 452,
                'name' => '',
                'symbol' => 'PROZ',
                'active' => 0,
            ),
            312 => 
            array (
                'id' => 453,
                'name' => 'PyramidsCoin',
                'symbol' => 'PYRA',
                'active' => 1,
            ),
            313 => 
            array (
                'id' => 460,
                'name' => 'SativaCoin',
                'symbol' => 'STV',
                'active' => 1,
            ),
            314 => 
            array (
                'id' => 467,
                'name' => '',
                'symbol' => 'XRC',
                'active' => 0,
            ),
            315 => 
            array (
                'id' => 468,
                'name' => '',
                'symbol' => 'XSX',
                'active' => 0,
            ),
            316 => 
            array (
                'id' => 469,
                'name' => '',
                'symbol' => 'CCI',
                'active' => 0,
            ),
            317 => 
            array (
                'id' => 470,
                'name' => '',
                'symbol' => 'GHC',
                'active' => 1,
            ),
            318 => 
            array (
                'id' => 471,
                'name' => 'Bleutrade Share',
                'symbol' => 'BLEU',
                'active' => 1,
            ),
            319 => 
            array (
                'id' => 473,
                'name' => 'BeaverCoin',
                'symbol' => 'BVC',
                'active' => 1,
            ),
            320 => 
            array (
                'id' => 474,
                'name' => 'Canada eCoin',
                'symbol' => 'CDN',
                'active' => 1,
            ),
            321 => 
            array (
                'id' => 475,
                'name' => 'CzechCrownCoin',
                'symbol' => 'CZC',
                'active' => 1,
            ),
            322 => 
            array (
                'id' => 476,
                'name' => 'Donationcoin',
                'symbol' => 'DON',
                'active' => 1,
            ),
            323 => 
            array (
                'id' => 477,
                'name' => 'FujiCoin',
                'symbol' => 'FJC',
                'active' => 1,
            ),
            324 => 
            array (
                'id' => 478,
                'name' => 'GCoin',
                'symbol' => 'GCN',
                'active' => 1,
            ),
            325 => 
            array (
                'id' => 479,
                'name' => 'Guncoin',
                'symbol' => 'GUN',
                'active' => 1,
            ),
            326 => 
            array (
                'id' => 480,
                'name' => 'HamRadioCoin',
                'symbol' => 'HAM',
                'active' => 1,
            ),
            327 => 
            array (
                'id' => 481,
                'name' => 'HeisenbergHex',
                'symbol' => 'HEX',
                'active' => 1,
            ),
            328 => 
            array (
                'id' => 482,
                'name' => 'HTML5',
                'symbol' => 'HTML5',
                'active' => 1,
            ),
            329 => 
            array (
                'id' => 483,
                'name' => 'IrishCoin',
                'symbol' => 'IRL',
                'active' => 1,
            ),
            330 => 
            array (
                'id' => 484,
                'name' => 'NewYorkCoin',
                'symbol' => 'NYC',
                'active' => 1,
            ),
            331 => 
            array (
                'id' => 485,
                'name' => 'Paccoin',
                'symbol' => 'PAC',
                'active' => 1,
            ),
            332 => 
            array (
                'id' => 486,
                'name' => 'PolishCoin',
                'symbol' => 'PCC',
                'active' => 1,
            ),
            333 => 
            array (
                'id' => 487,
                'name' => 'PHCoin',
                'symbol' => 'PHC',
                'active' => 1,
            ),
            334 => 
            array (
                'id' => 488,
                'name' => 'Pandacoin',
                'symbol' => 'PND',
                'active' => 1,
            ),
            335 => 
            array (
                'id' => 489,
                'name' => 'POWcoin',
                'symbol' => 'POW',
                'active' => 1,
            ),
            336 => 
            array (
                'id' => 490,
                'name' => 'RussiaCoin',
                'symbol' => 'RC',
                'active' => 1,
            ),
            337 => 
            array (
                'id' => 494,
                'name' => 'TrollCoin',
                'symbol' => 'TRL',
                'active' => 1,
            ),
            338 => 
            array (
                'id' => 495,
                'name' => 'US Dollar',
                'symbol' => 'USD',
                'active' => 1,
            ),
            339 => 
            array (
                'id' => 497,
                'name' => 'VirtaCoin',
                'symbol' => 'VTA',
                'active' => 1,
            ),
            340 => 
            array (
                'id' => 498,
                'name' => 'InkwayCoin',
                'symbol' => 'LKNX',
                'active' => 1,
            ),
            341 => 
            array (
                'id' => 503,
                'name' => 'ExclusiveCoin',
                'symbol' => 'EXCL',
                'active' => 1,
            ),
            342 => 
            array (
                'id' => 505,
                'name' => 'EtherCoin',
                'symbol' => 'ETC',
                'active' => 1,
            ),
            343 => 
            array (
                'id' => 506,
                'name' => 'VikingCoin',
                'symbol' => 'VIK',
                'active' => 1,
            ),
            344 => 
            array (
                'id' => 507,
                'name' => 'XG',
                'symbol' => 'XG',
                'active' => 1,
            ),
            345 => 
            array (
                'id' => 513,
                'name' => 'MaryJaneCoin',
                'symbol' => 'MARYJ',
                'active' => 1,
            ),
            346 => 
            array (
                'id' => 516,
                'name' => 'unknown',
                'symbol' => 'SONG',
                'active' => 0,
            ),
            347 => 
            array (
                'id' => 517,
                'name' => 'Magi',
                'symbol' => 'XMG',
                'active' => 1,
            ),
            348 => 
            array (
                'id' => 518,
                'name' => 'UtilityCoin',
                'symbol' => 'UTIL',
                'active' => 1,
            ),
            349 => 
            array (
                'id' => 519,
                'name' => 'Ruble',
                'symbol' => 'RUBLE',
                'active' => 1,
            ),
            350 => 
            array (
                'id' => 520,
                'name' => 'Wolfcoin',
                'symbol' => 'WLF',
                'active' => 1,
            ),
            351 => 
            array (
                'id' => 521,
                'name' => 'XCloudCoin',
                'symbol' => 'XCLD',
                'active' => 1,
            ),
            352 => 
            array (
                'id' => 522,
                'name' => 'BitSwift',
                'symbol' => 'SWIFT',
                'active' => 1,
            ),
            353 => 
            array (
                'id' => 525,
                'name' => 'ArchCoin',
                'symbol' => 'ARCH',
                'active' => 1,
            ),
            354 => 
            array (
                'id' => 526,
                'name' => 'GhostCoin',
                'symbol' => 'GHOST',
                'active' => 1,
            ),
            355 => 
            array (
                'id' => 527,
                'name' => 'SeedCoin',
                'symbol' => 'SEED',
                'active' => 1,
            ),
            356 => 
            array (
                'id' => 530,
                'name' => 'GAIACoin',
                'symbol' => 'GAIA',
                'active' => 1,
            ),
            357 => 
            array (
                'id' => 531,
                'name' => 'WorldWideCoin',
                'symbol' => 'WWC',
                'active' => 1,
            ),
            358 => 
            array (
                'id' => 532,
                'name' => 'Cagecoin',
                'symbol' => 'CAGE',
                'active' => 1,
            ),
            359 => 
            array (
                'id' => 533,
                'name' => 'Ripple',
                'symbol' => 'XRP',
                'active' => 0,
            ),
            360 => 
            array (
                'id' => 534,
                'name' => 'WhistleCoin',
                'symbol' => 'WSTL',
                'active' => 1,
            ),
            361 => 
            array (
                'id' => 537,
                'name' => 'Munne',
                'symbol' => 'MNE',
                'active' => 1,
            ),
            362 => 
            array (
                'id' => 538,
                'name' => 'unknown',
                'symbol' => 'CRW',
                'active' => 0,
            ),
            363 => 
            array (
                'id' => 539,
                'name' => 'unknown',
                'symbol' => 'SQC',
                'active' => 0,
            ),
            364 => 
            array (
                'id' => 541,
                'name' => 'unknown',
                'symbol' => 'VOXP',
                'active' => 0,
            ),
            365 => 
            array (
                'id' => 542,
                'name' => 'EquinoxCoin ',
                'symbol' => 'EQX',
                'active' => 1,
            ),
            366 => 
            array (
                'id' => 544,
                'name' => 'GlowCoin',
                'symbol' => 'GLOW',
                'active' => 1,
            ),
            367 => 
            array (
                'id' => 545,
                'name' => 'unknown',
                'symbol' => 'KRYP',
                'active' => 0,
            ),
            368 => 
            array (
                'id' => 547,
                'name' => 'unknown',
                'symbol' => 'PLCS',
                'active' => 0,
            ),
            369 => 
            array (
                'id' => 548,
                'name' => 'unknown',
                'symbol' => 'VTX',
                'active' => 0,
            ),
            370 => 
            array (
                'id' => 549,
                'name' => 'MiracleCoin',
                'symbol' => 'MCL',
                'active' => 1,
            ),
            371 => 
            array (
                'id' => 550,
                'name' => 'DopeCoin',
                'symbol' => 'DOPE',
                'active' => 1,
            ),
            372 => 
            array (
                'id' => 552,
                'name' => 'unknown',
                'symbol' => 'DOGEB',
                'active' => 0,
            ),
            373 => 
            array (
                'id' => 553,
                'name' => 'unknown',
                'symbol' => 'SPUDS',
                'active' => 0,
            ),
            374 => 
            array (
                'id' => 554,
                'name' => 'VidioShare',
                'symbol' => 'VDO',
                'active' => 1,
            ),
            375 => 
            array (
                'id' => 555,
                'name' => 'CamorraCoin',
                'symbol' => 'CAM',
                'active' => 1,
            ),
            376 => 
            array (
                'id' => 556,
                'name' => 'NopeCoin',
                'symbol' => 'NOPE',
                'active' => 1,
            ),
            377 => 
            array (
                'id' => 557,
                'name' => 'SparkCoin',
                'symbol' => 'SPARK',
                'active' => 1,
            ),
            378 => 
            array (
                'id' => 558,
                'name' => 'unknown',
                'symbol' => 'UP',
                'active' => 0,
            ),
            379 => 
            array (
                'id' => 560,
                'name' => 'CannabisDarkcoin',
                'symbol' => 'CND',
                'active' => 1,
            ),
            380 => 
            array (
                'id' => 561,
                'name' => 'DogeCoinDark',
                'symbol' => 'DOGED',
                'active' => 1,
            ),
            381 => 
            array (
                'id' => 562,
                'name' => 'MetalMusicCoin',
                'symbol' => 'MTLMC',
                'active' => 1,
            ),
            382 => 
            array (
                'id' => 563,
                'name' => 'MonetaryUnit',
                'symbol' => 'MUE',
                'active' => 1,
            ),
            383 => 
            array (
                'id' => 564,
                'name' => 'GanjaCoin',
                'symbol' => 'GANJA',
                'active' => 1,
            ),
            384 => 
            array (
                'id' => 565,
                'name' => 'DayTraderCoin',
                'symbol' => 'DTC',
                'active' => 1,
            ),
            385 => 
            array (
                'id' => 567,
                'name' => 'ScatterCoin',
                'symbol' => 'XSTC',
                'active' => 1,
            ),
            386 => 
            array (
                'id' => 568,
                'name' => 'Sembro Token',
                'symbol' => 'SMBR',
                'active' => 1,
            ),
            387 => 
            array (
                'id' => 569,
                'name' => 'CleverHash',
                'symbol' => 'CHASH',
                'active' => 1,
            ),
            388 => 
            array (
                'id' => 570,
                'name' => 'DarkShibe',
                'symbol' => 'DSB',
                'active' => 1,
            ),
            389 => 
            array (
                'id' => 571,
                'name' => 'HyperStake',
                'symbol' => 'HYP',
                'active' => 0,
            ),
            390 => 
            array (
                'id' => 572,
                'name' => 'unknown',
                'symbol' => 'LOG',
                'active' => 0,
            ),
            391 => 
            array (
                'id' => 573,
                'name' => 'unknown',
                'symbol' => 'QBK',
                'active' => 0,
            ),
            392 => 
            array (
                'id' => 574,
                'name' => 'DigitalPrice',
                'symbol' => 'DP',
                'active' => 1,
            ),
            393 => 
            array (
                'id' => 575,
                'name' => 'Bladecoin',
                'symbol' => 'BLA',
                'active' => 1,
            ),
            394 => 
            array (
                'id' => 576,
                'name' => 'DarkKush',
                'symbol' => 'DANK',
                'active' => 1,
            ),
            395 => 
            array (
                'id' => 578,
                'name' => 'Pennies',
                'symbol' => 'CENT',
                'active' => 0,
            ),
            396 => 
            array (
                'id' => 579,
                'name' => 'BlockNet',
                'symbol' => 'BLOCK',
                'active' => 1,
            ),
            397 => 
            array (
                'id' => 580,
                'name' => 'unknown',
                'symbol' => 'CATC',
                'active' => 0,
            ),
            398 => 
            array (
                'id' => 581,
                'name' => 'unknown',
                'symbol' => 'VOCAL',
                'active' => 0,
            ),
            399 => 
            array (
                'id' => 582,
                'name' => 'SecuritySysCoin',
                'symbol' => 'SCSY',
                'active' => 1,
            ),
            400 => 
            array (
                'id' => 583,
                'name' => 'AppleBytes',
                'symbol' => 'ABY',
                'active' => 1,
            ),
            401 => 
            array (
                'id' => 584,
                'name' => 'unknown',
                'symbol' => 'MIC',
                'active' => 0,
            ),
            402 => 
            array (
                'id' => 585,
                'name' => 'Snowballs',
                'symbol' => 'BALLS',
                'active' => 1,
            ),
            403 => 
            array (
                'id' => 586,
                'name' => 'RektCoin',
                'symbol' => 'REKT',
                'active' => 1,
            ),
            404 => 
            array (
                'id' => 587,
                'name' => 'Quicksilver',
                'symbol' => 'QSLV',
                'active' => 1,
            ),
            405 => 
            array (
                'id' => 588,
                'name' => 'unknown',
                'symbol' => 'ICNX',
                'active' => 0,
            ),
            406 => 
            array (
                'id' => 590,
                'name' => 'unknown',
                'symbol' => 'U',
                'active' => 0,
            ),
            407 => 
            array (
                'id' => 592,
                'name' => 'ByteCent',
                'symbol' => 'BYC',
                'active' => 1,
            ),
            408 => 
            array (
                'id' => 593,
                'name' => 'BunnyCoin',
                'symbol' => 'BUN',
                'active' => 1,
            ),
            409 => 
            array (
                'id' => 594,
                'name' => 'UroDark',
                'symbol' => 'UROD',
                'active' => 1,
            ),
            410 => 
            array (
                'id' => 595,
                'name' => 'UFOCoin',
                'symbol' => 'UFO',
                'active' => 1,
            ),
            411 => 
            array (
                'id' => 596,
                'name' => 'unknown',
                'symbol' => 'ZER',
                'active' => 0,
            ),
            412 => 
            array (
                'id' => 597,
                'name' => 'EthereumDark',
                'symbol' => 'ETD',
                'active' => 1,
            ),
            413 => 
            array (
                'id' => 598,
                'name' => 'Nanite',
                'symbol' => 'XNAN',
                'active' => 1,
            ),
            414 => 
            array (
                'id' => 600,
                'name' => 'OcupyCoin',
                'symbol' => 'OCUPY',
                'active' => 1,
            ),
            415 => 
            array (
                'id' => 601,
                'name' => 'unknown',
                'symbol' => 'ZNY',
                'active' => 0,
            ),
            416 => 
            array (
                'id' => 602,
                'name' => 'unknown',
                'symbol' => 'FICE',
                'active' => 0,
            ),
            417 => 
            array (
                'id' => 603,
                'name' => 'unknown',
                'symbol' => 'HLC',
                'active' => 0,
            ),
            418 => 
            array (
                'id' => 604,
                'name' => 'Guarany',
                'symbol' => 'GUA',
                'active' => 1,
            ),
            419 => 
            array (
                'id' => 605,
                'name' => 'unknown',
                'symbol' => 'ACHK',
                'active' => 0,
            ),
            420 => 
            array (
                'id' => 606,
                'name' => 'unknown',
                'symbol' => 'GIMP',
                'active' => 0,
            ),
            421 => 
            array (
                'id' => 607,
                'name' => 'unknown',
                'symbol' => 'BOARD',
                'active' => 0,
            ),
            422 => 
            array (
                'id' => 608,
                'name' => 'GlowShares',
                'symbol' => 'GSX',
                'active' => 1,
            ),
            423 => 
            array (
                'id' => 609,
                'name' => 'unknown',
                'symbol' => 'PFC',
                'active' => 0,
            ),
            424 => 
            array (
                'id' => 610,
                'name' => 'Quotient',
                'symbol' => 'XQN',
                'active' => 1,
            ),
            425 => 
            array (
                'id' => 611,
                'name' => 'OptimumCoin',
                'symbol' => 'OPTI',
                'active' => 1,
            ),
            426 => 
            array (
                'id' => 612,
                'name' => 'Consolidated Mining',
                'symbol' => 'MN',
                'active' => 0,
            ),
            427 => 
            array (
                'id' => 613,
                'name' => 'GreenCoin',
                'symbol' => 'GRE',
                'active' => 1,
            ),
            428 => 
            array (
                'id' => 614,
                'name' => 'VPNCoin',
                'symbol' => 'VPN',
                'active' => 1,
            ),
            429 => 
            array (
                'id' => 615,
                'name' => 'Bollywoodcoin',
                'symbol' => 'BDC',
                'active' => 1,
            ),
            430 => 
            array (
                'id' => 616,
                'name' => 'ViorCoin',
                'symbol' => 'VIOR',
                'active' => 1,
            ),
            431 => 
            array (
                'id' => 617,
                'name' => 'BitBay',
                'symbol' => 'BAY',
                'active' => 1,
            ),
            432 => 
            array (
                'id' => 618,
                'name' => 'HawaiiCoin',
                'symbol' => 'HIC',
                'active' => 1,
            ),
            433 => 
            array (
                'id' => 619,
                'name' => 'MalibuCoin',
                'symbol' => 'MAL',
                'active' => 1,
            ),
            434 => 
            array (
                'id' => 620,
                'name' => 'ImperiumCoin',
                'symbol' => 'IMPC',
                'active' => 1,
            ),
            435 => 
            array (
                'id' => 621,
                'name' => 'Diode',
                'symbol' => 'DIO',
                'active' => 1,
            ),
            436 => 
            array (
                'id' => 622,
                'name' => 'DeafDollars',
                'symbol' => 'DEAF',
                'active' => 1,
            ),
            437 => 
            array (
                'id' => 623,
                'name' => 'unknown',
                'symbol' => 'ALI',
                'active' => 0,
            ),
            438 => 
            array (
                'id' => 624,
                'name' => 'BitSharesX',
                'symbol' => 'BTS',
                'active' => 1,
            ),
            439 => 
            array (
                'id' => 625,
                'name' => 'unknown',
                'symbol' => 'EUPH',
                'active' => 0,
            ),
            440 => 
            array (
                'id' => 626,
                'name' => 'WorldTradeFunds',
                'symbol' => 'XWT',
                'active' => 1,
            ),
            441 => 
            array (
                'id' => 627,
                'name' => 'MobCoin',
                'symbol' => 'MOB',
                'active' => 1,
            ),
            442 => 
            array (
                'id' => 628,
                'name' => 'PimpCash',
                'symbol' => 'PIMP',
                'active' => 1,
            ),
            443 => 
            array (
                'id' => 629,
                'name' => 'unknown',
                'symbol' => 'ERM',
                'active' => 0,
            ),
            444 => 
            array (
                'id' => 630,
                'name' => 'MewnCoin',
                'symbol' => 'MEWN',
                'active' => 1,
            ),
            445 => 
            array (
                'id' => 631,
                'name' => 'unknown',
                'symbol' => 'FUD',
                'active' => 0,
            ),
            446 => 
            array (
                'id' => 632,
                'name' => 'unknown',
                'symbol' => 'KING',
                'active' => 0,
            ),
            447 => 
            array (
                'id' => 633,
                'name' => 'AeroME',
                'symbol' => 'AM',
                'active' => 1,
            ),
            448 => 
            array (
                'id' => 634,
                'name' => 'unknown',
                'symbol' => 'FIND',
                'active' => 0,
            ),
            449 => 
            array (
                'id' => 635,
                'name' => 'unknown',
                'symbol' => 'CBR',
                'active' => 0,
            ),
            450 => 
            array (
                'id' => 636,
                'name' => 'SpreadCoin',
                'symbol' => 'SPR',
                'active' => 1,
            ),
            451 => 
            array (
                'id' => 637,
                'name' => 'MetalCoin',
                'symbol' => 'METAL',
                'active' => 1,
            ),
            452 => 
            array (
                'id' => 638,
                'name' => 'CheckOutCoin',
                'symbol' => 'CXC',
                'active' => 1,
            ),
            453 => 
            array (
                'id' => 639,
                'name' => 'BitcoinFast',
                'symbol' => 'BCF',
                'active' => 1,
            ),
            454 => 
            array (
                'id' => 640,
                'name' => 'unknown',
                'symbol' => 'STB',
                'active' => 0,
            ),
            455 => 
            array (
                'id' => 641,
                'name' => 'unknown',
                'symbol' => 'RMS',
                'active' => 0,
            ),
            456 => 
            array (
                'id' => 642,
                'name' => 'EventCoint',
                'symbol' => 'EVENT',
                'active' => 1,
            ),
            457 => 
            array (
                'id' => 644,
                'name' => 'FairCoin',
                'symbol' => 'FAIR',
                'active' => 1,
            ),
            458 => 
            array (
                'id' => 645,
                'name' => 'DarkSwift',
                'symbol' => 'DS',
                'active' => 1,
            ),
            459 => 
            array (
                'id' => 646,
                'name' => 'unknown',
                'symbol' => 'BCENT',
                'active' => 0,
            ),
            460 => 
            array (
                'id' => 647,
                'name' => 'unknown',
                'symbol' => 'SMLY',
                'active' => 0,
            ),
            461 => 
            array (
                'id' => 648,
                'name' => 'PayCoin',
                'symbol' => 'XPY',
                'active' => 1,
            ),
            462 => 
            array (
                'id' => 649,
                'name' => 'NooCoin',
                'symbol' => 'NOO',
                'active' => 1,
            ),
            463 => 
            array (
                'id' => 650,
                'name' => 'vTorrent',
                'symbol' => 'VTR',
                'active' => 1,
            ),
            464 => 
            array (
                'id' => 651,
                'name' => 'Clams',
                'symbol' => 'CLAM',
                'active' => 0,
            ),
            465 => 
            array (
                'id' => 652,
                'name' => 'TittieCoin',
                'symbol' => 'TTC',
                'active' => 0,
            ),
            466 => 
            array (
                'id' => 653,
                'name' => 'Sapience',
                'symbol' => 'XAI',
                'active' => 1,
            ),
            467 => 
            array (
                'id' => 654,
                'name' => 'NakomotoDark',
                'symbol' => 'NKT',
                'active' => 1,
            ),
            468 => 
            array (
                'id' => 655,
                'name' => 'Ideacoin',
                'symbol' => 'IDC',
                'active' => 1,
            ),
        ));
        
        
    }
}