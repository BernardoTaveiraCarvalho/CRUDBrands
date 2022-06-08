<?php

namespace App\Exports;

use App\Brand;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BrandsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'id',
            'Name',
            '',
            'Created',
            'Updated',
        ];
    }
    public function collection()
    {
        return Brand::all();
    }
}
