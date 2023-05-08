<?php

require_once 'Video.php';

class VideoYouTube extends Video
{

    public function getEmbedHtml()   {
        $videoId = explode('=', $this->source);
        $videoId = end($videoId);
        return '<section class="flex flex-row w-full justify-evenly">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/'.$videoId.'"
            title="'.$this->name.'" frameborder="0"
            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </section>
    <br>
    <p class="text-center text-xl font-bold"> Name:'.$this->name.'</p>
    <br>';
    }

    public function __construct($source, $name)
    {
       
       
        parent::__construct($source, $name);
        
    }
}
?>
