<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xavi
 * Date: 6/2/13
 * Time: 9:38 PM
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

<!-- DESCRIPTION -->
<div class="container-fluid" id="whoarewe">
    <div class="container apiumdescription">

        <h3>We are an experienced team with more than 10 years of kwowledge in  new technologies and methodogies.
            <cite>"Updated, innovative and committed"</cite>
            We offer afforded technologic solutions and real customers feedback for your present thinking also in your future.</h3>

        <div class="row-fluid">
            <div class="span4">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                </blockquote>
            </div><!-- end span -->
            <div class="span4">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                </blockquote>
            </div><!-- end span -->
            <div class="span4">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                </blockquote>
            </div><!-- end span -->
        </div><!-- end row -->
        <br>
        <p class="scroll text-center"><small><i class="next">»</i> Scroll down to meet the team</small></p>

        <hr/>

        <h3>Who are we?<cite>First of all, "Nice to meet you!"</cite></h3>
        <div class="row-fluid">
            <!-- XAVI -->
            <div class="span4">
                <blockquote class="who">
                    <small class="clearfix">
                        <i class="xavi"></i>
                        XAVI HIDALGO<br>
                        CEO & Technical Product Manager<br>
                    </small>
                </blockquote>
                <p class="clearfix phrase">"It's amazing how different disciplines can come together and help us find unexpected solutions to common problems"</p>

                <ul class="unstyled contact">
                    <li><i class="twitter"></i><a href="https://twitter.com/xavi_reloaded">@xavi_reloaded</a></li>
                    <li><i class="linkedin"></i><a href="http://es.linkedin.com/in/xavireloaded">es.linkedin.com/in/xavireloaded</a></li>
                    <li><i class="phone"></i>+34 633 029 763</li>
                    <li><i class="email"></i><a href="mailto:xavi.hidalgo@apiumtech.com">xavi.hidalgo@apiumtech.com</a></li>
                    <li class="tags">
                        <span class="label">TDD</span> <span class="label">AGILE</span> <span class="label">TESTACULAR</span> <span class="label">ANGULAR</span> <span class="label">SCRUM</span> <span class="label">TEAMLEAD</span> <span class="label">COACHING</span> <span class="label">NOSQL</span> <span class="label">MUMPS</span> <span class="label">CODING DOJO</span> <span class="label">JAVASCRIPT</span> <span class="label">MOBILE APPLICATIONS</span> <span class="label">ANDROID</span> <span class="label">IOS</span> <span class="label">WEB APPLICATIONS</span> <span class="label">ENTERPRISE PATTERNS</span> <span class="label">SPRING</span></li>
                </ul>
            </div><!-- end span -->
            <hr class="visible-phone">
            <!-- CHRISTIAN -->
            <div class="span4">
                <blockquote class="who">
                    <small class="clearfix">
                        <i class="christian"></i>
                        CHRISTIAN CICERI<br>
                        Co-Founder & Software Architect Manager<br>
                    </small>
                </blockquote>

                <p class="clearfix phrase">"An architect should be capable of switching between high-level and low-level aspects in a natural, quick and continuous way"</p>

                <ul class="unstyled contact">
                    <li><i class="twitter"></i><a href="#">This guy is shy! Too bad, he knows a lot!!</a></li>
                    <li><i class="linkedin"></i><a href="http://es.linkedin.com/in/cciceri">es.linkedin.com/in/cciceri</a></li>
                    <li><i class="phone"></i>+34 697 864 292</li>
                    <li><i class="email"></i><a href="mailto:christian.ciceri@apiumtech.com">christian.ciceri@apiumtech.com</a></li>
                    <li class="tags">
                        <span class="label">TDD</span> <span class="label">AGILE</span> <span class="label">TESTACULAR</span> <span class="label">ANGULAR</span> <span class="label">SCRUM</span> <span class="label">TEAMLEAD</span> <span class="label">COACHING</span> <span class="label">NOSQL</span> <span class="label">MUMPS</span> <span class="label">CODING DOJO</span> <span class="label">JAVASCRIPT</span> <span class="label">MOBILE APPLICATIONS</span> <span class="label">ANDROID</span> <span class="label">IOS</span> <span class="label">WEB APPLICATIONS</span> <span class="label">ENTERPRISE PATTERNS</span> <span class="label">SPRING</span></li>
                </ul>
            </div><!-- end span -->
            <hr class="visible-phone">
            <!-- LAURA -->
            <div class="span4">
                <blockquote class="who">
                    <small class="clearfix">
                        <i class="laura"></i>
                        LAURA VILAR<br>
                        Co-Founder & Visual and UX Designer<br>
                    </small>
                </blockquote>

                <p class="clearfix phrase">"I love the way simple design, user thinking knowledge and design process optimization combines perfectly to assure good results"</p>

                <ul class="unstyled contact">
                    <li><i class="twitter"></i><a href="https://twitter.com/lauravilarruiz">@lauravilarruiz</a></li>
                    <li><i class="linkedin"></i><a href="http://es.linkedin.com/in/lauravilarruiz">es.linkedin.com/in/lauravilarruiz</a></li>
                    <li><i class="phone"></i>+34 645 765 199</li>
                    <li><i class="email"></i><a href="mailto:laura.vilar@apiumtech.com">laura.vilar@apiumtech.com</a></li>
                    <li class="tags">
                        <span class="label">DESIGN</span> <span class="label">INTERACTION</span> <span class="label">USABILITY</span> <span class="label">WEB</span> <span class="label">LEAN UX</span> <span class="label">USER EXPERIENCE</span> <span class="label">APPLICATION DESIGN</span> <span class="label">CSS</span> <span class="label">HTML</span> <span class="label">LESS</span> <span class="label">BOOTSTRAP</span><span class="label">USER TEST</span> <span class="label">USER RESEARCH</span> <span class="label">WIREFRAMING</span> <span class="label">PROTOTYPING</span>  <span class="label">PRODUCT MANAGER</span> <span class="label">AGILE</span></li>
                </ul>
            </div><!-- end span -->
        </div><!-- end row fluid -->
    </div><!-- end normal container -->
