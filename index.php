<?php require_once('header.php');?>
<div class='container'>
	<div class='news'>
		<div class='n_top'>
			<div class='cat_title'>news center</div>
			<div class='more'><a href=''>more</a></div>
		</div>
		<div class='n_center'>
			<img src='images/about_img.jpg' width='111' height='90'/>
			<div>
				recent many famous company sell good tea,and mang activity is hold,if you are interested in dreaking tea,it if welcome to you.....
			</div>
		</div>
		<div class='n_bottom'>
			<a href=''>tea 1</a>
			<a href=''>tea 2</a>
			<a href=''>tea 3</a>
			<a href=''>tea 4</a>
			<a href=''>tea 5</a>			
		</div>
	</div>
	<div class='about'>
		<div class='a_top'>
			<div class='cat_title'>about us</div>
		</div>
		<div class='a_center'>
			<img src='images/about_img.jpg' width='381' height='148'/>
		</div>
		<div class='a_bottom'>
			ali company is a very famous company,which sell tea $100 oneday.....
		</div>
	</div>
	<div class='produce'>
		<div class='p_top'>
			<div class='cat_title'>produce</div>
			<div class='more'><a href=''>more</a></div>
		</div>
		<div class='p_bottom'>
			<div id='slideBox' class='slideBox'>
				<div class='bd'>
					<ul>
						<li>
							<a href='' target='_blank'>
								<img src='images/produce_thumbnail_1.jpg' width='300' height='270'/>
							</a>
						</li>
						<li>
							<a href='' target='_blank'>
								<img src='images/produce_thumbnail_2.jpg' width='300' height='270'/>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<script type='text/javascript'>
			jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true});
		</script>		
	</div>
</div>
<?php require_once('footer.php');?>