<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $posts->products_judul ?> - <?php echo $posts->products_keyword ?> | <?php echo $identitas->nama_website?></title>
  <meta name="title" content="<?php echo $posts->products_judul ?> - <?php echo $posts->products_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta property="og:title" content="<?php echo $posts->products_judul ?> - <?php echo $posts->products_keyword ?> | <?php echo $identitas->nama_website?>">
  <meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
  <meta name="site_url" content="<?php echo base_url()?>product_detail/<?php echo $posts->products_judul_seo ?>">
  <meta name="description" content="<?php echo $posts->products_meta_desk ?>">
  <meta name="keywords" content="<?php echo $posts->products_keyword ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="msvalidate.01" content="DA329AB9B967ABBCBD6B9280D0C3991A" />
  <meta name="web_author" content="arkansys.com">
  <link rel="alternate" href="<?php echo base_url()?>" hreflang="id" />
  <link href='<?php echo base_url()?>' rel='canonical'/>
  <meta property="og:site_name" content="<?php echo $identitas->nama_website?>">
  <meta property="og:description" content="<?php echo $posts->products_meta_desk ?>">
  <meta property="og:url" content="<?php echo base_url()?>product_detail/<?php echo $posts->products_judul_seo ?>">
  <meta property="og:image" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar ?>">
  <meta property="og:image:url" content="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar ?>">
  <meta property="og:type" content="article">
  <link rel="shortcut icon" href="<?php echo base_url()?>bahan/backend/foto/<?php echo $identitas->favicon?>" type="image/x-icon">
  <?php $this->load->view('frontend/analytics')?>
    <?php $this->load->view('frontend/css')?>


</head>

