<form name="<?=$prefix?>main" class="class" action="/assets/inc/form.php" method="post" enctype="multipart/form-data">
	<div class="form-section">
		<div class="form-group">
			<input type="tel" name="<?=$prefix?>phone" id="<?=$prefix?>phone" class="masked__phone form-control form-control-lg required" value="" placeholder="Ваш телефон" maxlength="12" />
		</div>
		<div class="d-none">
			<input type="text" id="<?=$prefix?>botcheck" name="<?=$prefix?>botcheck" value="" />
			<input type="text" id="<?=$prefix?>html_title" name=<?=$prefix?>html_title value="Форма с телефоном из подвала сайта" />
		</div>
		<div class="form-submit">
			<button type="submit" name="<?=$prefix?>submit">
				<img src="/assets/images/arrow.svg" alt="стрелочка" />
			</button>
		</div>
		<input type="hidden" name="prefix" value="<?=$prefix?>">
		<input type="hidden" name="autoresponder" value="true">
	</div>
</form>