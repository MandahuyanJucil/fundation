<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/forgotpassword.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>logins</title>
</head>

<body>  
   

        <main id="main">
           
         
            


            <div class="second_div">
            <div class="back-button-container">
    <button class="back-button" onclick="goBack()">⬅ Back</button>
</div>

             <div class="second_div_logo">
                
                    <img src="/img/logo.png" alt="logo" class="Logo">
                    <h3>SIGN IN</h3>
             </div>
                  
                 <div class="second_div_login">
                    
                    <form action="{{route('forgotpassword.post')}}" method="POST">
                                
                         @csrf
                        

                        <div class="password-container">
                            <input type="email" class="password-input" placeholder="Email Address" name="email" required>
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
                            
                           <!--  <div class="eye-icon"></div> -->
                           
                        </div>

                       
                
                    

                        <div class="second_div_btn">
                            <button class="custom-button" type="submit">SIGN IN</button>
                        </div>
                </form>

                   
                   
                 </div>
            </div>
            
        </main>
        <script>
    function goBack() {
        window.history.back(); // Navigates to the previous page
    }
</script>

    
</body>
</html>