<!-- RIZQI CAHYA ANGELITA
     21091397047 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="047_Rizqi Cahya Angelita_prak5 no2.css">
    <title>Praktikum 5</title>
</head>
<body>
    <div class="container">
        <h2><u>Soal No.2</u></h2>

        <?php
			class Pegawai
			{
				public  $nama;
				public $gaji;
				public	function __construct($nama, $gaji)
				{
					$this->nama = $nama;
					$this->gaji = $gaji;
				}
				public	function infoGaji()
				{
					return $this->gaji;
				}
			}
				class Manajer extends Pegawai
				{
					private $tunjangan;
					public	function __construct($nama, $gaji, $tunjangan)
					{
						parent::__construct($nama, $gaji);
						$this->tunjangan = $tunjangan;
					}
					public	function infoGaji()
					{
						return $this->gaji;
					}
					public	function infoTunjangan()
					{
						return $this->tunjangan;
					}
				}
				class Programmer extends Pegawai
				{
					private $bonus;
					public	function __construct($nama, $gaji, $bonus)
					{
						parent::__construct($nama, $gaji);
						$this->bonus = $bonus;
					}
					public	function infoGaji()
					{
						return $this->gaji;
					}
					public	function infoBonus()
					{
						return $this->bonus;
					}
				}
				class Bayaran
				{
					public function hitungBayaran($peg)
					{
						$uang = $peg->infoGaji();
						
						return $uang;
					}
					public static function main($args)
					{
						$man = new Manajer("Aransha", 6000000, 4000000);
						$prog = new Programmer("Reza", 4000000, 1500000); 
						$hr = new Bayaran();
						echo "<br> Nama Manajer : ".$man->nama."<br> Gaji : Rp. ".strval($hr->hitungBayaran($man)) , "\n";
				        echo "<br>";
						echo "<br>Nama Programmer : ".$prog->nama. "<br> Gaji : Rp. ".strval($hr->hitungBayaran($prog)) , "\n";
				      
					}
				}
				Bayaran::main(array());
		?>
    </div>
</body>
</html>