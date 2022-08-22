<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK N 1 SAYUNG</title>
</head>

<body>
	<center>
	<header>
		<h3>Pendaftaran Siswa Baru</h3>
		<h1>SMK N 1 SAYUNG</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<a href="form-daftar.php">Daftar</a>
			<a href="list-siswa.php">Pendaftar</a>
</ul>
	</nav>

	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	
	<?php endif; ?>
	<a href="logout.php">LOGOUT</a>
		</center>
	</body>
</html>
