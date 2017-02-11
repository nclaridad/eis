@extends('layouts.app')

@section('content')
<div id="content-header">
    <h1>Employees</h1>
</div>
<div id="breadcrumb">
    <a href="javascript:void(0)" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="javascript:void(0)" class="current">Employees</a>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <a href="addEmployee"> <i class="icon-plus-sign"></i> Add </a>      
            <div class="widget-box">
                <div class="widget-content nopadding">                                                        
                    {{ csrf_field() }}
                    <div class="widget-title">                    
                        <h5> Employee List </h5>
                    </div>                    
                    <div class="widget-content nopadding">
                        <!-- <table class="table table-bordered table-striped table-hover data-table"> -->
                        <table class="table table-bordered table-striped table-hover data-table" id="employee">
                            <thead>
                                <tr>
                                    <th>Employee No</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
        $("#employee").css("width", "100%");

        table = $('#employee').DataTable({ 
           "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
                "t"+
                "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "scrollX": true,
            "autoWidth" : true,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                
            },
        
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "columnDefs": [
                    { 
                        "targets": [ 1 ], //first column / numbering column
                        "orderable": true, //set not orderable
                        "visible": true
                    },
                    { 
                        "targets": [ 2 ], //first column / numbering column
                        "orderable": true, //set not orderable
                        "visible": true
                    },
                    { 
                        "targets": [ 3 ], //first column / numbering column
                        "orderable": true, //set not orderable
                        "visible": true
                    },
                    { 
                        "targets": [ 4 ], //first column / numbering column
                        "orderable": true, //set not orderable
                        "visible": true,
                        "className": "dt-center"
                    },
                    { 
                        "targets": [ 5 ], //first column / numbering column
                        "orderable": true, //set not orderable
                        "visible": true                        
                    },
                    { 
                        "targets": [ 6 ], //first column / numbering column
                        "orderable": true, //set not orderable
                        "visible": true
                    },
                    { 
                        "targets": [ 7 ], //first column / numbering column
                        "orderable": false, //set not orderable
                        "visible": true
                    },
                ],
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "{{ url('/getEmployees') }}",
                "type": "POST",
                "data": function(d){
                    return $.extend( {}, d, {
                            '_token': $('input[name=_token]').val()
                      } );
                }
            },                   
     
        });

        //Trigger design for search
        $(".dt-toolbar").css("height", "40px");
    });
</script>
<style type="text/css">
    th.dt-center, td.dt-center { text-align: center; }
</style>
@endsection
