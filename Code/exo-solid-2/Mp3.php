<?php
require_once 'MusicType.php';

class Mp3 extends MusicType
{
    public function listen($filename)
    {
        return 'Lecture du fichier Mp3 '. $filename;
    }
}
