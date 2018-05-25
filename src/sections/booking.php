<section class="booking">
	<form 
		class="booking__form"
		action="src/php/reserveringOpslaan.php" 
		method="post"
		id="booking-form"
		name="booking-form"
	>
		<input class="booking__input booking__input--date" type="date" id="booking-date" name="datum" value="">
		<input class="booking__input" type="time" id="booking-time" name="tijd" value="">
		<input class="booking__input" type="text" id="booking-name" name="naam" value="Full Name">
		<select class="booking__input" id="booking-barber" name="kapper" value="Kies Kapper">
			<option value="bob">bob</option>
			<option value="saar">Saar</option>
			<option value="frits">frits</option>
		</select>
		<input class="booking__button" type="submit" value="Reserveren"></input>
	</form>
</section>