<?php 

namespace Idnatiya\YoutubeParser; 

use Exception; 

class YoutubeParser
{
    public function parse(string $youtubeURL)
    {
        $youtubeID = ""; 
        
        try {
            $youtubeID = BasicURLParser::parse($youtubeURL); 
        } catch (FailedParseException $exception) {}

        try {
            $youtubeID = EmbedParser::parse($youtubeURL); 
        } catch (FailedParseException $exception) {}

        try {
            $youtubeID = ShortURLParser::parse($youtubeURL); 
        } catch (FailedParseException $exception) {}

        if (empty($youtubeID)) throw new FailedParseException();    

        return $youtubeID; 
    }
}