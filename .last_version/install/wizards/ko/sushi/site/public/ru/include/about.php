<div class="about container-fluid">				
	<div class="advantages container">
		<h3><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about_title.php"), false);?>  </h3>
		<div class="row">	
		<p class="about_company">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about_company.php"), false);?>
		<br/>
		<p><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/video_youtube.php"), false);?></p>
		</p>				   
		 </div>
	</div> 
</div>   