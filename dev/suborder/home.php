<@ elements/header.php @>


  <!-- <img src="2.png" id="img2"> -->
	<@ foreach in pagelist @>
		<div class="element" id="@{id}" style="left:@{left}; top:@{top}">
			@{ +main }
		</div>
	<@ end @>

	<@ elements/menu.php @>
	
<@ elements/footer.php @>
