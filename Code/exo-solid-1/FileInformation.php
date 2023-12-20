<?php

class FileInformation
{
    private $name;
    private $type;
    private $directory = '';
    private $validTypes = [];

    public function __construct($file)
    {
        $fileData = $_FILES[$file];
        $this->name = $fileData['name'];
        $this->type = $fileData['type'];
        $this->validTypes = ['PNG', 'png', 'jpeg', 'jpg', 'JPG'];
    }

    public function getName () : string{
        return $this->name;
    }

    public function setName (string $Name) : FileInformation{
        $this->name = $Name;
        return $this;
    }

    public function getType () : string{
        return $this->type;
    }

    public function getDirectory () : string{
        return $this->directory;
    }

    public function setDirectory (string $Directory) : FileInformation{
        $this->directory = $Directory;
        return $this;
    }

    public function getValidTypes () {
        return $this->validTypes;
    }
}