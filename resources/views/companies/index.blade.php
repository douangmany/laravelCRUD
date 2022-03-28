@extends("layouts.companies");
@section('content');
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Laravel 9 CRUD Example</h2>
            </div>
            <div>
                <a href="{{route('companies.create')}}" class="btn btn-success">Create Company</a>
            </div>
        </div>
    </div>
@endsection
