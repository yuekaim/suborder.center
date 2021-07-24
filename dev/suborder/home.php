<@ elements/header.php @>

<div id="menu">
	<@ foreach in pagelist @>
		<a href="/#@{id}">@{ title }</a>
	<@ end @>
<div>


		<@ foreach in pagelist @>
			<div class="element" id="@{id}" style="left:@{left}; top:@{top}">
				@{ +chinese }
			</div>
		<@ end @>
	

	<@ elements/menu.php @>

<@ elements/footer.php @>
