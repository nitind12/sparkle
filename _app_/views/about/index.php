<div id="about" class="about">
    <div class="container">
        <div class="header about-header text-left">
            <div class="col-md-6">
            <h2>about sparkle academy</h2>
            <p>We wish to promote professional courses to the command person at affordable fees. Our motto has and will always remain "quality education". our trust thrives to imparting significant contribution in assisting confident to provide world class professional standards.</p>
            <p>Our curriculum is comprehensive, and goes beyond the core academics in order to facilitate development of concepts and ideas within the young creative minds. At Sparkle Academy, we strive to nurture our students in a milieu that prepares them to become global citizens, who are both, environmentally as well as socially conscious and thus have the capability to perform exceedingly well in any given environment.</p>
            </div>
            <!-- Resources for News Ticker -->
            <link rel="stylesheet" href="<?php echo base_url('_assets_/css/ticker.css');?>" />
            <script type="text/javascript" src="<?php echo base_url('_assets_/js/jquery.bootstrap.newsbox.js');?>"></script>
            <script type="text/javascript" src="<?php echo base_url('_assets_/js/jquery.bootstrap.newsbox.min.js');?>"></script>
            <script type="text/javascript" src="<?php echo base_url('_assets_/js/ticker.js');?>"></script>
            <!-- Resources for News Ticker Ends -->
            <div class="col-md-6">
            <h2>Recent News</h2>
                <div class="panel"> <!-- For News Ticker -->
                    <div class="panel-body"> <!-- For News Ticker -->
                        <ul class="demo1"> <!-- For News Ticker -->
                            <?php foreach($news_ as $item){ ?>
                                <li class="news-item">
                                    <div style="color: #0080f0"><?php echo $item->SUBJECT; ?></div>
                                    <div style="font-family: Arial;font-size: 15px;"><?php echo $item->NEWS; ?></div>
                                    <?php if($item->PATH_ATTACH != 'x'){ ?>
                                    <div style="font-family: Arial; font-size: 8px; color: #ff0000">
                                            <a href="<?php echo base_url('_assets_/newsdetail/'.$item->PATH_ATTACH);?>" style="color: #ff0000">more...</a>
                                    </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul> <!-- For News Ticker UL ends here  -->
                    </div> <!-- For News Ticker DIV ends here  -->
                </div> <!-- For News Ticker DIV ends here  -->
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="about-grids">
            <div class="col-md-4">
                <div class="about-grid">
                    <img src="<?php echo base_url('_assets_/images/img1.jpg'); ?>" title="name" />
                    <span class="t-icon1"> </span>
                    <div class="about-grid-info text-center">
                        <h3><a href="#">Our Toppers</a></h3>
                        <p>Success can’t be achieved by words, to achieve success one has to plan and work hard. This is the strategy we follow in Sparkle Academy.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-grid n-about-grid n-about-grid1">
                    <img src="<?php echo base_url('_assets_/images/img2.jpg'); ?>" title="name" />
                    <span class="t-icon1"> </span>
                    <div class="about-grid-info text-center">
                        <h3><a href="#">Kid's Corner</a></h3>
                        <p>It is a great pleasure to share stuff created by our Kid's. A cool Place for Kids!  Hang out and play some games or maybe find that site for your latest homework project.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-grid n-about-grid n-about-grid2">
                    <img src="<?php echo base_url('_assets_/images/img3.jpg'); ?>" title="name" />
                    <span class="t-icon2"> </span>
                    <div class="about-grid-info text-center">
                        <h3><a href="#">Our Infrastructure</a></h3>
                        <p>We continuously try to identify ways to improve student learning as measured on the high stakes standardized assessments mandated by the C.B.S.E .</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>