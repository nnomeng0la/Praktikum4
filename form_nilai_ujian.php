<?php

include_once 'header.php';
?>
    <div class="container">
        <h2 >Form Nilai Ujiam</h2>
        <hr>
<form method="POST" action="form_nilai_ujian.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukkan NIM Anda!" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="WEB">Pemrograman WEB</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" placeholder="Masukkan Nilai Anda!" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
<div class="container">
  <hr>
<?php
require_once "class_nilaimahasiswa.php";
if ($_POST) {
    $ns = new NilaiMahasiswa($_POST["nim"], $_POST["matkul"], $_POST["nilai"]);
    $keterangan = $ns->ceknilai();
    $hasil = $ns->kelulusan($keterangan);
    $hasil2 = $ns->grade($keterangan);
    echo '<br/>NIM : ' .$ns->nim;
    echo '<br/>Mata Kuliah : ' .$ns->matkul;
    echo '<br/>Nilai : ' .$ns->nilai;
    echo '<br/>Status : ' .$ns->kelulusan($keterangan);
    echo '<br/>Grade : ' .$ns->grade($keterangan);

}
?>
<hr>
</div>
<?php
include_once 'footer.php';
?>