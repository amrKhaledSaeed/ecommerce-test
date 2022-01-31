<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Exports\EmployeesExport;
use Excel;

class employeeController extends Controller
{
    public function addEmployee(){
      $employees=[
      ['name'=>'ahmed',
       'email'=>'ahm@gmaol.com',
       'phone'=>'01120155404',
       'salary'=>'25',
       'department'=>'Accounting'
      ],

      ['name'=>'mohamed',
      'email'=>'moh@gmaol.com',
      'phone'=>'01120155414',
      'salary'=>'25',

      'department'=>'seals'
    ],

     ['name'=>'amr',
     'email'=>'amr@gmaol.com',
     'phone'=>'01120155424',
     'salary'=>'25',

     'department'=>'programer'
  ],

    ['name'=>'amrs',
     'email'=>'amrs@gmaol.com',
     'phone'=>'01120155434',
     'salary'=>'25',

     'department'=>'Disigner'
    ]

      ];

      Employee::insert($employees);
      return 'employees are inserted';

    }

     public function exportAxcel(){
      return Excel::download(new EmployeesExport,'employeeList.xlsx');
     }

     public function exportCsv(){
        return Excel::download(new EmployeesExport,'employeeList.csv');
       }

}
