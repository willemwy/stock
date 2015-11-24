@extends('layouts.master')
@section('content')
    <div class="">
        <h1>Clinics</h1>
        <div class="panel panel-default">
            <div class="panel-heading">All</div>
            <table class="table" id="clinics">
                <thead>
                <tr>
                    <th>Clinic</th>
                    <th>Medecine</th>
                    <th>Current Level</th>
                    <th>Manage Stock</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clinics as $clinic)
                    <tr>
                        <td>{{$clinic->name}}</td>
                        <td>{{$clinic->med_name}}</td>
                        <td>{{$clinic->level}}</td>
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
