<script src="<?php echo base_url('_assets_/js/responsiveslides.min.js');?>"></script>
			<script>
			    $(function () {

			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
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
			<?php
				$sliderText = array(
					'high quality education for Children',
					'high quality education for Children',
					'high quality education for Children',
					'high quality education for Children'
				);
				$img_ = array(1,2,6,3);
			?>
<div  id="top" class="callbacks_container" style="margin-top:100px;">
			      <ul class="rslides" id="slider4">
			      	<?php $i = 0; ?>
			      	<?php foreach($sliderText as $item){?>
			        <li>
			          <img src="<?php echo base_url('_assets_/images/slide'.$img_[$i].'.jpg');?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<div class="col-sm-6">
			          			<h1>providing</h1>
			          			<label><?php echo $item;?></label>
			          		</div>
			          		<div class="col-sm-6" style="vertical-align: top; overflow: hidden">
			          			<a href="<?php echo site_url('web/call_page/dos_donts/index/99'); ?>">
			          				<img src="<?php echo base_url('_assets_/images/dos_donts.png');?>?ver=1.2" style="width: 392px; height:41px" class="img-responsive">
			          			</a>
			          		</div>
			          	</div>
			          </div>
			        </li>
			        <?php $i++; ?>
			    	<?php }?>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>