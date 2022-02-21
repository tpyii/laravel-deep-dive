<?php

namespace App\Services;

use App\Contracts\Parser;

class CbrRss extends Parser
{
    /**
     * 
     * @return array
     */
    protected function schema(): array
    {
        return [
            'valutes' => [
                'uses' => 'Valute[NumCode,CharCode,Nominal,Name,Value]',
            ],
        ];
    }
}
