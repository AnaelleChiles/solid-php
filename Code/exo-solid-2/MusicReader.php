<?php

// Si on doit supporter un nouveau type de format, on doit modifier cette classe :(
require_once 'Mp3.php';
require_once 'Ogg.php';
require_once 'MusicType.php';

class MusicReader
{
    private $music;
    public function __construct($music)
    {
        $this->music = $music;
    }

    public function listen()
    {
        $this->music->listen($this->music->filename);
    }
}