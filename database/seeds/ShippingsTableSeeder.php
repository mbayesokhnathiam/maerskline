<?php

use App\Shipping;
use Illuminate\Database\Seeder;

class ShippingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shipping = [
            'DEFAULT',
            'PORTLINE',
            'CMA/DELMAS',
            'BOLLUDA',
            'BOCS',
            'MSC',
            'MACS',
            'STENA LINE',
            'MOL',
            'SCL',
            'ACL',
            'ZIM',
            'EUROAFRICA',
            'BACO',
            'HAPAG-LLOYD',
            'MISC',
            'PIL',
            'AFRICA EXPRESS LINE',
            'MARGUISA',
            'Clipper Project shipping ltd',
            'ARKAS LINES',
            'ML',
            'NYK',
            'CONTI',
            'CSAV',
            'SAILS',
            'GRIMALDI',
            'NORDANA',
            'MESSINA',
            'MARUBA',
            'Swiss Cargo Line',
            'Operator',
            'CABOMUNDO',
            'CSAL',
            'HOEGH AUTOLINERS',
            'THORCO SHIPPING',
            'NOMADIC',
            'MNM AFRICAN SHIPPING',
            'NOORDRIVER SHIPPING',
            'EUKOR',
            'RICKMERS GROUP',
            'SALLAUM LINES',
            'HYUNDAI GLOVIS',
            'SPAR SHIPPING',
            'ALLIANCE NAVIGATION',
            'ATLANTIC RO-RO CARRIERS',
            'BREADBOX SHIPPING LINES',
            'CORSICA LINEA',
            'CARISBROOKE SHIPPING',
            'FORESTWAVE NAVIGATION',
            'BALTIC REEFERS',
            'LOMAR SHIPPING',
            'BRIESE SHIPPING',
            'TSCHUDI SHIPPING',
            'CAFISERVICE SPA',
            'TRIO SHIPPING',
            'ASIATIC LLOYD',
            'TBS SHIPPING SERVICES',
            'COSCO',
            'ARKON SHIPPING',
            'KLIP MARINE',
            'BALTIC SHIPPING',
            'SEACO',
            'MILLER AND FLAMA SHIPPING'
        ];

        foreach ($shipping as $ship) {
            Shipping::create(['name' => $ship]);
        }
    }
}
