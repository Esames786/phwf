<?php

namespace App\Http\Controllers\phone_quote;

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

class NewQuote extends Controller
{

    public function add_about()
    {

        $about = aboutus::first();
        $about_detaill = about_detail::all();
        $team_member = team_member::all();



        if (Auth::check()) {

            if(!empty($about)){
                return view('main.phone_quote.admin.edit_about', compact('about','about_detaill','team_member'));

            }else{
                return view('main.phone_quote.admin.add_about');
            }


        } else {
            return redirect('/loginn/');
        }
    }

    public function upload_image(Request $request,$val,$folder){
        $about_banner = "";
        if ($request->hasFile($val)) {

            if ($request->file($val)->isValid()) {

                $file = $request->file($val);
                //$about_banner = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $about_banner = $file->getClientOriginalName();
                $request->file($val)->move("storage/$folder", $about_banner);
            }
        }
        return $about_banner;
    }

    public function save_about(Request $request)
    {
        //about introduction

        $about = aboutus::all();

        if (count($about) == 0) {
            $about = new aboutus;
            $about->user_id = Auth::user()->id;
            $about->about_banner = $this->upload_image($request,"about_banner","about_us");
            $about->about_title = $request->about_title;
            $about->fact_banner = $this->upload_image($request,"fact_banner","about_us");
            $about->facts_title = $request->facts_title;
            $about->facts_title2 = $request->facts_title2;
            $about->facts = $request->facts;
            $about->save();


        } else {
            $about = aboutus::truncate();
            $about = new aboutus;
            $about->user_id = Auth::user()->id;
            $about->about_banner = $this->upload_image($request,"about_banner","about_us");
            $about->about_title = $request->about_title;
            $about->fact_banner = $this->upload_image($request,"fact_banner","about_us");
            $about->facts_title = $request->facts_title;
            $about->facts_title2 = $request->facts_title2;
            $about->facts = $request->facts;
            $about->save();

        }
        //about details

        $about_detaill = about_detail::all();
        $count_about_detaill = count($request->detail_title);
        $i =0;

        if(count($about_detaill) == 0) {

            while($i < $count_about_detaill) {


                $about_detaill = new about_detail;
                $about_detaill->about_id = $about->id;
                $about_detaill->detail_title = $request->detail_title[$i];
                $about_detaill->details = $request->details[$i];
                $about_detaill->img_1 = $this->upload_image($request, "img_1.".$i, "about_detail");
                $about_detaill->save();
                $i++;

            }


        }else{
            $about_detaill = about_detail::truncate();

            while($i < $count_about_detaill) {


                $about_detaill = new about_detail;
                $about_detaill->about_id = $about->id;
                $about_detaill->detail_title = $request->detail_title[$i];
                $about_detaill->details = $request->details[$i];
                $about_detaill->img_1 = $this->upload_image($request, "img_1.".$i, "about_detail");
                $about_detaill->save();
                $i++;
            }
        }


        //team member

        $team_member = team_member::all();
        $count_team_member = count($request->team_intro);
        $j =0;

        if(count($team_member) == 0) {

            while($j < $count_team_member) {


                $team_member = new team_member;
                $team_member->team_intro = $request->team_intro;
                $team_member->name = $request->name[$j];
                $team_member->position = $request->position[$j];
                $team_member->fb_link = $request->fb_link[$j];
                $team_member->twitter_link = $request->twitter_link[$j];
                $team_member->team_img = $this->upload_image($request, "team_img.".$j, "team_member");
                $team_member->save();
                $j++;

            }


        }else{
            $team_member = team_member::truncate();

            while($j < $count_team_member) {


                $team_member = new team_member;
                $team_member->team_intro = $request->team_intro;
                $team_member->name = $request->name[$j];
                $team_member->position = $request->position[$j];
                $team_member->fb_link = $request->fb_link[$j];
                $team_member->twitter_link = $request->twitter_link[$j];
                $team_member->team_img = $this->upload_image($request, "team_img.".$j, "team_member");
                $team_member->save();
                $j++;
            }
        }


        Session::flash('flash_message', 'Data Successfully Saved');
        return "SUCCESS";

    }

