<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/wp-content/themes/jiaxiao/static/css/swiper-4.4.1.min.css">
    <link rel="stylesheet" href="/wp-content/themes/jiaxiao/static/css/iconfont.css">
    <link rel="stylesheet" href="/wp-content/themes/jiaxiao/static/css/style.css">
    <script src="/wp-content/themes/jiaxiao/static/js/jquery.min.js"></script>
    <script src="/wp-content/themes/jiaxiao/static/js/fix_nav.js"></script>
    <script src="/wp-content/themes/jiaxiao/static/js/common.js"></script>
    <script src="/wp-content/themes/jiaxiao/static/js/form_ck.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="nav pr">
    <div class="layout">
        <a href="" class="logo"><img src="/wp-content/themes/jiaxiao/static/picture/logo.png" alt="深圳学车，深圳驾校，网上驾校 - 广深驾校官网"></a>
        <ul>
            <li><a href="#home">首页</a></li>
            <li><a href="#class">班型介绍</a></li>
            <li><a href="#place">训练场地</a></li>
            <li><a href="#process">学车流程</a></li>
            <li><a href="#faq">常见问题</a></li>
            <li><a href="#about">关于我们</a></li>
        </ul>
        <a href="notice.html" class="noScroll">广深公告</a>
        <span>400-088-2626</span>
    </div>
</div>
