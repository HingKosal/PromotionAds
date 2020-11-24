<?php

namespace App\Exports;

use App\User;
use http\Env\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Sheet;
use phpDocumentor\Reflection\Types\Nullable;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Yajra\DataTables\DataTables;

//Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
//    $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
//
//});


class UserMultiSheetExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithTitle,WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {

        $user = DB::table('users')->get();
//        return view('Backend.manage-user.excelCheckbox', compact('user'));
        return $user;
    }

    public function map($user): array
    {
//        $arr = array();
        $fname = request()->fname;
        $check_fname = request()->check_fname;
        $lname = request()->lname;
        $check_lname = request()->check_lname;
        $username = request()->username;
        $check_username = request()->check_username;
        $email = request()->email;
        $check_email = request()->check_email;

        // array_push($arr, [$fname,$lname,$email]);
        //        dd($arr);
        //        array_push($arr, [$fname]);
        if (($fname && $check_fname)  && ($lname && $check_lname) && ($username && $check_username) && ($email && $check_email)) {
            return [
                $user->id,
                $user->first_name,
                $user->last_name,
                $user->username,
                $user->email
            ];
        }
        if (($fname && $check_fname)  && ($lname && $check_lname) && ($email && $check_email)) {
            return [
                $user->id,
                $user->first_name,
                $user->last_name,
                $user->email
            ];
        }
        if (($fname && $check_fname)  && ($lname && $check_lname) && ($username && $check_username)) {
            return [
                $user->id,
                $user->first_name,
                $user->last_name,
                $user->username
            ];
        }
        if (($lname && $check_lname) && ($username && $check_username) && ($email && $check_email)) {
            return [
                $user->id,
                $user->last_name,
                $user->username,
                $user->email
            ];
        }
        if (($lname && $check_lname) && ($email && $check_email)) {
            return [
                $user->id,
                $user->last_name,
                $user->email
            ];
        }
        if (($lname && $check_lname) && ($username && $check_username)) {
            return [
                $user->id,
                $user->last_name,
                $user->username
            ];
        }
        if (($username && $check_username) && ($email && $check_email)) {
            return [
                $user->id,
                $user->username,
                $user->email
            ];
        }
        if (($lname && $check_lname) && ($fname && $check_fname)) {
            return [
                $user->id,
                $user->first_name,
                $user->last_name
            ];
        }
        if (($username && $check_username) && ($fname && $check_fname)) {
            return [
                $user->id,
                $user->first_name,
                $user->username
            ];
        }
        if (($email && $check_email) && ($fname && $check_fname)) {
            return [
                $user->id,
                $user->first_name,
                $user->email
            ];
        }
        if (($email && $check_email)) {
            return [
                $user->id,
                $user->email
            ];
        }
        if (($username && $check_username)) {
            return [
                $user->id,
                $user->username
            ];
        }
        if ($lname && $check_lname) {
            return [
                $user->id,
                $user->last_name
            ];
        }
        if ($fname && $check_fname) {
            return [
                $user->id,
                $user->first_name
            ];
        }
    }

    public function headings(): array
    {
        $fname = request()->fname;
        $check_fname = request()->check_fname;
        $lname = request()->lname;
        $check_lname = request()->check_lname;
        $username = request()->username;
        $check_username = request()->check_username;
        $email = request()->email;
        $check_email = request()->check_email;

        if (($fname && $check_fname) && ($lname && $check_lname) && ($username && $check_username) && ($email && $check_email)) {
            return [
                'ID',
                'First Name',
                'Last Name',
                'Username',
                'E-mail'
            ];
        }

        if (($fname && $check_fname) && ($lname && $check_lname) && ($email && $check_email)) {
            return [
                'ID',
                'First Name',
                'Last Name',
                'E-mail'
            ];
        }

        if (($fname && $check_fname) && ($lname && $check_lname) && ($username && $check_username)) {
            return [
                'ID',
                'First Name',
                'Last Name',
                'Username'
            ];
        }

        if (($lname && $check_lname) && ($username && $check_username) && ($email && $check_email)) {
            return [
                'ID',
                'Last Name',
                'Username',
                'E-mail'
            ];
        }

        if (($lname && $check_lname) && ($email && $check_email)) {
            return [
                'ID',
                'Last Name',
                'E-mail'
            ];
        }
        if (($lname && $check_lname) && ($username && $check_username)) {
            return [
                'ID',
                'Last Name',
                'Username'
            ];
        }
        if (($username && $check_username) && ($email && $check_email)) {
            return [
                'ID',
                'Username',
                'E-mail'
            ];
        }
        if (($lname && $check_lname) && ($fname && $check_fname)) {
            return [
                'ID',
                'First Name',
                'Last Name'
            ];
        }
        if (($username && $check_username) && ($fname && $check_fname)) {
            return [
                'ID',
                'First Name',
                'Username'
            ];
        }
        if (($email && $check_email) && ($fname && $check_fname)) {
            return [
                'ID',
                'First Name',
                'E-mail'
            ];
        }
        if (($email && $check_email)) {
            return [
                'ID',
                'E-mail'
            ];
        }
        if (($username && $check_username)) {
            return [
                'ID',
                'Username',
            ];
        }

        if ($lname && $check_lname) {
            return [
                'ID',
                'Last Name',
            ];
        }
        if ($fname && $check_fname) {
            return [
                'ID',
                'First Name'
            ];
        }
    }

    public function title(): string
    {
        return 'User Report';
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12)->setBold(true);

//                $event->sheet->styleCells(
//                    'A1:E1',
//                    [
//                        'font' => array(
//                            'name'      =>  'Khmer OS Siemreap',
//                            'size'      =>  12,
//                            // 'bold'      =>  true,
//                            'color' => ['argb' => '465EF7']
//                        )
//                    ]
//                );
//                $event->sheet->styleCells(
//                    'A2:E2',
//                    [
//                        'font' => array(
//                            'name'      =>  'Arial',
//                            'size'      =>  12,
//                            'bold'      =>  true,
//                        )
//                    ]
//                );
//
//                $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(4);
//                $event->sheet->getDelegate()->getColumnDimension('B')->setWidth(18);
//                $event->sheet->getDelegate()->getColumnDimension('C')->setWidth(14);
//                $event->sheet->getDelegate()->getColumnDimension('D')->setWidth(28);
//                $event->sheet->getDelegate()->getColumnDimension('E')->setWidth(25);
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
