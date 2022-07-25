<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Expense;
use App\role;
use Session;
use Redirect;
use Hash;
use Mail;
use Auth;
use DB;
use Vinkla\Hashids\Facades\Hashids;

class ExpenseController extends Controller
{

    public function index()
    {
        $data = Expense::with('user')
            ->when(request('user_id'), function ($query){
                $query->where('user_id',request('user_id'));
            })
            ->when(request('from_date'), function ($query){
                $query->where('date','>=',request('from_date'))
                ->when(request('to_date'), function ($sub_query){
                    $sub_query->where('date','<=',request('to_date'));
                });
            })
            ->orderBy('id', 'desc')->get();
        $user = User::get();
        if (Auth::check()) {
            return view('main.expense.index', compact('data','user'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function create()
    {
        $data = role::all();
        $user = User::get();
        if (Auth::check()) {
            return view('main.expense.create', compact('data','user'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required',
        ]);

        foreach ($request->user_id as $key => $user) {
            $row = new Expense();
            $row->user_id = $user;
            $row->date = $request->date[$key];
            $row->title = $request->title[$key];
            $row->amount = $request->amount[$key];
            $row->save();
        }
        return redirect(route('expense.index'));
    }

    public function edit($id)
    {
        $data2 = Expense::findOrFail($id);
        $user = User::get();
        $data = role::all();
        if (Auth::check()) {
            return view('main.expense.edit', compact('data','data2','user'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'amount' => 'required',
        ]);
        foreach ($request->user_id as $key => $user) {
            $row = Expense::findOrFail($id);
            $row->user_id = $user;
            $row->date = $request->date[$key];
            $row->title = $request->title[$key];
            $row->amount = $request->amount[$key];
            $row->save();
        }
        return redirect(route('expense.index'));
    }
}
