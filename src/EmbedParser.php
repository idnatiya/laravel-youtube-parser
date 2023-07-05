<?php 

namespace Idnatiya\YoutubeParser;

class EmbedParser
{
    public function parse(string $iframeText)
    {
        preg_match('/src="([^"]+)"/', $iframeText, $match);
        if ( ! isset($match[1])) {
            throw new FailedParseException();
        }

        return $match[1]; 
    }
}