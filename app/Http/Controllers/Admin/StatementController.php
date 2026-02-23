<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use App\Services\StatementParser\KotakParser;

class StatementController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'statement' => 'required|mimes:pdf|max:10240',
        ]);

        $file = $request->file('statement');
        $path = $file->store('statements');

        // Parse details
        $text = $this->extractText(storage_path("app/" . $path));

        if ($request->bank === 'kotak') {
            $parser = new KotakParser();
            $data = $parser->parse($text);
        } else {
            $data = [];
        }

        // dd($text);

        return view('admin.dashboard', compact('data'));
    }

    private function extractText($filePath)
    {
        // ⚠ FPDI does NOT extract text.
        // It only imports pages.

        // You need a text extractor.
        // Install this:
        // composer require smalot/pdfparser

        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile($filePath);

        return $pdf->getText();
    }

    private function parseStatement($text)
    {
        $data = [];

        // Example parsing (you will customize per bank)
        preg_match('/Account Number\s*:\s*(\d+)/', $text, $account);
        preg_match('/IFSC\s*:\s*([A-Z0-9]+)/', $text, $ifsc);
        preg_match('/Customer Name\s*:\s*(.+)/', $text, $name);

        $data['account_number'] = $account[1] ?? '';
        $data['ifsc'] = $ifsc[1] ?? '';
        $data['customer_name'] = $name[1] ?? '';

        return $data;
    }
}
