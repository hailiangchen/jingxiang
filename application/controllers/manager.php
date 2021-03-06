<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        if($this->session->userdata("admin")==null)
        {
            header('HTTP/1.1 404 Not Found');
            show_404();
        }
    }
    function index()
    {

        $this->load->view('header');
        $this->load->view('Manager_main');
    }

    function welcome()
    {
        $this->load->model('modeluser');
        $data['result']=$this->modeluser->GetUser();

        $this->load->view('header');
        $this->load->view('Manager_userloginlist',$data);
    }

    function admin(){
        $this->load->model('modeladmin');
        $data['result']=$this->modeladmin->GetAdmin();

        $this->load->view("header");
        $this->load->view("Manager_adminlist",$data);
    }

    private function addadmin()
    {
        $userpass="51vv.userManager";
        $data["username"]="admin";
        $data["salt"]=random_string('alpha',16);
        $data["userpass"]=md5($userpass.$data['salt']);
        $data["addtime"]=date('Y-m-d H:i:s');
        $data['status']=1;
        $data['beizhu']="系统管理员";
        $data["telephone"]='13555555555';
        $this->load->model('modeladmin');
        $re=$this->modeladmin->AddAdmin($data);
        var_dump($re);
    }

    public function chanagepass()
    {
        $pass=$this->input->post('pass');
        $data['id']=$this->input->post('id');

        $this->load->model('modeladmin');
        $re=$this->modeladmin->GetAdmin(array('id'=>$data["id"],'first'=>true));
        $data["userpass"]=md5($pass.$re->salt);

        $r=$this->modeladmin->UpdateAdmin(array('id'=>$data["id"],'userpass'=>$data["userpass"]));
        echo json_encode(array('code'=>$r));
    }

    public function deleteuserlist()
    {
        $this->load->model('modeluser');
        $result=$this->modeluser->DeleteUserAll();
        echo json_encode(array('code'=>$result));

    }

    public function  logout()
    {
        $this->session->unset_userdata('admin');
        redirect(base_url('admin/login'));
    }

    public function  peizhi()
    {
        $this->load->model("modelcontent");
        $data['result']=$this->modelcontent->GetContent(array('id'=>1));

        //var_dump($data["result"]);

        $this->load->view('header');
        $this->load->view("manager_peizhi",$data);
    }

    public  function savepeizhi()
    {
        $data["qq1"]=$this->input->post('qq1');
        $data["qq2"]=$this->input->post('qq2');
        $data["shishicai"]=$this->input->post('cqssc');
        $data["liuhecainum"]=$this->input->post("lhcnum");
        $data["qishu"]=$this->input->post('qihao');
        $data["beijingcaiche"]=$this->input->post('bjcc');
        $data["liuhecai"]=$this->input->post('lhc');
        $data["weburl"]=$this->input->post('weburl');

        $data["loginurl1"]=$this->input->post('login1');
        $data["loginurl2"]=$this->input->post('login2');
        $data["loginurl3"]=$this->input->post('login3');

        $data["register1"]=$this->input->post('register1');
        $data["register2"]=$this->input->post('register2');
        $data["register3"]=$this->input->post('register3');

        $data["descssc"]=$this->input->post('descssc');
        $data["desclhc"]=$this->input->post('desclhc');
        $data["descbjsc"]=$this->input->post('descbjsc');


        $data["id"]=1;

        $this->load->model("modelcontent");
        $re=$this->modelcontent->UpdateContent($data);
        echo json_encode(array("code"=>$re));
    }


}