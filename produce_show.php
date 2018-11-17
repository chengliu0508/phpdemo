<?php require_once('header.php');?>
<div class='about_main'>
	<?php require_once('slide.php');?>	
	<div class='right'>
		<div class='submenu'>
			<a href='index.php'>home</a>-><a href='produce.php'>produce</a>
		</div>
		<div class='produce-content'>
            <?php
                $sql="select * from produce where id='".$_GET['id']."'";
                $result=mysql_query($sql);
                $row=mysql_fetch_array($result);
            ?>
            <div class='produce-detail'>
                <div><span class='title'>title:</span><?=$row['title']?></div>
                <div><span class='title'>image:</span><img src="<?=$row['href']?>"/></div>
                <div><span class='title'>comefrom:</span><?=$row['comefrom']?></div>
                <div><span class='title'>pubdate:</span><?=$row['pubdate']?></div>
            </div>
		</div>
	</div>
</div>
<?php require_once('footer.php');?>