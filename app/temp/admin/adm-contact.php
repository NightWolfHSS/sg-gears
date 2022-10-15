			<?php echo get_left_bar(); ?>
			<!-- center-bar -->
			<div class="center-bar">

				<div class="head-center">
					<h1>Управление контактами</h1>
					<form action="/action_page.php">
				      <input type="text" placeholder="поиск по админке" name="search">
				      <button type="submit"><i class="fa fa-search">найти</i></button>
				    </form>
				</div>

				<div class="litle-content line-hero">

						<!-- если данных нет то показать по умолчанию статику- если пусто - статика - если поля пустые тоже статика -->
						<div class="cl"></div>
						<h2 class="p-left">добавить информацию - контакты</h2><Br>
						<!-- create -->
						<!-- создать если нет - спрятать если есть -->
						<div class="form-ready">
							<form action="#">
								<label>описание полей</label>
								<input name="description" type="text">

								<label>адресс</label>
								<input name="street" type="text">

								<label>улица/офис/кабинет</label>
								<input name="info_street" type="text">

								<label>почта</label>
								<input name="email" type="text">

								<label>Описание | социальные сети</label>
								<input name="soc_desc" type="text">

								<div class="base-box-icons">
									<p>cоц иконка 1</p>
								    <input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
									<input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
									<input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
								</div><hr>
							<!-- 	<label>соц. иконка 1</label>
								<input name="soc_1" type="text"> -->

								<label>ссылка</label>
								<input name="href_1" type="text">

								<label>название | описание ссылки</label>
								<input name="desc_1" type="text">

								<div class="base-box-icons">
									<p>cоц иконка 2</p>
								    <input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
									<input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
									<input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
								</div><hr>
                                                                                                                             
								<label>ссылка</label>
								<input name="href_2" type="text">

								<label>название | описание ссылки</label>
								<input name="desc_2" type="text">

								<div class="base-box-icons">
									<p>cоц иконка 3</p>
								    <input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
									<input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
									<input type="radio" id="contactChoice3" name="contact" value="mail">
									<label for="contactChoice3">Mail</label>
								</div><hr>

								<label>ссылка</label>
								<input name="href_3" type="text">

								<label>название | описание ссылки</label>
								<input name="desc_3" type="text">
								<br>
								<button class="push" type="submit">создать</button>

							</form>
						</div>

						<div class="cl"></div><Br>
						<h2 class="p-left">место положение на карте</h2>

						<div class="form-ready">
							<form action="#">
								<label>код карты</label>
								<input name="map_code" type="text">
								<br>
								<button class="push" type="submit">создать</button>

							</form>
						</div>

						<div class="cl"></div><Br>
						<h2 class="p-left">текстовый слайдер</h2>

						<div class="form-ready">
							<form action="#">
								<label>описание</label>
								<input name="description" type="text">
								<label>текст</label>
								<input name="text" type="text">
								<br>
								<button class="push" type="submit">добавить</button>
							</form>
						</div>

						<div class="form-ready">
							отобразить все данные текстового слайдера
							проверка если есть  и если нет
							только удаление ссылка 
						</div>

						<!-- navigaion -->
						<div class="cl"></div><Br>
						<h2 class="p-left">навигация:</h2>

						<div class="wp-content mob-center">
							<a class="link-main" href="">Главная </a>
							<a class="link-main" href="">о нас </a>
							<a class="link-main" href="">продукция </a>
							<a class="link-main" href="">галлерея </a>
							<a class="link-main" href="">сервис </a>
						</div>

						<br>

						<!-- update -->
						<!-- подставь данные если есть - если нет вывод - извенять нечего также можно спрятать-->
						
						<!-- delete -->
						<!-- удалить всё - картинки и данные -->

				</div>

			</div>
			<!-- end center-bar -->
			<?php echo get_right_bar(); ?>