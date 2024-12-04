@extends('theme')
@section('continu')
<!-- ============================================================== -->

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
<form action="/ajoutPersonnel" method="POST">
    @csrf
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
                                                    <label for="labelInput" class="form-label">nom</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="nom" name="nom">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">email</label>
                                                    <input type="email" class="form-control" id="labelInput" placeholder="email" name="email">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">login</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="login" name="login">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">password</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="password" name="password">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">post</label>
                                                    <input type="text" class="form-control" id="labelInput" placeholder="post" name="post">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div>
                                                <div>
                                                    <label for="labelInput" class="form-label">salaire</label>
                                                    <input type="number" step="0.01" class="form-control" id="labelInput" placeholder="salaire" name="salaire">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div>
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                            </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                    <!--end row-->

@endsection