<body>
  <div class="off_canvars_overlay"> </div>
  <?php $this->load->view('frontend/menu')?>
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content">
                      <ul>
                          <li><a href="<?php echo base_url()?>">Halaman Utama</a></li>
                          <?php $cat = $this->Crud_m->view_join_where_array('products_category','products','products_cat_id',array ('products.products_cat_id' => $posts->products_cat_id))->row_array(); ?>
                          <li><a href="<?php echo base_url()?>product/category/<?php echo $cat['products_cat_judul_seo']?>"><?php echo $cat['products_cat_judul']?></a></li>

                              <li><?php echo $posts->products_judul ?></li>
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
                                  <img id="zoom1" src="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar ?>" data-zoom-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar ?>" alt="big-1">
                              </a>
                          </div>
                          <div class="single-zoom-thumb">
                              <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                  <li>
                                      <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar2 ?>" data-zoom-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar2 ?>">
                                          <img src="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar2 ?>" alt="zo-th-1"/>
                                      </a>

                                  </li>
                                  <li >
                                      <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar3 ?>" data-zoom-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar3 ?>">
                                          <img src="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar3 ?>" alt="zo-th-1"/>
                                      </a>

                                  </li>
                                  <li >
                                      <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar4?>" data-zoom-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar4?>">
                                          <img src="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar4?>" alt="zo-th-1"/>
                                      </a>

                                  </li>
                                  <li >
                                      <a href="#" class="elevatezoom-gallery active" data-update="" data-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar5?>" data-zoom-image="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar5?>">
                                          <img src="<?php echo base_url()?>bahan/foto_products/<?php echo $posts->products_gambar5?>" alt="zo-th-1"/>
                                      </a>

                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <?php $harga_disc = $posts->products_harga-(($posts->products_harga_disc/100)*$posts->products_harga); ?>

                  <div class="col-lg-7 col-md-6">
                      <div class="product_d_right">
                        <form method="post" action="<?php echo base_url();?>Product/add_to_cart" accept-charset="utf-8">
                              <h3><?php echo $posts->products_judul ?></h3>
                              <input type="hidden" name="products_id" value="<?php echo $posts->products_id ?>">
                              <input type="hidden" name="products_gambar" value="<?php echo $posts->products_gambar ?>">
                              <input type="hidden" name="products_judul" value="<?php echo $posts->products_judul ?>">
                              <div class="price_box">
                                <?php if($posts->products_disc_status == 'NON PROMO'){?>
                                  <span class="std_price">Rp. <?php echo number_format($harga_disc,0,',','.')?></span>
                                  <input type="hidden" name="products_harga_disc" value="<?php echo $harga_disc ?>">
                                <?php }else{ ?>
                                  <span class="old_price">Rp. <?php echo number_format($posts->products_harga,0,',','.')?></span>
                                  <span class="current_price">Rp. <?= number_format($harga_disc,0,',','.') ?></span>
                                  <div class="countdown_text">
                                      <p><span>Beli Sekarang !</span> Promo berakhir pada:</p>
                                  </div>
                                  <input type="hidden" name="products_harga_disc" value="<?php echo $harga_disc ?>">
                                  <input type="hidden" name="products_harga" value="<?php echo $posts->products_harga ?>">
                                  <div class="product_timing">
                                      <div data-countdown="<?php echo $posts->products_disc_end ?>"></div>
                                  </div>
                                <?php } ?>


                              </div>
                              <div class="product_desc">
                                  <p><?php echo $posts->products_desk ?></p>
                              </div>
                              <div class="product_variant size">
                                  <label>Ukuran</label>
                                  <select class="niceselect_option" id="color2" name="products_ukuran" required>
                                      <option selected value=""> Pilih ukuran</option>
                                      <option  value="S">S</option>
                                      <option value="M">M</option>
                                      <option  value="L">L</option>
                                      <option value="XL">XL</option>
                                  </select>
                              </div>
                              <div class="product_variant quantity">
                                  <label>Jumlah</label>
                                  <input min="1" max="1000" type="number" name="quantity" required>
                                  <button class="add_cart button" type="submit">Beli Sekarang</button>

                              </div>
                              <div class="product_meta">
                                  <span>Category: <a href="<?php echo base_url()?>product/category/<?php echo $cat['products_cat_judul_seo']?>"><?php echo $cat['products_cat_judul']?></a></span>
                              </div>
                              <div class="product_meta">
                                  <span>Share :
                                    <div class="priduct_social">
                                        <ul>
                                          <li><a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo base_url("product_detail/$posts->products_judul_seo ") ?>" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url("product_detail/$posts->products_judul_seo")?>','newwindow','width=400,height=350');  return false;" title="Facebook" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                                            <li><a class="linkedin" href="whatsapp://send?text=<?php echo $posts->products_judul  ?> - <?php echo $identitas->nama_website?>| <?php echo base_url("product_detail/$posts->products_judul_seo ") ?>" title="whatsapp"><i class="fa fa-whatsapp"></i> WhatsApp</a></li>

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

          <!--product area start-->
          <section class="product_area related_products">
              <div class="row">
                  <div class="col-12">
                      <div class="section_title title_style2">
                         <div class="title_content">
                             <h2>Produk <span>Terkait</span></h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="product_carousel product_details_column5 owl-carousel">
                    <?php $related = $this->Crud_m->view_join_one('products_category','products','products_cat_id',array ('products_status'=>'publish','products_disc_status'=>'NON PROMO','products.products_cat_id' => $posts->products_cat_id),'products_id','DESC','0','10');?>
                    <?php  foreach ($related as $post_new){ ?>
                     <div class="col-lg-3">
                          <article class="single_product">
                              <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="<?php echo base_url("product_detail/$post_new->products_judul_seo ") ?>">
                                <img <?php
                                    if(empty($post_new->products_gambar)) {
                                      echo "<img src='".base_url()."bahan/layout_foto_promo.png'>";
                                    }else {
                                      echo " <img src='".base_url()."bahan/foto_products/".$post_new->products_gambar."'> ";}
                                    ?>
                                  </div>
                                  <div class="product_content">
                                      <div class="product_content_inner">
                                          <p class="manufacture_product"><a href="<?php echo base_url("product/category/$post_new->products_cat_judul_seo ") ?>"><?php echo $post_new->products_cat_judul?></a></p>
                                          <h4 class="product_name"><a href="<?php echo base_url("product_detail/$post_new->products_judul_seo ") ?>"><?php echo $post_new->products_judul?></a></h4>
                                          <div class="price_box">
                                              <span class="std_price">Rp. <?php echo number_format($post_new->products_harga,0,',','.')?></span>
                                          </div>
                                      </div>
                                  </div>
                              </figure>
                          </article>
                     </div>
                   <?php } ?>
                  </div>
              </div>
          </section>
          <!--product area end-->

          <!--product area start-->
          <section class="product_area upsell_products">
              <div class="row">
                  <div class="col-12">
                      <div class="section_title title_style2">
                         <div class="title_content">
                             <h2> Produk <span>Promo</span></h2>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="product_carousel product_details_column5 owl-carousel">
                    <?php  foreach ($posts_product_disc as $post_new){
                                   $harga_disc = $post_new->products_harga-(($post_new->products_harga_disc/100)*$post_new->products_harga);
                                   ?>

                     <div class="col-lg-3">
                          <article class="single_product">
                              <figure>
                                  <div class="product_thumb">
                                    <a class="primary_img" href="<?php echo base_url("product_detail/$post_new->products_judul_seo ") ?>">
                                    <img <?php
                                        if(empty($post_new->products_gambar)) {
                                          echo "<img src='".base_url()."bahan/layout_foto_promo.png'>";
                                        }else {
                                          echo " <img src='".base_url()."bahan/foto_products/".$post_new->products_gambar."'> ";}
                                        ?>
                                      <div class="label_product">
                                          <span class="label_sale"><?php echo $post_new->products_harga_disc ?>%</span>
                                      </div>
                                  </div>
                                  <div class="product_content">
                                      <div class="product_content_inner">
                                          <p class="manufacture_product"><a href="<?php echo base_url("product/category/$post_new->products_cat_judul_seo ") ?>"><?php echo $post_new->products_cat_judul?></a></p>
                                          <h4 class="product_name"><a href="<?php echo base_url("product_detail/$post_new->products_judul_seo ") ?>"><?php echo $post_new->products_judul?></a></h4>
                                          <div class="price_box">
                                              <span class="old_price">Rp. <?php echo number_format($post_new->products_harga,0,',','.')?></span>
                                              <span class="current_price">Rp. <?= number_format($harga_disc,0,',','.') ?></span>
                                          </div>
                                      </div>
                                  </div>
                              </figure>
                          </article>
                     </div>

                   <?php } ?>
                  </div>
              </div>
          </section>
          <!--product area end-->
      </div>
  </div>


  			</div>
  		</div>
  	</div>

    <?php $this->load->view('frontend/bottom')?>
    <?php $this->load->view('frontend/js')?>
</div>
</body>
</html>
