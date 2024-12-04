        <!-- ============================================================== -->
@extends('theme')
@section('continu')
        <!-- Start right Content here -->
        <!-- ============================================================== -->

                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Basic Elements</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Basic Elements</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
<form action="/modifierAdmin" method="POST">
    @csrf
    <input type="hidden" value={{$data->id}} name="id"/>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div>
                                                <div>
                                                    <label for="basiInput" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" id="basiInput" placeholder="Nom" name="nom" value={{$data->nom}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">Login</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="login" name="login"value={{$data->login}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="placeholderInput" class="form-label">email</label>
                                                    <input type="email" class="form-control" id="placeholderInput" placeholder="Enter Email" name="email"value={{$data->email}}>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div>
                                                <button type="submit" class="btn btn-primary">Modifier

                                                </button>
                                            </div>

                                    </div>
                                    <div class="d-none code-view">                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                    <!--end row-->

                </div> <!-- container-fluid -->
@endsection