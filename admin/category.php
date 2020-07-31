<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
?>
<html>
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php

		include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">

					<h2 class="title">Add category</h2>
					<p class="meta"></p>
					<div class="entry">
					<form action="process_addcategories.php" method="POST">
						Name <input type = "text" name="nm"> <input type="submit" value="ok"">
						</form>
					</div>
				</div>
				<h2 class="title">Delete category</h2>
					<p class="meta"></p>
					<div class="entry">
					<form action="process_deletecategories.php" method="POST">
						name
						<html>
					<select name="name" style="width:150px;">
						<?php

						$link=mysqli_connect("localhost","root","") or die("cant connect");

						mysqli_select_db($link,"jobscope") or die("cant select db");

						$q="select * from categories";

						$res=mysqli_query($link,$q) or die('wrong query');

						while($row=mysqli_fetch_assoc($res))
						{
							echo "<option>".$row['cat_nm'];
						}
						?>
					</select>
				</html>
							<input type="submit" value="ok">
					</form>
					</div>
				</div>
			</div>
			<!-- end #content -->

			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>
	</div>
</div>
<!-- end #footer -->
</body>
</html>
