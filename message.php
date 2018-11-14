<?php require_once('header.php');?>
<div class='about_main'>
	<?php require_once('slide.php');?>	
	<div class='right'>
		<div class='submenu'>
			<a href='index.php'>home</a>-><a href='message.php'>news</a>
		</div>
		<div class='message-content'>
            <form name='form1' id='form1' action="?act=add" method='post'>
                <ul></ul>
            </form>
		</div>
	</div>
</div>
<?php
    if($_GET['act']=='add'){

    }
?>
<?php require_once('footer.php');?>