<?php get_left_bar(); ?>
<!-- center-bar -->
<div class="center-bar">

	<div class="head-center">
		<h1>Управление сервисы</h1>
		<form action="/action_page.php">
	      <input type="text" placeholder="поиск по админке" name="search">
	      <button type="submit"><i class="fa fa-search">найти</i></button>
	    </form>
	</div>

	<div class="litle-content line-hero">

		<!-- если данных нет то показать по умолчанию статику- если пусто - статика - если поля пустые тоже статика -->
		<div class="cl"></div>
		<h2 class="p-left">управление сервисами</h2><Br>

		<hr><br>
		<h2 class="p-left">добавить сервисы</h2><Br>
		<div class="form-ready">
			<form action="#">
				<label>описание страницы</label>
				<input name="desc_page" type="text">

				<label>сервис 1 название</label>
				<input name="name_service_1" type="text">

				<label>сервис 1 описание</label>
				<input name="desc_service_1" type="text">

				<label>сервис 2 название</label>
				<input name="name_service_2" type="text">

				<label>сервис 2 описание</label>
				<input name="desc_service_2" type="text">

				<label>сервис 3 название</label>
				<input name="name_service_3" type="text">

				<label>сервис 3 описание</label>
				<input name="desc_service_3" type="text">

				<label>сервис 4 название</label>
				<input name="name_service_4" type="text">

				<label>сервис 4 описание</label>
				<input name="desc_service_4" type="text">

				<label>сервис 5 название</label>
				<input name="name_service_5" type="text">

				<label>сервис 5 описание</label>
				<input name="desk_service_5" type="text">

				<label>сервис 6 название</label>
				<input name="name_service_5" type="text">

				<label>сервис 6 описание</label>
				<input name="desk_service_5" type="text"><br>

				<button class="push" type="submit">создать сервисы</button>
			</form>
		</div>

		<div class="form-ready">
			<!-- нужна проверка -->
			отобразить фишки 
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