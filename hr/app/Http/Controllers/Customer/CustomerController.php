<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\role;
use Session;
use Redirect;
use Hash;
use Mail;
use Auth;
use DB;
//use BaconQrCode\Encoder\QrCode;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Vinkla\Hashids\Facades\Hashids;
use Milon\Barcode\DNS1D;

class CustomerController extends Controller
{

    public function index()
    {
        $title = " Add Job Employee Index";
        $data = Customer::with('filess')->where('status', 1)->orderBy('id', 'desc')->get();

        if (Auth::check()) {
            return view('main.customer.index', compact('data', 'title'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function employee_card($id)
    {
        $id = base64_decode($id);
        $data = Customer::find($id);
        $fileid = DB::table('files')->where('customer_id',$id)->where('filetypeId',1)->orderby('id','desc')->first();
//        $qr = QrCode::size(100)->generate($url);
         $qr =DNS1D::getBarcodeHTML($data->ref_number, 'C39');

        return view('main.customer.employee_card', compact('data','qr','fileid'));

    }


    public function deleted_customer()
    {


        $title = "Deleted Customers";
        $data = Customer::with('filess')->where('status', 0)->orderBy('id', 'desc')->get();
        if (Auth::check()) {
            return view('main.customer.index', compact('data', 'title'));
        } else {
            return redirect('/loginn/');
        }


    }

    public function create()
    {
//        $qr = QrCode::size(100)->generate('A basic example of Simple QR code!');

        $data = role::all();
        $filetypes = DB::table('upladfiletype')->get();

        if (Auth::check()) {
            return view('main.customer.create', compact('data', 'filetypes'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required'
        ]);

        $row = new Customer();
        $random = $row->id.date('his');
        $row->fill($request->except('_token', 'filetype','fileup'));
        $row->status = 1;
        $row->ref_number = $random;

        $row->save();


        $files = $request->file('fileup');
        if ($request->hasFile('fileup')) {
            $counter = 0;
            foreach ($files as $file) {
                $fileextension = $file->getClientOriginalExtension();
                $comments = "";
                if ($request['filetype'][$counter] == 9) {
                    $comments = $request['otherfiletext'][$counter];
                }
                $filedatasave = [
                    'customer_id' => $row->id,
                    'filetypeId' => $request['filetype'][$counter],
                    'filename' => $fileextension,
                    'comments' => $comments
                ];
                $fileid = DB::table('files')->insertGetId($filedatasave);
                $file->storeAs('uploadedfiles', $row->id . '_' . $fileid . '.' . $fileextension, ['disk' => 'public']);
                $counter = $counter + 1;
            }
        }
        return redirect(route('customer.index'));

    }

    public function edit($id)
    {
        $data2 = Customer::findOrFail($id);
        $data = role::all();
        $filetypes = DB::table('upladfiletype')->get();
        if (Auth::check()) {
            return view('main.customer.edit', compact('data', 'data2', 'filetypes'));
        } else {
            return redirect('/loginn/');
        }
    }

    public function update(Request $request, $id)
    {
//        dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required'
        ]);

        $row = Customer::findOrFail($id);
        $row->fill($request->except('_token','filetype'));
        $row->save();
        return redirect(route('customer.index'));
//
//        $files = $request->file('fileup');
//        if ($request->hasFile('fileup')) {
//            $counter = 0;
//            foreach ($files as $file) {
//                $fileextension = $file->getClientOriginalExtension();
//                $comments = "";
//                if ($request['filetype'][$counter] == 9) {
//                    $comments = $request['otherfiletext'][$counter];
//                }
//                $filedatasave = [
//                    'customer_id' => $row->id,
//                    'filetypeId' => $request['filetype'][$counter],
//                    'filename' => $fileextension,
//                    'comments' => $comments
//                ];
//
//                $fileid = DB::table('files')->insertGetId($filedatasave);
//                $file->storeAs('uploadedfiles', $row->id . '_' . $fileid . '.' . $fileextension, ['disk' => 'public']);
//                $counter = $counter + 1;
//            }
//        }

    }


    public function show($id)
    {


        $data2 = Customer::find($id);
        if (!empty($data2)) {
            $data2->status = 0;
            $data2->save();
        }

        return redirect(route('customer.index'));
    }

    public function reactive_customer($id)
    {

        $data2 = Customer::find($id);
        if (!empty($data2)) {
            $data2->status = 1;
            $data2->save();
        }

        return redirect(route('customer.index'));

    }


    public function view_doc($id)
    {

        $data = Customer::find($id);
        return view('main.customer.documents', compact('data'));


    }

    public function employee_form($id)
    {

        $id = base64_decode($id);
        $data = Customer::find($id);

        return view('main.customer.phw_form_html', compact('data'));

    }

}
