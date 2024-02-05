@extends('layouts/master')
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_title_part">
                            <i class="fab fa-gg-circle"></i>All Todos
                        </div>  
                        <div class="col-md-4 card_button_part">
                            <a href="{{ route('todo.add') }}l" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Todos</a>
                        </div>  
                    </div>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped table-hover custom_table">
                        <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Work</th>
                            <th>Email</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Saidul Islam Uzzal</td>
                                <td>01710726035</td>
                                <td>uzzalbd.creative@gmail.com</td>
                                <td>uzzalbd</td>
                                <td>
                                    <div class="btn-group btn_group_manage" role="group">
                                    <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="edit-user.html">Update</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer">
                    <div class="btn-group" role="group" aria-label="Button group">
                        <button type="button" class="btn btn-sm btn-dark">Print</button>
                        <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                        <button type="button" class="btn btn-sm btn-dark">Excel</button>
                    </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection                