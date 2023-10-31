<?php

class SoftwareSpecs{
    private $field;
    private $Name;
    private $os;
    private $cpu;
    private $ram;
    private $gpu;
    private $storage;
    private $display;

    function __construct( $Name,$field, $os, $cpu, $ram, $gpu, $storage, $display)
    {   
        $this->field = $field;
        $this-> Name = $Name;
        $this->os = $os;
        $this-> cpu = $cpu;
        $this-> ram = $ram;
        $this-> gpu = $gpu;
        $this-> storage = $storage;
        $this-> display = $display;
    }

    public function getField(){
        return $this->field;
    }
    public function getName(){
        return $this->Name;
    }
    public function getOS()
    {
        return $this->os;
    }
    public function getCpu()
    {
        return $this->cpu;
    }
    public function getRam()
    {
        return $this->ram;
    }
    public function getGpu()
    {
        return $this->gpu;
    }
    public function getStorage()
    {
        return $this->storage;
    }
    public function getDisplay()
    {
        return $this->display;
    }


   


    
}





?>