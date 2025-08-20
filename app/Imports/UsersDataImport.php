<?php

namespace App\Imports;

use App\Models\UserInformation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersDataImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            UserInformation::create([
                'name' =>$row['0'],
                'email' =>$row['1'],
                'tel_no' =>$row['2'],
                'address' =>$row['3'],
                'birthday' =>$row['4']
            ]);
        }
    }
}
