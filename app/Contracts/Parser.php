<?php

namespace App\Contracts;

use Orchestra\Parser\Xml\Facade as XmlParser;

abstract class Parser
{
    /**
     * 
     * @param string $url
     * @return array
     */
    public function parse(string $url): array
    {
        return XmlParser::load($url)->parse($this->schema());
    }
}
