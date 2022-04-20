{{-- <?php
$pg = 'dashboard';
$title = "Dashboard";
include('header.php');
include('sidebar.php');
?> --}}

@extends('layouts.myapp')
@extends('layouts.sidebar')
@section('content')

<style>
    #mychart{
  width: 350px;
  height: 200px;
}
</style>
<div class="app-content content dashboard">
  <div class="content-wrapper content-wrapper-2">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <div class="row card py-lg-5 py-3 px-2 px-md-3">
          <div class="col-12">
            <h1 class="ml-1 main-heading">Dashboard</h1>
          </div>
          <div class="col-12">

            <div class="row mt-md-2 mt-1">
              <div class="col-xl-4 col-md-6 mt-2">
                <div class=" circlebox d-flex justify-content-between align-items-center">
                  <div class="circlebox-content">
                    <h5>Total Users</h5>
                    <h3 class="total-number">{{$data['users']}}</h3>
                  </div>
                  <i class="fas fa-user circlebox-icon"></i>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 mt-2">
                <div class=" circlebox d-flex justify-content-between align-items-center">
                  <div class="circlebox-content">
                    <h5>Total Projects</h5>
                    <h3 class="total-number">{{$data['project_count']}}</h3>
                  </div>
                  <i class="fas fa-rocket circlebox-icon"></i>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 mt-2">
                <div class=" circlebox d-flex justify-content-between align-items-center">
                  <div class="circlebox-content">
                    <h5>Total Amount</h5>
                    <h3 class="total-number">${{$data['payment']/100}}</h3>
                  </div>
                  <i class="fas fa-dollar-sign circlebox-icon"></i>
                </div>
              </div>
            </div>


            <div class="row mt-2 mt-lg-4">
              <div class="col-12">
                <div class="row">
                  <div class="col-xl-6">
                    <h2 class="sub-heading">Revenue Generated Per Year</h2>
                  </div>
                  <div class="col-xl-6 text-right mt-xl-0 mt-2">
                    <select name="year" id="selectYear">
                        <option value="">Select year</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                    </select>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-xl-1 my-auto position-relative">
                    <h3 class="no-of-user left-rotate">Revenue</h3>
                  </div>
                  <div class="col-xl-11">
                    <div class="box">
                    <div class="chart-main position-relative">
                        <div class="row">
                            <div class="col-12">
                                
                                 <div class="chart-container">
                                    <div class="pie-chart-container">
                                    <canvas id="pie-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    {{-- <img src="images/revenue-chart2.png" alt="" class="img-fluid w-100"> --}}
                  </div>
                  <div class="col-12 text-center">
                    <h3 class="no-of-user">Months</h3>
                  </div>
                </div>
              </div>
            </div>



            <div class="row mt-2 mt-lg-4">
              <div class="col-12">
                <h1 class="sub-heading">User</h1>

                <div class="dataTables_wrapper">
                  <div class="user-listing-top">
                    <div class="row align-items-center">
                      <div class="col-xl-8 mt-2 sort-datepicker">
                        <div class="d-md-flex align-items-center">
                          <label class="m-0">Sort by:</label>
                          <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-0">
                            <input type="date" placeholder="From" class="form-control general-select profile-input" />
                          </div>
                          <div class="input-wrap mr-0 mr-sm-1 mb-2 mb-md-0">
                            <input type="date" placeholder="To" class="form-control general-select profile-input" />
                          </div>
                          <button class="primary-button px-2 mb-md-0">Apply/Clear</button>
                        </div>
                      </div>
                      {{-- <div class="col-xl-4 mt-2 text-left text-xl-right">
                        <label class="m-0">Filter by Status:</label>
                        <select name="" id="" class="general-select profile-input w-50">
                          <option value="" disabled selected hidden>Select</option>
                          <option value="">Completed</option>
                          <option value="">In-Progress</option>
                        </select>
                      </div> --}}
                    </div>
                    {{-- <div class="row align-items-end my-xl-2">
                      <div class="col-12 col-xl-6 mt-2">
                        <div class="dataTables_length text-left">
                          <label class="d-inline-block m-0">Show</label>
                          <select class="form-control d-inline-block table-entry general-select profile-input">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                          <label class="d-inline-block ml-1 m-0">Entries</label>

                        </div>
                      </div>
                      <div class="col-12 col-xl-6 mt-2 mt-xl-0 d-md-flex d-block justify-content-end align-items-center">
                        <div class="dataTables_filter text-right">
                          <div class="search-wrap">
                            <input type="search" class="form-control" placeholder="Search" />
                          </div>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                  <div class="row row-table">
                    <div class="main-tabble table-responsive">
                      <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table class="table table-borderless dataTable text-center">
                              <thead>
                                <tr>
                                  <th>S. No.</th>
                                  <th>Service</th>
                                  <th>Date</th>
                                  <th>Category</th>
                                  <th>Project Title</th>
                                  <th>Duration</th>
                                  <th>Cost</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                  $i=1;
                                @endphp
                                @foreach ($data['projects'] as $item)
                                <tr>
                                  <td>{{$i++}}</td>
                                  <td>{{$item->service->title}}</td>
                                  <td>{{$item->created_at}}</td>
                                  <td>{{$item->service->category->title}}</td>
                                  <td>{{$item->project_title}}</td>
                                  <td>{{$item->weeks}}</td>
                                  <td>${{$item->consultation_charges}}</td>
                                  <td><span class="inprogress-td">{{$item->status}}</span></td>
                                  <td>
                                    <div class="btn-group ml-1">
                                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                      </button>
                                      <div class="dropdown-menu">
                                          @if($item->status=='Completed')
                                          <a class="dropdown-item" href="{{route('project_detail_complete',['id' => $item->id])}}" >
                                              <i class="far fa-eye"></i>Details</a>
                                          @else
                                          <a class="dropdown-item" href="{{route('project_detail_process',['id' => $item->id])}}" >
                                              <i class="far fa-eye"></i>Details</a>
                                          @endif
                                          @if($item->status=='Progress')
                                          <a class="dropdown-item" onclick="complete_me({{$item->id}})">
                                              <i class="far fa-check"></i>Completed</a>
                                          @endif
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                @endforeach

                              </tbody>
                            </table>
                          </div>
                        </div>
                        {{-- <div class="row mb-4 align-items-center">
                          <div class="col-sm-12 col-md-5">
                            <div class="showing-result" id="DataTables_Table_0_info">
                              Showing 1 to 20 of 52 entries
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                              <ul class="pagination">
                                <li class="paginate_button page-item previous disabled">
                                  <a href="#" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                  <a href="#" class="page-link">01</a>
                                </li>
                                <li class="paginate_button page-item">
                                  <a href="#" class="page-link">02</a>
                                </li>
                                <li class="paginate_button page-item">
                                  <a href="#" class="page-link">03</a>
                                </li>
                                <li class="paginate_button page-item next disabled" i="">
                                  <a href="#" class="page-link">Next</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



          </div>
      </section>
    </div>
  </div>
</div>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script>



      $( document ).ready(function() {
            $('#selectYear').change();
      });

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#selectYear').on('change', function() {
            
            var year = this.value;

            var url = "{{ route('get-chart', ":id") }}";
            url = url.replace(':id', year);
            // var url:"{{ route('get-chart',":year") }}",
            // url = url.replace(':id', id);
            $.ajax({
                type:'GET',
                // url:"{{ route('get-chart',":year") }}",
                // data:{ year:year },
                url: url,
                success:function(data){
                    console.log(data)
                    // var bars_basic_element = document.getElementById('bars_basic');
                    var cData = data;
                    // console.log(cData.chart_data.label);

                    var ctx = $("#pie-chart");

                        //pie chart data
                    var data = {
                        labels: cData.chart_data.label,
                        datasets: [
                        {
                            label: "Revenue",
                            data: cData.chart_data.data,
                            backgroundColor: [
                            "#DEB887",
                            "#A9A9A9",
                            "#DC143C",
                            "#F4A460",
                            "#2E8B57",
                            "#1D7A46",
                            "#CDA776",
                            ],
                            borderColor: [
                            "#CDA776",
                            "#989898",
                            "#CB252B",
                            "#E39371",
                            "#1D7A46",
                            "#F4A460",
                            "#CDA776",
                            ],
                            borderWidth: [1, 1, 1, 1, 1,1,1]
                        }
                        ]
                    };
                
                    //options   
                    var options = {
                        responsive: true,
                        title: {
                        display: true,
                        position: "top",
                        text: "This Year Payment ",
                        fontSize: 18,
                        fontColor: "#111"
                        },
                        legend: {
                        display: true,
                        position: "bottom",
                        labels: {
                            fontColor: "#333",
                            fontSize: 16
                        }
                        }
                    };
                
                    //create Pie Chart class object
                    var chart1 = new Chart(ctx, {
                        type: "bar",
                        data: data,
                        options: options
                    });
                }
            });

        });

  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $data['chart_data']; ?>`);
      var ctx = $("#pie-chart");

      //pie chart data
      var data = {
        labels:'',
        datasets: [
          {
            label: "Revenue",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "This Year Payment ",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options,
        
      });
 
  });


    function complete_me(id){
            $.ajax({
        url: "{{route('project_status_change')}}",
        type: "POST",
        data:{ 
            _token:'{{ csrf_token() }}',
                id:id,
                status:'Completed'
        },
        dataType: 'json',
        }).done(function( response ) {
            location.reload();
        });
    }



</script>
@endsection
{{-- <?php include('footer.php') ?> --}}