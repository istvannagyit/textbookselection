<div id="custom_content" class="span12">
	<?php echo $model->page; ?>
</div>

<div class="span10 clearfix">
	<?php
		$this->widget('ext.JCarousel.JCarousel', array(
			'dataProvider' => $model->taggedProducts(),
			'thumbUrl' => '$data->SliderImage',
			'imageUrl' => '$data->Link',
			'emptyText'=>'',
			'titleText' => '$data->WebShortDescription',
			'captionText' => '$data->WebShortDescription."<br><div style=\"font-style: italic; font-weight: normal; font-size: 8pt; margin-top: 4px; color: #888;\">"._xls_currency($data->Price)."</div>"',
			'target' => 'do-not-delete-this',
			//'wrap' => 'circular',
			'visible' => true,
			'skin' => 'slider',
			'clickCallback'=>'window.location.href=itemSrc;'
		)); ?>
</div>
