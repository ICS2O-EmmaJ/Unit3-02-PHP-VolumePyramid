<?php
	// get the base and height from the textfields
  $side_a = $_POST['side-a'];
  $side_b = $_POST['side-b'];
  $height = $_POST['height'];

	// calculate the volume
	$volume = (1/6) * $side_a * $side_b * $height;
  $volume_rounded = number_format($volume, 2);
?>

The volume is <?php echo "$volume_rounded"; ?> cm<sup>3</sup>.

