<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\DatatableGrid;
use Illuminate\Http\Request;

class UserCommonController extends Controller{

    use DatatableGrid;
    
    public function __construct()
    {
        $this->_getSection();
    } 

    private function _getSection(){
        $currentSegment = request()->segment(2);
        $this->data['menu'] = $currentSegment;
        $this->data['current_segment'] = $currentSegment;
            
        switch ($currentSegment) {
            case 'permission_management':
                $this->data['title'] = 'Sub Admin';
                $this->data['pageView'] = 'admin.sub_admin';
                break;
            
            default:
               $this->data['title'] = 'User';
               $this->data['pageView'] = 'admin.user';
                break;
        }
    }

    public function index(Request $request)
    {
        return view($this->data['pageView'].'_list',$this->data);
    }

   


}