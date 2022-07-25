<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\role;
use Session;
use Redirect;
use Hash;
use Mail;
use Auth;
use DB;
use App\aboutus;
use App\about_detail;
use App\team_member;
use App\contactus;
use App\home;
use App\blog;
use App\service;
use Vinkla\Hashids\Facades\Hashids;


class front_view extends Controller
{

    public function about_us()
    {
        $team_member_title = "";
        $about = aboutus::first();
        $about_detaill = about_detail::all();

        $team_member = team_member::all();
        if(count($team_member) > 0) {
            $team_member_title = $team_member[0]['team_intro'];
        }

        return view('front.page.about', compact('about','about_detaill','team_member','team_member_title'));

    }

    public function contact_us()
    {

        $contact = contactus::first();

        return view('front.page.contact', compact('contact'));

    }

    public function laado()
    {
        $team_member_title = "";
        $service_intro = "";


        $home = home::all();
        $team_member = team_member::all();
        if(count($team_member) > 0) {
            $team_member_title = $team_member[0]['team_intro'];
        }
        $service = service::orderby('id','DESC')->get();
        if(count($service) > 0) {
            $service_intro = $service[0]['service_intro'];
        }

        $blog2 = blog::orderby('id','DESC')->paginate(3);
        return view('front.page.home', compact('home','team_member','team_member_title','blog2','service','service_intro'));

    }

    public function blog()
    {

        $blog = blog::orderby('id','DESC')->get();

        return view('front.page.blog', compact('blog'));

    }

    public function blog_detail($id)
    {


        $blog = blog::where('id','=',$id)->orderby('id','DESC')->first();
        $blog2 = blog::orderby('id','DESC')->get();

        return view('front.page.blog_detail', compact('blog','blog2'));

    }

    public function service()
    {

        $service = service::orderby('id','DESC')->get();

        return view('front.page.service', compact('service'));

    }
}
