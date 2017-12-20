<?php
if(in_category('课程简介') or in_category('学习资料')){
	include(TEMPLATEPATH.'/single-nocomment.php');
}else{
	include(TEMPLATEPATH.'/single-comment.php');
}
?>
