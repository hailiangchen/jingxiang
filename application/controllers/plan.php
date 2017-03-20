<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller{

    function shishi()
    {
        $this->load->model("modelcontent");
        $data['result']=$this->modelcontent->GetContent(array('id'=>1,'first'=>true));
        $this->load->view('plan',$data);
    }

    public function cqssc()
    {

        $this->load->view("cqssc");
    }

    public function getData()
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt ($ch, CURLOPT_URL, 'http://www.15050.com/cqssc/cqssc.html');
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);

        echo $file_contents;

        /*$html=file_get_contents('http://www.15050.com/cqssc/cqssc.html');
        echo $html;*/
    }

}