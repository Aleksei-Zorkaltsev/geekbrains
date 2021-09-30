<?php

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService
{

    /**
     * @param string $link
     * @return array
     */
    public function parse($link)
    {
        $xml = XmlParser::load($link);
        return $xml->parse([
            'title'=> [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ],
        ]);
    }
}
