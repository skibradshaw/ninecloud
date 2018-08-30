@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">9 Cloud Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover brands" >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Review Spreadsheet</th>
                                <th>Review Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clients as $c)
                            <tr>
                                <td>{{$c->name}}</td>
                                <td><i class="fas fa-excel" aria-hidden="true"></i>{{$c->review_spreadsheet or ''}} </td>
                                <td>{{$c->review_report or ''}}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                     </table>           
                </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
