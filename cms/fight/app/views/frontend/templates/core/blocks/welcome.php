<?php if (!defined('BASEPATH')) exit(__('No direct script access allowed')); ?>
<div class="welcome">
	<span class="userInfo"><?php

        echo Model('data')->welcome_get(); ?> | <a onclick="language_selection();" href="javascript:void(0)">Select
            Language</a> | </span><span>
	<?php $format = 'DATE_RFC822'; $time = time(); echo standard_date($format, $time); ?></span>
</div>
