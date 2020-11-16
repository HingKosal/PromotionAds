<?php

namespace App\Exports;

use App\User;
use http\Env\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;

class Export implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected  $id;

    function __construct($id) {
        $this->id = $id;
    }

    public function view(): View
    {
        $users = User::whereIn('id',$this->id)->get();
        return view('Backend.manage-user.excel', compact('users'));
    }
    public function map($user) : array {
        return [
            $user->id,
            $user->first_name,
            $user->last_name,
            $user->username,
            $user->email
        ] ;
    }

    public function headings() : array {
        return [
            'ID',
            'First Name',
            'Last Name',
            'Username',
            'Email'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12)->setBold(true)->getActiveSheet(true);
            },
            $styleArray = [
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                        'color' => ['argb' => 'FFFF0000'],
                        'border' => ['1px solid black']
                    ],
                ],
            ]
        ];
    }
}
