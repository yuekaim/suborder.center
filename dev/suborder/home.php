<@ elements/header.php @>

<div id="menu">


	<@ foreach in pagelist @>
		<a href="/#@{id}">@{ title }</a>
	<@ end @>
<div>

	<@ if @{ ?lang } @>
		<@ set { %lang: @{ ?lang } } @>
	<@ end @>

  <!-- <img src="2.png" id="img2"> -->
	<@ if @{ %lang } = 'cn' and @{ chinese } @>
		<@ foreach in pagelist @>
			<div class="element" id="@{id}" style="left:@{left}; top:@{top}">
				@{ chinese }
			</div>
		<@ end @>
	<@ else @>
		<@ foreach in pagelist @>
			<div class="element" id="@{id}" style="left:@{left}; top:@{top}">
				@{ english }
			</div>
		<@ end @>
  <@ end @>

	<@ elements/menu.php @>

<@ elements/footer.php @>
