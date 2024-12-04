
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


                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Striped columns</h4>

                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <label for="card-tables-showcode" class="form-label text-muted">Show Code</label>
                                            <input class="form-check-input code-switcher" type="checkbox" id="card-tables-showcode">
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted mb-4">Use .<code>table-striped-columns</code> to add zebra-striping to any table column.</p>

                                    <div class="live-preview">

                                        <div class="table-responsive table-card">
                                         @if (session("message"))

                                        <div class="alert alert-danger" role="alert">
                                            {{session("message")}}
                                          </div>

                                        @endif
                                          <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                                <thead class="table-light">
                                                    <tr>


                                                        <th scope="col">nom</th>
                                                        <th scope="col">email</th>
                                                        <th scope="col">sujet</th>
                                                        <th scope="col">message</th>
                                                        <th scope="col">lieu</th>
                                                        <th scope="col" style="width: 150px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach ($data as $items)
                                                    <tr>

                                                        <td>{{$items->nom}}</td>
                                                        <td>{{$items->email}}</td>
                                                        <td>{{$items->sujet}}</td>
                                                        <td>{{$items->message}}</td>
                                                        <td>{{$items->lieu}}</td>

                                                        <td>
                                                            <a href="/suppContact/{{$items->id}}" class="btn btn-danger">Supprimer</a>
                                                            <a href="/email/{{$items->id}}" class="btn btn-primary">affichier</a>
                                                        </td>

                                                    </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-none code-view">
<pre class="language-markup" style="height: 275px;"></pre>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <!--end row-->

@endsection


                <!-- container-fluid -->
