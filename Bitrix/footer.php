<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</main>

<footer class="footer">
	<div class="container">
		<div class="footer__inner row">
			<div class="footer__left col-lg-6">
				<div class="footer__text">
					<p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/office.php"),
							false
						);?>
					</p>
					<p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/footer_whours.php"),
							false
						);?>
					</p>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/footer_addresses.php"),
					false
				);?>
			</div>
			<div class="footer__right col-lg-6">
				<div class="footer__text footer__text_right">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_DIR."include/email.php"),
						false
					);?>
					<p>
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR."include/copyright.php"),
							false
						);?>
					</p>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/privacy.php"),
					false
				);?>
			</div>
		</div>
	</div>
</footer>
    <div class="fas fa-arrow-up a-drop" id="top"></div>
  </body>
</html>