    public function update_about(Request $request)
    {
        //about introduction

        $about2 = aboutus::all();

        if (count($about2) == 0) {


            $about = new aboutus;
            $about->user_id = Auth::user()->id;


            if(!empty($request->about_banner)){
                $about->about_banner = $this->upload_image($request,"about_banner","about_us");
            }else{
                $about->about_banner = $about2[0]['about_banner'];
            }



            $about->about_title = $request->about_title;




            if(!empty($request->fact_banner)) {
                $about->fact_banner = $this->upload_image($request, "fact_banner", "about_us");
            }else{
                $about->fact_banner = $about2[0]['fact_banner'];
            }



            $about->facts_title = $request->facts_title;
            $about->facts_title2 = $request->facts_title2;
            $about->facts = $request->facts;
            $about->save();


        } else {

            $about = aboutus::truncate();

            $about = new aboutus;
            $about->user_id = Auth::user()->id;


            if(!empty($request->about_banner)){
                $about->about_banner = $this->upload_image($request,"about_banner","about_us");
            }else{
                $about->about_banner = $about2[0]['about_banner'];
            }



            $about->about_title = $request->about_title;




            if(!empty($request->fact_banner)) {
                $about->fact_banner = $this->upload_image($request, "fact_banner", "about_us");
            }else{
                $about->fact_banner = $about2[0]['fact_banner'];
            }



            $about->facts_title = $request->facts_title;
            $about->facts_title2 = $request->facts_title2;
            $about->facts = $request->facts;
            $about->save();
        }
        //about details

        $about_detaill2 = about_detail::all();
        $count_about_detaill = count($request->detail_title);
        $i =0;

        if(count($about_detaill2) == 0) {

            while($i < $count_about_detaill) {


                $about_detaill = new about_detail;
                $about_detaill->about_id = $about->id;
                $about_detaill->detail_title = $request->detail_title[$i];
                $about_detaill->details = $request->details[$i];
                if(!empty($request->img_1[$i])) {
                    $about_detaill->img_1 = $this->upload_image($request, "img_1." . $i, "about_detail");
                }else{
                    $about_detaill->img_1 = $about_detaill2[$i]['img_1'];
                }
                $about_detaill->save();
                $i++;

            }


        }else{
            $about_detaill = about_detail::truncate();

            while($i < $count_about_detaill) {


                $about_detaill = new about_detail;
                $about_detaill->about_id = $about->id;
                $about_detaill->detail_title = $request->detail_title[$i];
                $about_detaill->details = $request->details[$i];
                if(!empty($request->img_1[$i])) {
                    $about_detaill->img_1 = $this->upload_image($request, "img_1." . $i, "about_detail");
                }else{
                    $about_detaill->img_1 = $about_detaill2[$i]['img_1'];
                }
                $about_detaill->save();
                $i++;
            }
        }


        //team member

        $team_member2 = team_member::all();
        $count_team_member = count($request->name);
        $j =0;

        if(count($team_member2) == 0) {

            while($j < $count_team_member) {


                $team_member = new team_member;
                $team_member->team_intro = $request->team_intro;
                $team_member->name = $request->name[$j];
                $team_member->position = $request->position[$j];
                $team_member->fb_link = $request->fb_link[$j];
                $team_member->twitter_link = $request->twitter_link[$j];
                if(!empty($request->team_img[$j])) {
                    $team_member->team_img = $this->upload_image($request, "team_img." . $j, "team_member");
                }else{
                    $team_member->team_img = $team_member2[$j]['team_img'];
                }
                $team_member->save();
                $j++;

            }


        }else{
            $team_member = team_member::truncate();

            while($j < $count_team_member) {


                $team_member = new team_member;
                $team_member->team_intro = $request->team_intro;
                $team_member->name = $request->name[$j];
                $team_member->position = $request->position[$j];
                $team_member->fb_link = $request->fb_link[$j];
                $team_member->twitter_link = $request->twitter_link[$j];
                if(!empty($request->team_img[$j])) {
                    $team_member->team_img = $this->upload_image($request, "team_img." . $j, "team_member");
                }else{
                    $team_member->team_img = $team_member2[$j]['team_img'];
                }
                $team_member->save();
                $j++;
            }
        }


        Session::flash('flash_message', 'Data Successfully Saved');
        return "SUCCESS";

    }

    public function add_contact(){


        if (Auth::check()) {

            $contact = contactus::first();

            if(!empty($contact)){
                return view('main.phone_quote.admin.edit_contact', compact('contact'));

            }else{
                return view('main.phone_quote.admin.add_contact');
            }


        } else {
            return redirect('/loginn/');
        }

    }

    public function save_contact(Request $request)
    {
        //about introduction

        $contact2 = contactus::first();

        if (empty($contact2)) {

            $contact = new contactus;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->address = $request->address;
            $contact->location = $request->location;
            $contact->fb_link = $request->fb_link;
            $contact->twitter_link = $request->twitter_link;
            $contact->linkdin_link = $request->linkdin_link;
            $contact->instagram_link = $request->instagram_link;
            $contact->youtube_link = $request->youtube_link;
            if(!empty($request->contact_banner)) {
                $contact->contact_banner = $this->upload_image($request, "contact_banner", "contact_us");
            }else{
                $contact->contact_banner = $contact2->contact_banner;
            }
            $contact->save();


        } else {
            $contact = contactus::truncate();
            $contact = new contactus;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->address = $request->address;
            $contact->location = $request->location;
            $contact->fb_link = $request->fb_link;
            $contact->twitter_link = $request->twitter_link;
            $contact->linkdin_link = $request->linkdin_link;
            $contact->instagram_link = $request->instagram_link;
            $contact->youtube_link = $request->youtube_link;
            if(!empty($request->contact_banner)) {
                $contact->contact_banner = $this->upload_image($request, "contact_banner", "contact_us");
            }else{
                $contact->contact_banner = $contact2->contact_banner;
            }
            $contact->save();

        }


        Session::flash('flash_message', 'Data Successfully Saved');
        return "SUCCESS";

    }


