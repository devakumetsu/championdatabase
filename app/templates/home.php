<?php include_once('sections/header.php'); ?>

	<div class="container">

		<div class="row">
			<div class="col-lg-12 col-md-7 col-sm-12">
				<h1>LEAGUESHARP</h1>
				<p class="lead">EASEY . EFFICIENT . GAMEBREAKING</p>
			</div>
		</div>

	<!-- Headings -->
	<div class="row">
		<div class="col-lg-12">
			<div class="">
				<div class="row">
					<?php
					foreach (Champion::getChampions() as $champ)
					{
						print '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">';
						//print '<div class="row">';
						print Champion::getAvatarChamp($champ->name);
						print "<p class='' style='text-align: center'>";
						print $champ->name;
						print "</p>";
						//print '</div>';
						print '</div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<p>One fine body…</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


<?php include('sections/footer.php'); ?>