<?php
include 'Http.class.php';

/*
api
	1.通过关键字搜索视频
	url : youkuapi.php?action=searches_by_keyword
		keyword : 要搜索的关键字
		
	2.获取单个视频的评论
	url : youkuapi.php?action=comments_by_video
		video_id : 要获取评论视频ID
		page : 页数
		count : 页条数
		
	
*/

$action = $_GET['action'];

$api = array(
	'searches_by_keyword'	=>	array(
		'url'	=>	'https://openapi.youku.com/v2/searches/video/by_keyword.json'
	),
	'comments_by_video'	=>	array(
		'url'	=>	'https://openapi.youku.com/v2/comments/by_video.json'
	)
);

$params = array(
	'client_id'	=> ''
);

$content = '';

switch( $action ) {
	case 'searches_by_keyword':
		$params['keyword'] = $_GET['keyword'];
		$content = Http::get($api['searches_by_keyword']['url'], $params);
		break;
		
	case 'comments_by_video':
		$params['video_id'] = $_GET['video_id'];
		$params['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
		$params['count'] = isset($_GET['count']) ? $_GET['count'] : 10;
		$content = Http::get($api['comments_by_video']['url'], $params);
}

echo $content;