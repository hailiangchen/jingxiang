<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payorder extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function  order()
    {
        $data["username"]=$this->input->post("username");
        $data["paytype"]=$this->input->post("channelid");
        $data["payamount"]=$this->input->post("amount");
        $data["addtime"]=date("Y-m-d H:i:s");
        $data["orderno"]=$this->randnum();

        $this->load->model("modelpayorder");
        $re=$this->modelpayorder->AddPayOrder($data);
        if($re>0)
        {
            echo $re;
        }
    }

    public  function pay()
    {
        $this->view("");
    }


    protected function randnum()
    {
        $numbers = range (1,10);
        srand((float)microtime() * 1000000);
        shuffle($numbers);
        $rnum="";
        while (list(, $number) = each($numbers)) {
            $rnum=$rnum.$number;
        }
        return $rnum;
    }
}