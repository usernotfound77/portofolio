<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        // Demo behavior: validation works, but no email is sent until mail is configured.
        return back()->with('contact_success', 'Pesan berhasil divalidasi. Hubungkan konfigurasi MAIL di .env untuk mengirim email.');
    }
}
