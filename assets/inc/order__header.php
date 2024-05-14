<form name="<?=$prefix?>main" class="class" action="/assets/inc/form.php" method="post" enctype="multipart/form-data">
	<h2>Оставьте заявку</h2>
	<p>Оставьте заявку на&nbsp;преобретение продукции Dolcebambi и&nbsp;наш менеджер свяжется с&nbsp;вами</p>
	<div class="form-section">
		<div class="form-group">
			<input type="text" name="<?=$prefix?>name" id="<?=$prefix?>name" class="form-control form-control-lg required" value="" placeholder="Имя*" />
		</div>
		<div class="form-group">
			<input type="text" name="<?=$prefix?>email" id="<?=$prefix?>email" class="form-control form-control-lg required" value="" placeholder="E-mail*" />
		</div>
		<div class="form-group">
			<input type="tel" name="<?=$prefix?>phone" id="<?=$prefix?>phone" class="masked__phone form-control form-control-lg required" value="" placeholder="Ваш телефон" maxlength="12" />
		</div>
		<div class="d-none">
			<input type="text" id="<?=$prefix?>botcheck" name="<?=$prefix?>botcheck" value="" />
		</div>
		<div class="form-submit">
			<button type="submit" name="<?=$prefix?>submit">Оставить заявку</button>
		</div>
		<input type="hidden" name="prefix" value="<?=$prefix?>">
		<input type="hidden" name="autoresponder" value="true">
	</div>
</form>
<div class="modal__close"></div>