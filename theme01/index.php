<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="面向对象，Object Oriented" />
<meta name="description" content="面向对象课程教学网站"/>
<meta name="author" content="cloudcomputingZY" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/script.js"></script>
<script type="text/javascript" src="http://www.itxueyuan.org/uploads/javascript/jquery.js"></script>
<script type="text/javascript" src="http://www.itxueyuan.org/uploads/javascript/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	$(".imageRotation").each(function(){
		// 获取有关参数
		var imageRotation = this,  // 取得 图片轮换容器
			imageBox = $(imageRotation).children(".imageBox")[0],  // 取得 图片容器
			imageWidth = $(imageRotation).width(),  // 图片宽度
			imageNum = $(imageBox).children().size(),  // 图片数量
			imageReelWidth = imageWidth*imageNum,  // 图片容器宽度
			// activeID =1,  // 当前图片ID
			// nextID = 0,  // 下张图片ID
			ID=0,
			setIntervalID,  // setInterval() 函数ID
			intervalTime = 4000,  // 间隔时间
			speed =500;  // 执行速度
		
		// 设置 图片容器 的宽度
		$(imageBox).css({'width' : imageReelWidth + "px"});
		
		// 图片轮换函数
		var rotate=function(clickID){

			// nextID=activeID<=3 ? activeID+1 : 1; 
			// $(imageBox).animate({left:"-"+(3*activeID+2+(nextID-1)*imageWidth)+"px"} , speed);
			// activeID=activeID%4;

			ID=(ID)%4+1;
			$(imageBox).animate({left:"-"+(ID-1)*(4+imageWidth)+"px"} , speed);
		}
		setIntervalID=setInterval(rotate,intervalTime);
	});
});
</script>
<title>index page</title>
</head>



<body id='bg'>
<div class="center"> 
	<div class="logo"></div>
<div>
	<h1 class="top" ><b>Object Oriented Programming</b></h1>
</div>
<div class="nav">
     <ul>
	  <li onmouseover="showsub(this)" onmouseout="hidesub(this)">
	  <a href='#'>课程简介</a>
	     <ul>
		<?php $var=0;$category_id= get_cat_id('课程简介'); ?>
		<?php query_posts('cat='.$category_id);      
    		if(have_posts()) : while (have_posts()) : the_post();
		echo '<li><a href="' . get_permalink() .'">' . get_the_title() .'</a></li>';
		if(++$var==4){echo '<li><a href="' . get_category_link($category_id) .'">' .'more'.'</a></li>';break;}
		endwhile;endif; ?>  
		</ul>
	  </li>
	  <li style="width:120px;background-color:transparent;">&nbsp;</li>
	  <li onmouseover="showsub(this)" onmouseout="hidesub(this)">
	  <a href="#">学习资料</a>
	      <ul>
		<?php $var=0;$category_id= get_cat_id('学习资料'); ?>
		<?php query_posts('cat='.$category_id);      
    		if(have_posts()) : while (have_posts()) : the_post();
		echo '<li><a href="' . get_permalink() .'">' . get_the_title() .'</a></li>';
		if(++$var==4){echo '<li><a href="' . get_category_link($category_id) .'">' .'more'.'</a></li>';break;}
		endwhile;endif; ?>  
		</ul>
	 </li>
	 <li style="width:120px;background-color:transparent;">&nbsp;</li>
	 <li onmouseover="showsub(this)" onmouseout="hidesub(this)">
	 <a href='#'>其他</a>
	      <ul>
		<?php $var=0;$category_id= get_cat_id('其他'); ?>
		<?php query_posts('cat='.$category_id);      
    		if(have_posts()) : while (have_posts()) : the_post();
		echo '<li><a href="' . get_permalink() .'">' . get_the_title() .'</a></li>';
		if(++$var==4){echo '<li><a href="' . get_category_link($category_id) .'">' .'more'.'</a></li>';break;}
		endwhile;endif; ?>  
	      </ul>
	 </li>
     </ul>
</div>
<div class="pic">
<div class="imageRotation" style="height:270px;
 width:570px;
overflow: hidden;/*--超出容器的所有元素都不可见--*/
  position:relative;  /*--相对定位--*/
  background-color:#eee;
  border-radius:20px;">	
	<div class="imageBox" style=" position:absolute;  /*--固定定位--*/
  height:270px;
  overflow:hidden;">
		<img src="<?php bloginfo('template_directory');?>/images/1.jpg"  />
		<img src="<?php bloginfo('template_directory');?>/images/2.jpg"  />
		<img src="<?php bloginfo('template_directory');?>/images/3.jpg"  />
		<img src="<?php bloginfo('template_directory');?>/images/4.jpg"  />
		<img src="<?php bloginfo('template_directory');?>/images/5.jpg"  />
	</div>
</div>
</div>

<div class="foot">
<b>copyright@cloudcomputingZY</b>
</div>


</div>
</body>
</html>



<!-- <table width="0" border="0" bgcolor="#FFFF00"><tr><td><a href='#' style="color: #FF0000">课程简介</a></td><td style="background-color:#FFF;filter:Alpha(opacity=50)">&nbsp;</td></tr></table>-->