<?php

namespace App\Services\StatementParser;

class KotakParser
{
    public function parse($text)
    {
        $data = [];

        // Keep line structure
        $lines = preg_split('/\r\n|\r|\n/', $text);

        // Account Number
        preg_match('/Account\s*No\s*:\s*([0-9]+)/i', $text, $account);
        $data['account_number'] = $account[1] ?? '';

        // IFSC
        preg_match('/IFSC\s*Code\s*:\s*([A-Z0-9]+)/i', $text, $ifsc);
        $data['ifsc'] = $ifsc[1] ?? '';

        // Period
        preg_match('/Period\s*:\s*([0-9\-]+)\s*to\s*([0-9\-]+)/i', $text, $period);
        $data['start_date'] = $period[1] ?? '';
        $data['end_date']   = $period[2] ?? '';

        // Extract Name (line after IFSC Code)
        foreach ($lines as $index => $line) {
            if (stripos($line, 'IFSC Code') !== false) {
                $nextLine = trim($lines[$index + 1] ?? '');

                // Ensure it's not empty and not address-like
                if ($nextLine && !str_contains($nextLine, 'HOUSE') && !str_contains($nextLine, 'GRAM')) {
                    $data['customer_name'] = $nextLine;
                }
                break;
            }
        }

        return $data;
    }
}
