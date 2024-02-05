@extends('layouts/master')
@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <form method="post" action="">
                <div class="card mb-3">
                    <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 card_title_part">
                            <i class="fab fa-gg-circle"></i>User Registration
                        </div>  
                        <div class="col-md-4 card_button_part">
                            <a href="{{ route('todo.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Todo</a>
                        </div>  
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" id="" name="name">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Phone<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" id="" name="phone">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Work<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" id="" name="work">
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Email:</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control form_control" id="" name="email">
                        </div>
                        </div>
                        
                        <div class="row mb-3">
                        <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form_control" id="" name="photo">
                        </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark">SUBMIT</button>
                    </div>  
                </div>
            </form>
        </div>
    </div>
</div>
@endsection                
           