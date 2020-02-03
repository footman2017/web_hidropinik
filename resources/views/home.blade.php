@extends('layouts.template')

@section('title', 'Home')

@section('content')
<h3>Data Mahasiswa</h3>
   <table id="table_mhs" class="table table-striped table-bordered" style="width:100%">
      <thead align="center">
         <tr>
            <th style="width: 10px;">NIM</th>
            <th style="width: 210px;">Nama</th>
            <th>Pendidikan</th>
            <th style="width: 10px;">Email</th>
            <th>No HP</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $i=0;
         foreach ($mahasiswa as $row) {
            $i++;
            ?>
            <tr>
               <td align="center"><?php echo $row->nim?></td>
               <td><?php echo $row->nama?></td>
               <td align="center"><?php echo $row->pendidikan?></td>
               <td><?php echo $row->email?></td>
               <td><?php echo $row->telepon?></td>
            </tr>
            <?php
         }
         ?>
      </tbody>
   </table>
<script>
   $(document).ready(function() {
      $('#table_mhs').DataTable({
         responsive: true,
         "dom": '<"row"<"col-9"l><"col"f>>t<"row"<"col-9"i><"col"p>>'
      });
   } );
</script>
@endsection