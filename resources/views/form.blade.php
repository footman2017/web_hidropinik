@extends('layouts.template')

@section('title', 'Home')

@section('content')
<h3>Input Data Mahasiswa</h3>
<form action="/tambah/insert" method="post" name="form1">
   {{ csrf_field() }}
   <div class="form-group">
   <label for="nim">NIM</label>
   <input type="number" id="nim" class="form-control" name="nim" placeholder="NIM" required>
   </div>
   <div class="form-group">
      <label for="nama">Nama</label>
      <input pattern="[a-zA-Z\s]+$" type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
      <!-- <div class="valid-feedback">
         Looks good!
      </div>
      <div class="invalid-feedback">
         Looks bad!
      </div> -->
      <!-- <small id="nameHelpInline" class="text-muted">
         Hanya boleh alphabet
      </small> -->
   </div>
   <div class="form-group">
      <legend class="col-form-label">Jenis kelamin</legend>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="1" required>
         <label class="form-check-label" for="laki">
            Laki - laki
         </label>
         </div>
         <div class="form-check">
         <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="2">
         <label class="form-check-label" for="perempuan">
            Perempuan
         </label>
         </div>
   </div>
   <div class="form-group">
      <label for="provinsi">Pendidikan</label>
      <select class="form-control" id="pendidikan" name="pendidikan" required>
         <option value="">Pilih Pendidikan</option>
         <?php foreach ($pendidikan as $row){ ?>
               <option value = "<?php echo $row->id_pendidikan ?>"><?php echo $row->nama_pendidikan ?></option>  
         <?php } ?>
      </select>
   </div>
   <div class="form-group">
      <label for="nohp">No. Hp</label>
      <input type="text" pattern="^[0-9+]{0,15}$" class="form-control" id="nohp" name="nohp" placeholder="No. Hp" required>
      <!-- <input type="text" id="nohp" name="nohp" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd" required> -->
   </div>
   <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
   </div>
   <div class="form-group">
      <div class="row">
         <div class="col-md-3">
            <label for="kurir">Hobby</label>
            <div class="form-check">
               <input class="form-check-input" type="checkbox" value="Sepak Bola" id="defaultCheck1" name="hoby[]" >
               <label class="form-check-label" for="defaultCheck1">
                  Sepak Bola
               </label>
            </div>
            <div class="form-check">
               <input class="form-check-input" type="checkbox" value="Berenang" id="defaultCheck2" name="hoby[]" >
               <label class="form-check-label" for="defaultCheck2">
                  Berenang
               </label>
            </div>
            <div class="form-check">
               <input class="form-check-input" type="checkbox" value="Lari" id="defaultCheck3" name="hoby[]">
               <label class="form-check-label" for="defaultCheck3">
                  Lari
               </label>
            </div>
         </div>
      </div>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
   bootstrapValidate('#nim', 'required:Please fill out this field!')

   bootstrapValidate('#nama', 'regex:^[a-zA-Z\s ]+$:You must fill this with alphabet !')

   bootstrapValidate('#email', 'email:Format email salah !')
   bootstrapValidate('#email', 'required:Please fill out this field!')
   bootstrapValidate('#nohp', 'regex:^[0-9+]{0,15}$:Format invalid')
   bootstrapValidate('#nohp', 'required:Please fill out this field!')

</script>
@endsection