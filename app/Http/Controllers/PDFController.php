<?php

// app/Http/Controllers/PDFController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PDFController extends Controller
{
    public function openPDF()
    {
        $pathToFile = public_path('pdfs/generadopdf.pdf');
        return response()->file($pathToFile);
    }
}

