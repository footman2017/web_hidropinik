@extends('layouts.template')

@section('title', 'Data Ph')

@section('content')
<h3>Data Ph</h3>
<div id = "diagram_ph_content" class="chart-container" style="position: relative; height:40vh; width:80vw">
   
</div>   
@endsection

@section('script')
<script>
   $(document).ready(function() {
      setInterval(function(){
         $('#diagram_ph_content').empty().load("{{url('/diagram/get_diagram_ph')}}");
      }, 3000);
   });
</script>
@endsection
