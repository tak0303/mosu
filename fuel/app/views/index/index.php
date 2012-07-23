<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<?php echo Asset::css('common.css'); ?>
	</head>
	<body>
		<div id="container">
				
			<?php if(!$is_login): ?>
				<div id="loginBox">
					<?php echo Asset::img('moss_logo.png',array('id' => 'logo')); ?>
					<a href="login" >
						<p><?php echo Asset::img('twitter.png'); ?></p>
					</a>
				</div>
			<?php else: ?>
				<div id="tweetBox" >
					<?php echo Asset::img('moss_logo.png',array('id' => 'logo')); ?>
					<a href="post_moss" id="moss" >
						もっっっっす！！！
					</a>
				</div>
				<!-- logoutいる？-->
			<?php endif; ?>
		</div>	
	</body>
</html>
