<html>
	<head>
		<title>Drew Pereli</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link href="style/css/global.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					Because my clients' websites will always take priority over my own, this site is still under construction!
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					If you'd like some help building your website, feel free to get in touch with me at drewpereli@gmail.com
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3">
					Here are some of the websites I've worked on
					<ul>
						<?php 
						$urls = array(
							"http://www.thelandingmadison.com/",
							"http://skin608.com/",
							"http://www.jcwtaxaccounting.com/",
							"http://mitlinq.org/",
							"http://hackingchronicdisease.org/",
						);

						$siteNames = array(
							"The Landing",
							"Skin608",
							"JCW Tax &amp; Accounting",
							"MIT Linq",
							"Hacking Chronic Disease",
						);
						?>

						<?php for ($i = 0 ; $i < sizeof($urls) ; $i++) : ?>
							<li>
								<a 	target="_blank"
									href="<?=$urls[$i];?>">
									<?=$siteNames[$i];?>
								</a>
							</li>
						<?php endfor ?>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
