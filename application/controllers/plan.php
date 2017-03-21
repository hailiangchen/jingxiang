<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller{

    function shishi()
    {
        $this->load->model("modelcontent");
        $data['result']=$this->modelcontent->GetContent(array('id'=>1,'first'=>true));
        $this->load->view('plan',$data);
    }

    public function beijingsaiche()
    {
        $this->load->model("modelcontent");
        $data['result']=$this->modelcontent->GetContent(array('id'=>1,'first'=>true));
        $this->load->view('caiche',$data);
    }

    public function liuhecai()
    {
        $this->load->model("modelcontent");
        $data['result']=$this->modelcontent->GetContent(array('id'=>1,'first'=>true));
        $this->load->view('liuhecai',$data);
    }

    public function cqssc()
    {

        $this->load->view("cqssc");
    }

    public function getData()
    {

        $ch = curl_init();
        $timeout = 5;
        curl_setopt ($ch, CURLOPT_URL, 'http://123.60.198.34/Cqssc/getData');
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
       /// $file_contents=json_decode($file_contents,true);
         echo $file_contents;
        //var_dump($file_contents["current"]);

        //echo $file_contents;

        /*$html=file_get_contents('http://www.15050.com/cqssc/cqssc.html');
        echo $html;*/
    }

    public  function getSData()
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt ($ch, CURLOPT_URL, 'http://123.60.198.34/Pk10/getData');
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
        /// $file_contents=json_decode($file_contents,true);
        echo $file_contents;
    }

}