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
<div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="<?php echo base_url('_assets_/images/slide1.jpg');?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>highquality service for men &amp; women</label>
			          		<a class="slide-btn" href="#">learn more</a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="<?php echo base_url('_assets_/images/slide1.jpg');?>" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>highquality service for men &amp; women</label>
			          		<a class="slide-btn" href="#">learn more</a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="<?php echo base_url('_assets_/images/slide1.jpg');?>" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<h1>providing</h1>
			          		<label>highquality service for men &amp; women</label>
			          		<a class="slide-btn" href="#">learn more</a>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>