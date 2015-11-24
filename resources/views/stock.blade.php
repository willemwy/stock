@extends('layouts.master')
@section('content')
    <div class="">
        <h1>Stock: {{$clinicName}}</h1>
        <div class="panel panel-default">
            <div class="panel-heading">All</div>
            <table class="table" id="clinics">
                <thead>
                <tr>
                    <th>Medication</th>
                    <th>Stock</th>
                    <th>Set Stock</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medicationStockLevels as $medicationStockLevel)
                    <tr>
                        <td>{{$medicationStockLevel->name}}</td>
                        <td id="stock_level_{{$medicationStockLevel->id}}">{{$medicationStockLevel->level}}</td>
                        <td>
                            <a data-stock-id="{{$medicationStockLevel->id}}" class="btn btn-primary btn-lg setstock">
                                Set Level
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="Edit Stock Levvel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="/stock/set" id="stockForm">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Stock Levvel</h4>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        {{ csrf_field() }}
                        <input type="hidden" name="stockId" id="stockId" value="">
                        <input name="level" id="level" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="save">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        $(document).ready(function(){
            $('#clinics').DataTable();

            $(".setstock").click(function () {
                //Set data
                $("#stockId").val($(this).data("stock-id"));
                //open modal
                $('#myModal').modal('show');
            });

            $("#stockForm").submit(function(){
                //get the url
                var url = $(this).attr("action");
                //show spinner
                $("#save").html('<i class="fa fa-cog fa-spin"></i>');
                //post data
                $.post(url, $(this).serialize()).done(function(){
                    //close modal
                    $('#myModal').modal('toggle');
                    $("#save").html('Save changes');
                    $("#stock_level_" + $("#stockId").val()).text($("#level").val());
                });
                return false;
            });

        });
    </script>
@stop
