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
	<?php get_success(); ?>
	<div class="litle-content line-hero">

		<div class="cl"></div>
		<h2 class="p-left">добавить информацию - главная</h2><Br>
		<!-- create -->
		<hr><br>
		<h2 class="p-left">Слайдер | добавить слайд</h2><Br>
		<div class="form-ready">
			<form action="/add_slide" method="POST" enctype="multipart/form-data">
				<label>выбрать картинку</label>
				<input name="image" type="file">
				<label>название (слайдера | услуги | технологии)</label>
				<input name="name" type="text">
				<label>описание</label>
				<input name="description" type="text">
				<label>сео</label>
				<input name="alt" type="text"><br>
				<button class="push" type="submit">добавить слайд</button>
			</form>
		</div>

		<div class="form-ready">
			<p><b>удалить слайд (для слайдера - на главной)</b></p>
			<div class="space_box">
				<ul>
					<?php get_slider_adm(); ?>
				</ul>
			</div>
			
		</div>

		<hr><br>
		<h2 class="p-left">фишки на главной | все фишки сразу |  картинки уже вшиты | только одна запись</h2><Br>
		<div class="form-ready">
			<form action="/add_tips" method="POST">
				<input type="hidden" name="id" value="7">
				<label>описание</label>
				<input name="name" type="text">
				<label>описание к фишкам</label>
				<input name="desc_name" type="text">

				<label>имя фишки 1</label>
				<input name="description_1" type="text">
				<label>описание фишки 1</label>
				<input name="desc_picture_1" type="text">

				<label>имя фишки 2</label>
				<input name="description_2" type="text">
				<label>описание фишки 2</label>
				<input name="desc_picture_2" type="text">

				<label>имя фишки 3</label>
				<input name="description_3" type="text">
				<label>описание фишки 3</label>
				<input name="desc_picture_3" type="text">

				<label>имя фишки 3</label>
				<input name="description_4" type="text">
				<label>описание фишки 3</label>
				<input name="desc_picture_4" type="text"><br>
			
				<button class="push" type="submit">создать фишки</button>
			</form>
		</div>

		<div class="form-ready">
			<p><b>удалить фишки (главная)</b></p>
			<div class="space_box">
				<ul>
					<?php get_tip_adm(); ?>
				</ul>
			</div>
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