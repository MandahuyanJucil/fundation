<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Http\Request;
use App\Models\Event;

class Events_controller extends Controller
{



    function add_events(Request $req){
        $event= new Event();
        $event->event= request('event');
        $event->date= request('date');
        $event->location= request('location');
        $event->Information= request('Information');
        
        if(!empty($req->image)){
            $path = $req->file('image')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $event->image=$fileName;
        }

        if(!empty($req->image2)){
            $path = $req->file('image2')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $event->image2=$fileName;
        }

        if(!empty($req->image3)){
            $path = $req->file('image3')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $event->image3=$fileName;
        }

        if(!empty($req->image4)){
            $path = $req->file('image4')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $event->image4=$fileName;
        }
        $event->save();
        return view('dasboard_admin');

 }

    function event_search(Request $request){
        $cild_data=Event::where('event','like',"%$request->search%")->get();
        return view('events',['event'=>$cild_data]);
    }
            

    function show(){
       
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('events');
        }

      
        $data=Event::all();
        return view('events',['event'=>$data]);
       
     }

     function showforviewing(){
        $data=Event::all();
         return view('forviewing',['event'=>$data]);
     }

     function showgallery(){
        $data=Event::all();
         return view('gallery',['event'=>$data]);
     }
     function delete($id){
        $data=Event::find($id);
        $data->delete();
         return redirect('events');
     }

     function showdata($id){
        $data=Event::find($id);
         return view('events_edit',['event'=>$data]);
     }

  
     function edit(Request $req){
        $data=Event::find($req->id);
        $data->event=$req->event;
        $data->date=$req->date;
        $data->location=$req->location;
        if(!empty($req->image)){
            $path = $req->file('image')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $data->image=$fileName;
        }
        $data->save();
        return redirect('events');

 }


}
