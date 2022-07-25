<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Mail\SendCodeMail;
use Illuminate\Http\Request;
use App\User;
use App\role;
use App\Customer;
use App\Expense;
use App\Package;
use Session;
use Redirect;
use Hash;
use Mail;
use Auth;
use Vinkla\Hashids\Facades\Hashids;

class DashboardController extends Controller
{
    public function getDashboard()
    {
        if (Auth::check()) {

            $permission = explode(',', auth::user()->emp_access_phone);

            $customer_count = Customer::where('status',1)->count();

            $total = 0;

            return view('main.dashboard.index', compact('total'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function download_agreement()
    {
        if (Auth::check()) {
            $headers = array(
                'Content-Type: application/pdf',
            );
            return Response::download(url('assets/images/aggreement/Asia_Agreement_2022.pdf'), 'Agreement.pdf', $headers);
        }
    }

    public function add_employee()
    {

        $data = role::all();

        if (Auth::check()) {
            return view('main.register.index', compact('data'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function view_employee()
    {

        $data = User::orderBy('id', 'desc')->get();
        if (Auth::check()) {
            return view('main.register.view_register', compact('data'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function check_expense($id)
    {


        $user = User::orderBy('id', 'desc')->get();
        $data = Expense::where('user_id', $id)->get();
        if (Auth::check()) {
            return view('main.expense.index', compact('data', 'user'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function edit_employee($id)
    {

        $data2 = User::where('id', $id)->first();

        $data = role::all();

        if (Auth::check()) {
            return view('main.register.edit_employee', compact('data', 'data2'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function user_active($id)
    {


        if (Auth::check()) {

            $modal = User::find($id);
            $modal->status = 1;
            $modal->save();
            Session::flash('flash_message', 'Employee Data Successfully Saved');

            return redirect('/view_employee/');

        } else {
            return redirect('/loginn/');
        }

    }

    public function user_deactive($id)
    {

        if (Auth::check()) {

            $modal = User::find($id);
            $modal->status = 0;
            $modal->save();
            Session::flash('flash_message', 'Employee Data Successfully Saved');
            return redirect('/view_employee/');

        } else {
            return redirect('/loginn/');
        }

    }

    public function save_employee(Request $request)
    {


        $total_emp_access_phone = "";


        $emp_access_phone = $request->emp_access_phone;


        // dd($request->emp_access_phone);

        if ($request->emp_access_phone <> null) {
            $total_emp_access_phone = implode(",", $emp_access_phone);
        }


        $usrChk = User::where('email', $request->email)->first();
        if ($usrChk == '') {
            $full_name = $request->first_name;
            $emp = new User();
            $emp->name = $full_name;
            $emp->email = $request->email;
            $emp->password = Hash::make($request->password);
            $emp->role = $request->job_type;
            $emp->phone = $request->phone_number;
            $emp->address = $request->address;
            $emp->status = 1;
            $emp->emp_access_phone = $total_emp_access_phone;
            $emp->save();

            redirect('/view_employee/');

            Session::flash('flash_message', 'Employee Data Successfully Saved');

            return "SUCCESS";
        } else {
            Session::flash('flash_message2', 'Email Already Exist');
            return "ALREADY EXIST";
        }

    }

    public function update_employee(Request $request)
    {
        $total_emp_access_phone = "";


        $emp_access_phone = $request->emp_access_phone;


        if ($request->emp_access_phone <> null) {
            $total_emp_access_phone = implode(",", $emp_access_phone);
        }


        $emp = User::find($request->user_id);
        $emp->name = $request->first_name;
        $emp->email = $request->email;
        if ($request->password) {
            $emp->password = Hash::make($request->password);
        }
        $emp->role = $request->job_type;
        $emp->phone = $request->phone_number;
        $emp->address = $request->address;
        $emp->status = 1;
        $emp->emp_access_phone = $total_emp_access_phone;
        $emp->save();

        redirect('/view_employee/');

        Session::flash('flash_message', 'Employee Data Successfully Saved');

        return "SUCCESS";


    }


}
