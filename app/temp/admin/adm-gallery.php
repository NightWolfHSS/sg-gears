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

	<?php get_success(); ?>

	<div class="litle-content line-hero">

			<!-- если данных нет то показать по умолчанию статику- если пусто - статика - если поля пустые тоже статика -->
			<div class="cl"></div>
			<h2 class="p-left">добавить информацию - галлерея (по одному)</h2><Br>
			<!-- create -->
			<!-- создать если нет - спрятать если есть -->
			<div class="form-ready">
				<form action="/add_gallery" method="POST" enctype="multipart/form-data">
					<label>выбрать картинку</label>
					<input name="image" type="file">
					<label>описание к картинке</label><br>
					<input name="description" type="text">
					<p></p>
					<button class="push" type="submit">добавить картинку</button>
				</form>
			</div>

			<div class="form-ready">
				<p><b>Удаление по id , или описанию (Галлерея) | если пусто данных нет</b></p>
				<div class="space_box">
					<ul>
						<?php get_gallery_adm(); ?>
					</ul>
				</div>
			</div>

			<div class="cl"></div>
			<h2 class="p-left">мини галлерея - по одному</h2><Br>
			<!-- create -->
			<!-- создать если нет - спрятать если есть -->
			<div class="form-ready">
				<form action="/add_mini_g" method="POST" enctype="multipart/form-data">
					<label>выбрать картинку</label>
					<input name="image" type="file">
					<label>описание к картинке</label>
					<input name="description" type="text">
					<label>seo описание картинки</label>
					<input name="alt" type="text">
					<p></p>
					<button class="push" type="submit">добавить картинку</button>
				</form>
			</div>

			<div class="form-ready">
				<p><b>Удаление по id , или описанию (мини-галлерея) | если пусто данных нет</b></p>
				<div class="space_box">
					<ul>
						<?php get_mini_adm(); ?>
					</ul>
				</div>
			</div>
		
			<!-- navigaion -->
			<?php get_navi(); ?>

	</div>

</div>
<!-- end center-bar -->
<?php get_right_bar(); ?>