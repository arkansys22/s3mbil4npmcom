<!--footer area start-->
<footer class="footer_widgets">
  <center>
    <div class="footer_top">
        <div class="container">
            <div class="row">
              <div class="col-lg-4">
                  <div class="widgets_container">
                    <div class="logo">
                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/frontend/campur/<?php echo $identitas->logo?>" alt=""></a>
                    </div>
                    <br>
                      <div class="footer_contact">
                          <p style="color:white; font-size:20px">IKUTI KAMI</p>
                          <div class="footer_social">
                            <center>
                             <ul>
                                 <li><a class="facebook" href="<?php echo $identitas->facebook?>"><i class="icon-facebook"></i></a></li>
                                 <li><a class="youtube" href="<?php echo $identitas->youtube?>"><i class="icon-youtube"></i></a></li>
                                 <li><a class="instagram2" href="<?php echo $identitas->instagram?>"><i class="icon-instagram2"></i></a></li>
                             </ul>
                           </center>
                         </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                 <div class="footer_col_container">
                          <p style="color:white; font-size:20px">HUBUNGI KAMI</p>
                          <div class="footer_contact">
                            <p><?php echo $identitas->alamat?></p>
                             <p><a href="tel:+<?php echo $identitas->no_telp?>"><?php echo $identitas->no_telp?></a> </p>
                             <p><?php echo $identitas->email?></p>
                             <br>
                           </div>

                  </div>
              </div>

              <div class="col-lg-4">

                       <p style="color:white; font-size:20px">SISTEM PEMBAYARAN</p>
                       <img src="<?php echo base_url()?>assets/frontend/campur/payment.png" />



              </div>


            </div>
        </div>
    </div>
    <div class="footer_bottom ">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2022 <a href="#"><?php echo $identitas->nama_website?></a> | Development by <a href="https://www.crudbiz.com">Crudbiz</a> All Right Reserve
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="footer_payment text-right">
                        <img src="<?php echo base_url()?>bahan/frontend/img/icon/payment.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    </center>
</footer>
<!--footer area end-->
