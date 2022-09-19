<?php

namespace App\Objects;

class Template{
    
    private string $layout;
    private array $datas;

    public function __construct(string $file){
        $this->layout = file_get_contents("templates/".$file);
    }

    public function getLayout():string {
        return $this->layout;
    }

    public function setLayout(string $layout):void {
        $this->layout = $layout;
    }

    public function getDatas():array {
        return $this->datas;
    }

    public function setDatas(array $datas):void {
        $this->datas = $datas;
    }

    public function buildLayout(array $datas):string {
        return str_replace(array_map(fn($s)=>"**$s**", array_keys($datas)), array_values($datas), $this->getLayout());
    }

}

