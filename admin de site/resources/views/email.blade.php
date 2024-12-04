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
                                <h4 class="mb-sm-0">Basic Action</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Basic Action</a></li>
                                        <li class="breadcrumb-item active">Basic Action</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="justify-content-between d-flex align-items-center mt-3 mb-4">
                                <h5 class="mb-0 pb-1 text-decoration-underline">Basic Action</h5>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12">
                            <table class="body-wrap" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: transparent; margin: 0;">
                                <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
                                    <td class="container" width="600" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
                                        <div class="content" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                                            <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; margin: 0; border: none;">
                                                <tr style="font-family: 'Roboto', sans-serif; font-size: 14px; margin: 0;">
                                                    <td class="content-wrap" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; color: #495057; font-size: 14px; vertical-align: top; margin: 0;padding: 30px; box-shadow: 0 3px 15px rgba(30,32,37,.06); ;border-radius: 7px; background-color: #fff;" valign="top">
                                                        <meta itemprop="name" content="Confirm Email" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" />
                                                        <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">

                                                            <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 20px; line-height: 1.5; font-weight: 500; vertical-align: top; margin: 0; padding: 0 0 10px;" valign="top">
                                                                    {{$data->nom}}
                                                                </td>

                                                            </tr>
<td class="content-block" style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 16px; line-height: 1.5; font-weight: 400; vertical-align: top; margin: 0; padding: 0 0 10px;" valign="top">
                                                                    {{$data->email}}
                                                                </td>
                                                            <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="font-family: 'Roboto', sans-serif; color: #878a99; box-sizing: border-box; line-height: 1.5; font-size: 15px; vertical-align: top; margin: 0; padding: 0 0 10px;" valign="top">
                                                                    {{$data->sujet}}
                                                                </td>
                                                            </tr>
                                                            <tr style="font-family: 'Roboto', sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                                                <td class="content-block" style="font-family: 'Roboto', sans-serif; color: #878a99; box-sizing: border-box; line-height: 1.5; font-size: 15px; vertical-align: top; margin: 0; padding: 0 0 24px;" valign="top">
                                                                    {{$data->message}}
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <!-- end table -->
                        </div>
                        <!--end col-->
                    </div><!-- end row -->
               <!-- container-fluid -->
            <!-- End Page-content -->
@endsection
