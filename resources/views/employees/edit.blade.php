@extends('layouts.app')

@section('content')
<div id="content-header">
    <h1>Employees</h1>
</div>
<div id="breadcrumb">
    <a href="javascript:void(0)" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    <a href="javascript:void(0)">Employees</a>
    <a href="javascript:void(0)" class="current">Edit</a>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-plus"></i>
                    </span>
                    <h5>Edit Employee </h5>
                </div>
                <div class="widget-content nopadding">  
                @if($employee->count())
                    @foreach($employee as $row)
                        <form class="form-horizontal" method="post" action="{{ url('processUpdate')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="id" value="{{ $row->id }}" />
                            <div class="control-group" style="padding: 5px;">
                                <div class="error_msg"></div>
                            </div>
                            <fieldset>
                                <legend style="padding-left: 15px;">Personal Details</legend>
                                <div class="control-group {{ $errors->has('first_name') ? 'error' : ''}}">                                
                                    <label class="control-label">First Name <span style="color: red;">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="first_name" id="first_name" value="{{ $row->first_name }}" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Middle Name</label>
                                    <div class="controls">
                                        <input type="text" name="middle_name" id="middle_name" value="{{ $row->middle_name }}"/>
                                    </div>
                                </div>
                                <div class="control-group {{ $errors->has('last_name') ? 'error' : ''}}">
                                    <label class="control-label">Last Name <span style="color: red;">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="last_name" id="last_name" required  value="{{ $row->last_name }}"/>
                                    </div>
                                </div>
                                <div class="control-group {{ $errors->has('email') ? 'error' : ''}}">
                                    <label class="control-label">Email Address <span style="color: red;">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email" placeholder="email@xxxx.xxx" required  value="{{ $row->email }}"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="status">Status</label>
                                    <div class="controls">
                                        <input type="checkbox" name="status" id="status" {{ $row->status ? 'checked' : '' }}/>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <input type="submit" id="btnsubmit" value="Submit" class="btn btn-primary" />
                                <a href="{{ url('/employees') }}" id="btncancel" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
