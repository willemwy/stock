@extends('layouts.master')
@section('content')
    <div class="">
        <h1>Clinics</h1>
        <div class="panel panel-default">
            <div class="panel-heading">All</div>
            <table class="table" id="clinics">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Region</th>
                    <th>Manage Stock</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clinics as $clinic)
                    <tr>
                        <td>{{$clinic->name}}</td>
                        <td>{{$clinic->country}}</td>
                        <td>{{$clinic->region}}</td>
                        <td><a class="btn btn-primary" href="/stock/{{$clinic->id}}">Manage Stock</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script type="application/javascript">
        $(document).ready(function(){
            $('#clinics').DataTable();
        });
    </script>
@stop
