<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);
?>				
<!--begin inner content-->
	<?if ($page <> "/"):?>		
				</div>
			</div>
		
   <?endif;?>
<!--end inner content-->   
   </div> </div> 

      
		
		<div class="container-fluid footer">
			<div class="container">
				<div class="row">
					<div class="logo col-lg-2 hidden-md hidden-xs hidden-sm">
					<?if ($curPage <> "/") {
						$dir = SITE_DIR;
					}else{ 
					$dir = "/";
					}?>
                    <a href="<?=$dir?>"><div class="logo_bg"></div></a>
					
						</div>
				
					<div class="menu_footer col-lg-5 hidden-xs">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_by_ko", Array(
							"ALLOW_MULTI_SELECT" => "N",	
								"CHILD_MENU_TYPE" => "left",	
								"DELAY" => "N",	
								"MAX_LEVEL" => "1",	
								"MENU_CACHE_GET_VARS" => "",	
								"MENU_CACHE_TIME" => "3600",	
								"MENU_CACHE_TYPE" => "N",	
								"MENU_CACHE_USE_GROUPS" => "Y",	
								"ROOT_MENU_TYPE" => "top",	
								"USE_EXT" => "Y",	
								"COMPONENT_TEMPLATE" => ""
							),
							false
						);?>
						
					</div>
					 <div class="menu_footer col-lg-2 col-md-3 mail-skype hidden-xs hidden-md hidden-sm">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone2.php"), false);?> 
						<span class="social_header_icon">	
							<a href="#" target="_blank"><i class="fa social-fa fa-vk" aria-hidden="true"></i></a>
							<a href="#" target="_blank"><i class="fa social-fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#" target="_blank"><i class="fa social-fa fa-instagram" aria-hidden="true"></i></a>
							
							
						</span>
					</div>
				
					<div class="social col-lg-3">
                   
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/addr.php"), false);?>
								
						<p class="copy"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_copy.php"), false);?></p>	
						</div>
					</div>
			</div>			
		</div>
		
<div class="container-fluid">
<div class="row">
	<div class="col">
		<?$APPLICATION->IncludeComponent(
			"bitrix:map.yandex.view",
			"",
			Array(
				"CONTROLS" => array("ZOOM","SMALLZOOM","MINIMAP","TYPECONTROL","SCALELINE","SEARCH"),
				"INIT_MAP_TYPE" => "MAP",
				"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.8637519999936;s:10:\"yandex_lon\";d:37.606011;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.605839338623035;s:3:\"LAT\";d:55.86112134783088;s:4:\"TEXT\";s:0:\"\";}}}",
				"MAP_HEIGHT" => "400",
				"MAP_ID" => "",
				"MAP_WIDTH" => "100%",
				"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM","ENABLE_RIGHT_MAGNIFIER","ENABLE_DRAGGING")
			)
		);?>				
	</div>
</div>
</div>
	

	
	<div id="modal_feedback" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("ZAKAZ_ZVONOK_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"ko:main.feedback",
					"product_popup_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#EVENT_ID_POKUPKA#"),
						"AJAX_MODE" => "Y", 
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => GetMessage("ALL_ZAYVKA_TITLE"),
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL","MESSAGE"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
		</div>
	  </div>
	</div>
	
	<div id="modal_call_master" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("CALL_MASTER_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"ko:main.feedback",
					"feedback_popup_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#EVENT_ID_ZAKAZ_ZVONKA#"),
						"AJAX_MODE" => "Y",  
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => GetMessage("ALL_ZAYVKA_TITLE"),
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
			
				
		
		</div>
	  </div>
	</div>
	
	<div id="modal_add_review" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("ADD_REVIEW_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"bitrix:main.feedback",
					"feedback_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#EVENT_ID_ADD_REVIEW#"),
						"AJAX_MODE" => "Y",  
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => GetMessage("ALL_REVIEW_TITLE"),
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL","MESSAGE"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
			
				
		
		</div>
	  </div>
	</div>
	
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.3.min.js"></script>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/scripts/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-slider.js"></script>

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script> 

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.flexisel.js"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	
	
	<!--begin scripts slider on index page-->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.js"></script>
	
	<!--end scripts slider on index page-->

	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.style-switcher.js" type="text/javascript"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js" type="text/javascript"></script>

</body>
</html>