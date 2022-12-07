@extends('layouts.user_type.touristsidebar')

@section('content')

<style>
    td {
  overflow: hidden;
  max-width: 75ch;
}
  body{
    background:#eee;    
}
.main-box.no-header {
    padding-top: 20px;
}
.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    -webikt-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.table a.table-link.danger {
    color: #e74c3c;
}
.label {
    border-radius: 3px;
    font-size: 0.875em;
    font-weight: 600;
}
.user-list tbody td .user-subhead {
    font-size: 0.875em;
    font-style: italic;
}
.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}
.table thead tr th {
    border-bottom: 2px solid #e7ebee;
}
.table tbody tr td:first-child {
    font-size: 1.125em;
    font-weight: 300;
}
.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
a:hover{
text-decoration:none;
}
</style>
<div>
  <style>
    body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">



</div><div class="container">

<div class="row">
    <div class="col-md-4 col-xl-3">
    <a href="{{Route('touristWelcome')}}" >
        <div class="card bg-c-blue order-card">
            <div class="card-block">
                <h6 class="m-b-20">Book Hotel</h6>
                <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2>
                <p class="m-b-0">Book your hotel in here<span class="f-right">351</span></p>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4 col-xl-3">
    <a href="{{Route('addpost')}}" >
        <div class="card bg-c-green order-card">
            <div class="card-block">
                <h6 class="m-b-20">Add Blogs</h6>
                <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2>
                <p class="m-b-0">Add new Blogs<span class="f-right">351</span></p>
            </div>
        </div>
        </a>
    </div>
    
    
</div>


<div class="container py-5 h-100">
<h1>Hotel Booking Requests</h1>
<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Hotel Name</th>
                <th scope="col">Hotel check In</th>
                <th scope="col">Hotel check Out</th>
                <th scope="col">Comfort</th>

                <th scope="col">Hotel Status</th>

                <th scope="col">Action</th>
                
              
                </tr>
            </thead>
            <tbody>
            @foreach ($bookinghotel as $book)
            <tr>
                <td scope="col">{{$book->tourist_id}}</td>
                <td scope="col">{{$book->hotel->hotel_name}}</td>
                <td scope="col">{{$book->checkin}}</td>
                <td scope="col">{{$book->checkout}}</td>
                <td scope="col">{{$book->comfort}}</td>
                <td scope="col">{{$book->action}}</td>


                <td scope="col">
                <a href="{{Route('bookhotel.delete',$book->id)}}" class="btn btn-sm btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach 
            </tbody>
        </table>
        </div>
               
 <div>

 
<div class="container py-5 h-100">
<h1>Vehical Booking Requests</h1>
<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Vehical id</th>
                <th scope="col">pick up</th>
                <th scope="col">drop off</th>
                <th scope="col">pickup time</th>

                <th scope="col">Vehical Status</th>

                <th scope="col">Action</th>
                
              
                </tr>
            </thead>
            <tbody>
            @foreach ($bookingvehical as $book)
            <tr>
                <td scope="col">{{$book->tourist_id}}</td>
                <td scope="col">{{$book->vehical_id}}</td>
                <td scope="col">{{$book->pickup}}</td>
                <td scope="col">{{$book->dropoff}}</td>
                <td scope="col">{{$book->pickuptime}}</td>
                <td scope="col">{{$book->action}}</td>


                <td scope="col">
                <a href="{{Route('bookhotel.delete',$book->id)}}" class="btn btn-sm btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach 
            </tbody>
        </table>
        </div>
               
 <div>

              


        
 
     
        

   

        
                           
  
       

@endsection
@push('dashboard')
  <script>
    window.onload = function() {
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false
              },
              ticks: {
                display: false
              },
            },
          },
        },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Mobile apps",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6

            },
            {
              label: "Websites",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              fill: true,
              data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
              maxBarThickness: 6
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    }
  </script>
@endpush



  

    
