
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
@extends('theme')
@section('continu')
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Basic Tables</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Basic Tables</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <!-- Total Projects Card -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Projets</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-success fs-14 mb-0">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="150">{{$data[0]}}</span></h4>
                                            <a href="list-projet" class="text-decoration-underline">Voir tous les projects</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-success rounded fs-3">
                                                <i class="bx bx-folder text-success"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Tasks Card -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Tâches</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class="text-danger fs-14 mb-0">
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="1200">{{$data[2]}}</span></h4>
                                            <a href="list-tache" class="text-decoration-underline">Voir tous les taches</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-info rounded fs-3">
                                                <i class="bx bx-task text-info"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Personnel Card -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Personnel</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="500">{{$data[1]}}</span></h4>
                                            <a href="list-personnel" class="text-decoration-underline">Voir tous les personnel</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-warning rounded fs-3">
                                                <i class="bx bx-group text-warning"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ID</h4>
                                <canvas id="myChart" width="400px" height="100vh"></canvas>
                            </div>
                        </div>

                    </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var id= @json($data[3]).map((e)=>e.id);
    var UpdatedDate= @json($data[3]).map((e)=>{
        let date = new Date(e.updated_at);
        let day = date.getDate(); // Get the day (1-31)
        let month = date.getMonth() + 1; // Get the month (0-11, so we add 1)
        let year = date.getFullYear() ; // Get the month (0-11, so we add 1)
        return `${day}-${month}-${year}`;
    });
    console.log(UpdatedDate);

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: UpdatedDate,
            datasets: [{
                label: 'Statistiques',
                data: id, // Replace with your dynamic data

                backgroundColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 12, 1)',
                    'rgba(255, 26, 86, 1)',
                    'rgba(255, 6, 8, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(250, 206, 8, 1)',
                    'rgba(5, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection


                <!-- container-fluid -->
