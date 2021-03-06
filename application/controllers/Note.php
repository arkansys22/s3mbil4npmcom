<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Note extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function index()
  {
   $this->load->library('pagination');
		$page1 = 'Y';
		/* menghitung jumlah total data */
		$jumlah = $this->Crud_m->total_rows();

		// Mengatur base_url
		$config['base_url'] = base_url().'berita/index/halaman/';
		//menghitung total baris
		$config['total_rows'] = $jumlah;
		//mengatur total data yang tampil per halamannya
		$config['per_page'] = 6;
		// tag pagination bootstrap
		$config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
		$config['full_tag_close']   = "</ul>";
		$config['num_tag_open']     = "<li class='page-item'><a class='page-link'";
		$config['num_tag_close']    = "</li>";
		$config['cur_tag_open']     = "<li class='disabled'><li class='page-item active'><a class='page-link' href='#'>";
		$config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
		$config['next_link']        = "Selanjutnya";
		$config['next_tag_open']    = "<li class='page-item'>";
		$config['next_tagl_close']  = "</li>";
		$config['prev_link']        = "Sebelumnya";
		$config['prev_tag_open']    = "<li class='page-item'>";
		$config['prev_tagl_close']  = "</li>";
		$config['first_link']       = "Awal";
		$config['first_tag_open']   = "<li class='page-item'>";
		$config['first_tagl_close'] = "</li>";
		$config['last_link']        = 'Terakhir';
		$config['last_tag_open']    = "<li class='page-item'>";
		$config['last_tagl_close']  = "</li>";

		// mengambil uri segment ke-4
		$dari = $this->uri->segment('4');
		/* memanggil model untuk ditampilkan pada masing2 modul*/
		$data['posts_bisnis'] = $this->Crud_m->view_where_orders('bisnis','bisnis_status','bisnis_id','ASC');
		 $data['status']   = 'active';
		  $data['status_produk']   = '';

		$data['post_terbaru']= $this->Crud_m->view_one_limit('blogs','blogs_status','blogs_id','desc',$dari,$config['per_page']);

		$this->pagination->initialize($config);
     $this->load->view('fronts/beritas/v_berita', $data);
  }


  public function detail($id)
	{

			$config['per_page'] = 4;
			$row = $this->Crud_m->get_by_id_post($id,'note_id','note','note_judul_seo');
			if ($this->uri->segment('4')==''){
				$dari = 0;
				}else{
					$dari = $this->uri->segment('4');
			}
			if ($row)
				{
          $data['posts_note'] = $this->Crud_m->view_where_order('note',array('note_status'=>'publish'),'note_id','asc');
          $data['posts_produk'] = $this->Crud_m->view_where_order_limit('templates',array('templates_status'=>'publish'),'templates_id','desc',$dari,'5');
          $data['posts_blogs'] = $this->Crud_m->view_where_order('blogs',array('blogs_status'=>'publish'),'blogs_id','desc');
          $data['posts_templates_category']= $this->Crud_m->view_one_limit('templates_category','templates_cat_status','templates_cat_id','ASC',$dari,'10');
          $data['menu'] = 'syarat-ketentuan';
					$data['posts']            = $this->Crud_m->get_by_id_post($id,'note_id','note','note_judul_seo');
					$this->add_count_note($id);
					$data['identitas']= $this->Crud_m->get_by_id_identitas($id='1');
          $this->load->view('fronts/note/v_detail', $data);
				}
				else
						{
							$this->session->set_flashdata('message', '<div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" data-dismiss="alert">&times;</button>Blogs tidak ditemukan</b></div>');
							redirect(base_url());
						}
	}

  function add_count_note($id)
	{
			$check_visitor = $this->input->cookie(urldecode($id), FALSE);
			$ip = $this->input->ip_address();
			if ($check_visitor == false) {
					$cookie = array("name" => urldecode($id), "value" => "$ip", "expire" => 3600, "secure" => false);
					$this->input->set_cookie($cookie);
					$this->Crud_m->update_counter(urldecode($id),'note','note_judul_seo','note_dibaca');
			}
	}


}
