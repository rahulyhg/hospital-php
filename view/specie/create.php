	<h1>Add_Specie</h1>
<div id="main">
	
	<nav id="createnav">
		<ul>
			<li>
				<a href="<?= URL ?>specie/index">
					<button>
						HomePage
					</button>
				</a>
		
			</li>
		</ul>
	</nav>
	<article id="createArticle">

			<form id="SpecieForm" action="<?=URL?>specie/createSave" method="post">
			<label>Specie</label>
			<br>
			<input type="text" name="specie" placeholder="Specie">
			<br>
			<input type="submit" value="toevoegen">
			</form>
	</article>
</div>
