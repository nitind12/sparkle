<div class="col-lg-6">
    <div class="panel panel-default"<?php echo $style_; ?>>
        <div class="panel-heading">
            Today's Birthday
        </div>
        <!-- .panel-heading -->
        <div class="panel-body">
            <?php $cnt_ = count($bday_); ?>
            <?php if ($cnt_ != 0) { ?>
            <div class="panel-group" id="accordion">
                <?php $loop1 = 1; ?>
                <?php foreach ($today_ as $item) { ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $item->BID; ?>"><?php echo $item->NAME_; ?></a>
                            </h4>
                            
                        </div>
                        <div id="collapse<?php echo $item->BID; ?>" class="panel-collapse collapse<?php if($loop1 == 1){ echo " in"; } ?>">
                            <div class="panel-body">
                                <?php if($item->PHOTO_ != 'x'){ ?>
                                <div style="float: left; padding: 2px;"><img src="<?php echo base_url('_assets_/stud_photo/'.$item->PHOTO_); ?>" width="97" /></div>
                                <div style="float: left; padding: 2px; border-radius: 5px; background: #FFDD00">Birthday: 
                                    <?php 
                                        echo date("d", strtotime($item->DOB)) . "-" . date("F", strtotime($item->DOB));
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php $loop1 += 1; ?>
                <?php } ?>
            </div>
            <?php } else { ?>
                <div style="padding: 5px; float: left; color: #0000FF;">No Data Found !</div>
            <?php } ?>
        </div>
    </div>
</div>