@extends('firebase.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h4> {{ session('status') }}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>test
                        <a href="{{ url('add-contact') }}" class="btn btn-sm btn-primary float-end"> add</a>
                    </h4>
                </div>
                <div class="card-body">
<table class="table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>fn</th>
            <th>ln</th>
            <th>phone</th>
            <th>email</th>
            <th>edit</th>
            <th>dellet</th>

        </tr>
    </thead>
    <tbody>
        @forelse($reference as $key => $item)
        <tr>
        <td>
{{ $key }}
            </td>
            <td>
{{ $item['fname'] }}
            </td>
            <td>
{{ $item['lname'] }}
            </td>
            <td>
{{ $item['phone'] }}
            </td>
            <td>
{{ $item['email'] }}
            </td>
            <td>
<a href="" class="btn btn-sm btn-success">edit</a>
            </td>
            <td>
<a href="" class="btn btn-sm btn-danger">delete</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">
bye
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection