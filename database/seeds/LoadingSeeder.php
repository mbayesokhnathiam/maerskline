<?php

use App\Loading;
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
            'port' => 'AALESUND\r\n',
            'place' => 'NORWAY\r\n', 'Scandinavia Cluster\r\n',
            'route' => 'W3\r\n',

            'port' => 'AARHUS',
            'place' => 'DENMARK', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'ABERDEEN',
            'place' => 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'ABIDJAN',
            'place' => 'IVORY COAST', 'Ivory Coast Cluster',
            'route' => 'W5',

            'port' => 'ABU DHABI',
            'place' => 'U. A. E.', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'ACAJUTLA',
            'place' => 'EL SALVADOR', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'ADDIS ABEBA',
            'place' => 'ETHIOPIA', 'HOA AND EAST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'ADELAIDE',
            'place' => 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'ADEN',
            'place' => 'YEMEN', 'Saudi Arabia Cluster',
            'route' => 'W2',

            'port' => 'AGADIR',
            'place' => 'MOROCCO', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'AGALEGA',
            'place' => 'MAURITIUS', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'AGRIGENTO',
            'place' => 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'AHMEDABAD',
            'place' => 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'AHMEDNAGAR',
            'place' => 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'AKITA',
            'place' => 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'AL AQABAH',
            'place' => 'JORDAN', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'AL KHUMS',
            'place' => 'LIBYA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ALEXANDRIA',
            'place' => 'EGYPT', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ALGECIRAS',
            'place' => 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ALGIERS',
            'place' => 'ALGERIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ALIAGA',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ALICANTE',
            'place' => 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ALMERIA',
            'place' => 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ALTAMIRA',
            'place' => 'MEXICO', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'AMBARLI',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'AMBARLI',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'AMBRIZ',
            'place' => 'ANGOLA', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'AMSTERDAM',
            'place' => 'NETHERLANDS', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'ANCONA',
            'place' => 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'ANNABA',
            'place' => 'ALGERIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ANTALYA',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ANTALYA',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ANTANANARIVO',
            'place' => 'MADAGASCAR', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'ANTSIRANANA',
            'place' => 'MADAGASCAR', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'ANTWERP',
            'place' => 'BELGIUM', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'APAPA',
            'place' => 'NIGERIA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'AQABA',
            'place' => 'JORDAN', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'ARICA',
            'place' => 'CHILE', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'ARRECIFE',
            'place' => 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ASALUYEH',
            'place' => 'IRAN', 'Iran Cluster',
            'route' => 'W2',

            'port' => 'ASHDOD',
            'place' => 'ISRAEL', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ASSAB',
            'place' => 'ERITREA', 'HOA AND EAST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'ASTAKOS',
            'place' => 'GREECE', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'ASUNCION',
            'place' => 'PARAGUAY', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'ATAR',
            'place' => 'MAURITANIA', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'ATLANTA',
            'place' => 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'AUCKLAND',
            'place' => 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'AUGUSTA',
            'place' => 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'AUGUSTA',
            'place' => 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'AUSTEVOLL',
            'place' => 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'AVALDSNES',
            'place' => 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'AVCILAR',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BAHIA BLANCA',
            'place' => 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'BAHRAIN',
            'place' => 'BAHRAIN', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'BALBOA',
            'place' => 'PANAMA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'BALTIMORE',
            'place' => 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'BALYKCHY',
            'place' => 'KIRGHIZISTAN', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'BAMAKO',
            'place' => 'MALI', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'BANANA',
            'place' => 'CONGO, DEM. REP. OF', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'BANDAR ABBAS',
            'place' => 'IRAN', 'Iran Cluster',
            'route' => 'W2',

            'port' => 'BANDAR KHOMEINI',
            'place' => 'IRAN', 'Iran Cluster',
            'route' => 'W2',

            'port' => 'BANDIRMA',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BANGALORE',
            'place' => 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'BANGKOK',
            'place' => 'THAILAND', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'BANJUL',
            'place' => 'GAMBIA', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'BARCELONA',
            'place' => 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BARI',
            'place' => 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'BARRANQUILLA',
            'place' => 'COLOMBIA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'BASSE TERRE',
            'place' => 'GUADELOUPE', 'Carribean Sea Cluster',
            'route' => 'X6',

            'port' => 'BASSENS',
            'place' => 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'BATA',
            'place' => 'EQUATORIAL GUINEA', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'BEIHAI',
            'place' => 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'BEIJIAO',
            'place' => 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'BEIRA',
            'place' => 'MOZAMBIQUE', 'Mozambique Cluster',
            'route' => 'W5',

            'port' => 'BEIRUT',
            'place' => 'LEBANON', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BEJAIA (BOUGIE)',
            'place' => 'ALGERIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BELAWAN',
            'place' => 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'BELFAST',
            'place' => 'IRELAND', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'BELLBAY',
            'place' => 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'BENGHAZI',
            'place' => 'LIBYA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BERBERA',
            'place' => 'SOMALIA', 'HOA AND EAST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'BERGEN',
            'place' => 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'BILBAO',
            'place' => 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BISSAU',
            'place' => 'GUINEA-BISSAU', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'BIZERTA',
            'place' => 'TUNISIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BLUFF',
            'place' => 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'BOMA',
            'place' => 'CONGO, DEM. REP. OF', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'BOMBAY',
            'place' => 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'BOSPERUS',
            'place' => 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BOSTON',
            'place' => 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'BREMERHAVEN',
            'place' => 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'BREST',
            'place' => 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'BREVIK',
            'place' => 'NORWAY', 'Scandinavia cluster',
            'route' => 'W3',

            'port' => 'BRIDGETOWN',
            'place' => 'BARBADOS', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'BRINDISI',
            'place' => 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'BRISBANE',
            'place' => 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'BRISTOL',
            'place' => 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'BROOKLYN',
            'place' => 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'BRUNSBUTTEL',
            'place' => 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'BUENAVENTURA',
            'place' => 'COLOMBIA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'BUENOS AIRES',
            'place' => 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'BUJUMBURA',
            'place' => 'BURUNDI', 'Kenya Cluster',
            'route' => 'W5',

            'port' => 'BURGAS',
            'place' => 'BULGARIA', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'BURNIE',
            'place' => 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'BUSAN',
            'place' => 'KOREA, SOUTH', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'CABEDELO',
            'place' => 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'CABINDA',
            'place' => 'ANGOLA', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'CADIZ',
            'place' => 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'CAEN',
            'place' => 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'CAGAYAN DE ORO',
            'place' => 'PHILIPPINES', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'CAGLIARI',
            'place' => 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'CAI LAN', 'VIETNAM', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'CAIRO', 'EGYPT', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'CALABAR', 'NIGERIA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'CALCUTTA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'CALETA PAULA', 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'CALETERA', 'COSTA RICA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'CALLAO', 'PERU', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'CAMPANA', 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'CAPE TOWN', 'SOUTH AFRICA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'CARTAGENA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'CARTAGENA', 'COLOMBIA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'CARTAGENA (COLOMBIA)', 'COLOMBIA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'CARTAGENA (SPAIN)', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'CASABLANCA', 'MOROCCO', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'CASTELLON', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'castiglione delle stiviere', 'ITALY', 'ITALY CLUSTER',
            'route' => 'W3',

            'port' => 'CASTRIES', 'ST LUCIA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'CATANIA', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'CAUCEDO', 'DOMINICAN REPUBLIC', 'CARIBBEAN SEA CLUSTER',
            'route' => 'W4',

            'port' => 'CEBU', 'PHILIPPINES', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'CEUTA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'CHANGSHA', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'CHANGZHOU', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'CHARLESTON', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'CHARLOTTE', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'CHATELDON', 'FRANCE', 'FRANCE CLUSTER',
            'route' => 'W3',

            'port' => 'CHENGDU', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'CHENNAI', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'CHICAGO', 'UNITED STATES', 'NORTH AMERICA CLUSTER.',
            'route' => 'W4',

            'port' => 'CHITTAGONG', 'BANGLADESH', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'CHIWAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'CHONGJIN', 'KOREA,NORTH', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'CHONGQING', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'CINCINNATI', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'CIVITAVECCHIA', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'CLEVELAND', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'COCHIN', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'COCO SOLO', 'PANAMA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'COEGA', 'SOUTH AFRICA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'COLOMBO', 'SRI LANKA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'CONAKRY', 'GUINEA', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'CONSTANTZA', 'ROMANIA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'COPENHAGEN', 'DENMARK', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'CORK', 'IRELAND', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'CORONEL', 'CHILE', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'COTONOU', 'BENIN', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'COVENTRY', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'CRISTOBAL', 'PANAMA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'DAKAR', 'SENEGAL', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'DALIAN', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'DAMIETTA', 'EGYPT', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'DAMMAM', 'SAUDI ARABIA', 'Saudi Arabia Cluster',
            'route' => 'W2',

            'port' => 'DAR ES SALAAM', 'TANZANIA', 'Kenya Cluster',
            'route' => 'W5',

            'port' => 'DAR ES SALAM', 'TANZANIA', 'Kenya Cluster',
            'route' => 'W5',

            'port' => 'DAVAO', 'PHILIPPINES', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'DEGRAD DES CANNES.', 'FRENCH GUIANA', 'France Cluster',
            'route' => 'W3',

            'port' => 'DELFZIJL', 'NETHERLANDS', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'DIEPPE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'DJIBOUTI', 'DJIBOUTI', 'HOA AND EAST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'DOHA', 'QATAR', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'DOUALA', 'CAMEROON', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'DOULLENS', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'DOVER', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'DUBAI', 'U. A. E.', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'DUBLIN', 'IRELAND', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'DUNKERQUE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'DUPPIGHEIM', 'FRANCE', 'FRANCE CLUSTER',
            'route' => 'W3',

            'port' => 'DURBAN', 'SOUTH AFRICA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'DURRES', 'ALBANIA', 'GREECE CLUSTER',
            'route' => 'W3',

            'port' => 'DUTCH HARBOUR', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'EAST LONDON', 'SOUTH AFRICA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'EGERSUND', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'EL AAIUN', 'MOROCCO', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'EL DEKHEILA', 'EGYPT', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'EL TABLASO', 'VENEZUELA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'EMDEN', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'ENSENADA', 'MEXICO', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'ESBJERG', 'DENMARK', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'EVYAP', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'FANGCHENG', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'FELIXSTOWE', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'FERROL', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'FLOROE', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'FORCADOS', 'NIGERIA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'FORTALEZA', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'FORT-DE-FRANCE', 'MARTINIQUE', 'CARIBBEAN SEA CLUSTER',
            'route' => 'W4',

            'port' => 'FOS SUR MER', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'FOSHAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'FOS-SUR-MER', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'FREDERICIA', 'DENMARK', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'FREDERIKSTAD', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'FREEMANTLE', 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'FREEPORT', 'MALTA', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'FREEPORT', 'BAHAMAS', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'FREETOWN', 'SIERRA LEONE', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'FREMANTLE', 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'FUJAIRAH', 'U. A. E.', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'FUQING/XIAMEN', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'FUSA', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'FUZHOU', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'GABORONE', 'BOTSWANA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'GALLICO', 'ITALY', 'ITALY CLUSTER',
            'route' => 'W3',

            'port' => 'GAOMING', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'GAVLE', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'GDANSK', 'POLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'GDYNIA', 'POLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'GEBZE', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'GEMLIK', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'GENERAL SANTOS', 'PHILIPPINES', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'GENOA', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'GEORGETOWN', 'GUYANA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'GIBRALTAR', 'GIBRALTAR', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'GIJON', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'GIOIA TAURO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'GOTHENBURG', 'SWEDEN', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'GRANGE MOUTH', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'GRANGEMOUTH', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'GRAVESEND', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'GREENOCK', 'UNITED KINGDOM CLUSTER', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'GREENVILLE', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'GRIDLEY', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'GUAM', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'GUANGZHOU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'GUANTA', 'VENEZUELA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'GUATEMALA CITY', 'GUATEMALA', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'GUAYAQUIL', 'ECUADOR', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'HAAVIK', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'HAIFA', 'ISRAEL', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'HAIKOU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'HAIPHONG', 'VIETNAM', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'HAKATA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'HALDIA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'HALIFAX APT', 'CANADA', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'HAMBURG', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'HAMBURG PARK', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'HAMINA', 'FINLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'HARARE', 'ZIMBABWE', 'Mozambique Cluster',
            'route' => 'W5',

            'port' => 'HAREID', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'HAUGESUND', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'HAVANA', 'CUBA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'HAYDARPASA', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'HAZIRA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'HELSINGBORG', 'SWEDEN', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'HELSINKI', 'FINLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'HERAKLION', 'GREECE', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'HIROSHIMA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'HO CHI MINH CITY', 'VIETNAM', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'HODEIDAH', 'YEMEN', 'Saudi Arabia Cluster',
            'route' => 'W2',

            'port' => 'HONG KONG', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'HONOLULU', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'HOUSTON', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'HUANGPU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'HUANGSHI', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'IKSAN', 'KOREA, SOUTH', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'ILYICHEVSK', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'INCHON', 'KOREA, SOUTH', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'INDIANAPOLIS', 'UNITES STATES', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W4',

            'port' => 'IQUIQUE', 'CHILE', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'ISHIKARI SHINKO', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'ISKENDERUN', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ISTANBUL', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'ITAJAI', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'IZMIR', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'IZMIT KORFEZI', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'JACKSONVILLE', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'JAKARTA', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'JAWAHARLAL NEHRU', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'JEBEL ALI', 'U. A. E.', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'JEDAH', 'SAUDI ARABIA', 'Saudi Arabia Cluster',
            'route' => 'W2',

            'port' => 'JIANGMEN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'JIUJIANG', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'JOHANNESBURG', 'SOUTH AFRICA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'JUBAIL', 'SAUDI ARABIA', 'Saudi Arabia Cluster',
            'route' => 'W2',

            'port' => 'KALININGRAD', 'RUSSIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'KANDLA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'KANSAS CITY', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'KAOHSIUNG', 'TAIWAN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'KARACHI', 'PAKISTAN', 'Pakistan Cluster',
            'route' => 'W2',

            'port' => 'KARLSRUHE', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'KEELUNG', 'TAIWAN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'KHALIFA BIN SALMAN', 'BAHRAIN', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'KHARTOUM', 'DJIBOUTI', 'HOA AND EAST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'KHOR AL FAKKAN', 'U.A.E', 'UNITES ARAB EMIRATES CLUSTER',
            'route' => 'W2',

            'port' => 'KLAIPEDA', 'LITHUANIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'KOBE', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'KOLKATA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'KOPER', 'SLOVENIA', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'KOTKA', 'FINLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'KRAICHTAL', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'KRISTIANSAND', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'KUWAIT', 'KUWAIT', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'KWANGYANG', 'KOREA, SOUTH', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'LA GOULETTE', 'TUNISIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'LA PALLICE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'LA ROCHELLE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'LA SPEZIA', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'LAEM CHABANG', 'THAILAND', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'LAGOS', 'NIGERIA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'LANGAR', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'LANSHI', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'LARVIK', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'LAS PALMAS (ESP.)', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'LATAKIA', 'SYRIA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W2',

            'port' => 'LE HAVRE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'LE PIREE', 'GREECE', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'LE VERDON', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'LEAMINGTON SPA', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'LEGHORN', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'LEIXOES', 'PORTUGAL', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'LELIU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'LIANYUNGANG', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'LIBREVILLE', 'GABON', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'LIMASSOL', 'CYPRUS', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'LISBON', 'PORTUGAL', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'LIVERPOOL', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'LIVORNO', 'ITALY', 'ITALY CLUSTER',
            'route' => 'W3',

            'port' => 'LOME', 'TOGO', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'LONDON', 'UNITED KINGDOM CLUSTER', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'LONG BEACH', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'LONGONI', 'COMORE  ISLAND', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'LOS ANGELES', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'ST LOUIS', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'LUANDA', 'ANGOLA', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'LUDHIANA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'LYTTELTON', 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'MADRID', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'MALABO', 'EQUATORIAL GUINEA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'MALAGA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'MALTA', 'ITALY', 'ITALY CLUSTER',
            'route' => 'W3',

            'port' => 'MANGALORE', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'MANILA', 'PHILIPPINES', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'MANZANILLO (MEXICO)', 'MEXICO', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'MANZANILLO (PANAMA)', 'PANAMA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'MAPUTO', 'MOZAMBIQUE', 'Mozambique Cluster',
            'route' => 'W5',

            'port' => 'MARIEL', 'CUBA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'MARIENHEIDE', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'MARIN PONTEVEDRA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'MARMAGAO', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'MARPORT', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'MARSAXLOKK', 'MALTA', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'MARSEILLE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'MATADI', 'CONGO, DEM. REP. OF', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'MELBOURNE', 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'MEMPHIS', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'MERSIN', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'MESAIEED', 'QATAR', 'UNITED ARAB EMIRATE CLUSTER',
            'route' => 'W2',

            'port' => 'MIAMI', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'MINA QABOOS', 'OMAN', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'MINDELO', 'CAPE VERDE ISLAND', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'MOBILE', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'MOIN', 'COSTA RICA', 'CARIBBEAN SEA CLUSTER',
            'route' => 'W4',

            'port' => 'MOJI', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'MOMBASA', 'KENYA', 'Kenya Cluster',
            'route' => 'W5',

            'port' => 'MONROVIA', 'LIBERIA', 'IVORY COAST CLUSTER',
            'route' => 'W5',

            'port' => 'MONTEREAU-FAULT-YONNE', 'FRANCE', 'FRANCE CLUSTER',
            'route' => 'W3',

            'port' => 'MONTEVIDEO', 'URUGUAY', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'MONTOIR', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'MONTREAL', 'CANADA', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'MUMBAI', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'MUNDRA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'MUSCAT', 'OMAN', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'MUUGA', 'ESTONIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'NAGOYA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'NANCHANG', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'NANHAI', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'NANJING', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'NANSHA', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'NANTONG', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'NAOETSU', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'NAPIER', 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'NAPLES', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'NAVEGANTES', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'NELSON', 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'NEW DELHI', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'NEW ORLEANS', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'NEW PLYMOUTH', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'NEW YORK', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'NEWARK', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'NHAVA SHEVA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'NIIGATA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'NINGBO', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'NORFOLK', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'NORRKOPING', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'NOUADHIBOU', 'MAURITANIA', 'NORTHERN WEST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'NOUAKCHOTT', 'MAURITANIA', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'NOVOROSSIYSK', 'RUSSIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'OAKLAND', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'OAKLAND', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'OCOA BAY', 'DOMINICAN REPUBLIC', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'ODENSE', 'DENMARK', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'ODESSA', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'OMAEZAKI', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'ONNE', 'NIGERIA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => '(ALG) ORAN', 'ALGERIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'OSAKA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'OSLO', 'NORWAY', 'Scandinavia Cluster',
            'route' => 'W3',

            'port' => 'OULU', 'FINLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'PADANG', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PALERMO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'PANJANG', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PARANAGUA', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'PASIR GUDANG', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PECEM', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'PENANG', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PENANG', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PERAWANG', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PHILADELPHIA', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'PHILIPSBURG', 'SAINT MARTIN', 'Carribean Sea Cluster',
            'route' => 'X6',

            'port' => 'PHNOM PENH', 'CAMBODIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PIPAVAV', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'PIRAEUS', 'GREECE', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'PLOCE', 'CROATIA', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'POINTE DES GALETS', 'REUNION', 'France Cluster',
            'route' => 'W5',

            'port' => 'POINTE NOIRE', 'CONGO', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'POINTE-A-PITRE', 'GUADELOUPE', 'Carribean Sea Cluster',
            'route' => 'X6',

            'port' => 'PORCHEVILLE', 'FRANCE', 'FRANCE CLUSTER',
            'route' => 'W3',

            'port' => 'PORSTHMOUTH', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'PORT AU PRINCE', 'HAITI', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'PORT CHALMERS', 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'PORT ELIZABETH', 'SOUTH AFRICA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'PORT EVERGLADES', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'PORT GALLICE', 'FRANCE', 'FRANCE CLUSTER',
            'route' => 'W3',

            'port' => 'PORT GENTIL', 'GABON', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'PORT KELANG', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PORT LOUIS', 'MAURITIUS', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'PORT QASIM', 'PAKISTAN', 'Pakistan Cluster',
            'route' => 'W2',

            'port' => 'PORT REUNION', 'REUNION', 'France Cluster',
            'route' => 'W5',

            'port' => 'PORT SAID', 'EGYPT', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'PORT SUDAN', 'SUDAN', 'HOA AND EAST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'PORTBURY', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'PORTVENDRES', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'PORT-VENDRES', 'FRANCE', 'FRANCE CLUSTER',
            'route' => 'W3',

            'port' => 'POTI', 'GEORGIA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'POZZALO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'PRAIA', 'CAPE VERDE ISLAND', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'PRETORIA', 'SOUTH AFRICA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'PUERTO BARRIOS', 'GUATEMALA', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'PUERTO DESEADO', 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'PUERTO LIMON', 'COSTA RICA', 'CARIBBEAN SEA CLUSTER',
            'route' => 'W4',

            'port' => 'PUERTO SANTO TOMAS DE CASTILLA', 'GUATEMALA', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'PUTZBRUNN', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'QAPCO', 'QATAR', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'QINGDAO', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'QINHUANGDAO', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'QINZHOU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'RADES', 'TUNISIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'RAUMA', 'FINLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'RAVENNA', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'RIGA', 'LATVIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'RIJEKA', 'CROATIA', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'RIO DE JANEIRO', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'RIO GRANDE', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'RIO HAINA', 'DOMINICAN REPUBLIC', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'RONGQI', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ROSARIO', 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'ROTTERDAM', 'NETHERLANDS', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'ROUEN', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'SALALAH', 'OMAN', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'SALERNO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'SALVADOR', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'SAMSUN', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'SAN ANTONIO', 'CHILE', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'SAN FRANCISCO', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'SAN PEDRO', 'IVORY COAST', 'Ivory Coast Cluster',
            'route' => 'W5',

            'port' => 'SANGCHENG', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SANSHAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SANSHUI', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SANTO DOMINGO', 'DOMINICAN REPUBLIC', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'SANTOS', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'SAO FRANCISCO DO SUL', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'SAVANNAH', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'SEATTLE', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'Select Origin', 'Country', 'Cluster',
            'route' => 'Route',

            'port' => 'SEMARANG', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'SENTO SE', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'SETE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'SETUBAL', 'PORTUGAL', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'SEVILLE', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'SFAX', 'TUNISIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'SHAHID RAJAEE', 'IRAN', 'Iran Cluster',
            'route' => 'W2',

            'port' => 'SHANGHAI', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SHANTOU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SHARJAH', 'U. A. E.', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'SHEKOU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SHIMIZU', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'SHUAIBA', 'KUWAIT', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'SHUNDE', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SHUWAIKH', 'KUWAIT', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'SIHANOUKVILLE', 'CAMBODIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'SINES', 'PORTUGAL', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'SINGAPORE', 'SINGAPORE', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'SKIKDA', 'ALGERIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'SOHAR', 'OMAN', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'SONGKHLA', 'THAILAND', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'SOUTHAMPTON', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'ST.PETERSBURG', 'RUSSIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'ST.PETERSBURG', 'RUSSIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'STARACHOWICE', 'POLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'STOCKHOLM', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'STOCKHOLM', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'STRATFORD-UPON-AVON', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'SUAPE', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'SURABAYA', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'SWANSCOMBE', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'SWANSEA', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'SYDNEY', 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'SZCZECIN', 'POLAND', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'TAICANG', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'TAICHUNG', 'TAIWAN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'TAIPEI', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'TAIZHOU', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'TAKORADI', 'GHANA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'TAKORADI', 'GHANA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'TALLINN', 'ESTONIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'TAMATAVE', 'MADAGASCAR', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'TAMWORTH', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'TANGA', 'TANZANIA', 'Kenya Cluster',
            'route' => 'W5',

            'port' => 'TANGER', 'MOROCCO', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'TANJUNG PELEPAS', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'TANJUNG PRIOK', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'TARANTO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'TARRAGONA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'TARTUS', 'SYRIA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W2',

            'port' => 'TAURANGA', 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'TEESPORT', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'TEMA', 'GHANA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'TENERIFE', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'THAMESPORT', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'THESSALONIKI', 'GREECE', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'TIANJIN / XINGANG', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'TILBURY', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'TOAMASINA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'TOKYO', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W2',

            'port' => 'TOMAKOMAI', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'TORONTO', 'CANADA', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'TOULON', 'FRANCE', 'FRANCE CLUSTER',
            'route' => 'W3',

            'port' => 'TRABZON', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'TRAPANI', 'ITALY', 'ITALY CLUSTER',
            'route' => 'W3',

            'port' => 'TRIESTE', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'TRIPOLI', 'LIBYA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'TUNIS', 'TUNISIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'TUTICORIN', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'VADO LIGURE', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'VALENCIA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'VALPARAISO', 'CHILE', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'VANCOUVER', 'CANADA', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'VARNA', 'BULGARIA', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'VASTERAS', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'VENEZIA', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'VERA CRUZ', 'MEXICO', 'Middle America Cluster',
            'route' => 'W4',

            'port' => 'VIGO', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'VILA DO CONDE', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'VILLA CORTESE', 'ITALY', 'ITALY CLUSTER',
            'route' => 'W3',

            'port' => 'VILLAGARCIA DE AROSA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'VISAPHAPATNAM', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'VITORIA', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'VUNG TAU', 'VIETNAM', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'WALLHAMN', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'WALLHAMN', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'WALVIS BAY', 'NAMIBIA', 'South Africa Cluster',
            'route' => 'W5',

            'port' => 'WEIHAI', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'WELLINGTON (NZ)', 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'WENZHOU', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'WUHAN', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'WUHU', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'XIAMEN', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'XIAOLAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'YANGON', '', '',
            'route' =>  '',

            'port' => 'YANGSHAN', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'YANGZHOU', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'YANTAI', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'YANTIAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'YICHANG', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'YILPORT', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'YOKKAICHI', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'YOKOHAMA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'ZARATE', 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'ZEEBRUGGE', 'BELGIUM', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'ZHANGJIAGANG', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ZHANJIANG', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ZHAOQING', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ZHAPU', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ZHENJIANG', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ZHONGSHAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ZHUHAI', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'MAKASSAR', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'IMMINGHAM', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'VALENCE', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'NEWTOWN', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'KUMPORT', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'LUZHOU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SAGUNTO', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'AHUS', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'BERGAMO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'CORINTO', 'NICARAGUA', 'MIDDLE AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'POLA DE LENA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'TEKIRDAG', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'VLISSINGEN', 'NETHERLANDS', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'DETROIT', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'MINNEAPOLIS', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'KAMPONG SAOM', 'CAMBODIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => '(ARG) ORAN', 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'BELEM', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'LAS PALMAS (ARG.)', 'ARGENTINA', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'SANTANDER', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'Bandar Shahid Rajaee', 'IRAN', 'Iran Cluster',
            'route' => 'W2',

            'port' => 'MISURATA', 'LIBYA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'VILLANUOVA SUL CLISI', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'GIUSSANO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'NASSAU', 'BAHAMAS', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'COLOMBO (BR.)', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'KRISHNAPATNAM', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'ST MARTIN', 'SAINT MARTIN', 'Carribean Sea Cluster',
            'route' => 'X6',

            'port' => 'PAVIA', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'CHANG ON', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'PARAMARIBO', 'SURINAME', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'BAR', 'MONTENEGRO', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'YANGON', 'MYANMAR', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'GUSTAVIA', 'GUADELOUPE', 'Caribbean Sea Cluster',
            'route' => 'X6',

            'port' => 'TOYAMA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'LOUISVILLE', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'WILLEMSTAD', 'CURACAO', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'BOURGANEUF', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'COLUMBUS', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'VISHAKHAPATNAM', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'San Juan', 'PERU', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'PASIR PANJANG', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'ITAPOA', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'GALVESTON', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'PYEONGTAEK', 'KOREA, SOUTH', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'ULSAN', 'KOREA, SOUTH', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'HAMBANTOTA', 'SRI LANKA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'SANBU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'CHENGHAI LAIWU', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SOUSSE', 'TUNISIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'WORCESTER', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'JIANGYIN', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'DENVER', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'YUNFU', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SANTA CRUZ DE LA PALMA', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'MINA ABDULLAH', 'KUWAIT', 'SAUDI ARABIA CLUSTER',
            'route' => 'W2',

            'port' => 'Lanzarote', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'Shatian', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => '(CANADA) ODESSA', 'CANADA', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'Puerto del Rosario-Fuerteventura', 'SPAIN', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'AIKAKITA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'KOCAELI', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'NOUMEA', 'NEW CALEDONIA', 'Caribbean Sea Cluster',
            'route' => 'W4',

            'port' => 'MALMO', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'DONGGUAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SAN BENEDETTO', 'ITALY', 'Italy Cluster',
            'route' => 'W3',

            'port' => 'LAHORE', 'PAKISTAN', 'Pakistan Cluster',
            'route' => 'W2',

            'port' => 'SOCETU', 'ROMANIA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'Nashville', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'ASTARA', 'AZERBAIJAN', 'Iran Cluster',
            'route' => 'W2',

            'port' => 'ACCRA', 'GHANA', 'Central West Africa Cluster',
            'route' => 'W5',

            'port' => 'ALAGOINHAS', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'CRANFORD', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'QINGXI', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'St Louis-de-Montferrand', 'FRANCE', 'France Cluster',
            'route' => 'W3',

            'port' => 'Moroni', 'COMORE ISLAND', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'ARKANSAS CITY', 'UNITED STATES', 'NORTH AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'AALBORG', 'DENMARK', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'NACALA', 'MOZAMBIQUE', 'Mozambique Cluster',
            'route' => 'W5',

            'port' => 'AITOS', 'BULGARIA', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'SALALAH', 'OMAN', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'SENDAI', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => '(BG)BATA', 'BULGARIA', 'Greece Cluster',
            'route' => 'W3',

            'port' => 'Umm Qasr', 'IRAQ', 'Iran Cluster',
            'route' => 'W2',

            'port' => 'BATUMI', 'GEORGIA', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'AL AIN', 'U.A.E.', 'United Arab Emirates Cluster',
            'route' => 'W2',

            'port' => 'VILLETA', 'PARAGUAY', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'YARIMCA', 'TURKEY', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'BISCHWEIER', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'DURBACH', 'GERMANY', 'NORTH WEST CONTINENT CLUSTER',
            'route' => 'W3',

            'port' => 'TOYAMASHINKO', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => '(UKRAINE) ODESSA', 'UKRAINE', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'HEFEI', 'PRE', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'WESTPORT/PORT KLANG', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'MOGADISHU', 'SOMALIA', 'HOA AND EAST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'TIMARU', 'NEW ZEALAND', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'ANQING', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'SAN VICENTE', 'CHILE', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'HUNG YEN', 'VIETNAM', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'AL QAHMAH', 'SAUDI ARABIA', 'Saudi Arabia Cluster',
            'route' => 'W2',

            'port' => 'HALMSTAD', 'SWEDEN', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'GAOLAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'BENOA', 'INDONESIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'YIBIN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'GHAZAOUET', 'ALGERIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'MOSS', 'NORWAY', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'DAKAR', 'SENEGAL', 'NORTHEN WEST AFRICA CLUSTER',
            'route' => 'W5',

            'port' => 'PAITA', 'PERU', 'West Coast South America Cluster',
            'route' => 'W4',

            'port' => 'ITAGUAI', 'BRAZIL', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'YUEYANG', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'Terport (San Antonio)', 'PARAGUAY', 'EAST COAST SOUTH AMERICA CLUSTER',
            'route' => 'X6',

            'port' => 'HUADU', 'PRN', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'ORKANGER', 'NORWAY', 'SCANDINAVIA CLUSTER',
            'route' => 'W3',

            'port' => 'MAJUNGA', 'MADAGASCAR', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'HAMADA', 'JAPAN', 'NORTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'XINAN', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'LIANJIANG', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'HALUL', 'QATAR', 'UNITED ARAB EMIRATE CLUSTER',
            'route' => 'W2',

            'port' => 'BERDSK', 'RUSSIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'DJEN-DJEN', 'ALGERIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'KAMSAR', 'GUINEA', 'Senegal Cluster',
            'route' => 'W5',

            'port' => 'BIZERTE', 'TUNISIA', 'WESTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'KRIBI', 'CAMEROON', 'CAMEROUN, ANGOLA AND DRC CLUSTER',
            'route' => 'W5',

            'port' => 'DARWIN', 'AUSTRALIA', 'OCEANIA CLUSTER',
            'route' => 'W1',

            'port' => 'BOR', 'RUSSIA', 'EASTERN EUROPE CLUSTER',
            'route' => 'W3',

            'port' => 'KAKINADA', 'INDIA', 'INDIA AND BANGLADESH CLUSTER',
            'route' => 'W2',

            'port' => 'ILLICHIVSK', 'UKRAINE', 'EASTERN MEDITERRANEAN CLUSTER',
            'route' => 'W3',

            'port' => 'PUERTO CORTES', 'HONDURAS', 'MIDDLE AMERICA CLUSTER',
            'route' => 'W4',

            'port' => 'PORT VICTORIA', 'SEYCHELLES', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'RUGAO', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'CRANBROOK', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'Taicheng (Taishai)', 'PRS', 'GREATER CHINA CLUSTER',
            'route' => 'W1',

            'port' => 'MUTSAMUDU', 'COMORE ISLAND', 'SOUTHERN AFRICA AND ISLANDS CLUSTER',
            'route' => 'W5',

            'port' => 'PILAR', 'PHILIPPINES', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

            'port' => 'PORTSMOUTH', 'UNITED KINGDOM', 'UNITED KINGDOM AND IRELAND CLUSTER',
            'route' => 'W3',

            'port' => 'KUCHING', 'MALAYSIA', 'SOUTH EAST ASIA CLUSTER',
            'route' => 'W1',

        ];

        foreach ($loadings as $loading) {
            Loading::create([
                .'port' => $loading->port,
                .'place' => $loading->place,
                .'country' => $loading->country,
                .'cluster' => $loading->cluster,
                .'route' => $loading->route,
            ]);
        }

    }
}
