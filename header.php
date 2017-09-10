<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href='//fonts.googleapis.com/css?family=Radley:400,400italic' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" id="main-css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="all">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Analytics start -->
		<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-70619955-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
		<!-- Google Analytics end -->
		<div class="page-edit-link"><?php edit_post_link(); ?></div>
		<!-- wrapper -->


			<!-- header -->
			<div class="overlay"></div>
			<header id="main-header" role="banner">
					<div class="row">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<div class="logo-img">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430.64 153.83"><defs><style>.\34 cbb68c6-9043-46f4-b24a-f588a529752b{fill:#5d89b4;}.aadd6ebd-43b4-45df-9d3e-7581eb4fa50a{fill:none;stroke:#d1d3d4;stroke-miterlimit:10;stroke-width:2.93px;}.d2eb4724-18f7-4f36-bda4-43e3b3b4528a{fill:#6d6e71;}.c4aaad5a-ecb5-4ee8-b4c9-16e46cc06c20{fill:#fadf8d;}</style></defs><title>Asset 1</title><g id="f7fc3bcd-c498-4279-bea4-b79743391c84" data-name="Layer 2"><g id="a2203d74-9545-48d2-8608-6f5f3caa7906" data-name="Layer 1"><polygon class="4cbb68c6-9043-46f4-b24a-f588a529752b" points="309.07 2.16 309.07 57.82 308.81 57.82 277.44 2.16 253.28 2.16 253.28 86.39 265.19 80.08 254.21 92.48 275.42 92.48 275.42 36.19 275.67 36.19 307.04 92.48 331.2 92.48 331.2 2.16 309.07 2.16"/><polygon class="4cbb68c6-9043-46f4-b24a-f588a529752b" points="210.32 91.94 215.25 58.87 220.37 91.94 227.26 91.94 230.75 0 200.15 0 203.63 91.94 210.32 91.94"/><polygon class="4cbb68c6-9043-46f4-b24a-f588a529752b" points="153.96 92.48 176.3 92.48 165.52 80.42 177.49 86.64 177.49 2.16 153.96 2.16 153.96 35.05 122.97 35.05 122.97 2.16 99.44 2.16 99.44 92.48 122.97 92.48 122.97 55.29 153.96 55.29 153.96 92.48"/><path class="4cbb68c6-9043-46f4-b24a-f588a529752b" d="M23.53,62.12c.51,10.63,7.08,14,17.08,14,7.08,0,14.42-2.53,14.42-9.23,0-8-12.9-9.49-25.93-13.16S2.66,44.29,2.66,27.71C2.66,8,22.52.26,39.47.26c18,0,36.05,8.73,36.18,29.1H52.12c.38-8.22-7.34-10.88-14.55-10.88-5.06,0-11.39,1.77-11.39,7.72,0,7,13,8.22,26.19,11.89s26.19,9.74,26.19,26.06c0,22.9-19.48,30.23-39.34,30.23C18.47,94.38.13,85.27,0,62.12Z"/><path class="4cbb68c6-9043-46f4-b24a-f588a529752b" d="M357.4,2.16h72V21H380.93V36.82h44.28V55H380.93v17.2h49.72V92.48H357.4Z"/><line class="aadd6ebd-43b4-45df-9d3e-7581eb4fa50a" x1="57.59" y1="118.96" x2="10.12" y2="118.96"/><line class="aadd6ebd-43b4-45df-9d3e-7581eb4fa50a" x1="424.46" y1="118.96" x2="377" y2="118.96"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M79.17,106.49h6.62l9.36,25h-6.8L86.81,127H78.08l-1.58,4.49h-6.7Zm.42,15.7h5.68l-2.77-8.76h-.07Z"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M121.48,121.18c0,7.26-3.33,10.87-10.9,10.87s-10.9-3.61-10.9-10.87V106.49h6.52v15.07c0,3.23,1.19,4.87,4.38,4.87s4.38-1.65,4.38-4.87V106.49h6.52Z"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M148.47,112.1H141v19.42h-6.52V112.1H127v-5.61h21.45Z"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M165.55,106c7.89,0,12.34,5.78,12.34,13s-4.45,13-12.34,13-12.34-5.78-12.34-13S157.66,106,165.55,106Zm0,20.47c4.21,0,5.82-3.72,5.82-7.43s-1.61-7.43-5.82-7.43-5.82,3.72-5.82,7.43S161.34,126.43,165.55,126.43Z"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M278.08,131.52h-6.52l-3.43-17.25h-.07l-3.44,17.25H258l-6.77-25h6.52l3.54,18.3h.07l3.68-18.3h6.13l3.68,18.3h.07l3.54-18.3H285Z"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M295.54,106.49h6.62l9.36,25h-6.8L303.18,127h-8.73l-1.58,4.49h-6.7Zm.42,15.7h5.68l-2.77-8.76h-.07Z"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M321.31,123.1c.14,2.94,2,3.89,4.73,3.89,2,0,4-.7,4-2.56,0-2.21-3.58-2.63-7.19-3.65s-7.33-2.63-7.33-7.22c0-5.47,5.5-7.61,10.2-7.61,5,0,10,2.42,10,8.06h-6.52c.11-2.28-2-3-4-3-1.4,0-3.15.49-3.15,2.14,0,1.93,3.61,2.28,7.26,3.3s7.26,2.7,7.26,7.22c0,6.34-5.4,8.38-10.9,8.38-5.75,0-10.83-2.52-10.87-8.94Z"/><path class="d2eb4724-18f7-4f36-bda4-43e3b3b4528a" d="M342.35,106.49h6.52v9.11h8.59v-9.11H364v25h-6.52V121.21h-8.59v10.31h-6.52Z"/><path class="c4aaad5a-ecb5-4ee8-b4c9-16e46cc06c20" d="M222.81,128.52c-.7-2.31-.16-2.95,2.27-2.65l21.35,2.54L226,119.73c-.88-.35-1.64-.83-1.29-1.94a3.07,3.07,0,0,1,.85-1.12l19.29-18.83-23.48,13.92c-1.72,1.05-2.61.63-2.83-1.36l-3.29-25.24-2.72,25c-.26,2.33-1,2.7-3,1.46L185.18,96.75l20.45,19.72c1.66,1.65,1.5,2.52-.65,3.38l-17.47,7,18.81-1.09c2.17-.23,2.76.5,1.95,2.52l-6.76,17.23,12.4-14.91c1.1-1.37,2.12-1.3,3,.18l14,23.06-8.12-25.31"/></g></g></svg>
							</div>
						</a>
					</div>
					<!-- /logo -->












<?php
$street_address = get_field( "street_address", 125 );
$city = get_field( "city", 125 );
$state = get_field( "state", 125 );
$zip = get_field( "zip", 125 );
$phone_number = get_field( "phone_number", 125 );
$google_map_url = get_field( "google_map_url", 125 );

echo "
<div class='header-contact-info'>
	<address class='header-element'>
		<div class='street'>$street_address</div>
		<div class='city-st-zip'>$city, $state $zip</div>
	</address>
	<div class='header-element button-link map-link'><a href='$google_map_url'>Map</a></div>
	<div class='header-element button-link hours-link'><a href='#'>Hours</a></div>
	<div class='global-hours'>
		<h3>Hours</h3>
		<div class='table'>";
		tablepress_print_table( 'id=3&use_datatables=true&print_name=false' );
echo "
		</div>
	</div>
</div>
";
?>


				</div>
			</header>

			<!-- nav -->
			<nav class="nav" role="navigation">
				<div class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg></div>
				<div class="row"><?php html5blank_nav(); ?></div>

				<div class='phone-number'><?php echo $phone_number; ?></div>
			</nav>
			<!-- /nav -->
			<!-- /header -->
		<div class="wrapper">