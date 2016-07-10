<div id="team" class="team">
    <div class="container">
        <div class="header team-head text-left">
            <h2>Quick Links</h2>
        </div>
        <!--- teammember-grids ---->
        <div class="team-member-grids">
            <div class="team-member-grid">
                <a href="<?php echo site_url('web/call_page/message/directorMsg/8'); ?>">
                    <img src="<?php echo base_url('_assets_/images/t1.jpg'); ?>" title="name" /></a>
                <div class="team-member-info bottom-t-info">
                    <span> </span>
                    <h3>Director's Message</h3>
                    <p>Our vision is of a natural, holistic, student-centered learning environment that empowers and inspires our students to be creative. The Mission of our School is to ... 
                    <a href="<?php echo site_url('web/call_page/message/directorMsg/8'); ?>" style="text-decoration: none; color:yellow;">More...</a></p>
                </div>
            </div>
            <div class="team-member-grid">
                <div class="team-member-info bottom-t-info bottom-t-info-b">
                    <span> </span>
                    <h3>Principal's Message</h3>
                    <p>Globalization demands a new dimension to our approach to education. We, thus have to recognize the need for a globally relevant education. Such an education would mean imparting skills that would develop...
                    <a href="<?php echo site_url('web/call_page/message/principalMsg/8'); ?>" style="text-decoration: none; color:yellow;">More...</a></p></p>
                </div>
                <a href="<?php echo site_url('web/call_page/message/principalMsg/8'); ?>">
                    <img src="<?php echo base_url('_assets_/images/t2.jpg'); ?>" title="name" /></a>
            </div>
            <div class="team-member-grid">
                <img src="<?php echo base_url('_assets_/images/t3.jpg'); ?>" title="name" />
                <div class="team-member-info bottom-t-info">
                    <span> </span>
                    <h3>Happy Birthday</h3>
                    <script>
                        $(function () {

                          $("#slider5").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });
                    
                        });
                    </script>
                    <?php if(count($bday_) !=0) { ?>
                    <div  id="top" class="callbacks_container" align="center">
                        <ul class="rslides" id="slider5">
                            <?php foreach ($bday_ as $item) { ?>
                                <li>
                                    <div class="banner-bg-bday img-rounded" style="color: #ffffff">
                                        <img src="<?php echo ADMIN___ . '/_assets_/stud_photo/' . $item->PHOTO_; ?>" style="width: 97px" />
                                        <?php echo $item->NAME_; ?>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } else { ?>
                    <p>Wishing you a Happy Birthday. May GOD bless you all the days you live.</p>
                    <?php } ?>
                </div>
            </div>
            <div class="team-member-grid">
                <div class="team-member-info bottom-t-info bottom-t-info-b">
                    <span> </span>
                    <h3>Important Links</h3>
                    <a href="http://www.cbse.nic.in" target="_blank">www.cbse.nic.in</a>
                    <a href="http://www.cbseresults.nic.in" target="_blank">www.cbseresults.nic.in</a>
                    <a href="http://www.ncert.nic.in" target="_blank">www.ncert.nic.in</a>
                    <a href="http://www.indiaresults.com" target="_blank">www.indiaresults.com</a>
                    <a href="http://www.india.gov.in" target="_blank">www.india.gov.in</a>
                </div>
                <img src="<?php echo base_url('_assets_/images/t4.jpg'); ?>" title="name" style="margin-top:48px;"/>
            </div>
            <div class="team-member-grid">
                <a href="<?php echo site_url('web/call_page/gallery/index/6'); ?>" style="text-decoration: none">
                <img src="<?php echo base_url('_assets_/images/t5.jpg'); ?>" title="name" /></a>
                <div class="team-member-info bottom-t-info">
                    <span> </span>
                    <h3>Photo-Gallery</h3>
                    <p>Here you will find a large collection of some of our best photos to give you a peek at some of our amazing infrastructure, a sense of the activities within. 
                        <a href="<?php echo site_url('web/call_page/gallery/index/6'); ?>" style="text-decoration: none; color:yellow;">See Gallery</a></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!---//teammember-grids ---->
    </div>
</div>