<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use DB;
use Auth;
use App\Category;
use App\Department;
use App\Subcatagory;
use App\ServiceType;
use App\Catagorylist;

class AjaxController extends Controller
{
	public function __construct()
    {
        // $this->middleware('auth'); 
    }
 
     public function getcatagoryBydepartment(Request $request)
    {
        // echo $request->item_catagory;
        // exit;
    // $Catagorylist= Catagorylist::where('department_name',$request->department_name)->get();
            $Catagorylist=DB::table('catagory_lists')
            ->join('categories', 'categories.id', '=', 'catagory_lists.catagory_name')
            ->where('department_name',$request->department_name)
            ->select('categories.catagory_name','catagory_lists.catagory_name as cat_id')
            ->groupBy('categories.catagory_name','catagory_lists.catagory_name')
            ->get();
        return json_encode($Catagorylist);

    }  

    public function getsubcatagoryBycatagory(Request $request)
    {
        // echo $request->item_catagory;
        // exit;
    // $Catagorylist= Catagorylist::where('department_name',$request->department_name)->get();
            $SubCatagorylist=DB::table('catagory_lists')
            ->join('subcatagories','subcatagories.id', '=', 'catagory_lists.subcatagory_name')
            ->where('catagory_name',$request->catagory_name)
            ->select('subcatagories.subcatagory_name','catagory_lists.subcatagory_name as subcat_id')
            ->groupBy('subcatagories.subcatagory_name','catagory_lists.subcatagory_name')
            ->get();
        return json_encode($SubCatagorylist);

    }

}
