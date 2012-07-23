<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Revieww</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" ></script>		    
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('common2.css'); ?>
</head>
	<body style="padding-top:60px;">
		<header>
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="brand" href="/" >Revieww <span style="font-size:14px;">-share your idea-</span></a> 
					    <!-- if logined -->
							<?php if($is_login == true): ?>
								<ul class="nav pull-right">
				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					                        <img src="http://graph.facebook.com/<?php echo $user_data['id']; ?>/picture?type=small" height="20" />
					                        <?php echo $user_data['name']; ?>
					                        <span class="caret"></span>
				                        </a>
				                        <ul class="dropdown-menu">
					                        <li><a href="">settings</a></li>
					                        <li><a href="/index/logout">logout</a></li>
				                        </ul>
				                    </li>
				                </ul>
			                <?php endif; ?>
		               	<!-- logined end -->
					</div>
				</div>
			</div>
			<!-- おしゃれなバー -->
			<div id="header-background"></div>
			<!-- おしゃれバーここまで -->
		</header>
		
		<!-- ；コンテンツはここ　-->
		<?php echo $content; ?>
		<!-- コンテンツここまで-->
		
 	 	<?php echo Asset::js('bootstrap.js'); ?>
 	
 	 	<!-- footer -->
 	 	<footer>
 	 		<p>Copyright &copy; 2012 Campus project. All rights reserved</p>
 	 	<footer>
 	 	<!-- footer end -->
	</body>
</html>