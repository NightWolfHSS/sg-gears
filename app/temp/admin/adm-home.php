<?php get_left_bar(); ?>
<!-- center-bar -->
<div class="center-bar">

	<div class="head-center">
		<h1>Управление главной</h1>
		<form action="/action_page.php">
	      <input type="text" placeholder="поиск по админке" name="search">
	      <button type="submit"><i class="fa fa-search">найти</i></button>
	    </form>
	</div>

	<div class="litle-content line-hero">

		<!-- если данных нет то показать по умолчанию статику- если пусто - статика - если поля пустые тоже статика -->
		<div class="cl"></div>
		<h2 class="p-left">добавить информацию - главная</h2><Br>
		<!-- create -->
		<hr><br>
		<h2 class="p-left">Слайдер | добавить слайд</h2><Br>
		<div class="form-ready">
			<form action="#" enctype="multipart/form-data">
				<label>выбрать картинку</label>
				<input name="image" type="file">
				<label>заголовок к картинке</label>
				<input name="description" type="text">
				<label>описание к картинке</label>
				<input name="description" type="text"><br>
				<button class="push" type="submit">добавить картинку</button>
			</form>
		</div>

		<div class="form-ready">
			<!-- нужна проверка -->
			отобразить слайды 
		</div>

		<hr><br>
		<h2 class="p-left">фишки на главной | все фишки сразу</h2><Br>
		<div class="form-ready">
			<form action="#">
				<label>описание</label>
				<input name="description" type="text">
				<label>описание к картинке</label>
				<input name="description" type="text">

				<label>имя фишки 1</label>
				<input name="description" type="text">
				<label>описание фишки 1</label>
				<input name="description" type="text">

				<label>имя фишки 2</label>
				<input name="description" type="text">
				<label>описание фишки 2</label>
				<input name="description" type="text">

				<label>имя фишки 3</label>
				<input name="description" type="text">
				<label>описание фишки 3</label>
				<input name="description" type="text">

				<label>имя фишки 3</label>
				<input name="description" type="text">
				<label>описание фишки 3</label>
				<input name="description" type="text"><br>
				

				<button class="push" type="submit">создать фишки</button>
			</form>
		</div>

		<div class="form-ready">
			<!-- нужна проверка -->
			отобразить фишки 
		</div>

		<hr><br>
		<h2 class="p-left">блок с сылкой на ресурс</h2><Br>
		<div class="form-ready">
			<form action="#">
				<label>название</label>
				<input name="name" type="text">
				<label>описание</label>
				<input name="description" type="text">
				<label>ссылка на ресурс</label>
				<input name="href" type="text"><br>
				<button class="push" type="submit">создать</button>
			</form>
		</div>

		<div class="form-ready">
			<!-- нужна проверка -->
			отобразить ресурс
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