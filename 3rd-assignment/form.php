<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color : green ;}
    </style>
</head>
<body>
    <?php
        $nama = "";
        $alamat ="";
        $Jkelamin ="";
        $telp= "";
        $ttl ="";
        $agama ="";
        
        $namaErr = "";
        $ttlErr = "";
        $telpErr = "";
        $JkelaminErr = "";
        $agamaErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          if (empty($_POST["nama"])) {
            $namaErr = "Nama is required";
          } else {
            $nama = test_input($_POST["nama"]);
          }
          if (empty($_POST["ttl"])) {
            $ttlErr = "Tempat Tanggal Lahir is required";
          } else {
            $ttl = test_input($_POST["ttl"]);
          }
          
          if (empty($_POST["telp"])) {
            $telpErr = "No. Telp is required";
          } else {
            $telp = test_input($_POST["telp"]);
          }
            
          if (empty($_POST["alamat"])) {
            $alamat = "";
          } else {
            $alamat = test_input($_POST["alamat"]);
          }
        
          if (empty($_POST["agama"])) {
            $agamaErr = "Agama is required";
          } else {
            $agama = test_input($_POST["agama"]);
          }
        
          if (empty($_POST["Jkelamin"])) {
            $JkelaminErr = "Jenis Kelamin is required";
          } else {
            $Jkelamin = test_input($_POST["Jkelamin"]);
          }
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div style="border: 2px solid black">
        <br> 
    <h2>Formulir Pendaftaran Anggota</h2><br>
    <span class="error">* Wajib</span>
    <br><br>
    Nama :<input type="text" name="nama"style="width:200px">
    <span class="error">* <?php echo $namaErr;?></span>
              <br><br>
    Tempat Tanggal Lahir :<input type="text" name="ttl">
    <span class="error">*<?php echo $ttlErr;?></span>
              <br><br>
    Alamat : <textarea name="alamat" rows="3" cols="30"></textarea>
  			<br><br>
      No. Telp : <input type="text" name="telp"style="width:150px">
      <span class="error">*<?php echo $telpErr;?></span>
  			<br><br>
    Jenis Kelamin : <input type="radio" name="Jkelamin" value="Male">Male
                    <input type="radio" name="Jkelamin" value="Female">Female
                      <span class="error">* <?php echo $JkelaminErr;?></span>
  			        <br><br>
  	Agama : <input type="radio" name="agama" value="Islam">Islam
              <input type="radio" name="agama" value="Kristen">Kristen
              <input type="radio" name="agama" value="Hindu">Hindu
                <input type="radio" name="agama" value="Other">Other
                <span class="error">*<?php echo $agamaErr;?></span>
                  <br><br>
        <br>
  	<input type="submit" name="simpan" value="Simpan">
    </div>
</form>

<?php
echo "<h2>Formulir Pendaftaran Baru :</h2>";
echo $nama;
echo "<br>";
echo  $ttl;
echo "<br>";
echo $alamat;
echo "<br>";
echo $telp;
echo "<br>";
echo $Jkelamin;
echo "<br>";
echo $agama;
?>
</body>
</html>
