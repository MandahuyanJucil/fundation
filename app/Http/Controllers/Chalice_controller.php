<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Chalice;
use Illuminate\Support\Facades\Auth;
use App\Models\user;


class Chalice_controller extends Controller
{

    function search_chalice(Request $request){
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        $cild_data=Chalice::where('fname','like',"%$request->search%")->get();
        return view('chalice',['chalice'=>$cild_data]);;
    }


 
    function show(){

        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
       $data=Chalice::all();
        return view('chalice',['chalice'=>$data]);
    }

    function delete($id){
        $data=Chalice::find($id);
        $data->delete();
         return redirect('chalice');
     }

     function showdata($id){
        $data=Chalice::find($id);
         return view('chalice_edit_edit',['chalice'=>$data]);
     }

     function  view($id){
        $data=Chalice::find($id);
         return view('chalice_view',['chalice'=>$data]);
     }
    
   
    /*  function print($id){ 
        $data=Chalice::find($id);
         $pdf = Pdf::loadView('/print',compact('data'));
        return $pdf->download('print.pdf');
     } */

     function print($id)
     {
         $data = Chalice::find($id);
     
         // Validate if the image file exists
         $imagePath = storage_path('app/public/' . $data->image);
         if (!file_exists($imagePath)) {
             return response()->json(['error' => 'Image not found.'], 404);
         }
     
         // Pass the image as a base64 string for reliable embedding
         $data->base64Image = base64_encode(file_get_contents($imagePath));
     
         $pdf = Pdf::loadView('/print', compact('data'));
     
         return $pdf->download('print.pdf');
     }
     


     function chalice_edit(Request $request){
        $chalice= new Chalice();
        $chalice->YEARSTARTED= request('YEARSTARTED');
        $chalice->birthdate= request('birthdate');
        $chalice->age= request('age');
        $chalice->fname= request('fname');
        $chalice->status= request('status');
        $chalice->gender= request('gender');
        $chalice->address= request('address');
        $chalice->diagnosis= request('diagnosis');
        $chalice->religion= request('religion');
        $chalice->hobbies= request('hobbies');
        $chalice->mothername= request('mothername');
        $chalice->mother_occupation= request('mother_occupation');
        $chalice->fathername= request('fathername');
        $chalice->father_occupation= request('father_occupation');
        $chalice->Contact_Person= request('Contact_Person');
        $chalice->Relation= request('Relation');
        $chalice->Phone_Number= request('Phone_Number');
        $chalice->Running_Water= request('Running_Water');
        $chalice->Electricity= request('Electricity');
        $chalice->Latrine= request('Latrine');
        $chalice->Walls= request('Walls');
        $chalice->Floor= request('Floor');
        $chalice->No_of_Rooms= request('No_of_Rooms');
        $chalice->Child_history_of_Diagnosis= request('Child_history_of_Diagnosis');
        $chalice->Current_Condition_of_the_Child= request('Current_Condition_of_the_Child');
        $chalice->Additional_Notes= request('Additional_Notes');
        $chalice->Prepared_by= request('Prepared_by');
        $chalice->live_with= request('live_with');
        $chalice->brothers= request('brothers');
        $chalice->sisters= request('sisters'); 
        $chalice->school= request('school'); 
        $chalice->grade_lvl= request('grade_lvl');     
        $chalice->cooking_facility= request('cooking_facility');     
           
        
        if(!empty($request->image)){
            $path = $request->file('image')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $chalice->image=$fileName;
        }
        
        $chalice->save();
    
        return view('dasboard_admin');
     }

     function edit(Request $req){

            $data=Chalice::find($req->id);
            $data->birthdate=$req->birthdate;
            $data->YEARSTARTED=$req->YEARSTARTED;
            $data->age=$req->age;
            $data->fname=$req->fname;
            $data->status=$req->status;
            $data->gender=$req->gender;
            $data->address=$req->address;
            $data->diagnosis=$req->diagnosis;
            $data->religion=$req->religion;
            $data->hobbies=$req->hobbies;
            $data->mothername=$req->mothername;
            $data->mother_occupation=$req->mother_occupation;
            $data->fathername=$req->fathername;
            $data->father_occupation=$req->father_occupation;
         
            /* $req->validate([
                'image'=>'required|mimes:jpg,png,pdf|max:2048'
            ]);
 */                 
        if(!empty($req->image)){
            $path = $req->file('image')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $data->image=$fileName;
        }
           
            $data->save();
            return redirect('admin_dasboard');  
          
     }


}

