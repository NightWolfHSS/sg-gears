<?php get_left_bar(); ?>
<!-- center-bar -->
<div class="center-bar">

	<div class="head-center">
		<h1>Управление галлереей</h1>
		<form action="/action_page.php">
	      <input type="text" placeholder="поиск по админке" name="search">
	      <button type="submit"><i class="fa fa-search">найти</i></button>
	    </form>
	</div>

	<div class="litle-content line-hero">

			<!-- если данных нет то показать по умолчанию статику- если пусто - статика - если поля пустые тоже статика -->
			<div class="cl"></div>
			<h2 class="p-left">добавить информацию - галлерея (по одному)</h2><Br>
			<!-- create -->
			<!-- создать если нет - спрятать если есть -->
			<div class="form-ready">
				<form action="/send_db" method="POST" enctype="multipart/form-data">
					<label>выбрать картинку</label>
					<input name="image" type="file">
					<label>описание к картинке</label>
					<input name="description" type="text"><br>
					<button class="push" type="submit">добавить картинку</button>
				</form>
			</div>

			<div class="form-ready">
				<!-- нужна проверка -->
				отобразить данные галлереи
			</div>

			<div class="cl"></div>
			<h2 class="p-left">мини галлерея - по одному</h2><Br>
			<!-- create -->
			<!-- создать если нет - спрятать если есть -->
			<div class="form-ready">
				<form action="#" enctype="multipart/form-data">
					<label>выбрать картинку</label>
					<input name="image" type="file">
					<label>описание к картинке</label>
					<input name="description" type="text"><br>
					<button class="push" type="submit">добавить картинку</button>
				</form>
			</div>

			<div class="form-ready">
				<!-- нужна проверка -->
				отобразить данные галлереи
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