<@ elements/header.php @>

	<div id="menu">
		<@ foreach in pagelist @>
			<a href="/#@{id}">@{ title }</a>
		<@ end @>
	</div>

	<@ if @{ ?lang } @>
	    <@ set { %lang: @{ ?lang } } @>
	<@ end @>


	<@ if @{ %lang } = 'cn' @>
		<@ foreach in pagelist @>
			<div class="element" id="@{id}" style="left:@{left}; top:@{top}">
				@{ +chinese }
			</div>
		<@ end @>
	<@ else @>
		<@ foreach in pagelist @>
			<div class="element" id="@{id}" style="left:@{left}; top:@{top}">
				@{ +english }
			</div>
		<@ end @>
	<@ end @>

	<div class="field has-addons">
		<p class="control">
			<a
			href="?lang=en"
			class="button is-dark<@ if @{ %lang | def('en') } = 'en' @> is-active<@ end @>"
			>
			English
			</a>
		</p>
		<p class="control">
			<a
			href="?lang=cn"
			class="button is-dark<@ if @{ %lang } = 'cn' @> is-active<@ end @>"
			>
			中文
			</a>
		</p>
	</div>



<@ elements/footer.php @>
