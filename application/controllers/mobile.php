<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mobile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form',
            'url'
        ));
    }

    public function  index()
    {
        $this->load->model("modelcontent");
        $data['result']=$this->modelcontent->GetContent(array('id'=>1,'first'=>true));
        $this->load->view("mobilepay",$data);
    }

    public function order()
    {
        $data["client"]=$this->input->post("client");
        $data["username"]=$this->input->post("username");
        $data["paytype"]=$this->input->post("channel_id");
        $data["payamount"]=$this->input->post("coin");
        $data["addtime"]=date("Y-m-d H:i:s");
        $data["orderno"]=$this->randnum();

        $this->load->model("modelpayorder");
        $re=$this->modelpayorder->AddPayOrder($data);
        if($re>0)
        {
            redirect(base_url()."mobile/pay/".$data["orderno"]);
        }
    }


    public  function pay()
    {
       $oper = $this->uri->segment(3);
       $this->load->model("modelpayorder");
       $data["result"]=$this->modelpayorder->GetPayOrder(array("orderno"=>$oper,"first"=>true));
       $this->load->model("modelcontent");
       $data["reimg"]=$this->modelcontent->GetContent(array("id"=>1,"first"=>true));

        $this->load->view("mobilepayover",$data);
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