<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta content="crudbiz" name="author">
<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title><?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?></title>
<meta name="title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
<meta property="og:title" content="<?php echo $identitas->nama_website?> - <?php echo $identitas->slogan?>">
<meta name="site_url" content="<?php echo base_url()?>">
<meta name="description" content="<?php echo $identitas->meta_deskripsi?>">
<meta name="keywords" content="<?php echo $identitas->meta_keyword?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
<link href='<?php echo base_url()?>' rel='canonical'/>
<meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
<meta property="og:description" content="<?php echo $identitas->meta_deskripsi?>">
<meta property="og:url" content="<?php echo base_url()?>">
<meta property="og:image" content="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>">
<meta property="og:image:url" content="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>">
<meta property="og:type" content="article">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->favicon?>" type="image/x-icon">
<?php $this->load->view('fronts/analytics')?>
<?php $this->load->view('fronts/css')?>
</head>
<body>
  <?php $this->load->view('fronts/header')?>
  <!--slider area start-->
  <section class="slider_section">
      <div class="slider_area slider_carousel owl-carousel">
        <?php  foreach ($posts_sliders as $post_new){
              $isi = character_limiter($post_new->slider_desk,200);
        ?>
          <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo base_url()?>assets/frontend/slider/<?php echo $post_new->slider_gambar?>">


          </div>
            <?php } ?>

      </div>
  </section>
  <!--slider area end-->
  <!--shipping area start-->

  <!--shipping area end-->

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth">
      <div class="shipping_area shipping_three mb-80">
          <div class="container">
              <div class="shipping_inner">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping6.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Gratis Konsultasi</h4>
                        <p>Kebutuhan Acara</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping7.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Gratis Ongkos Kirim</h4>
                        <p>Minimal Transaksi 1 Juta</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping8.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Jaminan Kepuasan</h4>
                        <p>Kualitas dan Pelayanan Terbaik</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="assets/img/about/shipping10.png" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Layanan 24/7 Jam</h4>
                        <p>Technical Support 24 Jam</p>
                    </div>
                </div>
              </div>
          </div>
      </div>
        <div class="container">
            <h1><center>Produk Sewa Pilihan</center></h1>
            <br><br>
            <div class="row">
                <div class="col-12">
                     <div class="row shop_wrapper grid_3">
                       <?php foreach ($posts_templates as $post_new2){  ?>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="<?php echo base_url("produk/$post_new2->templates_judul_seo ") ?>"><img src="<?php echo base_url()?>assets/frontend/produk/<?php echo $post_new2->templates_gambar; ?>" alt=""></a>
                                        <div class="label_product">
                                          <?php
                                          if(empty($post_new2->templates_harga_diskon)) { ?>
                                            <span></span>
                                          <?php
                                        }else{?>
                                          <span class="label_sale">Disc <?php echo number_format($post_new2->templates_harga_diskon,0,',','.')?></span>
                                        <?php }?>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_content_inner">
                                          <center>
                                            <h1><a href="<?php echo base_url("produk/$post_new2->templates_judul_seo ") ?>"><?php echo $post_new2->templates_judul; ?></a></h1>
                                            <div class="price_box">
                                              <?php
                                              if(empty($post_new2->templates_harga_diskon)) { ?>
                                                <span class="current_price">Rp<?php echo number_format($post_new2->templates_harga,0,',','.')?></span>
                                              <?php
                                            }else if($a = $post_new2->templates_harga - ($post_new2->templates_harga * ($post_new2->templates_harga_diskon/100))){?>
                                              <span class="old_price">Rp<?php echo number_format($post_new2->templates_harga,0,',','.')?></span><span class="current_price">Rp<?php echo number_format($a,0,',','.')?></span>
                                            <?php }?>

                                            </div>
                                          </center>
                                        </div>
                                        <div class="action_links">
                                             <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <?php } ?>
                    </div>


                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

<?php $this->load->view('fronts/footer')?>
<?php $this->load->view('fronts/js')?>

</body>
</html>
