<?php

namespace App\Exports;

use App\Bl;
use DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BlsExport implements FromCollection, WithHeadings
{
    use Exportable;

    private $startDate;
    private $endDate;

    public function headings():array
    {
        return [
            'IMP/EXP',
            'VESSEL NAME',
            'SHIPPING LINE',
            'POR PLACE', // City
            'POR COUNTRY',
            'POR CLUSTER',
            'ROUTE',
            'POD PLACE', // Ville Des
            'POD COUNTRY',
            'ARRIVAL MONTH',
            'ARRIVAL YEAR',
            'CARGO TYPE',
            'SHIPPER',
            'CONSIGNEE',
            'COMMODITY',
            'No OF 20',
            'No OF 40',
            'BL',
            '20 feets Containers',
            '40 feets Containers',
        ];
    }

    public function __construct($startDate = '1970-01-01', $endDate = '2970-12-31')
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function collection()
    {
        // dd([$this->startDate, $this->endDate]);

        return Bl::whereBetween('arrival_date', [$this->startDate, $this->endDate])
                    ->join('port_codes', 'bls.port_id', '=', 'port_codes.id')
                    ->leftjoin('loadings', 'port_codes.id', '=', 'loadings.port_id')
                    ->join('vesselles', 'bls.vesselle_id', '=', 'vesselles.id')
                    ->rightjoin('shippings', 'vesselles.shipping_id', '=', 'shippings.id')
                    ->select(
                        'bls.imp_exp', 'vesselles.name as v_name',
                        'shippings.name as s_name', 'port_codes.port_city',
                        'loadings.country', 'loadings.cluster',
                        'loadings.route', 'bls.pod_place',
                        'bls.pod_country', DB::raw('MONTH(bls.arrival_date)'),
                        DB::raw('YEAR(bls.arrival_date)'), 'bls.cargo_type',
                        'bls.shipper', 'bls.order',
                        'bls.commodity', 'number_of_20',
                        'number_of_40', 'bl_number',
                        'container_20', 'container_40',
                        )

                    ->get();

    }
}
