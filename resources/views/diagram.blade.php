{{-- @extends('layouts.template') --}}
@extends('adminlte::page')
@section('plugins.Chartjs', true)
@section('title', 'Data Ph')

@section('content')
<!-- /.card-body -->
{{-- <div class="chart-container" style="position: relative; height:100px; width:auto">
   <canvas id="myChart"></canvas>
</div> --}}

<div class="card">
   <div class="card-header">
     <h3 class="card-title">
       <i class="fas fa-chart-pie mr-1"></i>
       Data Ph
     </h3>
     <div class="card-tools">
      <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input" id="realtime">
         <label class="custom-control-label" for="realtime">Realtime</label>
       </div>
     </div>
   </div><!-- /.card-header -->
   <div class="card-body">
     <div class="tab-content p-0">
       <!-- Morris chart - Sales -->
       <div class="chart tab-pane active" id="revenue-chart"
            style="position: relative; height: auto;">
           <canvas id="myChart" height="300" style="height: 1200px;"></canvas>                         
        </div>
       {{-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
         <canvas id="myChart" height="300" style="height: 300px;"></canvas>                         
       </div>   --}}
     </div>
   </div><!-- /.card-body -->
 </div>
 <!-- /.card -->
@endsection

@section('js')
<script>
   $(document).ready(function() {
      var tanggal = new Array();
      var nilai = new Array();
      var refreshIntervalId;
      
      function addData(chart, label, data) {
         chart.data.labels.push(label);
         chart.data.datasets.forEach((dataset) => {
            dataset.data.push(data);
         });
         chart.update();
      }

      function removeData(chart) {
         chart.data.labels.shift();
         chart.data.datasets.forEach((dataset) => {
            dataset.data.shift();
         });
         chart.update();
      }

      $.ajax({
         url: "{{url('/diagram/getdataph')}}",
         type: 'get',
         // data: {ggwp:2},
         dataType: 'json',
         success:function(response){
            console.log(response);
            response.forEach(function(data){
               tanggal.push(data.timestamp);
               nilai.push(data.ph);
            });
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
               type: 'line',
               data: {
                  labels:tanggal.reverse(),
                  datasets: [{
                     label: 'Ph',
                     data: nilai.reverse(),
                     borderWidth: 3,
                     fill : false,
                     backgroundColor : '##00cccc',
                     borderColor : '#00ffff'
                  }]
               },
               options: {
                  scales: {
                     yAxes: [{
                        ticks: {
                           beginAtZero:true,
                           // suggestedMin: 0,
                           suggestedMax: 14,
                           stepSize: 2
                        }
                     }]
                  }
               }
            });

            $('#realtime').change(function() {
               if(this.checked) {
                  refreshIntervalId = setInterval(function(){
                     // $.ajax({
                     //    url: "{{url('/diagram/getdatalastph')}}",
                     //    type: 'get',
                     //    // data: {ggwp:2},
                     //    dataType: 'json',
                     //    success:function(response){
                     //       if(tanggal[tanggal.length-1] != response.timestamp){
                     //          addData(myChart, response.timestamp, response.ph);
                     //          removeData(myChart);
                     //       }
                     //    }
                     // });

                     var waktu = new Date();
                     var tahun = waktu.getFullYear();
                     var bulan = waktu.getMonth();
                     var tanggal = waktu.getDate();
                     var jam = waktu.getHours();
                     var menit = waktu.getMinutes();
                     var detik = waktu.getSeconds();
                     addData(myChart, ""+tahun+"-"+bulan+"-"+tanggal+" "+jam+":"+menit+":"+detik+"", (Math.floor(Math.random() * 14) + 0));
                     removeData(myChart);
                  }, 1000);      
               }else{
                  console.log(refreshIntervalId);
                  clearInterval(refreshIntervalId);
               }
            });
         }
      });
   
   });
</script>
@endsection
