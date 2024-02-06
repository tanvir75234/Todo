@extends('layouts/master')
@section('content')
    <div class="row">
        <div class="col-md-12 ">
            <form method="post" action="{{ route('todo.insert') }}">
                @csrf
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
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>Success</strong>{{Session::get('success')}}
                                    </div>
                                @endif
                                @if(Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        <Strong>Opps</Strong>{{Session::get('error')}}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row mb-3 {{ $errors-> has('name') ? ' has-error' : ''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" id="" name="name" value="{{$data->name}}">
                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('name')}}</strong>
                                </span>
                            @endif    
                        </div>
                        </div>

                        <div class="row mb-3 {{ $errors-> has('phone') ? ' has-error' : ''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Phone<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" id="" name="phone">
                            @if($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('phone')}}</strong>
                                </span>
                            @endif    
                        </div>
                        </div>

                        <div class="row mb-3 {{ $errors-> has('work') ? ' has-error' : ''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Work<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" id="" name="work">
                            @if($errors->has('work'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('work')}}</strong>
                                </span>
                            @endif    
                        </div>
                        </div>

                        <div class="row mb-3 {{ $errors-> has('email') ? ' has-error' : ''}}">
                        <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form_control" id="" name="email">
                            @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif    
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
           