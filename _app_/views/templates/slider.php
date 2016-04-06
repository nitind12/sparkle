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
<div  id="top" class="callbacks_container" style="margin-top:100px;">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="<?php echo base_url('_assets_/images/slide1.jpg');?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>high quality education for Children</label>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="<?php echo base_url('_assets_/images/slide2.jpg');?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>high quality education for Children</label>
			          	</div>
			          </div>
			        </li>
                                <li>
			          <img src="<?php echo base_url('_assets_/images/slide6.jpg');?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>high quality education for Children</label>
			          	</div>
			          </div>
			        </li>
                                <li>
			          <img src="<?php echo base_url('_assets_/images/slide3.jpg');?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>high quality education for Children</label>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>