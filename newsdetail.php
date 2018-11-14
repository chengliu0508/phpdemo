<?php require_once('header.php');?>
<div class='about_main'>
	<?php require_once('slide.php');?>	
	<div class='right'>
		<div class='submenu'>
			<a href='index.php'>home</a>-><a href='news.php'>news</a>
		</div>
		<div class='artcle-content'>
            <?php
                $sql="select * from article where id='".$_GET['id']."'";
                $result=mysql_query($sql);
                $row=mysql_fetch_array($result);
            ?>
            <div class='article-detail'>
                <div><span>title:</span><?=$row['title']?></div>
                <div><span>content:</span><?=$row['content']?></div>
                <div><span>comefrom:</span><?=$row['comefrom']?></div>
                <div><span>pubdate:</span><?=$row['pubdate']?></div>
            </div>
		</div>
	</div>
</div>
<?php require_once('footer.php');?>