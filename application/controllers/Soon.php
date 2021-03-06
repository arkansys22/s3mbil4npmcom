<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Soon extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function index()
	{

    $jumlah= $this->Crud_m->views_row('blogs','blogs_status','blogs_id','DESC');
    $config['total_rows'] = $jumlah;
    if ($this->uri->segment('4')==''){
      $dari = 0;
    }else{
      $dari = $this->uri->segment('4');
    }

    if (is_numeric($dari)) {
			$config['per_page'] = 30;
			$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
			$data['posts']= $this->Crud_m->view_one_limit('blogs','blogs_status','blogs_id','desc',$dari,$config['per_page']);

    }else{
			redirect('main');
		}
		$this->load->view('fronts/soon',$data);
  }


}
