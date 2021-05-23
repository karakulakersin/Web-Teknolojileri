<?php 
class Curenncy 
{
    public $url ="https://bigpara.hurriyet.com.tr/api/v1/hisse/list";
    public $data;
    public function fgc (){
            $data = file_get_contents($this->url);
            this->data=json_decode($data,true);
            return $this;
    }
}
$currency = new Currency();

?>