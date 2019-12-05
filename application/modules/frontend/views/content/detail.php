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

<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">Details</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Detail</h1>
            <div class="content-page">
              <!-- BEGIN CAROUSEL -->            
              <div class="front-carousel margin-bottom-20">
                <div id="myCarousel" class="carousel slide">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="<?php echo base_url() ; ?>assets/pages/img/posts/img1.jpg" alt="">
                    </div>
                  <div class="item">
                    <img src="<?php echo base_url() ; ?>assets/pages/img/posts/img3.jpg" alt="">
                  </div>
                </div>
                <!-- Carousel nav -->
                 <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>                
            </div>
            <!-- END CAROUSEL --> 

                    <!-- BEGIN INFO BLOCK -->               
                    <h2>Vero eos et accusamus</h2>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p> 
                    <!-- BEGIN LISTS -->
                    <div class="row front-lists-v1">
                        <div class="col-md-6">
                            <ul class="list-unstyled margin-bottom-20">
                                <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
                                <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                                <li><i class="fa fa-check"></i> Deserunt fpicia</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i> Officia deserunt molliti</li>
                                <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                                <li><i class="fa fa-check"></i> Deserunt fpicia</li>
                            </ul>
                        </div>
                    </div>
                    <!-- END LISTS -->
                    <!-- END INFO BLOCK -->

                           
                        
            </div>
          </div>

          <div class="col-md-3 col-sm-3 sidebar2">
            <h2 class="padding-top-30">Alamat</h2>
            <address>
              <strong>Loop, Inc.</strong><br>
              795 Park Ave, Suite 120<br>
              San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (234) 145-1810
            </address>
            <address>
              <strong>Email</strong><br>
              <a href="mailto:info@email.com">info@email.com</a><br>
              <a href="mailto:support@example.com">support@example.com</a>
            </address>

            <h2 class="padding-top-20">Booking</h2>
            <!-- BEGIN FORM-->
            <form action="#" role="form">
              <div class="form-group">
                <label for="career-name">Name</label>
                <input type="text" class="form-control" id="career-name">
              </div>
              <div class="form-group">
                <label for="career-position">Email</label>
                <input type="text" class="form-control" id="career-name">
              </div>
              <div class="form-group">
                <label for="career-resume">Handphone</label>
                <input type="text" class="form-control" id="career-resume">
              </div>
              <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
            </form>
            <!-- END FORM-->  

          </div>
          <!-- END CONTENT -->
        
        </div>
            <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          
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

        <!-- BEGIN SIDEBAR & CONTENT -->
      </div>
    </div>
  <!-- /.container -->