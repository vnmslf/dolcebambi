	<footer>
		<div class="container">
			<img class="b-logo" src="/assets/images/b-logo-2.svg" alt="Фоновый логотип" />
			<div class="logotype">
				<a href="/">
					<img src="/assets/images/logo.svg" alt="dolcebambi" />
				</a>
			</div>
		</div>
		<div class="container">
			<div class="left">
				<div class="description">
					<p>Dolcebambi-это идеальный выбор для тех, кто ищет комфорт и&nbsp;высокое качество для своего малыша</p>
				</div>
				<div class="subscribe">
					Оставить заявку
<?$prefix = 'footer';
require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/order.php')?>
				</div>
			</div>
			<div class="right">
				<div class="column">
					<h5>Где купить:</h5>
					<ul>
						<li>
							<a href="https://market.yandex.ru/product--podguzniki-dlia-malyshei-dolcebambi-razmer-l/1916626771?sku=102389617285&do-waremd5=L4hSEaQqdwaXqCkil90Tgg&uniqueId=83010635" target="_blank">Яндекс Маркет</a>
						</li>
						<li>
							<a href="https://ozon.ru/t/wX7yzzN" target="_blank">OZON</a>
						</li>
						<li>
							<a href="https://www.detmir.ru/product/index/id/6379431/" target="_blank">Детский Мир</a>
						</li>
						<li>
							<a href="https://www.wildberries.ru/catalog/212681498/detail.aspx" target="_blank">Wildberris</a>
						</li>
					</ul>
				</div>
				<div class="column">
					<h5>Информация:</h5>
					<ul>
						<li>
							<a href="/" data-href="<?if($menu_url === '' || $menu_url === '/') {?>#catalog<?} else {?>/<?}?>">Каталог</a>
						</li>
						<li>
							<a href="/">О нас</a>
						</li>
						<li>
							<a href="/">Оставить заявку</a>
						</li>
					</ul>
				</div>
				<div class="column">
					<h5>Связаться с нами:</h5>
					<ul>
						<li>
							<a href="tel:+79885641543">+7 (988) 564-15-43</a>
						</li>
					</ul>
					<h5>E-mail:</h5>
					<ul>
						<li>
							<a href="mailto:info@sk-slavyane.ru">info@sk-slavyane.ru</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="bottom">
				<div class="copyright">&copy; Dolcebambi <?=date('Y')?></div>
				<a href="/privacy-policy">Политика конфиденциальности</a>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="/assets/js/custom.min.js"></script>
	<?$ym_id = '94568293';?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
				k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
		ym(<?=$ym_id?>, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/<?=$ym_id?>" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<script>
		const ym_id = <?=$ym_id?>;
		function sendMetrikaEvent(email) {
			if (window.ym) {
				window.ym(ym_id, 'reachGoal', 'email__copy', { email });
			}
		}
		function handleCopyEvent(event) {
			const copiedText = window.getSelection().toString();
			if (copiedText.includes('@')) {
				sendMetrikaEvent(copiedText);
			}
		}
		document.addEventListener('copy', handleCopyEvent);
		function handleMailtoRightClick(event) {
			const target = event.target;
			if (event.button === 2 && target.tagName === 'A' && target.getAttribute('href') && target.getAttribute('href').startsWith('mailto:')) {
				const email = target.getAttribute('href').substring(7);
				sendMetrikaEvent(email);
			}
		}
		document.addEventListener('contextmenu', handleMailtoRightClick);
	</script>
</body>
</html>