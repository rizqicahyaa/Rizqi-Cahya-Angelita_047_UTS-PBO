<!-- RIZQI CAHYA ANGELITA
     21091397047 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="047_Rizqi Cahya Angelita_prak5 no1.css">
    <title>Praktikum 5</title>
</head>
<body>
    <div class="container">
        <h2><u>Soal No.1</u></h2>

        <?php
			class Pegawai
			{
				public $nama;
				public	function __construct($nama)
				{
					$this->nama = $nama;
				}
				public	function getNama()
				{
					return $this->nama;
				}
			}
				class Manajer extends Pegawai
				{
					public $tunjangan;
					public	function __construct($nama, $tunjangan)
					{
						parent::__construct($nama);
						$this->tunjangan = $tunjangan;
					}
					public	function getTunjangan()
					{
						return $this->tunjangan;
					}
				}
				class Kurir extends Pegawai
				{
					public $gaji;

					public	function __construct($nama, $gaji)
					{
						parent::__construct($nama);
						$this->gaji = $gaji;
					}
					public	function getGaji()
					{
						return $this->gaji;
					}
				}
				class Soal1
				{
					public static
					function Proses($peg)
					{
						if ($peg instanceof Manajer)
						{
							$man = $peg;
							echo "Nama manajer: ".$man->nama, "\n";
							echo "<br>Tunjangan: Rp. ".strval($man->tunjangan), "\n";
						}
						else if ($peg instanceof Kurir)
						{
							$kur =  $peg;
							echo "Nama kurir: ".$kur->nama, "\n";
							echo "<br>Gaji: Rp. ".strval($kur->gaji), "\n";
						}
					}
					public static
					function main($args)
					{
						$peg1 = new Manajer("Aransha", 4000000); 
						Soal1::Proses($peg1);
				        echo "<br>", "<br>";
						$peg2 = new Kurir("Satria", 2500000); 
						Soal1::Proses($peg2);
					}
				}
				Soal1::main(array());
		?>
   
    </div>
</body>
</html>