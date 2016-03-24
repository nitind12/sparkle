<!-- //banner -->
<div class="bottom_content"> 
    <div class="container">
        <div class="row">
            <p class="lead" style="font-family: Arial; text-align: center; font-size: 15px; background: #fbdca5; color: #009000">
                <?php echo $this->session->flashdata('error_msg_'); ?>
            </p>
        </div>
        <div class="col-md-6 detail">
            <h2>Address &amp; Contact</h2>
            <div class="clearfix" style="padding: 15px"></div>
            <div class="col-md-12">
                <div class="col_1">
                    <i class="fa fa-home  icon2"></i>
                    <div class="box">
                        <p class="marTop9">
                            <b>School Campus:</b> <br />
                            Little Sparkle Academy<br />
                            Bareilly Road, Motahaldu<br />
                            Haldwani, Nainital, Uttarakhand
                        </p>
                    </div>
                </div>

                <div class="col_2" style="vertical-align: top">
                    <i class="fa fa-phone  icon2"></i>
                    <div class="box">
                        <p class="marTop9" style="padding-top: 20px;">+91 0000000000</p>
                        <p class="marTop9" style="padding-top: 20px; visibility: hidden">+91 0000000000, +91 0000000000</p>
                    </div>
                </div>

                <div class="col_2">
                    <i class="fa fa-envelope icon2"></i>
                    <div class="box">
                        <p class="m_6"><a href="#" class="link4">xxx@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-6 detail">
            <h2 style="float: left">You can directly write to us</h2>
            <div class="clearfix" style="padding: 15px"></div>
            <?php
            $attrib_ = array(
                'class' => 'contact-form',
                'name' => 'frmContactForm',
                'id' => 'frmContactForm',
                'style' => 'width: 100%'
            );
            ?>
            <?php echo form_open('web/contact_us', $attrib_); ?>
                <div class="col-md-12 grid_6">
                    <?php
                    $data = array(
                        'type' => 'text',
                        'autocomplete' => 'off',
                        'required' => 'required',
                        'placeholder' => 'Name',
                        'class' => 'required form-control',
                        'name' => 'txtName',
                        'id' => 'txtName',
                        'value' => ''
                    );
                    echo form_input($data);
                    ?>
                </div>
                <div style="clear: both; padding: 10px"></div>
                <div class="col-md-12 grid_6">
                    <?php
                    $data = array(
                        'type' => 'email',
                        'autocomplete' => 'off',
                        'required' => 'required',
                        'placeholder' => 'E-mail',
                        'class' => 'required form-control',
                        'name' => 'txtEmail',
                        'id' => 'txtEmail',
                        'value' => ''
                    );
                    echo form_input($data);
                    ?>
                </div>
                <div style="clear: both; padding: 10px"></div>
                <div class="col-md-12 grid_6">
                    <?php
                    $data = array(
                        'type' => 'text',
                        'autocomplete' => 'off',
                        'required' => 'required',
                        'placeholder' => 'Mobile/Phone',
                        'class' => 'required form-control',
                        'name' => 'txtPh',
                        'id' => 'txtPh',
                        'value' => ''
                    );
                    echo form_input($data);
                    ?>
                </div>
                <div style="clear: both; padding: 10px"></div>
                <div class="col-md-12 grid_6">
                    <?php
                    $data = array(
                        'autocomplete' => 'off',
                        'placeholder' => 'Message',
                        'class' => 'required form-control',
                        'name' => 'txtMsg',
                        'id' => 'txtMsg',
                        'value' => ''
                    );
                    echo form_textarea($data);
                    ?>
                </div>
                <div class="clearfix"> </div>
                <div class="row" style="margin-top:20px;">  
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8"> 
                        <div class="col-sm-6"> 
                            <p class="comment-form-author">
                                <?php
                                $data = array(
                                    'name' => 'submit',
                                    'type' => 'submit',
                                    'class' => 'col-xs-12 col-sm-12 btn btn-primary',
                                    'value' => 'SEND MESSAGE'
                                );
                                echo form_input($data);
                                ?>
                        </div>
                        <div class="col-sm-6"> 
                            <?php
                            $data = array(
                                'name' => 'reset',
                                'type' => 'reset',
                                'class' => 'col-xs-12 col-sm-12 btn btn-danger',
                                'value' => 'Reset'
                            );
                            echo form_input($data);
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            <?php echo form_close(); ?>
        </div>        
        <div class="clearfix" style="padding: 25px"> </div>
        <div class="row">
        <div class="map">
            <h2>How to find us</h2>
           <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:1150px;"><div id="gmap_canvas" style="height:500px;width:1200px;"><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wpzio.com" id="get-map-data">wpzio wordpress themes</a></div></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(28.8616408,79.51582880000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.8616408, 79.51582880000001)});infowindow = new google.maps.InfoWindow({content:"<b>Sparkle Academy</b><br/>Bareilly Road, Motahaldu<br/> Haldwani" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
    </div>
    <div class="clearfix" style="padding: 15px"></div>
    </div>
</div>