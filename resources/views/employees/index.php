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
            <a href="employees/add"> <i class="icon-plus-sign"></i> Add </a>      
            <div class="widget-box">
                <div class="widget-content nopadding">                                                        
                    <div class="widget-title">                    
                        <h5> Employee List </h5>
                    </div>                    
                    <div class="widget-content nopadding">                        
                        <table class="table table-bordered table-striped table-hover data-table">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Category</th>
                                    <th>Item Name</th>
                                    <th>Date Encoded</th>
                                    <th>Item Type</th>
                                    <th>Unit</th>
                                    <th>Status</th>
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
@endsection
