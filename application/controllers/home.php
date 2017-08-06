<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller
{
    public function  index()
    {
        $this->load->model("modelconfig");
        $data["web"]=$this->modelconfig->Get(array("id"=>1));



        $this->load->model("modelpcurl");
        $data["result"]=$this->modelpcurl->Get(array("limit"=>9,"offset"=>0));

        $this->load->view("home_index",$data);
    }
}