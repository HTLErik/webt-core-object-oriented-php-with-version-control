<?php

require_once 'Video.php';

class VideoYouTube extends Video
{

    public function __construct($source, $name)
    {
        $videoId = explode('=', $source);
        $videoId = end($videoId);
        $embedHtml = '<section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/'.$videoId.'"
            title="'.$name.'" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold">'.$name.'</p>
    <br>';
        parent::__construct($source, $embedHtml, $name);
        
    }
}
?>