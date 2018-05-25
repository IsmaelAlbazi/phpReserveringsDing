<section class="booking">
	<form 
		action="src/php/reserveringOpslaan.php" 
		method="post"
		id="booking-form"
		name="booking-form"
		class="booking__form"
	>
		<input type="date" id="booking-date" name="datum" value="" required="" class="booking__input booking__input--date">
		<input type="time" id="booking-time" name="tijd" placeholder="08:30" required="" step="900" class="booking__input">

		<input required="" type="text" id="booking-name" name="naam" placeholder="Full Name" class="booking__input">
		<select id="booking-barber" name="kapper" value="Kies Kapper" class="booking__input">
			<option value="Habib">Habib</option>
			<option value="Saar">Fatima</option>
			<option value="Hadiz">Hadiz</option>
		</select>
		<input class="booking__button" type="submit" value="Reserveren"></input>
	</form>
</section>