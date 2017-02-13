<?php

namespace App\Repositories;

use App\Models\Employees;

class EmployeesRepository extends BaseRepository
{
    /**
     * Create a new CommentRepository instance.
     *
     * @param  \App\Models\Comment $comment
     * @return void
     */
    public function __construct(Employees $employee)
    {
        $this->model = $employee;
    }

    
    /**
     * Store a employee.
     *
     * @param  array $inputs
     * @return void
     */
    public function store($inputs)
    {
        $empNo    = $this->getEmployeNo();
        $this->model->last_name     = $inputs['last_name'];
        $this->model->first_name    = $inputs['first_name'];
        $this->model->middle_name   = $inputs['middle_name'];
        $this->model->email         = $inputs['email'];        
        $this->model->employee_no   = $empNo;
        $this->model->status        = !empty($inputs['status']) ? 1 : 0;
        $empNo    = $this->model->save();
        //return $empNo;
    }
    /**
     * Update a comment.
     *
     * @param  string $content
     * @param  int    $id
     * @return void
     */
    public function updateEmployee($inputs)
    {
        $emp = $this->model->find($inputs['id']);
        $emp->last_name     = $inputs['last_name'];
        $emp->first_name    = $inputs['first_name'];
        $emp->middle_name   = $inputs['middle_name'];
        $emp->email         = $inputs['email'];
        $emp->status        = ($inputs['status']) ? 1 : 0;
        $emp->save();
    }
    /**
     * Get employee number
     *
     * @return employee number
     */
    private function getEmployeNo()
    {
        $date = date("Y-m");
        $count = $this->model->where("created_at", "LIKE", "%$date%")->count();
        //YYMMXXX -> 1702031
        $code = str_pad($count + 1, 3, "0", STR_PAD_LEFT);    
        $empNo = date("ym").$code; 
        return $empNo;
    }
    /**
     * Get employee collection.
     *
     * @param  int  $id
     * @return array
     */
    public function getById($id)
    {
        return $this->model->where("id", "=", "$id")->get();
    }

    /**
     * Delete employee collection.
     *
     * @param  int  $id
     * @return void
     */
    public function deleteRecord($inputs)
    {
        $emp = $this->model->find($inputs['id']);
        $emp->delete();
    }
}
