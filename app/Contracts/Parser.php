<?php

namespace App\Contracts;

use Orchestra\Parser\Xml\Facade as XmlParser;

abstract class Parser
{
    /**
     * 
     * @param string $filename
     * @return array
     */
    public function parse(string $filename): array
    {
        return XmlParser::load($this->url . $filename)->parse($this->schema());
    }
}
