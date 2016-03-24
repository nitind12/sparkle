            <div style="margin-bottom:40px;">
                <!-- flex-slider -->
                <div>
                    <div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
                            <ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -352px; display: block;">
                                <li class="nbs-flexisel-item" style="width: 352px;">
                                    <div class="team-left">
                                        <img src="<?php echo base_url('_assets_/images/side1.jpg'); ?>" class="img-responsive"/>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 352px;">
                                    <div class="team-left">
                                        <img src="<?php echo base_url('_assets_/images/side2.jpg'); ?>" class="img-responsive"/>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 352px;">
                                    <div class="team-left">
                                        <img src="<?php echo base_url('_assets_/images/side3.jpg'); ?>" class="img-responsive"/>
                                    </div>
                                </li>
                            </ul>
                            <div class="nbs-flexisel-nav-left" style="top: 138px;"></div><div class="nbs-flexisel-nav-right" style="top: 138px;"></div></div></div>
                    
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 1,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 1
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 1
                                    }
                                }
                            });

                        });
                    </script>			
                    <!-- /flex-slider -->	
                </div>
            </div>	