@extends('layouts.main') 
@section('title', 'Downline list')
@section('admin.downline.list', 'active')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/DataTables/datatables.min.css') }}">
    @endpush

    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        {{-- <i class="ik ik-users bg-blue"></i> --}}
                        <div class="d-inline">
                            <h5>{{ __('Downline list')}}</h5>
                            <span>{{ __('List of Downline list')}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Downline list')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            @include('include.message')
            <!-- end message area-->
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-header"><h3>{{ __('Downline list')}}</h3></div>
                    <div class="card-body table-responsive">
                        <table class="table data-table">
                            <thead>
                                <tr>
                                    <th>{{ __('Account')}}</th>
                                    <th>{{ __('Credit Ref')}}</th>
                                    <th>{{ __('Balance')}}</th>
                                    <th>{{ __('Exposure')}}</th>
                                    <th>{{ __('Avail. Bal.')}}</th>
                                    <th>{{ __('Exposer lmt')}}</th>
                                    <th>{{ __('Ref P/L')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge badge-warning">PL</span>22Akash</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1,000</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                    <td>
                                        <div class="table-actions btn-group">
                                            <button class="btn btn-sm btn-danger">
                                               P2P
                                            </button>
                                            <button class="btn btn-sm btn-info">
                                                <i class="ik ik-chevrons-up f-16 text-white"></i>
                                            </button>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="ik ik-clock f-16 text-white"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning">
                                                <i class="ik ik-settings f-16 text-white"></i>
                                            </button>
                                            <button class="btn btn-sm btn-success">
                                                <i class="ik ik-user f-16 text-white"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span class="badge badge-warning">PL</span>22Akash</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>1,000</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td><span class="badge badge-danger">Inactive</span></td>
                                    <td>
                                        <div class="table-actions btn-group">
                                            <button class="btn btn-sm btn-danger">
                                               P2P
                                            </button>
                                            <button class="btn btn-sm btn-info">
                                                <i class="ik ik-chevrons-up f-16 text-white"></i>
                                            </button>
                                            <button class="btn btn-sm btn-primary">
                                                <i class="ik ik-clock f-16 text-white"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning">
                                                <i class="ik ik-settings f-16 text-white"></i>
                                            </button>
                                            <button class="btn btn-sm btn-success">
                                                <i class="ik ik-user f-16 text-white"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    @push('script')
    <script src="{{ asset('plugins/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
    <!--server side users table script-->
    <script src="{{ asset('js/custom.js') }}"></script>

     <script>
         $(document).ready( function () {
            $('.data-table').DataTable();
        } );
     </script>
    @endpush
@endsection
