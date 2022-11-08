<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta content="crudbiz" name="author">
<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title><?php echo $posts->templates_judul ?> - <?php echo $posts->templates_keyword ?> - <?php echo $identitas->slogan?></title>
<meta name="title" content="<?php echo $posts->templates_judul ?> - <?php echo $posts->templates_keyword ?> | <?php echo $identitas->nama_website?>">
<meta property="og:title" content="<?php echo $posts->templates_judul ?> - <?php echo $posts->templates_keyword ?> | <?php echo $identitas->nama_website?>">
<meta name="site_url" content="<?php echo base_url()?><?=$menu?>/<?php echo $posts->templates_judul_seo ?>">
<meta name="description" content="<?php echo $posts->templates_meta_desk ?>">
<meta name="keywords" content="<?php echo $posts->templates_keyword ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="alternate" href="<?php echo base_url()?><?=$menu?>/<?php echo $posts->templates_judul_seo ?>" hreflang="id" />
<link href='<?php echo base_url()?>templates/<?php echo $posts->templates_judul_seo ?>' rel='canonical'/>
<meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
<meta property="og:description" content="<?php echo $posts->templates_meta_desk ?>">
<meta property="og:url" content="<?php echo base_url()?><?=$menu?>/<?php echo $posts->templates_judul_seo ?>">
<meta property="og:image" content="<?php echo base_url()?>assets/frontend/produk/<?php echo $posts->templates_gambar ?>">
<meta property="og:image:url" content="<?php echo base_url()?>assets/frontend/produk/<?php echo $posts->templates_gambar ?>">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->favicon?>" type="image/x-icon">
<?php $this->load->view('fronts/analytics')?>
<?php $this->load->view('fronts/css')?>
</head>

