<?php
$today = date("d/m/y");
class test
{

    public $wasmachine;
    public $droger;
    public $koelkast;
    public $prijs;
    public $exbtw;
    public $incbtw;


    public function __construct($wasmachine, $droger, $koelkast)
    {
//        $this->wasmachine = $_POST["wasmachine"];
//        $this->droger = $_POST["droger"];
//        $this->koelkast = $_POST["koelkast"];
//        $this->exbtw = ($_POST["wasmachine"] + $_POST["droger"] + $_POST["koelkast"]);
        $this->wasmachine = $wasmachine;
        $this->droger = $droger;
        $this->koelkast = $koelkast;
    }
    public function getWasmachine()
    {
        return $this->wasmachine;
    }

    public function setWasmachine($wasmachine){
        $this->wasmachine = $wasmachine;
    }


}
//$totaal = ($_POST["wasmachine"] + $_POST["droger"] + $_POST["koelkast"]);
//echo ($today . "<br>" .  $_POST["wasmachine"] . "<br>" . $_POST["droger"] . "<br>" . $_POST["koelkast"] . "<br>" . $totaal);

$product = ($_POST['wasmachine'] . '<br>' . $_POST['droger'] . '<br>' . $_POST['koelkast'] . '<br>');
$hoeveel = ($_POST['wasmachine'] + $_POST['droger'] + $_POST['koelkast']);
$productincbtw = ($_POST['wasmachine'] * 0.21 + $_POST['droger'] * 0.21 + $_POST['koelkast'] * 0.21 + $_POST['wasmachine'] + $_POST['droger'] + $_POST['wasmachine']);
//var_dump($product, $hoeveel, $productincbtw);
echo 'Datum: ' . $today . '<br>' . $product, '<br>excbtw:' . $hoeveel, '<br>incbtw:' . $productincbtw;


