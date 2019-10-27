<?php

namespace App\Exports;

use App\Bl;
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
            'N Bl',
            'Arrival Date',
            'Cargo Type',
            'Shipper',
            'Owner',
            'Commodity',
            '20 feets',
            '40 feets',
            '20 feets Containers',
            '40 feets Containers',
            'Port Code',
            'City',
            'Country',
            'Cluster',
            'Route'
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
                    ->leftjoin('loadings', 'port_codes.id', 'loadings.port_id')
                    ->select(
                        'bls.bl_number', 'bls.arrival_date',
                        'bls.cargo_type', 'bls.shipper',
                        'bls.order', 'bls.commodity',
                        'number_of_20', 'number_of_40',
                        'container_20', 'container_40',
                        'port_codes.port_code',
                        'port_codes.port_city', 'loadings.country',
                        'loadings.cluster', 'loadings.route',)
                    ->get();
    }
}
