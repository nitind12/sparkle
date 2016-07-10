<!-- Resources for News Ticker -->

            <link rel="stylesheet" href="<?php echo base_url('_assets_/css/ticker.css');?>" />
            <script type="text/javascript" src="<?php echo base_url('_assets_/js/jquery.bootstrap.newsbox.js');?>"></script>
            <script type="text/javascript" src="<?php echo base_url('_assets_/js/jquery.bootstrap.newsbox.min.js');?>"></script>
            <script type="text/javascript">
                $(function () {
                    $(".demo1").bootstrapNews({
                        newsPerPage: 3,
                        autoplay: true,
                        pauseOnHover:true,
                        navigation: false,
                        direction: 'down',
                        newsTickerInterval: 3000,
                        onToDo: function () {
                            //console.log(this);
                        },
                    });
                });
            </script>
            <!-- Resources for News Ticker Ends -->
                <div class="panel"> <!-- For News Ticker -->
                    <div class="panel-body"> <!-- For News Ticker -->
                        <ul class="demo1"> <!-- For News Ticker -->
                            <?php foreach($news_ as $item){ ?>
                                <li class="news-item">
                                    <div style="color: #42B3E5"><?php echo $item->SUBJECT; ?></div>
                                    <div style="font-family: Arial;font-size: 15px;"><?php echo $item->NEWS; ?></div>
                                    <?php if($item->PATH_ATTACH != 'x'){ ?>
                                    <div style="font-family: Arial; font-size: 10px">
                                            <a href="<?php echo ADMIN___ . '/_assets_/newsdetail/'.$item->PATH_ATTACH;?>" style="color: #ff5000" target="_blank">click here for detail...</a>
                                    </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul> <!-- For News Ticker UL ends here  -->
                    </div> <!-- For News Ticker DIV ends here  -->
                </div> <!-- For News Ticker DIV ends here  -->