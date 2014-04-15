<?php 
	require("header.php");
?>
<!---start-header---->
<div class="header">
	<div class="wrap">
	<!--- start-logo---->
	<div class="logo">
		<a href="index.html"><img src="<?php echo $basedir;?>/images/logo.png" title="voyage" /></a>
	</div>
	<!--- //End-logo---->
	<!--- start-top-nav---->
	<div class="top-nav">
			<ul class="flexy-menu thick orange">
				<li class="active">  
					<a href="index.html">
						<div style="text-align:center;">
							<img src="<?php echo $basedir?>/images/home.ico">
						</div>						
						Home
					</a>
				</li>
				<li>
					<a href="#">
						<div style="text-align:center;">
							<img src="<?php echo $basedir?>/images/home.ico">
						</div>							
						Map
					</a>
				</li>
				<li>
					<a href="#">
						<div style="text-align:center;">
							<img src="<?php echo $basedir?>/images/home.ico">
						</div>						
						Article
					</a>
				</li>
				<li>
					<a href="#">
						<div style="text-align:center;">
							<img src="<?php echo $basedir?>/images/home.ico">
						</div>						
						About
					</a>
				</li>
			</ul>
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"  style="background:url(<?php echo $basedir?>/images/search-icon.png) no-repeat 0px 1px;"> </span>
					</form>
				</div>
			</div>
			<!----search-scripts---->
			<script src="<?php echo $basedir?>/js/modernizr.custom.js"></script>
			<script src="<?php echo $basedir?>/js/classie.js"></script>
			<script src="<?php echo $basedir?>/js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
			<!----//search-scripts---->
	</div>
	<!--- //End-top-nav---->
	<div class="clear"> </div>
</div>
<!---//End-header---->

<div class="web/images-slider">
	<!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="<?php echo $basedir?>/images/papandayan/2.jpg"/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">To travel is to live</h4>
                        <!-- /Text title -->
                        <!-- Text description -->
                        <p class="description">You Don't Need Magic to Disappear. All you need is a destination.</p>
                        <!-- /Text description -->
                        <div class="slide-btns description">
                        	<ul>
                        		<li><a class="mapbtn" href="#">Show on the map </a></li>
                        		<li><a class="minfo" href="#">More info </a></li>
                        		<div class="clear"> </div>
                        	</ul>
                        </div>
                    </div>
                    <div class="description news">
                    	<p>
                    		This is some text that is placed in the transparent box.
						</p>
					</div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="<?php echo $basedir?>/images/papandayan/1.jpg" alt=""/>
                <div class="slide_content">
                     <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">To travel is to live</h4>
                        <!-- /Text title -->
                        <!-- Text description -->
                        <p class="description">You Don't Need Magic to Disappear. All you need is a destination.</p>
                        <!-- /Text description -->
                        <div class="slide-btns description">
                        	<ul>
                        		<li><a class="mapbtn" href="#">Show on the map </a></li>
                        		<li><a class="minfo" href="#">More info </a></li>
                        		<div class="clear"> </div>
                        	</ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <!--<div class="timers"> </div>-->
        <div class="slidePrev"><span> </span></div>
        <div class="slideNext"><span> </span></div>
    </div>
    <!--/slider -->
</div>

<!----start-find-place---->
<div class="find-place">
	<div class="wrap">
		<div class="p-h">
			<span>FIND YOUR</span>
			<label>MOUNTAIN</label>
		</div>
		<!---strat-date-piker---->
		  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		  <script>
		  $(function() {
		    $( "#datepicker" ).datepicker();
		  });
		  </script>
		<!---/End-date-piker---->
		<div class="p-ww">
			<form>
				<span> Province</span>
				<input class="dest" type="text" value="Distination" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Distination';}">
				<span> When</span>
				<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
				<input type="submit" value="Search" />
			</form>
		</div>
		<div class="clear"> </div>
	</div>
</div>
<!----//End-find-place---->
<?php
	require("footer.php")
?>
