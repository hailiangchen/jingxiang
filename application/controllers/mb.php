<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mb extends  CI_Controller
{
    public function  index()
    {
        $this->load->model("modelconfig");
        $data["web"]=$this->modelconfig->Get(array("id"=>1));

        $this->load->model("modelmburl");
        $data["result"]=$this->modelmburl->Get(array("id"=>1));
        $this->load->view("mb_index",$data);
    }
}