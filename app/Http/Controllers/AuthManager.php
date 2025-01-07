<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;




class AuthManager extends Controller
{


    

    function print($id){ 
        $data=user::find($id);
         $pdf = Pdf::loadView('/account_print',compact('data'));
        return $pdf->download('print.pdf');
     }



    function delete($id){
        $data=user::find($id);
        $data->delete();
         return redirect('accoutinformation');
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
        $data=user::all();
         return view('accoutinformation',['accoutinformation'=>$data]);
     }
  



    function login(){ 
        if(Auth::check()){
            return redirect()->intended(route('admin_dasboard'));
        }

        return view('login');
    }

    function create_account(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }

       return view('create_account');
    }

    function dasboard_admin(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('dasboard_admin');
    }

    function events(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('events');
    }
    

    function sign_in(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('sign-in');
    }

    function header(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('header');
    }
    
    function accoutinformation(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
       
       
    }

    function admindash(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('admindash');
    }

    function chalice(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('chalice');
    }

    function mayashope(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('mayashope');
    }

 
    

    function donation(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('donation');
    }

    function pg1form(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('pg1form');
    }

    function pg1form_edit_1(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('pg1form_edit_1');
    }

    function chalice_edit(){ 
        /* if(!Auth::check()){
            return redirect()->intended(route('login'));
        } */
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
    
    
      
        return view('chalice_edit');
    }

    function chalice_edit_edit(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('chalice_edit_edit');
    }

    function mayashope_edit(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('mayashope_edit');
    }

    function mayashope_edit_edit(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('mayashope_edit_edit');
    }

    function bdo(){ 
      
        return view('bdo');
    }

    function BENEFICIARY(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('BENEFICIARY');
    }

    function mayaform(){ 
        
        if(!Auth::check()){
            return redirect()->intended(route('login'));
        }
       
        return view('mayaform');
    }


    function mayashope_sponsored(){ 
        if (Auth::check()) {
            $user = Auth::user();
    
            // CHECK IF THE USER IS STAFF
            if (in_array($user->account_type, ['staff'])) {
               
                return redirect()->route('mayaform');
            }
        } else {
       
            return redirect()->route('login');
        }
        return view('BENEFICIARY');
    }

    
  

   /*  function loginPost(Request $request){   
        $request->validate([
            'email'=> 'required',
             'password'=> 'required'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('admin_dasboard'));
        }
        return redirect(route('login'))->with("error","Login not valid");
    }
 */
function forgotpasswordPost(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'personal_question' => 'required',
        'personal_answer' => 'required',
    ]);

    // FETCH THE USER BASED ON EMAIL
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return redirect(route('login'))->with("error", "No account found with the provided email. Please register first.");
    }

    // VERIFY PERSONAL QUESTION AND ANSWER
    if ($user->personal_question === $request->personal_question &&
        $user->personal_answer === $request->personal_answer) {

        // LOGIN THE USER WITHOUT PASSWORD
        Auth::login($user);

        // REDIRECT BASED ON ACCOUNT TYPE
        if ($user->account_type === 'admin') {
            return redirect()->intended(route('dasboard_admin'))->with("success", "Welcome back, Admin!");
        } elseif ($user->account_type === 'staff') {
            return redirect()->intended(route('mayaform'))->with("success", "Welcome back, Staff Member!");
        }

        // LOGOUT THE USER IF ACCOUNT_TYPE IS INVALID
        Auth::logout();
        return redirect(route('login'))->with("error", "Access restricted for your account type.");
    }

    return redirect(route('login'))->with("error", "The personal question or answer is incorrect.");
}


 



 function loginPost(Request $request){   
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    // ATTEMPT TO LOGIN WITH ADDITIONAL VALIDATION FOR ACCOUNT TYPE
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // CHECK IF THE USER'S ACCOUNT_TYPE IS 'STAFF' OR 'ADMIN'
        if (in_array($user->account_type, ['admin'])) {
            return redirect()->intended(route('dasboard_admin'));
        }
       else  if (in_array($user->account_type, ['staff'])) {
            return redirect()->intended(route('mayaform'));
        }

        // LOGOUT THE USER IF ACCOUNT_TYPE DOES NOT MATCH
        Auth::logout();
        return redirect(route('login'))->with("error", "Access restricted for this account type.");
    }

    // INVALID CREDENTIALS
    return redirect(route('login'))->with("error", "Login not valid.");
}

    function create_accountPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:users',
            'username'=>'required',
             'password'=> 'required',
             'Confirm_Password'=>'required',
             'account_type'=> 'required',
             'personal_question'=> 'required',
             'personal_answer'=> 'required'
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['username'] = $request->username;
        $data['password'] = $request->password;
        $data['Confirm_Password'] = Hash::make($request->Confirm_Password);
        $data['account_type'] = $request->account_type;
        $data['personal_question'] = $request->personal_question;
        $data['personal_answer'] = $request->personal_answer;
        $user= User::create($data);
            if(!$user){
                return redirect(route('create_accountPost'))->with("error","Register fail");
            }
            return redirect(route('dasboard_admin'))->with("Succes","Register Succes");
    }









    function logout(){
       /*  Session::flush(); */
        Auth::logout();
        return redirect(route('login'));
    }
}