    public function add_home(){


    if (Auth::check()) {

        $home = home::all();

        if(!empty($home)){
            return view('main.phone_quote.admin.edit_home', compact('home'));

        }else{
            return view('main.phone_quote.admin.add_home');
        }


    } else {
        return redirect('/loginn/');
    }

}

    public function save_home(Request $request)
    {
        //about introduction

        $home2 = home::all();
        $count_home = count($request->banner_heading);
        $i =0;

        if(count($home2) == 0) {

            while($i < $count_home) {


                $home = new home;
                $home->banner_heading = $request->banner_heading[$i];
                $home->banner_text = $request->banner_text[$i];
                if(!empty($request->home_banner[$i])) {
                    $home->home_banner = $this->upload_image($request, "home_banner." . $i, "home");
                }else{
                    $home->home_banner = $home2[$i]['home_banner'];
                }
                $home->save();
                $i++;

            }


        }else{
            $home = home::truncate();

            while($i < $count_home) {


                $home = new home;
                $home->banner_heading = $request->banner_heading[$i];
                $home->banner_text = $request->banner_text[$i];
                if(!empty($request->home_banner[$i])) {
                    $home->home_banner = $this->upload_image($request, "home_banner." . $i, "home");
                }else{
                    $home->home_banner = $home2[$i]['home_banner'];
                }
                $home->save();
                $i++;
            }
        }



        Session::flash('flash_message', 'Data Successfully Saved');
        return "SUCCESS";

    }



    public function add_blog(){

        if (Auth::check()) {

            $blog = blog::all();



            if(count($blog) != 0){
                return view('main.phone_quote.admin.edit_blog', compact('blog'));

            }else{
                return view('main.phone_quote.admin.add_blog');
            }


        } else {
            return redirect('/loginn/');
        }

    }

    public function save_blog(Request $request)
    {
        //about introduction

        $blog2 = blog::all();
        $count_blog = count($request->blog_title);
        $i =0;

        if(count($blog2) == 0) {

            while($i < $count_blog) {


                $blog = new blog;


                if(!empty($request->blog_image[$i])) {
                    $blog->blog_image = $this->upload_image($request, "blog_image." . $i, "blog");
                }else{
                    $blog->blog_image = $blog2[$i]['blog_image'];
                }

                $blog->blog_title = $request->blog_title[$i];
                $blog->blog_text = $request->blog_text[$i];
                $blog->blog_text2 = $request->blog_text2[$i];
                $blog->blog_quote = $request->blog_quote[$i];
                $blog->save();
                $i++;

            }


        }else{
            $blog = blog::truncate();

            while($i < $count_blog) {


                $blog = new blog;


                if(!empty($request->blog_image[$i])) {
                    $blog->blog_image = $this->upload_image($request, "blog_image." . $i, "blog");
                }else{
                    $blog->blog_image = $blog2[$i]['blog_image'];
                }

                $blog->blog_title = $request->blog_title[$i];
                $blog->blog_text = $request->blog_text[$i];
                $blog->blog_text2 = $request->blog_text2[$i];
                $blog->blog_quote = $request->blog_quote[$i];
                $blog->save();
                $i++;
            }
        }



        Session::flash('flash_message', 'Data Successfully Saved');
        return "SUCCESS";

    }


    public function add_service(){

        if (Auth::check()) {

            $service = service::all();



            if(count($service) != 0){
                return view('main.phone_quote.admin.edit_service', compact('service'));

            }else{
                return view('main.phone_quote.admin.add_service');
            }


        } else {
            return redirect('/loginn/');
        }

    }

    public function save_service(Request $request)
    {
        //about introduction

        $service2 = service::all();
        $count_service = count($request->service_title);
        $i =0;

        if(count($service2) == 0) {

            while($i < $count_service) {


                $service = new service;


                if(!empty($request->service_image[$i])) {
                    $service->service_image = $this->upload_image($request, "service_image." . $i, "service");
                }else{
                    $service->service_image = $service2[$i]['service_image'];
                }

                $service->service_title = $request->service_title[$i];
                $service->service_text = $request->service_text[$i];
                $service->service_intro = $request->service_intro;
                $service->save();
                $i++;

            }


        }else{
            $service = service::truncate();

            while($i < $count_service) {


                $service = new service;


                if(!empty($request->service_image[$i])) {
                    $service->service_image = $this->upload_image($request, "service_image." . $i, "service");
                }else{
                    $service->service_image = $service2[$i]['service_image'];
                }

                $service->service_title = $request->service_title[$i];
                $service->service_text = $request->service_text[$i];
                $service->service_intro = $request->service_intro;
                $service->save();
                $i++;
            }
        }



        Session::flash('flash_message', 'Data Successfully Saved');
        return "SUCCESS";

    }
}
