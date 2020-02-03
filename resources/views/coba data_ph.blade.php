<canvas id="myChart"></canvas>
<script>
   $(document).ready(function() {
      var tanggal = new Array();
      var nilai = new Array();
      
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

      setInterval(function(){
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
                        borderWidth: 1
                     }]
                  },
                  options: {
                     scales: {
                        yAxes: [{
                           ticks: {
                              beginAtZero:true
                           }
                        }]
                     }
                  }
               });
            }
         });
      }, 3000);
   });
</script>