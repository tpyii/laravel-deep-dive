<?php

namespace App\Services;

use App\Contracts\Parser;

class YandexNewsRss extends Parser
{
    /**
     * 
     * @return array
     */
    protected function schema(): array
    {
        return [
            'title' => [
                'uses' => 'channel.title',
            ],
            'link' => [
                'uses' => 'channel.link',
            ],
            'description' => [
                'uses' => 'channel.description',
            ],
            'image' => [
                'uses' => 'channel.image.url',
            ],
            'items' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]',
            ],
        ];
    }
}
