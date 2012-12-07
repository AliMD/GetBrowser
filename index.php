<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
	<meta charset="utf-8" />
	<title>مرورگر خودتون رو بروز کنید</title>
	<meta name="description" content=" مرورگر خودتون رو بروز کنید">
	<link rel="stylesheet" type="text/css" href="1styles.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="scripts/html5shiv.js"></script>
</head>
<body>
	<section id="wrap">
		<header>
			<div class="header_container w24 mla mra">
				<hgroup>
					<h1>با خیال راحت <span>جستجو کنید</span></h1>
					<h4>همین الان مرورگر خودتون رو بروز کنید!</h4>
				</hgroup>
			</div>
		</header>
		<section class="content_container">
			<div class="content w24 mla mra cover">
				<?php
					error_reporting(E_ALL ^ E_NOTICE);
					function get_browsers($browser) {
						$dir = "browsers/$browser";
						$allowed_type = array('exe','msi');

						$d = dir($dir);
						while( $f = $d->read() ){
							$file_type = end(explode('.',$f));
							if( !in_array(strtolower($file_type),$allowed_type) ) continue;

							$file_name = substr($f,0,-strlen($file_type)-1);
							echo "$dir/$file_name.$file_type";				
						}
					}
				 ?>
				<div class="chrome left">
					<div class="hover_mode">
						<div class="icon"></div>
						<h2>گوگل کروم</h2>
						<p class="info">سریع ترین مرورگر موجود، پر قدرت، امن و محیط کاربری ساده. همین حالا امتحانش کنید.</p>
						<p class="version">آخرین ورژن : 23</p>
						<a href="http://www.google.com/chrome" class="website">اطلاعات بیشتر</a>
						<a href="<?php get_browsers('chrome') ?>" class="download">دانلود مرورگر</a>

					</div>
				</div>

				<div class="firefox left">
					<div class="hover_mode">
						<div class="icon"></div>
						<h2>موزیلا فایرفاکس</h2>
						<p class="info">مرورگری سریع و پرقدرت. فایرفاکس بر اساس امنیت بیشتر ساخته شده، با این مرورگر امنیت رو تجربه کنید.</p>
						<p class="version">آخرین ورژن : 17</p>
						<a href="http://www.firefox.com/" class="website">اطلاعات بیشتر</a>
						<a href="<?php get_browsers('firefox') ?>" class="download">دانلود مرورگر</a>
					</div>
				</div>

				<div class="safari left">
					<div class="hover_mode">
						<div class="icon"></div>
						<h2>سافاری</h2>
						<p class="info">مرورگر سافاری محصول کمپانی اپل می باشد، که اکثر کاربرهای این مرورگر از سیستم عامل مک استفاده میکنند</p>
						<p class="version">آخرین ورژن : 6</p>
						<a href="http://www.apple.com/safari/" class="website">اطلاعات بیشتر</a>
						<a href="<?php get_browsers('safari') ?>" class="download">دانلود مرورگر</a>
					</div>
				</div>

				<div class="opera left">
					<div class="hover_mode">
						<div class="icon"></div>
						<h2>اپرا</h2>
						<p class="info">مرورگری پرسرعت، به راحتی قابل استفاده و دارای امنیت بالا</p>
						<p class="version">آخرین ورژن : 12</p>
						<a href="http://www.opera.com/" class="website">اطلاعات بیشتر</a>
						<a href="<?php get_browsers('opera') ?>" class="download">دانلود مرورگر</a>
					</div>
				</div>

				<div class="iE last">
					<div class="hover_mode">
						<div class="icon"></div>
						<h2>اینترنت اکسپلورر</h2>
						<p class="info">مرورگری از کمپانی مایکروسافت.</p>
						<p class="version">آخرین ورژن : 10</p>
						<a href="http://windows.microsoft.com/ie" class="website">اطلاعات بیشتر</a>
						<a href="<?php get_browsers('ie') ?>" class="download">دانلود مرورگر</a>
					</div>
				</div>

			</div>
		</section>
		<footer>
			<div class="footer_container w24 mla mra">
				<div class="about right">
					<h4>درباره وب سایت :</h4>
					<p>
استفاده از مرورگر قدیمی، کامپیوترتون رو به خطر میندازه. این وب سایت برای آگاه شدنتون از آخرین ورژن از مرورگرهای اصلی. شما همچنین میتونید مرورگرهای جدید رو تجربه کنید و در موردشون اطلاعات کسب کنید.</p>
				</div>
				<div class="social"></div>
			</div>
		</footer>
	</section>
</body>
</html>