<?php
namespace App\Http\Controllers;
use App\Product;
use App\Department;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class WelcomeController extends Controller 
{  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $Select_department = DB::table('products')->join('departments','departments.id','products.department_name')->select('departments.department_name')->groupBy('departments.department_name')->get();

        // dd($Select_department);

        $Product = Product::all();
        $Department = Department::all();
        

        return view('welcome')->with('Product',$Product)->with('Department',$Department)->with('Select_department',$Select_department);
    }

}
 