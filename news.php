<?php require_once('header.php');?>
<div class='about_main'>
	<?php require_once('slide.php');?>	
	<div class='right'>
		<div class='submenu'>
			<a href='index.php'>home</a>-><a href='news.php'>news</a>
		</div>
		<div class='artcle-content'>
			<?php
				$total_num=mysql_num_rows(mysql_query("select * from article"));
				$pagesize=3;
				$page_num=ceil($total_num/$pagesize);
				$page=$_GET['page'];
				if($page<1||$page==''){
					$page=1;
				}
				if($page>$page_num){
					$page=$page_num;
				}
				$offset=$pagesize*($page-1);
				$prepage=($page<>1)?$page-1:$page;
				$nextpage=($page<>$page_num)?$page+1:$page;
				$sql="select * from article order by id desc limit $offset,$pagesize"; //desc asc
				$result=mysql_query($sql);
				if($total_num>0){
					while($row=mysql_fetch_array($result)){	
			?>	
				<div class='row'>
					<div class='short'>
						<a href="newsdetail.php?id=<?=$row['id']?>"><?=$row['title']?></a>
					</div>
					<div class='long'><?=$row['content']?></div>
					<div class='long'><?=$row['comefrom']?></div>
					<div class='short'><?=$row['pubdate']?></div>
				</div>
			<?php }?>							
		</div>
		<div class='page'>
			<?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">|<</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>"><<</a>
			&nbsp;&nbsp;
			<?php
				for($i=1;$i<=$page_num;$i++){
			?>
				<a href='?page=<?=$i?>'><?=$i?></a>
			<?php
				}
			?>
			<a href="?page=<?=$nextpage?>">>></a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">>|</a>
		</div>
		<?php
			}else{ echo 'no data';}
		?>
	</div>
</div>
<?php require_once('footer.php');?>