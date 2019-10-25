<?php

use App\Loading;
use App\PortCodes;
use Illuminate\Database\Seeder;

class LoadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loadings = [
            [
                'place' => 'ALESUND',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'AARHUS',
                'country' => 'DENMARK',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'ABERDEEN',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ABIDJAN',
                'country' => 'IVORY COAST',
                'cluster' => 'Ivory Coast Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'ABU DHABI',
                'country' => 'U. A. E.',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'ACAJUTLA, El Salvador',
                'country' => 'EL SALVADOR',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'ADDIS ABEBA',
                'country' => 'ETHIOPIA',
                'cluster' => 'HOA AND EAST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'ADELAIDE',
                'country' => 'AUSTRALIA',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ADEN',
                'country' => 'YEMEN',
                'cluster' => 'Saudi Arabia Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'AGADIR',
                'country' => 'MOROCCO',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'AGALEGA',
            //     'country' => 'MAURITIUS',
            //     'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            //     'route' => 'W5',
            // ],

            [
                'place' => 'AGRIGENTO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'AHMEDABAD',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            // [
            //     'place' => 'AHMEDNAGAR',
            //     'country' => 'INDIA',
            //     'cluster' => 'INDIA AND BANGLADESH CLUSTER',
            //     'route' => 'W2',
            // ],

            [
                'place' => 'AKITA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'AL AQABAH',
                'country' => 'JORDAN',
                'cluster' => 'SAUDI ARABIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'AL KHUMS',
                'country' => 'LIBYA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ALEXANDRIA',
                'country' => 'EGYPT',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ALGECIRAS',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ALGIERS',
                'country' => 'ALGERIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ALIAGA',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ALICANTE',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ALMERIA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ALTAMIRA',
                'country' => 'MEXICO',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'AMBARLI',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'AMBRIZ',
            //     'country' => 'ANGOLA',
            //     'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            //     'route' => 'W5',
            // ],

            [
                'place' => 'AMSTERDAM',
                'country' => 'NETHERLANDS',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ANCONA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Annaba (ex Bone)',
                'country' => 'ALGERIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ANTALYA',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ANTANANARIVO',
                'country' => 'MADAGASCAR',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'ANTSIRANANA',
                'country' => 'MADAGASCAR',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'ANTWERP',
                'country' => 'BELGIUM',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'APAPA',
                'country' => 'NIGERIA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'Aqaba Free Zone',
                'country' => 'JORDAN',
                'cluster' => 'SAUDI ARABIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'ARICA',
                'country' => 'CHILE',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'ARRECIFE',
            //     'country' => 'SPAIN',
            //     'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'ASALUYEH',
                'country' => 'IRAN',
                'cluster' => 'Iran Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'ASHDOD',
                'country' => 'ISRAEL',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ASSAB',
                'country' => 'ERITREA',
                'cluster' => 'HOA AND EAST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'ASTAKOS',
                'country' => 'GREECE',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Asuncion,   Paraguay',
                'country' => 'PARAGUAY',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'ATAR',
                'country' => 'MAURITANIA',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'ATLANTA',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'AUCKLAND',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'AUGUSTA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'AUSTEVOLL',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'AVALDSNES',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'AVCILAR',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'BAHIA BLANCA',
            //     'country' => 'ARGENTINA',
            //     'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
            //     'route' => 'X6',
            // ],

            [
                'place' => 'BAHRAIN',
                'country' => 'BAHRAIN',
                'cluster' => 'SAUDI ARABIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'BALBOA',
                'country' => 'PANAMA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'BALTIMORE',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'BALYKCHY',
                'country' => 'KIRGHIZISTAN',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BAMAKO',
                'country' => 'MALI',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'BANANA',
                'country' => 'CONGO, DEM. REP. OF',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'BANDAR ABBAS',
                'country' => 'IRAN',
                'cluster' => 'Iran Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'BANDAR KHOMEINI',
                'country' => 'IRAN',
                'cluster' => 'Iran Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'BANDIRMA',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BANGALORE',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'BANGKOK',
                'country' => 'THAILAND',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BANJUL',
                'country' => 'GAMBIA',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'BARCELONA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BARI',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'BARRANQUILLA',
            //     'country' => 'COLOMBIA',
            //     'cluster' => 'Caribbean Sea Cluster',
            //     'route' => 'W4',
            // ],

            // [
            //     'place' => 'BASSE TERRE',
            //     'country' => 'GUADELOUPE',
            //     'cluster' => 'Carribean Sea Cluster',
            //     'route' => 'X6',
            // ],

            [
                'place' => 'BASSENS',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'BATA',
                'country' => 'EQUATORIAL GUINEA',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'BEIHAI',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BEIJIAO',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BEIRA',
                'country' => 'MOZAMBIQUE',
                'cluster' => 'Mozambique Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'BEIRUT',
                'country' => 'LEBANON',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BEJAIA',
                'country' => 'ALGERIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BELAWAN',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BELFAST',
                'country' => 'IRELAND',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'BELLBAY',
            //     'country' => 'AUSTRALIA',
            //     'cluster' => 'OCEANIA CLUSTER',
            //     'route' => 'W1',
            // ],

            // [
            //     'place' => 'BENGHAZI',
            //     'country' => 'LIBYA',
            //     'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'BERBERA',
                'country' => 'SOMALIA',
                'cluster' => 'HOA AND EAST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'BERGEN',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'BILBAO',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BISSAU',
                'country' => 'GUINEA-BISSAU',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            // [
            //     'place' => 'BIZERTA',
            //     'country' => 'TUNISIA',
            //     'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'BLUFF',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BOMA',
                'country' => 'CONGO, DEM. REP. OF',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'BOMBAY',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            // [
            //     'place' => 'BOSPERUS',
            //     'country' => 'TURKEY',
            //     'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'BOSTON',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'BREMERHAVEN',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BREST',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'BREVIK',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'BRIDGETOWN',
                'country' => 'BARBADOS',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'BRINDISI',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'BRISBANE',
                'country' => 'AUSTRALIA',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BRISTOL',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BROOKLYN',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'BRUNSBUTTEL',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BUENAVENTURA',
                'country' => 'COLOMBIA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'BUENOS AIRES',
                'country' => 'ARGENTINA',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'BUJUMBURA',
                'country' => 'BURUNDI',
                'cluster' => 'Kenya Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'BURGAS',
                'country' => 'BULGARIA',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'BURNIE',
            //     'country' => 'AUSTRALIA',
            //     'cluster' => 'OCEANIA CLUSTER',
            //     'route' => 'W1',
            // ],

            [
                'place' => 'BUSAN',
                'country' => 'KOREA, SOUTH',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CABEDELO',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'CABINDA',
                'country' => 'ANGOLA',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'CADIZ',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Caen, France',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'CAGAYAN DE ORO',
            //     'country' => 'PHILIPPINES',
            //     'cluster' => 'SOUTH EAST ASIA CLUSTER',
            //     'route' => 'W1',
            // ],

            [
                'place' => 'CAGLIARI',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Cai Lan, Vietnam',
                'country' => 'VIETNAM',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CAIRO',
                'country' => 'EGYPT',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'CALABAR',
                'country' => 'NIGERIA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'CALCUTTA',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            // [
            //     'place' => 'CALETA PAULA',
            //     'country' => 'ARGENTINA',
            //     'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
            //     'route' => 'X6',
            // ],

            // [
            //     'place' => 'CALETERA',
            //     'country' => 'COSTA RICA',
            //     'cluster' => 'Caribbean Sea Cluster',
            //     'route' => 'W4',
            // ],

            [
                'place' => 'CALLAO',
                'country' => 'PERU',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'CAMPANA',
            //     'country' => 'ARGENTINA',
            //     'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
            //     'route' => 'X6',
            // ],

            [
                'place' => 'CAPE TOWN',
                'country' => 'SOUTH AFRICA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'CARTAGENA',
                'country' => 'COLOMBIA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'CARTAGENA (COLOMBIA)',
                'country' => 'COLOMBIA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'Cartagena,Spain',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'CASABLANCA',
                'country' => 'MOROCCO',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'CASTELLON',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'castiglione delle stiviere',
                'country' => 'ITALY',
                'cluster' => 'ITALY CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Castries,   St Lucia',
                'country' => 'ST LUCIA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'CATANIA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'CAUCEDO',
                'country' => 'DOMINICAN REPUBLIC',
                'cluster' => 'CARIBBEAN SEA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'CEBU',
                'country' => 'PHILIPPINES',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CEUTA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'CHANGSHA',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CHANGZHOU',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CHARLESTON',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'CHARLOTTE',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'CHATELDON',
            //     'country' => 'FRANCE',
            //     'cluster' => 'FRANCE CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'CHENGDU',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CHENNAI',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'CHICAGO',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER.',
                'route' => 'W4',
            ],

            [
                'place' => 'CHITTAGONG',
                'country' => 'BANGLADESH',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'CHIWAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CHONGJIN',
                'country' => 'KOREA,NORTH',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CHONGQING',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CINCINNATI',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'CIVITAVECCHIA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'CLEVELAND',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'COCHIN',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'COCO SOLO',
                'country' => 'PANAMA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'COEGA',
                'country' => 'SOUTH AFRICA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'COLOMBO',
                'country' => 'SRI LANKA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'CONAKRY',
                'country' => 'GUINEA',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'CONSTANTZA',
                'country' => 'ROMANIA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'COPENHAGEN',
                'country' => 'DENMARK',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'CORK',
                'country' => 'IRELAND',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'CORONEL',
                'country' => 'CHILE',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'COTONOU',
                'country' => 'BENIN',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'COVENTRY',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Cristobel,   Panama',
                'country' => 'PANAMA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'DAKAR',
                'country' => 'SENEGAL',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'DALIAN',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'DAMIETTA',
                'country' => 'EGYPT',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DAMMAM',
                'country' => 'SAUDI ARABIA',
                'cluster' => 'Saudi Arabia Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'DAR ES SALAAM',
                'country' => 'TANZANIA',
                'cluster' => 'Kenya Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'Davao,   Philliphines',
                'country' => 'PHILIPPINES',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'DEGRAD DES CANNES',
                'country' => 'FRENCH GUIANA',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'DELFZIJL',
                'country' => 'NETHERLANDS',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DIEPPE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'DJIBOUTI',
                'country' => 'DJIBOUTI',
                'cluster' => 'HOA AND EAST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'DOHA',
                'country' => 'QATAR',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'DOUALA',
                'country' => 'CAMEROON',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'DOULLENS',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'DOVER',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'DUBAI',
            //     'country' => 'U. A. E.',
            //     'cluster' => 'United Arab Emirates Cluster',
            //     'route' => 'W2',
            // ],

            [
                'place' => 'DUBLIN',
                'country' => 'IRELAND',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DUNKERQUE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'DUPPIGHEIM',
                'country' => 'FRANCE',
                'cluster' => 'FRANCE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DURBAN',
                'country' => 'SOUTH AFRICA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'DURRES',
                'country' => 'ALBANIA',
                'cluster' => 'GREECE CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'DUTCH HARBOUR',
            //     'country' => 'UNITED STATES',
            //     'cluster' => 'NORTH AMERICA CLUSTER',
            //     'route' => 'W4',
            // ],

            [
                'place' => 'East London,   South Africa',
                'country' => 'SOUTH AFRICA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'EGERSUND',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Laayoune (El Aaiun)',
                'country' => 'MOROCCO',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'EL DEKHEILA',
                'country' => 'EGYPT',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'El Tablazo,   Venezuela',
                'country' => 'VENEZUELA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'EMDEN',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ENSENADA',
                'country' => 'MEXICO',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'ESBJERG',
                'country' => 'DENMARK',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'EVYAP',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'FANGCHENG',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'FELIXSTOWE',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'FERROL',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'FLOROE',
            //     'country' => 'NORWAY',
            //     'cluster' => 'Scandinavia Cluster',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'FORCADOS',
                'country' => 'NIGERIA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'FORTALEZA',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            // [
            //     'place' => 'FORT-DE-FRANCE',
            //     'country' => 'MARTINIQUE',
            //     'cluster' => 'CARIBBEAN SEA CLUSTER',
            //     'route' => 'W4',
            // ],

            [
                'place' => 'FOS SUR MER',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'FOSHAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'FREDERICIA',
                'country' => 'DENMARK',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'FREDERIKSTAD',
            //     'country' => 'NORWAY',
            //     'cluster' => 'Scandinavia Cluster',
            //     'route' => 'W3',
            // ],

            // [
            //     'place' => 'FREEMANTLE',
            //     'country' => 'AUSTRALIA',
            //     'cluster' => 'OCEANIA CLUSTER',
            //     'route' => 'W1',
            // ],

            [
                'place' => 'FREEPORT',
                'country' => 'MALTA',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Freeport,   Bahamas',
                'country' => 'BAHAMAS',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'FREETOWN',
                'country' => 'SIERRA LEONE',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'FREMANTLE',
                'country' => 'AUSTRALIA',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            // [
            //     'place' => 'FUJAIRAH',
            //     'country' => 'U. A. E.',
            //     'cluster' => 'United Arab Emirates Cluster',
            //     'route' => 'W2',
            // ],

            [
                'place' => 'FUQING',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'FUSA',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'FUZHOU',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'GABORONE',
                'country' => 'BOTSWANA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'GALLICO',
                'country' => 'ITALY',
                'cluster' => 'ITALY CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GAOMING',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'GAVLE',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GDANSK',
                'country' => 'POLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GDYNIA',
                'country' => 'POLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GEBZE',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GEMLIK',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GENERAL SANTOS',
                'country' => 'PHILIPPINES',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'GENOA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'GEORGETOWN',
                'country' => 'GUYANA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'GIBRALTAR',
                'country' => 'GIBRALTAR',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GIJON',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GIOIA TAURO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'GOTHENBURG',
                'country' => 'SWEDEN',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'GRANGE MOUTH',
            //     'country' => 'UNITED KINGDOM',
            //     'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'GRANGEMOUTH',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GRAVESEND',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GREENOCK',
                'country' => 'UNITED KINGDOM CLUSTER',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GREENVILLE',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'GRIDLEY',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'GUAM',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'GUANGZHOU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Guanta,   Venezuela',
                'country' => 'VENEZUELA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'Guatemala City,   Guatemala',
                'country' => 'GUATEMALA',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'GUAYAQUIL',
                'country' => 'ECUADOR',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'HAVIK',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'HAIFA',
                'country' => 'ISRAEL',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'HAIKOU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HAIPHONG',
                'country' => 'VIETNAM',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HAKATA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HALDIA',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'HALIFAX APT',
                'country' => 'CANADA',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'HAMBURG',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'HAMBURG PARK',
            //     'country' => 'GERMANY',
            //     'cluster' => 'NORTH WEST CONTINENT CLUSTER',
            //     'route' => 'W3',
            // ],

            // [
            //     'place' => 'HAMINA',
            //     'country' => 'FINLAND',
            //     'cluster' => 'EASTERN EUROPE CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'HARARE',
                'country' => 'ZIMBABWE',
                'cluster' => 'Mozambique Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'HAREID',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'HAUGESUND',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'HAVANA',
                'country' => 'CUBA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'Haydarpasa,   Turkey',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'HAZIRA',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'HELSINGBORG',
                'country' => 'SWEDEN',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'HELSINKI',
                'country' => 'FINLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Iraklion (Heraklion)',
                'country' => 'GREECE',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'HIROSHIMA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HO CHI MINH CITY',
                'country' => 'VIETNAM',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HODEIDAH',
                'country' => 'YEMEN',
                'cluster' => 'Saudi Arabia Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'HONG KONG',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Honolulu,   United States',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'HOUSTON',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'HUANGPU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HUANGSHI',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'IKSAN',
                'country' => 'KOREA, SOUTH',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            // [
            //     'place' => 'ILYICHEVSK',
            //     'country' => 'UNITED KINGDOM',
            //     'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'INCHON',
                'country' => 'KOREA, SOUTH',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'INDIANAPOLIS',
                'country' => 'UNITES STATES',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'Iquique,   Chile',
                'country' => 'CHILE',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'Ishikariwanshinko',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ISKENDERUN',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ISTANBUL',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ITAJAI',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'IZMIR',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'IZMIT KORFEZI',
            //     'country' => 'TURKEY',
            //     'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'JACKSONVILLE',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'JAKARTA',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Port Jawaharlal Nehru',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'JEBEL ALI',
                'country' => 'U. A. E.',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'JEDAH',
                'country' => 'SAUDI ARABIA',
                'cluster' => 'Saudi Arabia Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'JIANGMEN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'JIUJIANG',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'JOHANNESBURG',
                'country' => 'SOUTH AFRICA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'JUBAIL',
                'country' => 'SAUDI ARABIA',
                'cluster' => 'Saudi Arabia Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'KALININGRAD',
                'country' => 'RUSSIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Kandla,   India',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'KANSAS CITY',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'KAOHSIUNG',
                'country' => 'TAIWAN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'KARACHI',
                'country' => 'PAKISTAN',
                'cluster' => 'Pakistan Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'KARLSRUHE',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'KEELUNG',
                'country' => 'TAIWAN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            // [
            //     'place' => 'KHALIFA BIN SALMAN',
            //     'country' => 'BAHRAIN',
            //     'cluster' => 'SAUDI ARABIA CLUSTER',
            //     'route' => 'W2',
            // ],

            [
                'place' => 'KHARTOUM',
                'country' => 'DJIBOUTI',
                'cluster' => 'HOA AND EAST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'KHOR AL FAKKAN',
                'country' => 'U.A.E',
                'cluster' => 'UNITES ARAB EMIRATES CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'KLAIPEDA',
                'country' => 'LITHUANIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'KOBE',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            // [
            //     'place' => 'KOLKATA',
            //     'country' => 'INDIA',
            //     'cluster' => 'INDIA AND BANGLADESH CLUSTER',
            //     'route' => 'W2',
            // ],

            [
                'place' => 'KOPER',
                'country' => 'SLOVENIA',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'KOTKA',
                'country' => 'FINLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'KRAICHTAL',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'KRISTIANSAND',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Kuwait,   Kuwait',
                'country' => 'KUWAIT',
                'cluster' => 'SAUDI ARABIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'KWANGYANG',
                'country' => 'KOREA, SOUTH',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'LA GOULETTE',
                'country' => 'TUNISIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LA PALLICE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LA ROCHELLE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LA SPEZIA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LAEM CHABANG',
                'country' => 'THAILAND',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'LAGOS',
                'country' => 'NIGERIA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'LANGAR',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LANSHI',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'LARVIK',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LAS PALMAS (ESP.)',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LATAKIA',
                'country' => 'SYRIA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'LE HAVRE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LE PIREE',
                'country' => 'GREECE',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Le Verdon Su Mer,   France',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LEAMINGTON SPA',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'LEGHORN',
            //     'country' => 'ITALY',
            //     'cluster' => 'Italy Cluster',
            //     'route' => 'W3',
            // ],

            // [
            //     'place' => 'LEIXOES',
            //     'country' => 'PORTUGAL',
            //     'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'Leliu,   China',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'LIANYUNGANG',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'LIBREVILLE',
                'country' => 'GABON',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'LIMASSOL',
                'country' => 'CYPRUS',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LISBON',
                'country' => 'PORTUGAL',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LIVERPOOL',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LIVORNO',
                'country' => 'ITALY',
                'cluster' => 'ITALY CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LOME',
                'country' => 'TOGO',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'LONDON',
                'country' => 'UNITED KINGDOM CLUSTER',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LONG BEACH',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'LONGONI',
                'country' => 'COMORE  ISLAND',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'LOS ANGELES',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'ST LOUIS',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'LUANDA',
                'country' => 'ANGOLA',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'Ludhiana,   India',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'LYTTELTON',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Madrid,   Spain',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MALABO',
                'country' => 'EQUATORIAL GUINEA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'MALAGA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MALTA',
                'country' => 'ITALY',
                'cluster' => 'ITALY CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MANGALORE',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'MANILA',
                'country' => 'PHILIPPINES',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'MANZANILLO (MEXICO)',
                'country' => 'MEXICO',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'MANZANILLO',
                'country' => 'PANAMA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'MAPUTO',
                'country' => 'MOZAMBIQUE',
                'cluster' => 'Mozambique Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'MARIEL',
                'country' => 'CUBA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'MARIENHEIDE',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'MARIN PONTEVEDRA',
            //     'country' => 'SPAIN',
            //     'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'MARMAGAO',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'MARPORT',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MARSAXLOKK',
                'country' => 'MALTA',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'MARSEILLE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'MATADI',
                'country' => 'CONGO, DEM. REP. OF',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'MELBOURNE',
                'country' => 'AUSTRALIA',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'MEMPHIS',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'MERSIN',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MESAIEED',
                'country' => 'QATAR',
                'cluster' => 'UNITED ARAB EMIRATE CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'MIAMI',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'Mina Qabus,   Oman',
                'country' => 'OMAN',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'MINDELO',
                'country' => 'CAPE VERDE ISLAND',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'MOBILE',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'MOIN',
                'country' => 'COSTA RICA',
                'cluster' => 'CARIBBEAN SEA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'MOJI',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'MOMBASA',
                'country' => 'KENYA',
                'cluster' => 'Kenya Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'MONROVIA',
                'country' => 'LIBERIA',
                'cluster' => 'IVORY COAST CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'MONTEREAU-FAULT-YONNE',
                'country' => 'FRANCE',
                'cluster' => 'FRANCE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MONTEVIDEO',
                'country' => 'URUGUAY',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'MONTOIR',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'MONTREAL',
                'country' => 'CANADA',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'MUMBAI',
            //     'country' => 'INDIA',
            //     'cluster' => 'INDIA AND BANGLADESH CLUSTER',
            //     'route' => 'W2',
            // ],

            [
                'place' => 'MUNDRA',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'Muscat, MU Oman',
                'country' => 'OMAN',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'MUUGA',
                'country' => 'ESTONIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'NAGOYA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NANCHANG',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Nanhai,   China',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NANJING',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NANSHA',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NANTONG',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NAOETSU',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Napier,   New Zealand',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NAPLES',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'NAVEGANTES',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'NELSON',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'New Delhi,   India',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'NEW ORLEANS',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'Port Taranaki/New Plymouth',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'NEW YORK',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'NEWARK',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'NHAVA SHEVA',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'NIIGATA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NINGBO',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'NORFOLK',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'NORRKOPING',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'NOUADHIBOU',
                'country' => 'MAURITANIA',
                'cluster' => 'NORTHERN WEST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'NOUAKCHOTT',
                'country' => 'MAURITANIA',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'NOVOROSSIYSK',
                'country' => 'RUSSIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'OAKLAND',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'OCOA BAY',
            //     'country' => 'DOMINICAN REPUBLIC',
            //     'cluster' => 'Caribbean Sea Cluster',
            //     'route' => 'W4',
            // ],

            [
                'place' => 'ODENSE',
                'country' => 'DENMARK',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'ODESSA',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'OMAEZAKI',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ONNE',
                'country' => 'NIGERIA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => '(ALG) ORAN',
                'country' => 'ALGERIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'OSAKA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'OSLO',
                'country' => 'NORWAY',
                'cluster' => 'Scandinavia Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'OULU',
                'country' => 'FINLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'PADANG',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PALERMO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'PANJANG',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PARANAGUA',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'PASIR GUDANG',
                'country' => 'MALAYSIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Pecem,   Brazil',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'PENANG',
                'country' => 'MALAYSIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PERAWANG',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PHILADELPHIA',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'PHILIPSBURG',
                'country' => 'SAINT MARTIN',
                'cluster' => 'Carribean Sea Cluster',
                'route' => 'X6',
            ],

            [
                'place' => 'PHNOM PENH',
                'country' => 'CAMBODIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Pipavav (Victor) Port',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'PIRAEUS',
                'country' => 'GREECE',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'PLOCE',
                'country' => 'CROATIA',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'POINTE DES GALETS',
                'country' => 'REUNION',
                'cluster' => 'France Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'POINTE NOIRE',
                'country' => 'CONGO',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'POINTE-A-PITRE',
                'country' => 'GUADELOUPE',
                'cluster' => 'Carribean Sea Cluster',
                'route' => 'X6',
            ],

            [
                'place' => 'PORCHEVILLE',
                'country' => 'FRANCE',
                'cluster' => 'FRANCE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Portsmouth',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'PORT AU PRINCE',
                'country' => 'HAITI',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'PORT CHALMERS',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PORT ELIZABETH',
                'country' => 'SOUTH AFRICA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'PORT EVERGLADES',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'PORT GALLICE',
            //     'country' => 'FRANCE',
            //     'cluster' => 'FRANCE CLUSTER',
            //     'route' => 'W3',
            // ],

            [
                'place' => 'PORT GENTIL',
                'country' => 'GABON',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'PORT KELANG',
                'country' => 'MALAYSIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PORT LOUIS',
                'country' => 'MAURITIUS',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            // [
            //     'place' => 'PORT QASIM',
            //     'country' => 'PAKISTAN',
            //     'cluster' => 'Pakistan Cluster',
            //     'route' => 'W2',
            // ],

            // [
            //     'place' => 'PORT REUNION',
            //     'country' => 'REUNION',
            //     'cluster' => 'France Cluster',
            //     'route' => 'W5',
            // ],

            [
                'place' => 'PORT SAID',
                'country' => 'EGYPT',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Port Soudan,   Sudan',
                'country' => 'SUDAN',
                'cluster' => 'HOA AND EAST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'PORTBURY',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'PORTVENDRES',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'PORT-VENDRES',
                'country' => 'FRANCE',
                'cluster' => 'FRANCE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'POTI',
                'country' => 'GEORGIA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'POZZALO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'PRAIA',
                'country' => 'CAPE VERDE ISLAND',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'PRETORIA',
                'country' => 'SOUTH AFRICA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'PUERTO BARRIOS',
                'country' => 'GUATEMALA',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'PUERTO DESEADO',
            //     'country' => 'ARGENTINA',
            //     'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
            //     'route' => 'X6',
            // ],

            [
                'place' => 'PUERTO LIMON',
                'country' => 'COSTA RICA',
                'cluster' => 'CARIBBEAN SEA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'PUERTO SANTO TOMAS DE CASTILLA',
                'country' => 'GUATEMALA',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'PUTZBRUNN',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'QAPCO',
            //     'country' => 'QATAR',
            //     'cluster' => 'United Arab Emirates Cluster',
            //     'route' => 'W2',
            // ],

            [
                'place' => 'QINGDAO',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'QINHUANGDAO',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'QINZHOU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'RADES',
                'country' => 'TUNISIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'RAUMA',
                'country' => 'FINLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'RAVENNA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'RIGA',
                'country' => 'LATVIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'RIJEKA',
                'country' => 'CROATIA',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'RIO DE JANEIRO',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'RIO GRANDE',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'Rio Haina,   Dominica RepublicTRUE',
                'country' => 'DOMINICAN REPUBLIC',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'RONGQI',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ROSARIO',
                'country' => 'ARGENTINA',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'ROTTERDAM',
                'country' => 'NETHERLANDS',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ROUEN',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'SALALAH',
                'country' => 'OMAN',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'SALERNO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'SALVADOR',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'SAMSUN',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SAN ANTONIO',
                'country' => 'CHILE',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'SAN FRANCISCO',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'SAN PEDRO',
                'country' => 'IVORY COAST',
                'cluster' => 'Ivory Coast Cluster',
                'route' => 'W5',
            ],

            // [
            //     'place' => 'SANGCHENG',
            //     'country' => 'PRS',
            //     'cluster' => 'GREATER CHINA CLUSTER',
            //     'route' => 'W1',
            // ],

            [
                'place' => 'SANSHAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SANSHUI',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SANTO DOMINGO',
                'country' => 'DOMINICAN REPUBLIC',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'SANTOS',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'Sao Francisco Do Sul,   Brazil',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'SAVANNAH',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'SEATTLE',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'Select Origin',
            //     'country' => 'Country',
            //     'cluster' => 'Cluster',
            //     'route' => 'Route',
            // ],

            [
                'place' => 'SEMARANG',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SENTO SE',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'SETE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'SETUBAL',
                'country' => 'PORTUGAL',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SEVILLE',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SFAX',
                'country' => 'TUNISIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Bandar Shahid Rajaee',
                'country' => 'IRAN',
                'cluster' => 'Iran Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'SHANGHAI',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SHANTOU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SHARJAH',
                'country' => 'U. A. E.',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'SHEKOU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SHIMIZU',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SHUAIBA',
                'country' => 'KUWAIT',
                'cluster' => 'SAUDI ARABIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'SHUNDE',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SHUWAIKH',
                'country' => 'KUWAIT',
                'cluster' => 'SAUDI ARABIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'SIHANOUKVILLE',
                'country' => 'CAMBODIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SINES',
                'country' => 'PORTUGAL',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SINGAPORE',
                'country' => 'SINGAPORE',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SKIKDA',
                'country' => 'ALGERIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SOHAR',
                'country' => 'OMAN',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'SONGKHLA',
                'country' => 'THAILAND',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SOUTHAMPTON',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ST.PETERSBURG',
                'country' => 'RUSSIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'STARACHOWICE',
                'country' => 'POLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'STOCKHOLM',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'STRATFORD-UPON-AVON',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SUAPE',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'SURABAYA',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SWANSCOMBE',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SWANSEA',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'SYDNEY',
                'country' => 'AUSTRALIA',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SZCZECIN',
                'country' => 'POLAND',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TAICANG',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TAICHUNG',
                'country' => 'TAIWAN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TAIPEI',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TAIZHOU',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TAKORADI',
                'country' => 'GHANA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'TALLINN',
                'country' => 'ESTONIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TAMATAVE',
                'country' => 'MADAGASCAR',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'TAMWORTH',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TANGA',
                'country' => 'TANZANIA',
                'cluster' => 'Kenya Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'TANGER',
                'country' => 'MOROCCO',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TANJUNG PELEPAS',
                'country' => 'MALAYSIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TANJUNG PRIOK',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TARANTO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'TARRAGONA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TARTUS',
                'country' => 'SYRIA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'TAURANGA',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TEESPORT',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TEMA',
                'country' => 'GHANA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'TENERIFE',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Thamesport,   United KingdomTRUE',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'THESSALONIKI',
                'country' => 'GREECE',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'TIANJIN / XINGANG',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TILBURY',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TOAMASINA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TOKYO',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'TOMAKOMAI',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'TORONTO',
                'country' => 'CANADA',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'TOULON',
                'country' => 'FRANCE',
                'cluster' => 'FRANCE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TRABZON',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TRAPANI',
                'country' => 'ITALY',
                'cluster' => 'ITALY CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TRIESTE',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'TRIPOLI',
                'country' => 'LIBYA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TUNIS',
                'country' => 'TUNISIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TUTICORIN',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'VADO LIGURE',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'VALENCIA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VALPARAISO',
                'country' => 'CHILE',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'VANCOUVER',
                'country' => 'CANADA',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'VARNA',
                'country' => 'BULGARIA',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'VASTERAS',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VENEZIA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'VERA CRUZ',
                'country' => 'MEXICO',
                'cluster' => 'Middle America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'VIGO',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VILA DO CONDE',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'VILLA CORTESE',
                'country' => 'ITALY',
                'cluster' => 'ITALY CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VILLAGARCIA DE AROSA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VISAPHAPATNAM',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'VITORIA',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'VUNG TAU',
                'country' => 'VIETNAM',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'WALLHAMN',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'WALVIS BAY',
                'country' => 'NAMIBIA',
                'cluster' => 'South Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'WEIHAI',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'WELLINGTON (NZ)',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'WENZHOU',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'WUHAN',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'WUHU',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'XIAMEN',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'XIAOLAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YANGSHAN',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YANGZHOU',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YANTAI',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YANTIAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YICHANG',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YILPORT',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'YOKKAICHI',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YOKOHAMA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ZARATE',
                'country' => 'ARGENTINA',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'Zeebrugge,   Belgium',
                'country' => 'BELGIUM',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'ZHANGJIAGANG',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ZHANJIANG',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ZHAOQING',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ZHAPU',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ZHENJIANG',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ZHONGSHAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ZHUHAI',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'MAKASSAR',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'IMMINGHAM',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VALENCE',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'NEWTOWN',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'KUMPORT',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'LUZHOU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SAGUNTO',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'AHUS',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BERGAMO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'CORINTO',
                'country' => 'NICARAGUA',
                'cluster' => 'MIDDLE AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'POLA DE LENA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TEKIRDAG',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VLISSINGEN',
                'country' => 'NETHERLANDS',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DETROIT',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'MINNEAPOLIS',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'KAMPONG SAOM',
                'country' => 'CAMBODIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => '(ARG) ORAN',
                'country' => 'ARGENTINA',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'BELEM',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'LAS PALMAS (ARG.)',
                'country' => 'ARGENTINA',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'SANTANDER',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Bandar Shahid Rajaee',
                'country' => 'IRAN',
                'cluster' => 'Iran Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'MISURATA',
                'country' => 'LIBYA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'VILLANUOVA SUL CLISI',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'GIUSSANO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'NASSAU',
                'country' => 'BAHAMAS',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'COLOMBO (BR.)',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'KRISHNAPATNAM',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'ST MARTIN',
                'country' => 'SAINT MARTIN',
                'cluster' => 'Carribean Sea Cluster',
                'route' => 'X6',
            ],

            [
                'place' => 'PAVIA',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'CHANG ON',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PARAMARIBO',
                'country' => 'SURINAME',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'BAR',
                'country' => 'MONTENEGRO',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'YANGON',
                'country' => 'MYANMAR',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'GUSTAVIA',
                'country' => 'GUADELOUPE',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'X6',
            ],

            [
                'place' => 'TOYAMA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'LOUISVILLE',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'WILLEMSTAD',
                'country' => 'CURACAO',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'BOURGANEUF',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'COLUMBUS',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'VISHAKHAPATNAM',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'San Juan',
                'country' => 'PERU',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'PASIR PANJANG',
                'country' => 'MALAYSIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ITAPOA',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'GALVESTON',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            // [
            //     'place' => 'PYEONGTAEK',
            //     'country' => 'KOREA, SOUTH',
            //     'cluster' => 'NORTH EAST ASIA CLUSTER',
            //     'route' => 'W1',
            // ],

            [
                'place' => 'ULSAN',
                'country' => 'KOREA, SOUTH',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HAMBANTOTA',
                'country' => 'SRI LANKA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'SANBU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CHENGHAI LAIWU',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SOUSSE',
                'country' => 'TUNISIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'WORCESTER',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'JIANGYIN',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'DENVER',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'YUNFU',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SANTA CRUZ DE LA PALMA',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MINA ABDULLAH',
                'country' => 'KUWAIT',
                'cluster' => 'SAUDI ARABIA CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'Lanzarote',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Shatian',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => '(CANADA) ODESSA',
                'country' => 'CANADA',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'Puerto del Rosario-Fuerteventura',
                'country' => 'SPAIN',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'AIKAKITA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'KOCAELI',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'NOUMEA',
                'country' => 'NEW CALEDONIA',
                'cluster' => 'Caribbean Sea Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'MALMO',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DONGGUAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SAN BENEDETTO',
                'country' => 'ITALY',
                'cluster' => 'Italy Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'LAHORE',
                'country' => 'PAKISTAN',
                'cluster' => 'Pakistan Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'SOCETU',
                'country' => 'ROMANIA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Nashville',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'ASTARA',
                'country' => 'AZERBAIJAN',
                'cluster' => 'Iran Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'ACCRA',
                'country' => 'GHANA',
                'cluster' => 'Central West Africa Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'ALAGOINHAS',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'CRANFORD',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'QINGXI',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'St Louis-de-Montferrand',
                'country' => 'FRANCE',
                'cluster' => 'France Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Moroni',
                'country' => 'COMORE ISLAND',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'ARKANSAS CITY',
                'country' => 'UNITED STATES',
                'cluster' => 'NORTH AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'AALBORG',
                'country' => 'DENMARK',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'NACALA',
                'country' => 'MOZAMBIQUE',
                'cluster' => 'Mozambique Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'AITOS',
                'country' => 'BULGARIA',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'SENDAI',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => '(BG)BATA',
                'country' => 'BULGARIA',
                'cluster' => 'Greece Cluster',
                'route' => 'W3',
            ],

            [
                'place' => 'Umm Qasr',
                'country' => 'IRAQ',
                'cluster' => 'Iran Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'BATUMI',
                'country' => 'GEORGIA',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'AL AIN',
                'country' => 'U.A.E.',
                'cluster' => 'United Arab Emirates Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'VILLETA',
                'country' => 'PARAGUAY',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'YARIMCA',
                'country' => 'TURKEY',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'BISCHWEIER',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DURBACH',
                'country' => 'GERMANY',
                'cluster' => 'NORTH WEST CONTINENT CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'TOYAMASHINKO',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => '(UKRAINE) ODESSA',
                'country' => 'UKRAINE',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'HEFEI',
                'country' => 'PRE',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'WESTPORT/PORT KLANG',
                'country' => 'MALAYSIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'MOGADISHU',
                'country' => 'SOMALIA',
                'cluster' => 'HOA AND EAST AFRICA CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'TIMARU',
                'country' => 'NEW ZEALAND',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ANQING',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'SAN VICENTE',
                'country' => 'CHILE',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'HUNG YEN',
                'country' => 'VIETNAM',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'AL QAHMAH',
                'country' => 'SAUDI ARABIA',
                'cluster' => 'Saudi Arabia Cluster',
                'route' => 'W2',
            ],

            [
                'place' => 'HALMSTAD',
                'country' => 'SWEDEN',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'GAOLAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BENOA',
                'country' => 'INDONESIA',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'YIBIN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'GHAZAOUET',
                'country' => 'ALGERIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MOSS',
                'country' => 'NORWAY',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'PAITA',
                'country' => 'PERU',
                'cluster' => 'West Coast South America Cluster',
                'route' => 'W4',
            ],

            [
                'place' => 'ITAGUAI',
                'country' => 'BRAZIL',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'YUEYANG',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Terport (San Antonio)',
                'country' => 'PARAGUAY',
                'cluster' => 'EAST COAST SOUTH AMERICA CLUSTER',
                'route' => 'X6',
            ],

            [
                'place' => 'HUADU',
                'country' => 'PRN',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'ORKANGER',
                'country' => 'NORWAY',
                'cluster' => 'SCANDINAVIA CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'MAJUNGA',
                'country' => 'MADAGASCAR',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'HAMADA',
                'country' => 'JAPAN',
                'cluster' => 'NORTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'XINAN',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'LIANJIANG',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'HALUL',
                'country' => 'QATAR',
                'cluster' => 'UNITED ARAB EMIRATE CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'BERDSK',
                'country' => 'RUSSIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'DJEN-DJEN',
                'country' => 'ALGERIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'KAMSAR',
                'country' => 'GUINEA',
                'cluster' => 'Senegal Cluster',
                'route' => 'W5',
            ],

            [
                'place' => 'BIZERTE',
                'country' => 'TUNISIA',
                'cluster' => 'WESTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'KRIBI',
                'country' => 'CAMEROON',
                'cluster' => 'CAMEROUN, ANGOLA AND DRC CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'DARWIN',
                'country' => 'AUSTRALIA',
                'cluster' => 'OCEANIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'BOR',
                'country' => 'RUSSIA',
                'cluster' => 'EASTERN EUROPE CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'KAKINADA',
                'country' => 'INDIA',
                'cluster' => 'INDIA AND BANGLADESH CLUSTER',
                'route' => 'W2',
            ],

            [
                'place' => 'ILLICHIVSK',
                'country' => 'UKRAINE',
                'cluster' => 'EASTERN MEDITERRANEAN CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'PUERTO CORTES',
                'country' => 'HONDURAS',
                'cluster' => 'MIDDLE AMERICA CLUSTER',
                'route' => 'W4',
            ],

            [
                'place' => 'PORT VICTORIA',
                'country' => 'SEYCHELLES',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'RUGAO',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'CRANBROOK',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            [
                'place' => 'Taicheng (Taishai)',
                'country' => 'PRS',
                'cluster' => 'GREATER CHINA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'Mutsamudu, Anjouan',
                'country' => 'COMORE ISLAND',
                'cluster' => 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
                'route' => 'W5',
            ],

            [
                'place' => 'PILAR',
                'country' => 'PHILIPPINES',
                'cluster' => 'SOUTH EAST ASIA CLUSTER',
                'route' => 'W1',
            ],

            [
                'place' => 'PORTSMOUTH',
                'country' => 'UNITED KINGDOM',
                'cluster' => 'UNITED KINGDOM AND IRELAND CLUSTER',
                'route' => 'W3',
            ],

            // [
            //     'place' => 'KUCHING',
            //     'country' => 'MALAYSIA',
            //     'cluster' => 'SOUTH EAST ASIA CLUSTER',
            //     'route' => 'W1',
            // ],

        ];

        foreach ($loadings as $loading) {
            Loading::create([
                'port_id' => PortCodes::where('port_city', $loading['place'])->select('id')->get()[0]->id,
                'place' => $loading['place'],
                'country' => $loading['country'],
                'cluster' => $loading['cluster'],
                'route' => $loading['route'],
            ]);
        }

    }
}
