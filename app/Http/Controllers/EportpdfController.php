<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Employee;

class EportpdfController extends Controller {
    public function pdf()
    {
      $data =Employee::all();
      $pdf = PDF::loadView('pdf.employee',['data'=>$data],
      [
        'mode'                       => '',
        'format'                     => 'A4',
        'default_font_size'          => '12',
        'default_font'               => 'sans-serif',
        'margin_left'                => 10,
        'margin_right'               => 10,
        'margin_top'                 => 10,
        'margin_bottom'              => 10,
        'margin_header'              => 0,
        'margin_footer'              => 0,
        'orientation'                => 'P',
        'title'                      => 'Laravel mPDF',
        'author'                     => '',
        'watermark'                  => '',
        'show_watermark'             => false,
        'show_watermark_image'       => false,
        'watermark_font'             => 'sans-serif',
        'display_mode'               => 'fullpage',
        'watermark_text_alpha'       => 0.1,
        'watermark_image_path'       => '',
        'watermark_image_alpha'      => 0.2,
        'watermark_image_size'       => 'D',
        'watermark_image_position'   => 'P',
        'custom_font_dir'            => '',
        'custom_font_data'           => [],
        'auto_language_detection'    => false,
        'temp_dir'                   => rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR),
        'pdfa'                       => false,
        'pdfaauto'                   => false,
        'use_active_forms'           => false,
      ]
    );
      return $pdf->stream('Employee.pdf');
    }
  }
