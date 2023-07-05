<?php 

namespace Idnatiya\YoutubeParser;

class BasicURLParser
{
    public function parse(string $fullYoutubeUrl)
    {
        $query = parse_url($fullYoutubeUrl, PHP_URL_QUERY); 
        parse_str($query, $params);
        if ( ! isset($params['v'])) {
            throw new FailedParseException(); 
        }

        return $params['v']; 
    }
}