<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Petacrawl extends CI_Controller {

 public function index(){
    $this->load->helper('url');
    $this->load->model('Sitemap_model');
    $data['templates'] = $this->Sitemap_model->generate_sitemap('templates','templates_id','templates_judul_seo','templates_post_hari','templates_post_tanggal','templates_post_jam');
    $this->load->view('fronts/v_sitemap',$data);
 }

}
