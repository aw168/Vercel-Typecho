<?php

/**
 * 顶部大图
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
	http_response_code(404);
	exit;
}

if ($this->options->JIndex_Header_Img) {
?>
	<div class="HeaderImg" style="background: url(<?php $this->options->JIndex_Header_Img() ?>) center; background-size:cover;">
		<div class="infomation">
			<div class="title"><?php $this->options->title(); ?></div>
			<div class="desctitle">
				<span class="motto joe_motto"></span>
			</div>
		</div>
		<section class="HeaderImg_bottom">
			<svg class="waves-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
				<defs>
					<path id="gentle-wave" d="M -160 44 c 30 0 58 -18 88 -18 s 58 18 88 18 s 58 -18 88 -18 s 58 18 88 18 v 44 h -352 Z"></path>
				</defs>
				<g class="parallax">
					<use xlink:href="#gentle-wave" x="48" y="0"></use>
					<use xlink:href="#gentle-wave" x="48" y="3"></use>
					<use xlink:href="#gentle-wave" x="48" y="5"></use>
					<use xlink:href="#gentle-wave" x="48" y="7"></use>
				</g>
			</svg>
		</section>
	</div>
<?php
}
?>