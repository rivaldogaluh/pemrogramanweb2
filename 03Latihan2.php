<html>
	<head>
		<title>Contoh Penggunaan IF</title>
	</head>
	<body>
	<form method="GET">
		Besar Pembelian :
		<input type="text" name="total_beli"><br><br>
		<input type="submit" value="Tentukan Diskon">
	</form>
	<?php
		//$total_beli = $_GET["total_beli"];
		if(isset($_GET["total_beli"])){
			$total_beli = $_GET["total_beli"];
			$total_beli = intval($total_beli);
			$diskon = 0;
			if( $total_beli >= 200000 ){
		 		$diskon = intval(0.1 * $total_beli);
		 		printf("Diskon     = %d <BR>\n", $diskon);
				printf("Pembayaran = %d <BR>\n", $total_beli - $diskon);
			}
			else if( $total_beli >= 100000 ){
				$diskon = intval(0.05 * $total_beli);
				printf("Diskon     = %d <BR>\n", $diskon);
				printf("Pembayaran = %d <BR>\n", $total_beli - $diskon);
			}
		}
	?>
	</body>
</html>