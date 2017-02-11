<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

use Illuminate\Support\Facades\Input;

class EmployeesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    var $column_order = array(
        'employee_no',
        'first_name',
        'middle_name',
        'last_name',
        'status',
        'created_at',
        'updated_at'
    );

    var $column_search = array(
        'last_name',
        'first_name',
        'middle_name',
        'employee_no',
        'status'
    );

    var $order = array('id' => 'desc'); 

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ( 'employees.index' ); //->withData ( $data );
    }

    public function getEmployees(Request $request)
    {   
        //$data = Data::all ();
        //$data = Data::all()->take(10)->get();
        //$data = User::find(1)->employees()->take(3)->skip(2)->get();
        //$data = Data::find(1)->take(3)->skip(2)->get();

        $no     = $request->input('start');
        $length = $request->input('length');
        $search = $request->input('search');//$_POST['search']['value']
        //$where = array('status' => 1);
        //echo $search['value'];
        $searchClause = '';


        //Check the search value
        if(!empty($search['value']))
        {
            $searchKey = $search['value'];
            foreach($this->column_search as $column)
            {
                $searchClause .= "$column LIKE '%$searchKey%' OR ";
            }

            if(!empty($searchClause))
            {
                $searchClause = rtrim(trim($searchClause), "OR"); //Remove the OR
                $searchClause = "($searchClause)";
            }
        }

        if(!empty($searchClause))
        {
            // $data = Data::where($searchClause)
            $data = Data::whereRaw($searchClause)
                ->take($length)->skip($no)->get();
        }
        else
        {
            $data = Data::take($length)->skip($no)->get();
        }
        
        // $data = Data::where("status", "=", "1")->take($length)->skip($no)->get();
        $employee = array();
        foreach ($data as $emp) {
            $no++;
            $row = array();
            $row[] = $emp->employee_no;
            $row[] = $emp->first_name;
            $row[] = $emp->middle_name;
            $row[] = $emp->last_name;

            $status         = 'Inactive';
            $status_label   = 'label-warning';

            if( strtolower($emp->status) == '1' )
            {
                $status       = 'Active';
                $status_label = 'label-success';
            } 

            $row[] = '<span class="label ' . $status_label . '">' . $status . '</span>' ;
            $row[] = $emp->created_at;
            $row[] = $emp->updated_at;
            $actions = '<div class="btn-group">
                            <button class="btn btn-info btn-mini">Actions</button>
                            <button data-toggle="dropdown" class="btn btn-info btn-mini dropdown-toggle">
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="/employee/'. $emp->id .'">Edit</a></li>
                                <li><a href="javascript:void(0)" onclick="deleteRecord('.$emp->id.', \'' . $emp->first_name ." " . $emp->last_name .'\')">Delete</a></li>
                            </ul>
                        </div>
                        ';
            $row[] = $actions;

            $employee[] = $row;
        }

        $output = array(
                "draw" => $request->input('draw'),
                "recordsTotal" => Data::count(),//$this->advertiser->count_all(),
                "recordsFiltered" => Data::count(),//$this->advertiser->count_filtered(),
                "data" => $employee,
        );

        return response ()->json ( $output );
    }

    public function add()
    {
        return view('employees.add');
    }
}
