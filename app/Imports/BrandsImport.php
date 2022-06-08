<?php

namespace App\Imports;

use App\Brand;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class BrandsImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        foreach ($rows as $row)
        {
            Brand::create([
                'name' => $row[1],
            ]);
        }
    }
}
