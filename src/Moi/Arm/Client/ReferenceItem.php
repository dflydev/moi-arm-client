<?php

namespace Moi\Arm\Client;

class ReferenceItem
{
    private $id;
    private $name;
    private $shortDescription;
    private $longDescription;

    public function __construct($id, $name, $shortDescription = null, $longDescription = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->longDescription = $longDescription;
    }

    public function id()
    {
        return $this->id;
    }

    public function name()
    {
        return $this->name;
    }

    public function shortDescription()
    {
        return $this->shortDescription;
    }

    public function longDescription()
    {
        return $this->longDescription;
    }
}
