<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Create_account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>  
    <header id="head">  
              
    </header>

        <main id="main">
           
         
            <div class="main_line">
                <img src="/img/line.png" alt="Line" class="main_img_line">
            </div>


            <div class="second_div">
            
             <div class="second_div_logo">
                    <img src="/img/logo.png" alt="logo" class="Logo">
                    <h3>CREATE AN ACCOUNT</h3>
             </div>
                  
                 <div class="second_div_login">
                    <form action="{{route('create_account.post')}}" method="POST" enctype="multipart/form-data">

                         @csrf
                         

                        <div class="password-container">
                            <input type="text" class="password-input" placeholder="Full Name" name="name" required>
                        </div>

                        <div class="password-container">
                            <input type="email" class="password-input" placeholder="Email Address" name="email" required>
                        </div>

                        <div class="password-container">
                            <input type="text" class="password-input" placeholder="Username" name="username" required>
                        </div>

                        <div class="password-container">
                            <input type="password" class="password-input" placeholder="Password" name="password" required>
                            <div class="eye-icon"></div>
                        </div>
                        
                    
                           
                      

                        <div class="password-container">
                            <input type="password" class="password-input" placeholder="Confirm Password"  name="Confirm_Password" required>
                            <div class="eye-icon"></div>
                        </div>

                        @if($errors->any())
                   <div class="header_error">
                        @foreach($errors->all() as $error)
                            <div class="header_alert">
                                {{$error}}
                            </div>
                        @endforeach
                   </div>
               @endif

               @if(session()->has('error'))
                    <div class="header_alert">
                         {{session('error')}}
                    </div>
               @endif

               @if(session()->has('Succes'))
                    <div class="header_alert">
                         {{session('Succes')}}
                    </div>
               @endif
                        <div class="seoncd_div_btn">
                            <button type="submit">SIGN IN</button>
                           
                        </div> 

                    </form>
                  

                    <div class="second_DIV_NEWACC">
                        <div class="horizontal-line"></div>
                        <a href="/login">Already Have an Account</a>
                    </div>
                    
                 </div>

                 
            </div>
            
        </main>

    <footer id="footer">

    </footer>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Create_account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Create Account</title>
</head>
<body>  
    <header id="head">  
    </header>

    <main id="main">
        <div class="main_line">
            <img src="/img/line.png" alt="Line" class="main_img_line">
        </div>

        <div class="second_div">
            <div class="second_div_logo">
                <img src="/img/logo.png" alt="logo" class="Logo">
                <h3>CREATE AN ACCOUNT</h3>
            </div>
              
            <div class="second_div_login">
                <form action="{{route('create_account.post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="password-container">
                        <input type="text" class="password-input" placeholder="Full Name" name="name" required>
                    </div>
                    <div class="password-container">
                        <input type="email" class="password-input" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="password-container">
                        <input type="text" class="password-input" placeholder="Username" name="username" required>
                    </div>
                    <div class="password-container">
                    <label for="account_type">Account type</label>
                            <select id="account_type" name="account_type" class="password-input" required>
                            <option value="admin" >Admin</option>
                            <option value="staff" >Staff</option>
                            
                            </select>
                        
                    </div>
                    <div class="password-container">
                        <label for="personal_question">Personal question</label>
                            <select id="personal_question" name="personal_question" class="password-input" required>
                            <option value="dog_name" >Dog name</option>
                            <option value="favorite_color" >Favorite color</option>
                            <option value="lucky_number" >Lucky number</option>
                            </select>
                        
                    </div>
                    <div class="password-container">
                        <input type="text" class="password-input" placeholder="Answer" name="personal_answer" required>
                        <div class="eye-icon"></div>
                    </div>
                    <div class="password-container">
                        <input type="password" class="password-input" placeholder="Password" name="password" required>
                        <div class="eye-icon"></div>
                    </div>
                    <div class="password-container">
                        <input type="password" class="password-input" placeholder="Confirm Password" name="Confirm_Password" required>
                        <div class="eye-icon"></div>
                    </div>
                    @if($errors->any())
                        <div class="header_error">
                            @foreach($errors->all() as $error)
                                <div class="header_alert">
                                    {{$error}}
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="header_alert">
                            {{session('error')}}
                        </div>
                    @endif
                    @if(session()->has('Succes'))
                        <div class="header_alert">
                            {{session('Succes')}}
                        </div>
                    @endif
                    <div class="seoncd_div_btn">
                        <button type="submit">SIGN IN</button>
                    </div>
                </form>
               
            </div>
        </div>

        <!-- BACK BUTTON -->
        <div class="back-button-container" style="margin-top: 20px; text-align: center;">
            <button onclick="history.back()" style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;">
                GO BACK
            </button>
        </div>
    </main>

    <footer id="footer">
    </footer>
</body>
</html>
