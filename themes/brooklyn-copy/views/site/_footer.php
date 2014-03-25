<div id="footer" class="row-fluid">

	<div class="span12">
		<div class="span6 indentl">
       		<h1 class="social-head">Follow Us and Get More!</h1>
<div id="social-img"><a href="https://www.facebook.com/theHILLatUCI"><img src="/themes/brooklyn-copy/css/images/thehill-sm-fb-56x56.png" width="56" height="56" /></a>
<a href="http://instagram.com/thehillatuci#"><img src="/themes/brooklyn-copy/css/images/thehill-sm-in-56x56.png" width="56" height="56" /></a>
<a href="http://thehillatuci.tumblr.com/"><img src="/themes/brooklyn-copy/css/images/thehill-sm-tum-56x56.png" width="56" height="56" /></a>
<a href="https://twitter.com/theHILLatUCI"><img src="/themes/brooklyn-copy/css/images/thehill-sm-tw-56x56.png" width="56" height="56" /></a></div>
			<!-- MailChimp Signup -->
            <div id="optin">
            	<h1>Sign Up for Savings</h1>
                <p>Subscribe to our free mailing list for alerts on promotions and special events.</p>
            	<input type="email" size="21" value="Enter your email" name="EMAIL" class="required email" id="mce-EMAIL" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
				<input type="text" size="21" value="Enter your name" name="FNAME" class="name" id="mce-FNAME" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>
				<div class="clear">
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
			</div>
        </div>
        <div class="span3 indentr">
        	<h1 class="footer-head">About The Hill</h1>
            <ul class="footer-list">
            <li><a href="/about-us">About Us</a></li>
            <li><a href="/hours-and-locations">Hours &amp; Locations</a></li>
            <li><a href="/employment-opportunities">Employment Opportunities</a></li>
            <li><a href="/campus-relations-and-charitable-contributions">Campus Relations & Charitable Contributions</a></li>
            <li><a href="/site/map">Site Map</a></li>
            </ul>
        </div>
        <div class="span3 indentr">
        	<h1 class="footer-head">Customer Care</h1>
            <ul class="footer-list">
            	<li><a href="/contact-us">Contact Us</a></li>
				<li><a href="/shipping" TARGET="_self">Shipping</a></li>
				<li><a href="/return-and-exchange-policy">Return and Exchange Policy</a></li>
				<li><a href="/terms-of-use" TARGET="_self">Terms of Use</a></li>
				<li><a href="/privacy-policy" TARGET="_self">Privacy Policy</a></li>
				<li><a href="/faq" TARGET="_self">FAQs</a></li>
            </ul>
        </div>
         
            

<br style="clear: left;" />
	</div>
	<!--
    <div class="bottomtabs">
		<?php
			foreach (CustomPage::model()->bottomtabs()->findAll() as $arrTab)
				echo CHtml::link(Yii::t('global',$arrTab->title),$arrTab->Link).' / ';
		echo CHtml::link(Yii::t('global','Sitemap'),$this->createUrl('site/map'));
		?>
	</div>
    -->
	<div class="copyright">
		&copy; <?= Yii::t('global', 'Copyright') ?> <?= date("Y"); ?> <?= _xls_get_conf('STORE_NAME') ?> &amp; UC Regents. <?= Yii::t('global', 'All Rights Reserved. UCI and all related trademarks are the property of the University of California.'); ?>.
	</div>
    

</div>