<body>
  <div class="off_canvars_overlay"> </div>
  <?php $this->load->view('fronts/header.php')?>
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="<?php echo base_url()?>">Halaman Utama</a></li>
                          <?php $cat = $this->Crud_m->view_join_where_array('templates_category','templates','templates_cat_id',array ('templates.templates_cat_id' => $posts->templates_cat_id))->row_array(); ?>
                          <li><a href="<?php echo base_url()?>product/category/<?php echo $cat['templates_cat_judul_seo']?>"><?php echo $cat['templates_cat_judul']?></a></li>

                              <li><?php echo $posts->templates_judul ?></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="product_page_bg">
      <div class="container">
          <!--product details start-->
          <div class="product_details">
              <div class="row">
                  <div class="col-lg-5 col-md-6">
                      <div class="product-details-tab">
                          <div id="img-1" class="zoomWrapper single-zoom">
                              <a href="#">
                                <?php
                                if(empty($posts->templates_gambar)) {
                                  echo "";
                                }else{
                                  echo "<img id='zoom1' src='".base_url()."assets/frontend/produk/".$posts->templates_gambar."' data-zoom-image='".base_url()."assets/frontend/produk/".$posts->templates_gambar."'> ";}
                                ?>

                              </a>
                          </div>
                      </div>
                  </div>
                  <?php $harga_disc = $posts->templates_harga-(($posts->templates_harga_diskon/100)*$posts->templates_harga); ?>

                  <div class="col-lg-7 col-md-6">
                      <div class="product_d_right">
                        <form method="post" action="<?php echo base_url();?>Product/add_to_cart" accept-charset="utf-8">
                              <h3><?php echo $posts->templates_judul ?></h3>
                              <input type="hidden" name="products_id" value="<?php echo $posts->templates_id ?>">
                              <input type="hidden" name="products_gambar" value="<?php echo $posts->templates_gambar ?>">
                              <input type="hidden" name="products_judul" value="<?php echo $posts->templates_judul ?>">
                              <div class="price_box">
                                <?php if($posts->templates_harga_diskon == '0'){?>
                                  <span class="current_price">Rp. <?php echo number_format($harga_disc,0,',','.')?></span>
                                  <input type="hidden" name="products_harga_disc" value="<?php echo $harga_disc ?>">
                                <?php }else{ ?>
                                  <span class="old_price">Rp. <?php echo number_format($posts->templates_harga,0,',','.')?></span>
                                  <span class="current_price">Rp. <?= number_format($harga_disc,0,',','.') ?></span>
                                  <div class="countdown_text">
                                      <p><span>Beli Sekarang !</span></p>
                                  </div>
                                  <input type="hidden" name="products_harga_disc" value="<?php echo $harga_disc ?>">
                                  <input type="hidden" name="products_harga" value="<?php echo $posts->templates_harga ?>">
                                  <!-- <div class="product_timing">
                                      <div data-countdown=""></div>
                                  </div> -->
                                <?php } ?>


                              </div>
                              <div class="product_desc">
                                  <p><?php echo $posts->templates_desk ?></p>
                              </div>
                              <div class="product_variant quantity">
                                  <!-- <label>Jumlah</label>
                                  <input min="1" max="1000" type="number" name="quantity"> -->
                                  <li class="button"><a href="https://api.whatsapp.com/send?phone=<?php echo $identitas->whatsapp?>&text= Halo ka.. Mau sewa <?php echo $posts->templates_judul; ?> | <?php echo base_url(); ?>produk/<?php echo $posts->templates_judul_seo ?> untuk acara kami bisa?"  >Pilih Sewa</a></li>
                           

                              </div>
                              <div class="product_meta">
                                  <span>Category: <a href="<?php echo base_url()?>product/category/<?php echo $cat['templates_cat_judul_seo']?>"><?php echo $cat['templates_cat_judul']?></a></span>
                              </div>
                              <div class="product_meta">
                                  <span>Share :
                                    <div class="priduct_social">
                                        <ul>
                                          <li><a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo base_url("product_detail/$posts->templates_judul_seo ") ?>" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url("product_detail/$posts->templates_judul_seo")?>','newwindow','width=400,height=350');  return false;" title="Facebook" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                                            <li><a class="linkedin" href="whatsapp://send?text=<?php echo $posts->templates_judul  ?> - <?php echo $identitas->nama_website?>| <?php echo base_url("product_detail/$posts->templates_judul_seo ") ?>" title="whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a></li>

                                        </ul>
                                    </div>
                                  </span>
                              </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
          <!--product details end-->

          <!--product info start-->
          <div class="product_d_info">
              <div class="row">
                      <div class="col-12">
                          <div class="product_d_inner">
                              <div class="product_info_button">
                                  <ul class="nav" role="tablist">
                                      <li>
                                         <a class="active" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Ulasan Produk</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="tab-content">
                                  <div class="tab-pane fade show active" id="reviews" role="tabpanel" >
                                      <div class="reviews_wrapper">
                                          <div class="reviews_comment_box">
                                              <div class="comment_thmb">
                                                  <img src="assets/img/blog/comment2.jpg" alt="">
                                              </div>
                                              <div class="comment_text">
                                                  <div class="reviews_meta">

                                                      <p><strong>admin </strong>- September 12, 2018</p>
                                                      <p><div class="product_rating">
                                                         <ul>
                                                             <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                             <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                             <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                             <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                             <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                         </ul>
                                                      </div></p>
                                                      <span>roadthemes</span>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
          <!--product info end-->



              <div class="product_d_info">
                <h3><center>Mereka Yang Percaya</center></h3>
                <div class="row">
                    <br>
                      <div class="col-4">
                            <a href="#"><img src="<?php echo base_url()?>assets/frontend/theme/img/brand/brand1.jpg" alt=""></a>
                      </div>
                      <div class="col-4">
                            <a href="#"><img src="<?php echo base_url()?>assets/frontend/theme/img/brand/brand1.jpg" alt=""></a>
                      </div>
                      <div class="col-4">
                            <a href="#"><img src="<?php echo base_url()?>assets/frontend/theme/img/brand/brand1.jpg" alt=""></a>
                      </div>

                </div>
              </div>
              <br><br>
          </div>
      </div>
  </div>

  <?php $this->load->view('fronts/footer')?>
  <?php $this->load->view('fronts/js')?>

</body>
</html>
