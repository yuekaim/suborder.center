<@ elements/header.php @>

<div id="menu">
	<@ foreach in pagelist @>
		<a href="/#@{id}">@{ title }</a>
	<@ end @>
<div>
	<p> test </p>

		<@ foreach in pagelist @>
			<div class="element" id="@{id}" style="left:@{left}; top:@{top}">
				@{ +chinese }
			</div>
		<@ end @>


<@ elements/footer.php @>
