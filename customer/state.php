<?php

include 'connection.php';

if (isset($_POST['user_country_id']) && $_POST['user_country_id'] > 0) {
	$countryId = $_POST['user_country_id'];

	$sel = "SELECT * FROM state where country_id=" . $countryId;
	$conn = mysqli_query($con, $sel);

	?>
	<option value="">select state..</option>
	<?php

	while ($cal = mysqli_fetch_assoc($conn)) {
		?>
		<option value="<?php echo $cal['id']; ?>">
			<?php echo $cal['name']; ?>
		</option>
		<?php

	}
	?>
<?php } ?>
exit;