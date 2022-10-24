<?php get_left_bar(); ?>
<!-- center-bar -->
<div class="center-bar">

	<div class="head-center">
		<h1>Описание | продукт</h1>
		<form action="/action_page.php">
	      <input type="text" placeholder="поиск по админке" name="search">
	      <button type="submit"><i class="fa fa-search">найти</i></button>
	    </form>
	</div>
	<?php get_success(); ?>
	<div class="litle-content line-hero">

			<!-- если данных нет то показать по умолчанию статику- если пусто - статика - если поля пустые тоже статика -->
			<div class="cl"></div>
			<h2 class="p-left">Продукт | какое то его описание | технология</h2><br>
			<!-- create -->
			<!-- создать если нет - спрятать если есть -->
			<div class="form-ready">
				<form action="#">
					<label>название страницы</label>
					<input name="name_page" type="text">

					<label>описание 1 </label>
					<input name="desc_one" type="text">

					<label>заголовок</label>
					<input name="h_page" type="text">

					<label>описание 2 </label>
					<input name="desc_two" type="text"><br>

					<button class="push" type="submit">создать</button>
				</form>
			</div>

			<div class="form-ready">
				<!-- нужна проверка -->
				отобразить данные ресурса
			</div>
		
			<!-- navigaion -->
			<?php get_navi(); ?>

			<!-- update -->
			<!-- подставь данные если есть - если нет вывод - извенять нечего также можно спрятать-->
			
			<!-- delete -->
			<!-- удалить всё - картинки и данные -->

	</div>

</div>
<!-- end center-bar -->
<?php get_right_bar(); ?>