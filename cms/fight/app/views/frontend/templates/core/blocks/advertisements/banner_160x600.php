<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="banner_left"><?php

	//Get Advertisement
	$banner = array(
				'sid' => '1072553',
				'zs' => '3136305f363030',
				'opid' => '1072553',
				'afsid' => '1',
				'size' => '160x600',
				'provider' => 'adbrite',
				//'location' => 'header',
				'AdBrite_Title_Color' => '666666',
				'AdBrite_Text_Color' => '777777',
				'AdBrite_Background_Color' => 'FFFFFF',
				'AdBrite_Border_Color' => 'FFFFFF',
				'AdBrite_URL_Color' => 'ffffff',
				'show_your_add_here' => false
				);

	echo Model('banner')->get_advertisement($banner); ?>

</div>
