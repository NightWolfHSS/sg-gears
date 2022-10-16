			<?php get_left_bar(); ?>
			<!-- center-bar -->
			<div class="center-bar">

				<div class="head-center">
					<h1>админка - главная </h1>
					<form action="/action_page.php">
				      <input type="text" placeholder="поиск по админке" name="search">
				      <button type="submit"><i class="fa fa-search">найти</i></button>
				    </form>
				</div>

				<div class="litle-content">
					<div class="mob-tittle">
						<p>Tutorial | управление | использование </p>
						<p>Быстрый и удобный переход по сайту, это несколько способов управление сайтом
							пользуйтесь боковой панелью, 
							или переходите с главной.
						</p><hr>
						<p>Здесь можно удалять, изменять, редактировать данные</p>
					</div>
			
				</div>

				<!-- navigaion -->
				<?php get_navi(); ?>

			</div>
			<!-- end center-bar -->
			<?php get_right_bar(); ?>
			