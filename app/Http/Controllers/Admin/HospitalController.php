<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Traits\DatatableGrid;
use Illuminate\Http\Request;

class HospitalController extends UserCommonController
{
    use DatatableGrid;
    
    public function __construct()
    {
        parent::__construct();
        $this->data['title'] = 'Hospital';
        $this->data['pageView'] = 'admin.hospital';
    } 



    public function index(Request $request)
    {
        return view($this->data['pageView'].'_list',$this->data);
    }

    public function grid(Request $request){
        $fields = array(
            "id",
            "name",	
            "contact_number",
            "email"	,
            "id_proof"	,
          );
    	$this->columns =$fields;
        $this->searchColumns =$fields;
    	$this->setOrderBy();  	
    	$this->setSearchCondition();
    	
        $this->query = User::whereHas('roles',function($query){
            $query->whereIn('name',array(config('application.hospital_role')));
        });        
    	$output = $this->getGridData();
        if(!empty($output['recordsTotal']) && $output['recordsTotal']>0 && !empty($output['data'])){
        	$result = $output['data'];
            $output ['data'] = array();
            
            foreach ($result as $row){
                $editLink = url("administrator/patient/edit/$row->id");
    			$action = "<a href='$editLink' class='btn btn-primary text-white'><i class='fa fa-pencil'></i></a> ";
    			$action .= "<a data_id='$row->id' href='#' class='btn btn-danger deleteUser text-white'><i class='fa fa-trash'></i></a>";
    			$appointmentLink = "<a data_id='$row->id' href='#' >Click Here</a>";
                
                $output ['data'] [] = array (
	    			$row->id,
	    			$row->name,
	    			$row->contact_number,
	    			$appointmentLink,
	    			$appointmentLink,
	    			$appointmentLink,
	    			'Free',
	    			0,
	    			0,
	    			0,
	    			$action
	    		);
	    	}
        }
        
        return response()->json($output);  
    }


        

}