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

    //function orderlist()
    //{
    //    $this->load->model("modelpayorder");
    //    $data["result"]=$this->modelpayorder->GetPayOrder();
    //    $this->load->view("header");
    //    $this->load->view("Manager_orderlist",$data);
    //}//

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

    public function upload()
    {
        $this->load->view('header');
        $this->load->view("manager_uploadfile");
    }



    public  function  weipayfor()
    {
        if(!empty($_FILES['weifile']['name']))
        {
            $config['upload_path'] = '../images';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';
            $config['max_width'] = '1000';
            $config['max_height'] = '1000';
            $config['file_name'] = 'weipay.png';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            if($this->upload->do_upload('weifile'))
            {
                echo '<script> alert("上传成功");</script>';
            }else
            {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }
        }
    }

    public  function alipayfor()
    {
        if(!empty($_FILES['alifile']['name']))
        {
            $config['upload_path'] = '../images';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';
            $config['max_width'] = '1000';
            $config['max_height'] = '1000';
            $config['file_name'] = 'alipay.png';
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            if($this->upload->do_upload('alifile'))
            {
                echo '<script> alert("上传成功");</script>';
            }else
            {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }
        }
    }

    public  function uploadfile()
    {
        $code=$this->input->post("code");

        if ((($_FILES["file"]["type"] == "image/gif")||($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 200000))
        {
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else
            {
                    $ext=end(explode('.', $_FILES["file"]["name"]));
                    $newname=$this->randnum();
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    "images/" . $newname .".".$ext);
                if($code=="2")
                {
                    $data["register2"]="images/".$newname.".".$ext;
                }else if($code=="1")
                {
                    $data["register1"]="images/".$newname.".".$ext;
                }
                $data["id"]=1;
                    $this->load->model("modelcontent");
                    $re=$this->modelcontent->UpdateContent($data);



                    echo "<script>alert('上传成功');history.go(-1);</script>";

            }
        }
        else
        {
            echo "无效上传";
        }
    }

    public function addpcurl()
    {
        $data["pcurl"]=$this->input->post('pcurl');

        $this->load->model("modelpcurl");
        $re=$this->modelpcurl->Add($data);
        echo json_encode(array("result"=>$re));
    }

    public  function getpcurl()
    {
        $this->load->model("modelpcurl");
        $data["result"]=$this->modelpcurl->Get();
        $this->load->view("header");
        $this->load->view("Manager_orderlist",$data);
    }

    public  function delpcurl()
    {
        $data['id']=$this->input->post('id');

        $this->load->model("modelpcurl");
        $re=$this->modelpcurl->Delete($data);
        echo json_encode(array("result"=>$re));
    }

    public  function mbsave()
    {
        $data["id"]=1;
        $data["mburl1"]=$this->input->post('mburl1');
        $data["mburl2"]=$this->input->post('mburl2');
        $data["mburl3"]=$this->input->post('mburl3');
        $data["mburl4"]=$this->input->post('mburl4');
        $data["openaccount"]=$this->input->post('openaccount');
        $data["service"]=$this->input->post('service');
        $data["topup"]=$this->input->post('topup');

        $this->load->model("modelmburl");
        $re=$this->modelmburl->Update($data);

        echo json_encode(array("result"=>$re));
    }

    public  function mbview()
    {
        $this->load->model("modelmburl");
        $data['result']=$this->modelmburl->Get(array('id'=>1));

        //var_dump($data);

        $this->load->view('header');
        $this->load->view("manager_peizhi",$data);
    }

    public  function configview()
    {
        $this->load->model("modelconfig");
        $data['result']=$this->modelconfig->Get(array('id'=>1));

        //var_dump($data);

        $this->load->view('header');
        $this->load->view("manager_config",$data);
    }

    public  function saveconfig()
    {
        $data["id"]=1;
        $data["title"]=$this->input->post('title');
        $data["keyword"]=$this->input->post('keyword');
        $data["descript"]=$this->input->post('descript');
        $data["website"]=$this->input->post('website');
        $data["webname"]=$this->input->post('webname');
        $data["kefu"]=$this->input->post('kefu');

        $this->load->model("modelconfig");
        $re=$this->modelconfig->Update($data);
        echo json_encode(array("result"=>$re));
    }

    protected function randnum()
    {
        $numbers = range (1,15);
        srand((float)microtime() * 1000000);
        shuffle($numbers);
        $rnum="";
        while (list(, $number) = each($numbers)) {
            $rnum=$rnum.$number;
        }
        return $rnum;
    }
}