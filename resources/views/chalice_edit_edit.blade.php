<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/chalice_edit.css">
    <title>accountInformation</title>
</head>
<body>
   
        
        <main id="main">

            <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="http://localhost/dashboard/fundation/public/chalice"><img src="http://localhost/dashboard/fundation/public/img/arrow.png" alt="arrow"></a>
                <h2>Maya's Hope</h2>
            </div>

            <div class="main_3rd_div">
                <div class="main_3rd_div_1">
                   <img src="http://localhost/dashboard/fundation/public/storage/{{$chalice['image']}}" alt="Child">
                </div>

                <!-- <div class="main_3rd_div_2">
                         <h3>{{$chalice['fname']}}</h3>
                         <h4>{{$chalice['id']}}</h4>
                           <div class="main_3rd_div_2_container">
                                <p>SPONSORED</p> <img src="http://localhost/dashboard/fundation/public/img/triangle.png" alt="arrow down">
                           </div>
                </div> -->
                
                    
                <div class="main_3rd_div_3">
                <!--         <a href="http://localhost/dashboard/fundation/public/chalice_edit_edit">CANCEL</a>
                        <a href="http://localhost/dashboard/fundation/public/chalice_edit_edit">UPDATE</a> -->
                </div>
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              <div class="footer_1">
                    <h2>Personal Information</h2>
              </div>

              <div class="footer_2">

              <form action="http://localhost/dashboard/fundation/public/chalice_Edit" method="POST" enctype="multipart/form-data">
                  @csrf
                        <label for="fname">NAME:</label>
                        <input hidden type="number" id="id" name="id" value="{{$chalice['id']}}" required>
                        <input type="text" id="fname" name="fname" value="{{$chalice['fname']}}" required>
                               
                        <label for="status">STATUS:</label>
                        <input type="text" id="status" name="status" value="{{$chalice['status']}}" required>

                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image" value="{{$chalice['image']}}">
               <br>
                        <label for="YEARSTARTED">YEAR STARTED AS A BENEFICIARY:</label>
                        <input type="text" id="YEARSTARTED" name="YEARSTARTED" value="{{$chalice['YEARSTARTED']}}" required>
                        
                  
                       <br>
                        <br>
                        <label for="birthdate">BIRTH DATE:</label>
                        <input type="text" id="birthdate" name="birthdate" value="{{$chalice['birthdate']}}" required>

                        <label for="age">AGE:</label>
                        <input type="text" id="age" name="age" value="{{$chalice['age']}}" required>

                        <label for="gender">GENDER:</label>
                        <input type="text" id="gender" name="gender" value="{{$chalice['gender']}}" required>
                        

              
              </div>

              <div class="footer_3">
                   
                    <label for="address">ADDRESS:</label>
                    <input type="text" id="address" name="address" value="{{$chalice['address']}}" required>

                    <label for="religion">RELIGION:</label>
                    <input type="text" id="religion" name="religion" value="{{$chalice['religion']}}" required> 
              </div>

              <div class="footer_4">
                    <label for="hobbies">HOBBIES:</label>
                    <input type="text" id="hobbies" name="hobbies" value="{{$chalice['hobbies']}}" required> 
              </div>
                     
              <div class="footer_5">
                    <label for="diagnosis">DIAGNOSIS:</label>
                    <input type="text" id="diagnosis" name="diagnosis" value="{{$chalice['diagnosis']}}" required> 
              </div>

              <div class="footer_6">
                    <h4>FAMILY INFORMATION</h4>
              </div>

              <div class="footer_7">
                    <label for="mothername">MOTHER'S NAME:</label>
                    <input type="text" id="mothername" name="mothername" value="{{$chalice['mothername']}}" required> 

                    <label for="mother_occupation">OCCUPATION:</label>
                    <input type="text" id="mother_occupation" name="mother_occupation" value="{{$chalice['mother_occupation']}}" required> 
              </div>

              <div class="footer_8">
                    <label for="fathername">FATHER'S NAME:</label>
                    <input type="text" id="fathername" name="fathername" value="{{$chalice['fathername']}}" required> 

                    <label for="father_occupation">OCCUPATION:</label>
                    <input type="text" id="father_occupation" name="father_occupation" value="{{$chalice['father_occupation']}}" required> 
              </div>

              <div class="footer_9">
                    <button type="submit">Save</button>
              </div>

              </form>
         </div>

    </footer>
</body>
</html>























































