@extends('firebase.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>add
                        <a href="{{ url('contacts') }}" class="btn btn-sm btn-primary float-end"> add</a>
                    </h4>
                </div>
                <div class="card-body">
<form action="{{ url('add-contact') }}" method="POST">
    @csrf 
    <div class="form-group mb-3">
        <label for="">fname</label>
        <input type="text" name="first_name" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">lname</label>
        <input type="text" name="last_name" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">phone</label>
        <input type="text" name="phone" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group mb-3">
       <button type="submit" class="btn btn-primary">save</button>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection