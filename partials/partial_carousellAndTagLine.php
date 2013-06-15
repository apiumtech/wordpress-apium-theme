<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xavi
 * Date: 6/15/13
 * Time: 8:41 AM
 * To change this template use File | Settings | File Templates.
 */

?>

<!-- CAROUSEL AND TAGLINE -->
<div class="carousel slide hidden-phone" id="">
    <div class="carousel-inner">
        <!-- 1st item -->
        <div class="item active">
            <!-- image -->
            <img alt="" src="<?php echo get_template_directory_uri() ?>/img/home-apium.jpg">

            <!-- content image 1 -->
            <div class="container">
                <div class="apium-caption">
                    <h1>Hi! We are Apium Tech team</h1>
                    <p class="lead">Fresh, innovative and worthy IT Consulting</p>

                    <!-- Four columns of text below the carousel -->
                    <div class="row-fluid clearfix">
                        <div class="span3">
                            <h3><i class="mvp"></i>Get your idea done in record time</h3>
                            <p>We planify, priorize and develop to assure you a Minimum Viable Product launched in 30-90 days.</p>
                            <p><a class="btn btn-primaryapium" href="#contactus">Contact us &raquo;</a></p>
                        </div><!-- /.span3 -->
                        <div class="span3">
                            <h3><i class="efficiency"></i>Get the most of your product</h3>
                            <p>When you grow, scalability and architecture become essential and we can help you to build your success.</p>
                            <p><a class="btn btn-primaryapium" href="#contactus">Contact us &raquo;</a></p>
                        </div><!-- /.span4 -->
                        <div class="span3">
                            <h3><i class="multiplatform"></i>Go faster, reach everyone</h3>
                            <p>At these days reaching customers at any time and at any device is a must. Be multiplatform from the beginning.</p>
                            <p><a class="btn btn-primaryapium" href="#contactus">Contact us &raquo;</a></p>
                        </div><!-- /.span4 -->
                        <div class="span3">
                            <h3><i class="usertest"></i>Get customer feedback right away</h3>
                            <p>Customers are the right voice to listen to. We provide feedback and research even before development starts.</p>
                            <p><a class="btn btn-primaryapium" href="#contactus">Contact us &raquo;</a></p>
                        </div><!-- /.span4 -->
                    </div><!-- /.row -->
                    <p class="scroll text-center"><small><i class="next">»</i> Scroll down to know more about us</small></p>
                </div><!-- end apium caption -->
            </div><!-- end container -->
        </div><!-- end 1st item -->
    </div><!--end carousel inner -->
</div><!-- end my carousel -->

<!-- CAROUSEL AND TAGLINE PHONE-->
<div class="carousel slide visible-phone" id="myCarousel">
    <div class="carousel-inner">

        <!-- 1st item -->
        <div class="item active">
            <!-- image -->
            <img alt="" src="<?php echo get_template_directory_uri() ?>/img/home-apium.jpg">
            <!-- content image 1 -->
            <div class="container">
                <div class="apium-caption">
                    <h1>Hi! We are Apium Tech team</h1>
                    <p class="lead">Innovative IT Consulting</p>
                    <h3><i class="mvp"></i>Get your idea done in record time</h3>
                    <p>We planify, priorize and develop to assure you a Minimum Viable Product launched in 30-90 days.</p>
                    <p><a class="btn btn-primaryapium" href="#">Contact us &raquo;</a></p>
                    <p class="scroll text-center"><small><i class="next">»</i> Scroll down to know more about us</small></p>
                </div><!-- end apium caption -->
            </div><!-- end container -->
        </div><!-- end 1st item -->

        <!-- 2nd item -->
        <div class="item">
            <!-- image -->
            <img alt="" src="<?php echo get_template_directory_uri() ?>/img/home-apium.jpg">
            <!-- content image 1 -->
            <div class="container">
                <div class="apium-caption">
                    <h1>Hi! We are Apium Tech team</h1>
                    <p class="lead">Worthy IT Consulting</p>
                    <h3><i class="efficiency"></i>Get the most of your product</h3>
                    <p>When you grow, scalability and architecture become essential and we can help you to build your success.</p>
                    <p><a class="btn btn-primaryapium" href="#">Contact us &raquo;</a></p>
                    <p class="scroll text-center"><small><i class="next">»</i> Scroll down to know more about us</small></p>
                </div><!-- end apium caption -->
            </div><!-- end container -->
        </div><!-- end 2nd item -->

        <!-- 3rd item -->
        <div class="item">
            <!-- image -->
            <img alt="" src="<?php echo get_template_directory_uri() ?>/img/home-apium.jpg">
            <!-- content image 1 -->
            <div class="container">
                <div class="apium-caption">
                    <h1>Hi! We are Apium Tech team</h1>
                    <p class="lead">Fresh IT Consulting</p>
                    <h3><i class="multiplatform"></i>Go faster, reach everyone</h3>
                    <p>At these days reaching customers at any time and at any device is a must. Be multiplatform from the beginning.</p>
                    <p><a class="btn btn-primaryapium" href="#">Contact us &raquo;</a></p>
                    <p class="scroll text-center"><small><i class="next">»</i> Scroll down to know more about us</small></p>
                </div><!-- end apium caption -->
            </div><!-- end container -->
        </div><!-- end 3rd item -->

        <!-- 4rd item -->
        <div class="item">
            <!-- image -->
            <img alt="" src="<?php echo get_template_directory_uri() ?>/img/home-apium.jpg">
            <!-- content image 1 -->
            <div class="container">
                <div class="apium-caption">
                    <h1>Hi! We are Apium Tech team</h1>
                    <p class="lead">Worthy IT Consulting</p>
                    <h3><i class="usertest"></i>Get customer feedback right away</h3>
                    <p>Customers are the right voice to listen to. We provide feedback and research even before development starts.</p>
                    <p><a class="btn btn-primaryapium" href="#">Contact us &raquo;</a></p>
                    <p class="scroll text-center"><small><i class="next">»</i> Scroll down to know more about us</small></p>
                </div><!-- end apium caption -->
            </div><!-- end container -->
        </div><!-- end 4rd item -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

    </div><!--end carousel inner -->
</div><!-- end my carousel -->