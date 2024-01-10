<?php

abstract class MusicType
{
    public $filename;
    public function __construct($music)
    {
        $this->filename=$music;
    }

    abstract public function listen($filename);

}