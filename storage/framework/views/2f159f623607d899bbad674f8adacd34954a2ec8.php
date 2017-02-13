<?php $__env->startSection('content'); ?>
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
                    <?php echo e(csrf_field()); ?>

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
                "<'fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6 dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi'p>>",
            "scrollX": true,
            "autoWidth" : true,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'                
            },
            "sPaginationType": "full_numbers", 
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
                "url": "<?php echo e(url('/getEmployees')); ?>",
                "type": "POST",
                "data": function(d){
                    return $.extend( {}, d, {
                            '_token': $('input[name=_token]').val()
                      } );
                }
            }         
        
        });

        //Trigger design for search
        $(".dt-toolbar").css("height", "40px");

    });

    function deleteRecord(empId, name){
        if(confirm("Are you sure you want to delete " + name + "." )){
            $.ajax(          
            {
                type    : "POST",
                url     : "<?php echo e(url('deleteRecord')); ?>",
                timeout : (300*1000),
                data    :{
                    id      : empId,
                    _token  : $('input[name=_token]').val()
                },
                success : function(res_data)
                {
                    var json = $.parseJSON(res_data);
                    
                    // if(json.length > 0){
                    // }

                    $('#employee').DataTable().ajax.reload(); 
                },
                error:function(objAJAXRequest, strError)
                {
                    //_overlay("hide");
                    //jAlert("error", '['+ 'INV0002' + '] ' + 'Internal error. Please contact administrator.', "System error");
                    //alert('Internal error. Please contact administrator.');
                }
            })
        }
    }

</script>
<style type="text/css">
    th.dt-center, td.dt-center { text-align: center; }
    .dataTables_filter { margin: 4px 8px 2px 2px; }
    .col-sm-6 { width: 45%; position: relative; min-height: 1px; padding-left: 13px; float:left;}
    .dataTables_paginate .paginate_button, .pagination.alternate li a {
        font-size: 12px;
        padding: 4px 10px !important;
        border-style: solid;
        border-width: 1px;
        border-color: #dddddd #dddddd #cccccc;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        display: inline-block;
        line-height: 16px;
        cursor: pointer;
    }
    /*.dataTables_paginate span .ui-state-disabled, .pagination.alternate li.active a*/
    a.paginate_button.current { background-color: #414141 !important; color: #ffffff !important; text-shadow: 0 1px 0 #ffffff; }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>