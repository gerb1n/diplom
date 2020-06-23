<?php include 'app/header.php';?>
<div class="contact" style="margin-top: 30px;">
	<div>
		<h3 class="contact-title">Здесь вы найдете всю контакную информацию</h3>
	<div class="map" style="margin-top: 4rem;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.6784362350554!2d39.70050318010198!3d47.22287391420515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b910093ef139%3A0xa995f5a574742bda!2z0J_Rg9GI0LrQuNC90YHQutCw0Y8g0YPQuy4sIDM3LCDQoNC-0YHRgtC-0LIt0L3QsC3QlNC-0L3Rgywg0KDQvtGB0YLQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMzQ0MDgy!5e0!3m2!1sru!2sru!4v1592644486430!5m2!1sru!2sru" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<div class="contact-info-container" style="margin-top: 4rem;">
		<h3 class="contact-title">Чтобы оставить заявку на организацию похорон, позвоните нам или отправьте письмо на почту</h3>
		<div class="contact-info">
		<div class="contact-information">
			<div class="contact-info-item">
				<p><img src="../public/image/icons/location-pointer.png" style="width: 50px;"></p>
				<p class="contact-info-text">Адрес</p>
				<p class="contact-info-text">Г. Ростов-на-Дону, <br>ул. Пушкина 37</p>
			</div>
			<div class="contact-info-item">
				<p><img src="../public/image/icons/phone.png" style="width: 50px;"></p>
				<p class="contact-info-text">Телефон</p>
				<p class="contact-info-text">89885168145</p>
			</div>
			<div class="contact-info-item">
				<p><img src="../public/image/icons/email.png" style="width: 50px;"></p>
				<p class="contact-info-text">Почта</p>
				<p class="contact-info-text">great-souls@mail.ru</p>
			</div>
		</div>
		<div class="form-container" style="padding-left: 170px;">
			<form action="php/mail.php" method="POST">
				<legend>Отправьте свое письмо</legend>
				<div class="form-group">
					<label class="label-title">Введите ваше имя</label>
					<p><input type="text" name="fio" class="form-pole"></p>
				</div>
				<div class="form-group">
					<label class="label-title">Введите ваш номер телефона</label>
					<p><input type="text" name="phone" class="form-pole"></p>
				</div>
				<div class="form-group">
					<label class="label-title">Введите вашу почту</label>
					<p><input type="text" name="email" class="form-pole"></p>
				</div>
				<div class="form-group">
					<label class="label-title">Введите ваше сообщение</label>
					<p><textarea name="text"></textarea></p>
				</div>
				<input type="submit" value="Отправить" class="contact-but">
			</form>
		</div>
		</div>
	</div>
</div>
</div>
<?php include 'app/footer.php';?>