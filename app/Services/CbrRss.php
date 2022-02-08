<?php

namespace App\Services;

use App\Contracts\Parser;

class CbrRss extends Parser
{
    protected string $url = 'https://www.cbr-xml-daily.ru/';

    /**
     * 
     * @return array
     */
    public function schema(): array
    {
        return [
            'valutes' => [
                'uses' => 'Valute[NumCode,CharCode,Nominal,Name,Value]',
            ],
        ];
    }
}
