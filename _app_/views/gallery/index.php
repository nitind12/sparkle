<!-- //banner -->
<link rel="stylesheet" href="<?php echo base_url('_assets_/css/lightbox.css'); ?>">
<div class="bottom_content"> 
    <div class="container">
        <div class="col-md-12 detail">
            <!---->
            <h1>Photo Gallery</h1>
            <div style="padding:10px; clear:both"></div>
            <div class="gallery">   
                <div class="panel-group" id="accordion">
                    <?php 
                        $cnt_categ = count($gallery_category); 
                        $loop1 = 1;
                    ?>
                    <?php foreach($gallery_category as $grp_item){?>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $loop1;?>"><?php echo $grp_item->CATEGORY; ?></a>
                            </h4>
                          </div>
                          <div id="collapse<?php echo $loop1;?>" class="panel-collapse collapse<?php if($loop1==1){ echo " in";} ?>" style="padding: 10px 0px;">
                                <?php foreach($gallery_ as $item){ ?>
                                    <?php if($grp_item->CATEG_ID == $item->CATEG_ID){ ?>
                                    <div class="col-md-4 gallery-grid">
                                    <div style="overflow: hidden; padding: 5px; float: left">
                                        <a class="example-image-link" href="<?php echo ADMIN___ . "/_assets_/gallery/".$item->PHOTO_; ?>" data-lightbox="example-set">
                                            <img class="example-image" src="<?php echo ADMIN___ . "/_assets_/gallery/".$item->PHOTO_; ?>" width="100" alt=""/>
                                        </a>
                                    </div>
                                    </div>
                                    <?php } ?>
                                <?php } ?>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <?php $loop1++; ?>
                    <?php } ?>
                </div>
            </div>
            <script src="<?php echo base_url('_assets_/js/lightbox-plus-jquery.min.js'); ?>"></script>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>

