@extends('layouts.main') 
@section('title', 'Banking')
@section('admin.banking.list', 'active')
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
                            <h5>{{ __('Banking')}}</h5>
                            <span>{{ __('List of Banking')}}</span>
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
                                <a href="#">{{ __('Banking')}}</a>
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
                    <div class="card-header"><h3>{{ __('Banking')}}</h3></div>
                    <div class="card-body table-responsive">
                        <table class="table data-table">
                            <thead>
                                <tr>
                                    <th>{{ __('SL')}}</th>
                                    <th>{{ __('UID')}}</th>
                                    <th>{{ __('Balance')}}</th>
                                    <th>{{ __('Available D/W')}}</th>
                                    <th>{{ __('Exposure')}}</th>
                                    <th>{{ __('D/W')}}</th>
                                    <th>{{ __('Credit ref.')}}</th>
                                    <th>{{ __('Referance P/L')}}</th>
                                    <th>{{ __('Remark')}}</th>
                                    <th>{{ __('Log')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>22Akash</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>
                                        <div style="display: inline-flex">
                                            <button class="btn btn-sm btn-info">
                                                D
                                            </button>
                                            <button class="btn btn-sm btn-secondary ml-1">
                                                W
                                            </button>
        
                                            <input type="text" class="form-control ml-2" style="width: auto">
        
                                            <button class="btn btn-sm btn-success ml-2">
                                                Full
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="display: inline-flex"> 
                                            0.00
                                            <button class="btn btn-sm btn-success ml-2">
                                                Edit
                                            </button>
                                        </div>
                                    </td>
                                    <td>0.00</td>
                                    <td>
                                        <button class="badge badge-info">Remark</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary">
                                            Log
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1</td>
                                    <td>22Akash</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>
                                        <div style="display: inline-flex">
                                            <button class="btn btn-sm btn-info">
                                                D
                                            </button>
                                            <button class="btn btn-sm btn-secondary ml-1">
                                                W
                                            </button>
        
                                            <input type="text" class="form-control ml-2" style="width: auto">
        
                                            <button class="btn btn-sm btn-success ml-2">
                                                Full
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="display: inline-flex"> 
                                            0.00
                                            <button class="btn btn-sm btn-success ml-2">
                                                Edit
                                            </button>
                                        </div>
                                    </td>
                                    <td>0.00</td>
                                    <td>
                                        <button class="badge badge-info">Remark</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary">
                                            Log
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1</td>
                                    <td>22Akash</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>
                                        <div style="display: inline-flex">
                                            <button class="btn btn-sm btn-info">
                                                D
                                            </button>
                                            <button class="btn btn-sm btn-secondary ml-1">
                                                W
                                            </button>
        
                                            <input type="text" class="form-control ml-2" style="width: auto">
        
                                            <button class="btn btn-sm btn-success ml-2">
                                                Full
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="display: inline-flex"> 
                                            0.00
                                            <button class="btn btn-sm btn-success ml-2">
                                                Edit
                                            </button>
                                        </div>
                                    </td>
                                    <td>0.00</td>
                                    <td>
                                        <button class="badge badge-info">Remark</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary">
                                            Log
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1</td>
                                    <td>22Akash</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>0.00</td>
                                    <td>
                                        <div style="display: inline-flex">
                                            <button class="btn btn-sm btn-info">
                                                D
                                            </button>
                                            <button class="btn btn-sm btn-secondary ml-1">
                                                W
                                            </button>
        
                                            <input type="text" class="form-control ml-2" style="width: auto">
        
                                            <button class="btn btn-sm btn-success ml-2">
                                                Full
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <div style="display: inline-flex"> 
                                            0.00
                                            <button class="btn btn-sm btn-success ml-2">
                                                Edit
                                            </button>
                                        </div>
                                    </td>
                                    <td>0.00</td>
                                    <td>
                                        <button class="badge badge-info">Remark</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-secondary">
                                            Log
                                        </button>
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
