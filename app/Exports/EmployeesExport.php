<?php

namespace App\Exports;

use App\employee;
use App\AppmodelsEmployee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EmployeesExport implements FromCollection,WithHeadings
{
    public function headings():array{
         return [
             'Id',
             'Name',
             'phone',
             'salary',
             'department'
         ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         return collect(employee::getEmployee());
    }
}
