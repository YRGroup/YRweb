<?php

function get_xc($page_title)
{
	global $wpdb;
	$id= $wpdb->get_var($wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type='foogallery'", $page_title )); 
	 if($id)
	 {
		 $images= $wpdb->get_var($wpdb->prepare( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = %d AND meta_key='foogallery_attachments'", $id)); 
		 $all_imgs=[];
		 foreach (unserialize($images) as $img_id)
		 {
			 //_d(($wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE post_id = %d AND post_type='attachment'", $img_id )));
			 $img=$wpdb->get_row($wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE id = %d AND post_type='attachment'", $img_id ));
			 //_d($img);
			 $all_imgs[]=array("ID"=>$img->ID,"content"=>$img->post_content,"title"=>$img->post_title,"excerpt"=>$img->post_excerpt,"url"=>$img->guid); 
		 }
		 //_d($all_imgs);
		 return $all_imgs;
	 }
}
function get_first_image() 
{
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	//获取文章中第一张图片的路径并输出
	$first_img = $matches [1] [0];
	if(empty($first_img)){ 
		$first_img = esc_url( get_template_directory_uri() )."/img/default.jpg";
	}
	 
	return $first_img;
}
function get_pagination() {
	$html='';
	global $wp_query;
	
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$url_parts    = explode( '?', $pagenum_link );
	$pagenum_link="/?";
	for ( $n = 1; $n < count($url_parts); $n++ )
	{
		if(!strpos($url_parts[$n],'paged'))
			$pagenum_link.=$url_parts[$n].'&';
	}
	$total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
	$current = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	if($total<2)
		return '';
	if ( $current && 1 < $current ) 
		$html.='<a href="'.$pagenum_link.'paged='.($current-1 ) . '">上一页</a>';
	for ( $n = 1; $n <= $total; $n++ ) 
	{
		if ( $n == $current ) 
			$html.= '<a href="#" class="current">' .$n.  "</a>";
		else 
			$html.='<a href="'. $pagenum_link.'paged='.$n  .'">' . $n. '</a>';
	}
	if ($current && $current < $total ) 
		$html.='<a href="'. $pagenum_link.'paged='.($current+1) . '">下一页</a>';
	return '<div id="pagination" class="pagination">'.$html.'</div>';
}
function _d($obj)
{
	var_dump($obj);
	exit;
}
function d($obj)
{
	var_dump($obj);
}