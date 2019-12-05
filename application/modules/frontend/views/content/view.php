<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
?>
<style type="text/css">
  #searchForm {
    position:absolute;
      top:50%;
  }
</style>
<script type="text/javascript">
    var base_url = '<?php echo base_url();?>';
    
</script>
 <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- First slide -->
                <div class="item carousel-item-eight active">
                    <div class="container">
                        <div class="carousel-position-six text-uppercase text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v5" data-animation="animated fadeInDown">
                                Expore the power <br/>
                                <span class="carousel-title-normal">of Metronic</span>
                            </h2>
                            <!-- <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">This is what you were looking for</p>
                            <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Purchase Now!</a> -->
                        </div>
                    </div>
                </div>

                
                
            
            </div>

                <form class="col-sm-12 " id="searchForm" action="<?php echo base_url('frontend/main/listing');?>" >
                    <div class="form-group col-sm-4 col-sm-offset-4">
                          <input type="text" class="form-control" placeholder="Dari" style="background: rgba(255,255,255,0.8);">
                       
                      </div>
                      <div class="form-group col-sm-4 col-sm-offset-4">
                        
                          <input type="text" class="form-control" placeholder="Ke" style="background: rgba(255,255,255,0.8);">
                      </div>
                      <div class="form-group col-sm-4 col-sm-offset-4">
                        <input type="text" class="form-control datepicker" id="tgl_pergi"  placeholder="Tanggal Pergi" style="background: rgba(255,255,255,0.8);">
                      </div>
                      <div class="form-group col-sm-4 col-sm-offset-4">
                        <input type="text" class="form-control datepicker" placeholder="Tanggal Pulang" style="background: rgba(255,255,255,0.8);">
                      </div>
                      <div class="form-group col-sm-4 col-sm-offset-4">
                          <button type="submit" class="btn btn-primary mb-2">Cari</button>
                        </div>
                    
                </form>
            </div>

           
        </div>
    </div>
    <!-- END SLIDER -->
<div class="main">
      <div class="container">
        
      
         

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <!-- <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-9">
            <span>Metronic - The Most Complete &amp; Popular Admin &amp; Frontend Theme</span>
          </div>
          <div class="col-md-3 text-right">
            <a class="btn-transparent" href="http://www.keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank"><i class="fa fa-rocket margin-right-10"></i>Preview Admin</a>
          </div>
        </div> -->
        <!-- END BLOCKQUOTE BLOCK -->
        <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-3">
            <h2><a href="portfolio.html">Recent Works</a></h2>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img1.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="<?php echo base_url() ; ?>frontend/views/content/portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img1.jpg" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img2.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img2.jpg" class="fancybox-button" title="Project Name #2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img5.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img5.jpg" class="fancybox-button" title="Project Name #5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img6.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img6.jpg" class="fancybox-button" title="Project Name #6" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img3.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img3.jpg" class="fancybox-button" title="Project Name #3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo base_url() ; ?>assets/pages/img/works/img4.jpg" alt="Amazing Project" class="img-responsive">
                  <a href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a href="<?php echo base_url() ; ?>assets/pages/img/works/img4.jpg" class="fancybox-button" title="Project Name #4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Amazing Project</strong>
                  <b>Agenda corp.</b>
                </a>
              </div>
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->

        

        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
          <div class="col-lg-12">
            <h2>WHY CHOOSE US</h2>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span>Multipurpose Template</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red"></i></em>
              <span>Well Documented</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green"></i></em>
              <span>Responsive Design</span>
            </div>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN STEPS -->
        <div class="row ">
          <div class="col-lg-12 ">
            <h2>HOW TO RENT</h2>
          </div>
        </div>
        <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step1">
              <h2>CHOOSE TRIP DETAILS</h2>
              <p>Enter Details and then click on 'Search'.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step2">
              <h2>SELECT YOUR BUS</h2>
              <p>Select bus and click 'Book'.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step3">
              <h2>CONFIRMATION</h2>
              <p>Click 'Confirm' and sit tight our admin will make a contact.</p>
            </div>
          </div>
        </div>
        <!-- END STEPS -->

        

        <!-- BEGIN CLIENTS -->
        <div class="row margin-bottom-40 our-clients">
          <div class="col-md-3">
            <h2><a href="javascript:;">Our Clients</a></h2>
            <p>Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel6-brands">
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_1_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_1.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_2_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_2.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_3_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_3.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_4_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_4.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_5_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_5.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_6_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_6.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_7_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_7.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_8_gray.png" class="img-responsive" alt="">
                  <img src="<?php echo base_url() ; ?>assets/pages/img/clients/client_8.png" class="color-img img-responsive" alt="">
                </a>
              </div>                  
            </div>
          </div>          
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>
  <!-- /.container -->