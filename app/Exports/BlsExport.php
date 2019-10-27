<?php

namespace App\Exports;

use App\Bl;
use Maatwebsite\Excel\Concerns\FromCollection;

class BlsExport implements FromCollection
{
    public function collection()
    {
        return Bl::join('port_codes', 'bls.port_id', '=', 'port_codes.id')
                    ->join('loadings', 'port_codes.id', 'loadings.port_id')
                    ->select(
                        'bls.bl_number', 'bls.arrival_date',
                        'bls.cargo_type', 'bls.shipper',
                        'bls.order', 'bls.commodity',
                        'number_of_20', 'number_of_40',
                        'container_20', 'container_40',
                        'port_codes.port_city', 'loadings.country',
                        'loadings.cluster', 'loadings.route',)
                    ->get();
    }
}
