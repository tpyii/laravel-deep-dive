<?php

namespace App\Services;

use App\Contracts\Parser;

class YandexNewsRss extends Parser
{
    protected string $url = 'https://news.yandex.ru/';

    /**
     * 
     * @return array
     */
    public function schema(): array
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
