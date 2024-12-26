<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Mayashope;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class Mayashope_controller extends Controller
{


    


    function search(Request $request){
        $cild_data=Mayashope::where('nameofchild','like',"%$request->search%")->get();
        return view('mayashope',['mayashope'=>$cild_data]);
    }

    function view($id){
        $data=Mayashope::find($id);
         return view('mayashope_view',['mayashope'=>$data]);
     }
    
    function show(){
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('mayashope');
        }
        $data=Mayashope::all();
         return view('mayashope',['mayashope'=>$data]);
     }




     function delete($id){
        $data=Mayashope::find($id);
        $data->delete();
         return redirect('mayashope');
     }



     function print($id){ 
        $data=Mayashope::find($id);
         $pdf = Pdf::loadView('/mayaform_print',compact('data'));
        return $pdf->download('print.pdf');
     }

     function edit(Request $req){
        $maya=Mayashope::find($req->id); 
        
        $maya->nameofchild= $req->nameofchild;
        $maya->Sponsor= $req->Sponsor;
        $maya->dateofbirth= $req->dateofbirth;
        $maya->school= $req->school;
        $maya->address= $req->address;
        $maya->sub_site= $req->sub_site;
        $maya->gender= $req->gender;
        $maya->reilogion= $req->reilogion;
        $maya->Grade= $req->Grade;
        $maya->fathername= $req->fathername;
        $maya->father_occupation= $req->father_occupation;
        $maya->father_income= $req->father_income;
        $maya->father_employment= $req->father_employment;
        $maya->mothername= $req->mothername;
        $maya->mother_occupation= $req->mother_occupation;
        $maya->mother_income= $req->mother_income;
        $maya->mother_employment= $req->mother_employment;
        
        $maya->save();
        return redirect('mayashope');

 }


  


 function showdata($id){
    $data=Mayashope::find($id);
     return view('mayashope_edit',['mayashope'=>$data]);
 }





    function mayaupload(Request $req){
        $maya= new Mayashope();
        $maya->Sponsor= request('Sponsor');
        $maya->nameofchild= request('nameofchild');
        $maya->dateofbirth= request('dateofbirth');
        $maya->school= request('school');
        $maya->address= request('address');
        $maya->sub_site= request('sub_site');
        $maya->gender= request('gender');
        $maya->reilogion= request('reilogion');
        $maya->Grade= request('Grade');
        $maya->fathername= request('fathername');
        $maya->father_occupation= request('father_occupation');
        $maya->father_income= request('father_income');
        $maya->father_employment= request('father_employment');
        $maya->mothername= request('mothername');
        $maya->mother_occupation= request('mother_occupation');
        $maya->mother_income= request('mother_income');
        $maya->mother_employment= request('mother_employment');
              

   
        $question1=$req->question1;
        $question2=$req->question2;
        $question3=$req->question3;
        $question4=$req->question4;
        $question5=$req->question5;
        $question6=$req->question6;
        $question7=$req->question7;
        $question8=$req->question8;
        $question9=$req->question9;
        $question10=$req->question10;
        $question11=$req->question11;
        $question12=$req->question12;
        $question13=$req->question13;
        $question14=$req->question14;
        $question15=$req->question15;
        $question16=$req->question16;
        $question17=$req->question17;
        $question18=$req->question18;
        $question19=$req->question19;
        $question20=$req->question20;
        $question21=$req->question21;
        $question22=$req->question22;
        $question23=$req->question23;
        $question24=$req->question24;
        
       
        $maya->evaluation=$question1+$question2+$question3+$question4+$question5+$question6+$question7+$question8+$question9+$question10+$question11+$question12+$question13+$question14+$question15+$question16+$question17+$question18+$question19+$question20+$question21+$question22+$question23+$question24;
          
        if($maya->evaluation>30){
            $maya->status="Approve";
        }
        else  $maya->status="Reject";
        
        $maya->save();
        return view('dasboard_admin');

 }

 
}
