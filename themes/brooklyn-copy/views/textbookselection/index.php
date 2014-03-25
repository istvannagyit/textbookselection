

<div class="row-fluid">
	<h1><?php echo Yii::t('global','Textbook Selection'); ?></h1>

		<div>
			<?php $this->widget('application.extensions.wsmenu.wsmenu', array(
			'categories'=> Category::GetTree(),
			'menuheader'=> Yii::t('global','All terms'),
			'showarrow'=>true,
			)); //products dropdown menu ?>
		</div>
		
	
	<div class="row-fluid">
	    <div class="row-fluid">
	        <div class="span5">
		        
	        </div>
	    </div>

	    <div class="row-fluid">
	        <div class="span4">
		        
	        </div>
	        <div class="span5">
		        
	        </div>
	    </div>

	    <div class="row-fluid">
	        <div class="span9">
		        
	        </div>
	    </div>
	</div>
		<?php echo CHtml::submitButton(Yii::t('global','Search'), array('id'=>'btnSubmit'));  ?>
	</fieldset>

</div>