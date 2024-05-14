<!DOCTYPE html>
<html dir="ltr" lang="ru-Ru">
<?$now_url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].'/';?>
<head>
	<link rel="alternate" hreflang="x-default" href="<?=$now_url?>" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<meta name="author" content="dolcebambi.ru" />
	<meta name="description" content="dolcebambi.ru" />
	<link rel="stylesheet" href="/assets/styles.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/assets/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/assets/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="yandex-verification" content="c27e249ce49158f5" />
	<title>dolcebambi.ru</title>
</head>
<body>
<?$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$menu_url = $_SERVER['REQUEST_URI'];
$menu_url = explode('?', $menu_url);
$menu_url = $menu_url[0];
?>
	<header>
		<div class="container">
			<div class="header__line">
				<a class="logotype" href="/">
					<img src="/assets/images/logo.svg" alt="dolcebambi" />
				</a>
				<div class="burger">
					<button type="button" title="Мобильное меню">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
				<nav class="main__menu">
					<ul>
						<li>
							<a<?if($menu_url === '' || $menu_url === '/') {?> class="active"<?}?> href="/">
								<span>Каталог</span>
							</a>
						</li>
						<li>
							<a<?if($menu_url === '/catalog/') {?>} class="active"<?}?> href="#catalog" data-href="#catalog">
								<span>Контакты</span>
							</a>
						</li>
						<li>
							<a<?if($menu_url === '/where-buy/') {?> class="active"<?}?> href="/where-buy/">
								<span>Где купить</span>
							</a>
						</li>
						<li class="close">+</li>
					</ul>
				</nav>
				<div class="actions">
					<a href="#" class="button button__header">Оставить заявку</a>
				</div>
			</div>
		</div>
	</header>