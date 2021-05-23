<?php 
class Curenncy {
    public $url ="https://bigpara.hurriyet.com.tr/api/v1/hisse/list";
    public function fgc (){
            $data = file_get_contents($this->url);
            return $data;
    }
}
$currency = new Currency();
echo $currency->fgc();
?>