</div><!-- row fluid -->
</div><!-- end apium description -->
</div><!-- container fluid -->

<!-- CONTACT -->
<div id="contactus" class="container-fluid apiumcontactfluid">
    <div class="container">
        <h3>Questions?<cite>Contact us, it's free and worthy!</cite></h3>

        <form class="span8 offset2">
            <p class="text-right"><small>*All fields are mandatory</small></p>

            <!-- ejemplo de input con error -->
            <div class="control-group error">
                <label class="control-label" for="inputError">Please, write your name</label>
                <div class="controls">
                    <input class="span8" type="text" placeholder="Name" id="inputName">
                </div>
            </div>

            <!-- ejemplo de input bien cumplimentado que se comprueba en el momento y le da feedback inmediato al usuario -->
            <div class="control-group success">
                <label class="control-label" for="inputSuccess">Well done! This is a valid email</label>
                <div class="controls">
                    <input class="span8" type="text" placeholder="Email" id="inputEmail">
                </div>
            </div>

            <input class="span8" type="text" placeholder="Phone" id="inputPhone">
            <select class="muted span8" type="text" placeholder="How did you know about us?" id="inputFind">
                <option value="" class="muted">How did you know about us?</option>
                <option value="Searching on Internet">Searching on Internet</option>
                <option value="Someone's recommendation">Someone's recommendation</option>
                <option value="Through Linkedin">Through Linkedin</option>
                <option value="Through Apium's blog">Through Apium's blog</option>
                <option value="Through Apium's twitter">Through Apium's twitter</option>
                <option value="Others">Others</option>
            </select>
            <textarea class="span8" placeholder="Message" id="inputMessage" type="text" rows="8"></textarea>

            <!-- message sent successfuly -->
            <div class="alert alert-success clearfix text-center">
                <b>Your message is on us right now!</b> Thanks for contacting! We'll be in touch in a sigh! :)
            </div>

            <button class="span8 btn btn-primary" type="submit">Send</button>



        </form>

        <p class="text-center visible-phone">
            <small>© Apium Technologies LTD 2013</small>
        </p>
    </div><!-- end container -->
</div><!-- end container contact fluid -->


