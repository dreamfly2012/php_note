<?php
// $url = 'https://www.80shihua.com/path?arg=value#anchor'; 
// print_r(parse_url($url)); 
// echo parse_url($url, PHP_URL_PATH); 


// $string = "nice|sfs";

// $arr = preg_split("/|/",$string);

// print_r($arr);



class Demo
{
    private $result = 0;
    
    public function __construct($result)
    {
        $this->result = $result;
    }

	public function add($a){
        $this->result = $this->result + $a;
        return $this;
    }
    
    public function sub($a){
        $this->result = $this->result - $a;
        return $this;
    }

    public function mul($a){
        $this->result = $this->result * $a;
        return $this;
    }

    public function div($a){
        $this->result = intval($this->result / $a);
        return $this;
    }

    public function get(){
        return $this->result;
    }
}


$demo = new Demo(4);

$result = $demo->add(3)->mul(10)->div(5)->sub(4)->get();

var_dump($result);

