@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('panel/style/custom.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">کاربران</h3>
                </div>
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="ID: activate to sort column ascending">ID
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="نام و نام خانوادگی: activate to sort column descending">نام و
                                                نام خانوادگی</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Email: activate to sort column ascending">Email
                                            </th>
                                            <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                                aria-label="Action: activate to sort column ascending">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <div class="row">
                                                        <form id="delete" action="{{ route('admin.user.delete',$user->id) }}" method="POST"
                                                            onsubmit="return confirm('Are you sure?');">
                                                            @method('DELETE')
                                                            @csrf
                                                            <!-- @method_field('DELETE') -->
                                                            <!-- @method('DELETE') -->
                                                            <div 
                                                                role="button" class="fa fa-trash-o cutom-btn-small red" 
                                                                onclick="document.getElementById('delete').submit()">
                                                            </div>
                                                        </form>
                                                        <form id="edit" action="{{ route('admin.user.update-form',$user->id) }}" method="PUT">
                                                            @csrf
                                                            @method('PUT')

                                                            <div 
                                                                role="button" class=".btn.btn-app fa fa-edit cutom-btn-small blue" 
                                                                onclick="document.getElementById('edit').submit()">
                                                            </div>
                                                        </form>
                                                        <form id="info" action="{{ route('admin.user.info',$user->id) }}" method="PUT">
                                                            @csrf
                                                            @method('PUT')

                                                            <div 
                                                                role="button" class=".btn.btn-app fa fa-edit cutom-btn-small blue" 
                                                                onclick="document.getElementById('edit').submit()">
                                                            </div>
                                                        </form>
                                                        <a class= href=""></a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="row">
                                                <div class="col-sm-12 col-md-5"></div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="example2_previous"><a
                                                                    href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                                                    class="page-link">قبلی</a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="example2"
                                                                    data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                                    data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                                    data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                                    data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                                    data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="example2"
                                                                    data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                            <li class="paginate_button page-item next" id="example2_next"><a href="#"
                                                                    aria-controls="example2" data-dt-idx="7" tabindex="0"
                                                                    class="page-link">بعدی</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> -->
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
@endsection