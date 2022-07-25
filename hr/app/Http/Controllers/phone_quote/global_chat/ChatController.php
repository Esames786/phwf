<?php

namespace App\Http\Controllers\phone_quote\global_chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\chat;
use App\role;
use App\zipcodes;
use Session;
use Redirect;
use Hash;
use Mail;
use Auth;
use DB;
use Vinkla\Hashids\Facades\Hashids;

class ChatController extends Controller
{
    public function index()
    {
        $data = User::where('id', '!=', auth()->id())->get();
        return view('main.phone_quote.global_chat.index', compact('data'));

    }

    public function get_chat(Request $request)
    {
        $data = chat::where([
            ['fromuserId', '=', $request->touserId]])->orwhere([
                ['touserId', '=', $request->touserId]])->join('users', 'chats.fromuserId', '=', 'users.id')
            ->select('chats.*', 'users.name as name')
            ->orderby('chats.created_at')
            ->get();


        return view('main.phone_quote.global_chat.show_chat',compact('data'));
    }

    public function save_chat(Request $request)
    {


        $chat = new chat();
        $chat->touserId = $request->to_user_id;
        $chat->fromuserId = Auth::user()->id;
        $chat->description = $request->description;
        $chat->save();
        redirect('/chats');
        return "SUCCESS";
    }

}
