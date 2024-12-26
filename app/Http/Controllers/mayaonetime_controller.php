<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Chalice;
use App\Models\Mayashope_onetime;
use App\Models\Mayashope;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;



class mayaonetime_controller extends Controller
{
    function mayaupload(Request $req){
        $maya= new Mayashope_onetime();
        $maya->guardian= request('guardian');
        $maya->contact_details= request('contact_details');
        $maya->procedure= request('procedure');
        $maya->no_of_surgery_done= request('no_of_surgery_done');
        $maya->date_of_admission= request('date_of_admission');
        $maya->date_of_surgery= request('date_of_surgery');
        $maya->anesthesislologist= request('anesthesislologist');
        $maya->additional_doctors= request('additional_doctors');
        $maya->post_op_Notes= request('post_op_Notes');
        $maya->post_op_Notes= request('post_op_Notes');
        $maya->Admin_notes= request('Admin_notes');
        $maya->additional_notes= request('additional_notes');
        $maya->child_name= request('child_name');
        $maya->address= request('address');
        $maya->birthday= request('birthday');
        $maya->age= request('age');
        $maya->phill_no= request('phill_no');
        $maya->before_procedure_dianosis= request('before_procedure_dianosis');
        $maya->date_of_discharge= request('date_of_discharge');
        $maya->surgeon= request('surgeon');
        $maya->description= request('description');
        $maya->amount= request('amount');
        $maya->paid_by= request('paid_by');
        $maya->remarks= request('remarks');
        $maya->description2= request('description2');
        $maya->amount2= request('amount2');
        $maya->paid_by2= request('paid_by2');
        $maya->remarks2= request('remarks2');
        $maya->description3= request('description3');
        $maya->amount3= request('amount3');
        $maya->paid_by3= request('paid_by3');
        $maya->remarks3= request('remarks3');
        $maya->description4= request('description4');
        $maya->amount4= request('amount4');
        $maya->paid_by4= request('paid_by4');
        $maya->remarks4= request('remarks4');
        $maya->description5= request('description5');
        $maya->amount5= request('amount5');
        $maya->paid_by5= request('paid_by5');
        $maya->remarks5= request('remarks5');
        $maya->description6= request('description6');
        $maya->amount6= request('amount6');
        $maya->paid_by6= request('paid_by6');
        $maya->remarks6= request('remarks6');
        $maya->summary= request('summary');
        
              
        if(!empty($req->image)){
            $path = $req->file('image')->store('public');
            $fileNameArray=explode('/',$path);
            $fileName=$fileNameArray[1];
            $maya->image=$fileName;
        }
   
        $maya->save();
        return view('dasboard_admin');

 }


 public function dasboard_show()
 {

    
     if (Auth::check()) {
         $user = Auth::user();
 
         // CHECK IF THE USER IS STAFF
         if (in_array($user->account_type, ['staff'])) {
             return redirect()->route('mayaform');
         }
     } else {
         return redirect()->route('admin_dasboard');
     }
 
     // RETRIEVE DATA FOR THE VIEW
     $mayashopeData = Mayashope_onetime::all();
     $chaliceData = Chalice::all();
     $mayashope = Mayashope::all();
     $event = Event::all();
     
     // COUNT RECORDS
     $mayashopeOnetimeCount = Mayashope_onetime::count(); // Renamed to avoid overwriting
     $chaliceCount = Chalice::count();
     $mayashopeCount = Mayashope::count(); // Corrected this line to match the data variable
     $eventCount = Event::count();
 

     $createdDates = Mayashope_onetime::pluck('created_at');
     $updatedDates = Mayashope_onetime::pluck('updated_at');
 
    


     // PASS DATA AND COUNTS TO THE VIEW
     return view('admin_dasboard', [
         'mayashope_onrtime_record' => $mayashopeData,
         'chalice' => $chaliceData,
         'mayashope' =>  $mayashope,
         'event' =>  $event,
         'mayashopeOnetimeCount' => $mayashopeOnetimeCount, // Use the renamed variable here
         'chaliceCount' => $chaliceCount,
         'mayashopeCount' => $mayashopeCount,
         'eventCount' => $eventCount,
         'createdDates' => $createdDates,
         'updatedDates' => $updatedDates, // Add the event count to pass to the view
     ]);
 }
 








 function search_mayaonetime(Request $request){
    $cild_data=Mayashope_onetime::where('child_name','like',"%$request->search%")->get();
    return view('mayashope_onrtime_record',['mayashope_onrtime_record'=>$cild_data]);
}

function  view($id){
        $data=Mayashope_onetime::find($id);
         return view('mayashope_onrtime_record_view',['maya'=>$data]);
     }
    

 function show(){

    if (Auth::check()) {
        $user = Auth::user();

        // CHECK IF THE USER IS STAFF
        if (in_array($user->account_type, ['staff'])) {
           
            return redirect()->route('mayaform');
        }
    } else {
   
        return redirect()->route('Mayashope_onetime');
    }

   $data=Mayashope_onetime::all();
    return view('mayashope_onrtime_record',['mayashope_onrtime_record'=>$data]);
}
function showdata($id){
    $data=Mayashope_onetime::find($id);
     return view('mayashope_onrtime_record_edit',['maya'=>$data]);
 }

 
 


function summary_view_data(Request $req, $id) {
    $data = Mayashope_onetime::find($id);
    $mayas = Mayahope_onetime_summary::find($req->child_id);

    return view('summary_view', [
        'maya' => $data,
        'summary' => $mayas,
    ]);
}



 function summary_edit($id){

    $data=Mayashope_onetime::find($id);
    return view('summary_edit',['maya'=>$data]);

}







 function edit(Request $req){

    $data=Mayashope_onetime::find($req->id);
        $data->child_name= $req->child_name;
        $data->guardian= $req->guardian;
        $data->contact_details= $req->contact_details;
        $data->procedure= $req->procedure;
        $data->no_of_surgery_done= $req->no_of_surgery_done;
        $data->date_of_admission= $req->date_of_admission;
        $data->date_of_surgery= $req->date_of_surgery;
        $data->anesthesislologist= $req->anesthesislologist;
        $data->additional_doctors= $req->additional_doctors;
        $data->post_op_Notes= $req->post_op_Notes;
        $data->additional_notes= $req->additional_notes;
        $data->Admin_notes= $req->Admin_notes;
 
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


function delete($id){
    $data=Mayashope_onetime::find($id);
    $data->delete();
     return redirect('mayashope_onrtime_record');
 }


 function print($id){ 
    $data=Mayashope_onetime::find($id);
     $pdf = Pdf::loadView('/mayashope_onrtime_record_print',compact('data'));
    return $pdf->download('print.pdf');
 }

}
