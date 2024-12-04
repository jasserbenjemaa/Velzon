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
@if (Auth::user()->role == 'admin')
<form action="/modifierTache" method="POST">
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

                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">Nom</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="nom" name="nom"value={{$data->nom}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">description</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="description" name="description"value={{$data->description}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">personnel_id</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="personnel_id" name="personnel_id"value={{$data->personnel_id}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">Date</label>
                                                    <input type="date" class="form-control" id="labelInput" placeholder="date" name="date"value={{$data->date}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">projet</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="projet" name="projet"value={{$data->projet}}>
                                                </div>
                                            </div>
                                            <!--end col-->


                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">state</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="state" name="state"value={{$data->state}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                          <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">avance</label>
                                                    <select class="form-control" id="labelInput" name="avance">
                                                        <option value="En attente">En attente</option>
                                                        <option value="En cours">En cours</option>
                                                        <option value="Terminé">Terminé</option>
                                                      </select>
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
    </from>
    @endif
                    <!-- end page title -->
@if (Auth::user()->role == 'personnel')
<form action="/modifierTache" method="POST">
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


                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">avance</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="state" name="state"value={{$data->state}}>
                                                </div>
                                            </div>
                                            <!--end col-->
                                          <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label"> state</label>
                                                    <select class="form-control" id="labelInput" name="avance">
                                                        <option value="En attente">En attente</option>
                                                        <option value="En cours">En cours</option>
                                                        <option value="Terminé">Terminé</option>
                                                      </select>
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
    </from>
    @endif
@endsection
