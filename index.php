<?php
include 'usr/inc.php';
?>
<!DOCTYPE html>
<html class="zyyo.net">
	<head class="zyyo.net">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
			<?= $data['sitename'] ?>
		</title>
		<link rel="icon" href="<?= $data['ico'] ?>">
		<meta name="description" content="<?= $data['description'] ?>">
		<meta name="keywords" content="<?= $data['keywords'] ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="./static/css/style.css">
		<?= $data['header']  ?>
		<?php echoTheme();?>
		<?php echoconfig();?>
	</head>
	<body>
		<div id="zyyo-loading">
			<div id="zyyo-loading-center">
			</div>
		</div>
		<div class="zyyo-filter"></div>
		<div class="zyyo-main">
			<div class="zyyo-left">
				<div class="logo" style="background-image: url(<?= $data['logo'] ?>);">
					<img style="position: absolute;top:-15%;left:-10%;width: 120%; aspect-ratio: 1/1;" src="./static/img/logokuang.png">
				</div>
				<?php echoInfor() ?>
				<?php echoTag() ?>
				<?php echoTime() ?>
			</div>
			<div class="zyyo-right">
				<header>
					<div class="index-logo" style="background-image: url(<?= $data['logo'] ?>);">
						<img style="position: absolute;top:-15%;left:-10%;width: 120%; aspect-ratio: 1/1;" src="./static/img/logokuang.png">
					</div>
					<div class="welcome">
						<?= $data['title1'] ?>
						<span class="gradientText">
							<?= $data['title2'] ?>
						</span>
					</div>
					<?php echoDes() ?>


					<div class="iconContainer">
						<?php echoIcon()?>
						<a class="switch" href="javascript:void(0)">
							<div class="onoffswitch">
								<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
								<label class="onoffswitch-label" for="myonoffswitch">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</div>
						</a>
					</div>

					<div class="tanChiShe">
						<img id="tanChiShe" src="./static/svg/snake-Light.svg" alt="">
					</div>
				</header>
				<content>
					<?php echoList();?>
					<div  id="skill" class="title">
					<svg t="1705257823317" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7833">
                        <path d="M395.765333 586.570667h-171.733333c-22.421333 0-37.888-22.442667-29.909333-43.381334L364.768 95.274667A32 32 0 0 1 394.666667 74.666667h287.957333c22.72 0 38.208 23.018667 29.632 44.064l-99.36 243.882666h187.050667c27.509333 0 42.186667 32.426667 24.042666 53.098667l-458.602666 522.56c-22.293333 25.408-63.626667 3.392-54.976-29.28l85.354666-322.421333zM416.714667 138.666667L270.453333 522.581333h166.869334a32 32 0 0 1 30.933333 40.181334l-61.130667 230.954666 322.176-367.114666H565.312c-22.72 0-38.208-23.018667-29.632-44.064l99.36-243.882667H416.714667z" p-id="7834"></path>
                    </svg>
						skills
					</div>
					<div id="skill" class="skill">
						<img id="skillPc" src="./static/svg/skillPc.svg" alt="" srcset="">
						<img id="skillWap" src="./static/svg/skillWap.svg" alt="" srcset="">
					</div>
				</content>
			</div>
		</div>
		<footer>
			<?= $data['sitename'] ?> © 2024 |
			<a href="https://beian.miit.gov.cn/">
				<?= $data['beian'] ?>
			</a>
		</footer>
		<div class="tc">
			<div onclick="" class="tc-main">
				<img class="tc-img" src="" alt="" srcset="">
			</div>

		</div>
	</body>
	<script src="./static/js/script.js"> </script>
	<?= $data['footer']  ?>
	
</html>
