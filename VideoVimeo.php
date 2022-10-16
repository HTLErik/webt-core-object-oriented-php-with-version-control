<?php

require_once 'Video.php';

class Vimeo extends Video
{
    public function __construct($source, $name)
    {
        $videoId = explode('vimeo.com/', $source);
        $videoId = end($videoId);
        $embedHtml = ' <section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://player.vimeo.com/video/'.$videoId.'?h=6b58d0af23&color=000000&byline=0&portrait=0"></iframe>
            </section>
            <br>
            <p class="text-center text-xl font-bold">'.$name.'</p>
            <br>';
    
        parent::__construct($source, $embedHtml, $name);
    }
}
?>