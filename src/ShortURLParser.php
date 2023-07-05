<?php 

namespace Idnatiya\YoutubeParser; 

class ShortURLParser
{
    public function parse(string $shortURLParser)
    {
        $segments = explode('/', $shortURLParser);  
        if (count($segments) < 5) {
            throw new FailedParseException(); 
        }

        return end($segments); 
    }
}