<section class="booking">
	<form 
		action="src/php/reserveringOpslaan.php" 
		method="post"
		id="booking-form"
		name="booking-form"
		class="booking__form"
	>
		<input type="date" id="booking-date" name="datum" value="" class="booking__input booking__input--date">
		<input type="time" id="booking-time" name="tijd" value="" class="booking__input">
		<input type="text" id="booking-name" name="naam" value="Full Name" class="booking__input">
		<select id="booking-barber" name="kapper" value="Kies Kapper" class="booking__input">
			<option value="bob">bob</option>
			<option value="saar">Saar</option>
			<option value="frits">frits</option>
		</select>
		<input class="booking__button" type="submit" value="insert"></input>
	</form>
</section>