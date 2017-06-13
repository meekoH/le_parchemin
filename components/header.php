<div class="header-wrapper">
	<header>
		<div class="fake-table">
			<div class="fake-row">
				<div class="fake-cell">
					<a href="home">
						<img src="<?= SHARED_LANGUAGE_IMG_PATH; ?>main-logo-dark.png" alt="Le Parchemin" class="header-logo">
					</a>
				</div>
				<div class="fake-cell header-details">
					<div class="header-section language-select">
						<?php
							if ($lang == 'fr/') {
								echo '<a href="'.toEnglish().'">English</a>';
							} else {
								echo '<a href="'.toFrench().'">Français</a>';
							}
						?>
					</div>
					<div class="header-section header-options-select">
						<a href="#"><?= $lang_trans['nav_contact'] ?></a> <span>|</span> <a href="#"><?= $lang_trans['nav_appointment'] ?></a> <span>|</span> <a href="#"><?= $lang_trans['nav_shop'] ?></a>
					</div>
					<div class="header-section social-media-select">
						<a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
<div class="header-cta">
	<a href="#"><?= $lang_trans['header_cta'] ?></a>
</div>