
  <style>
   
    body {
      background-color: #BFEBC5;
    }


   
    #chart-container {
      max-width: 600px;
      margin: 0 auto;
    }
  </style>
    <div class="container mt-5 text-center">
    <h1>Seguimiento</h1>
    <div id="chart-container">
      <canvas id="myChart"></canvas>
    </div>
  </div>


 
  <script src="script.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
   
   const data = {
     labels: ['Proteinas', 'Calorias', 'Fibra'],
     datasets: [{
       data: [150, 50, 10],
       backgroundColor: ['#F9FAFC', '#C2EFD8', '#FFB6C1',],
     }],
   };

  
   const options = {
     responsive: true,
     maintainAspectRatio: false,
     legend: {
       position: 'top',
     },
   };

  
   const ctx = document.getElementById('myChart').getContext('2d');
   const myChart = new Chart(ctx, {
     type: 'doughnut',
     data: data,
     options: options
   });
 });

  </script>


