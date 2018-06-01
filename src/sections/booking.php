<section class="booking">
	<form
		class="booking__form"
		action="src/php/reserveringOpslaan.php"
		method="post"
		id="booking-form"
		name="booking-form"
	>


	<?php $datum = date("Y-m-d"); ?>
		<input class="booking__input booking__input--date" type="date" id="booking-date" name="datum" value="<?php echo "$datum" ?>" required="">
		<select class="booking__input" type="time" id="booking-time" name="tijd" required="" placeholder="">
		
			<?php require_once "src/php/timeDropDown.php"; timeNow(15); timeDropDown(0, 0); ?>
		</select>
		<input class="booking__input" required="" type="text" id="booking-name" name="naam" placeholder="Full Name">
		<select class="booking__input" id="booking-barber" name="kapper" value="Kies Kapper">
			<option value="Habib">Habib</option>
			<option value="Fatima">Fatima</option>
			<option value="Hadiz">Hadiz</option>
		</select>
		<input class="booking__button" type="submit" value="Reserveren"></input>
	</form>
</section>
