<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/Mayaform.css">
    <title>accountInformation</title>
</head>
<body>
    <header id="header">
   
    </header>
        
        <main id="main">

            <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="http://localhost/dashboard/fundation/public/mayashope"><img src="http://localhost/dashboard/fundation/public/img/arrow.png" alt="arrow"></a>
                <h2>Chalice form view</h2>
            </div>


                
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              

              <div class="footer_2">

              <form action="http://localhost/dashboard/fundation/public/mayashope_editpost" method="POST"  enctype="multipart/form-data">
                  @csrf 

                        <input hidden type="number" id="id" name="id" value="{{$mayashope['id']}}"  >
                        <label for="Sponsor">Sponsor Site:</label>
                        <input type="text" id="Sponsor" name="Sponsor" required value="{{$mayashope['Sponsor']}}" readonly>
                        <br>
                        <label for="nameofchild">Name Of Child:</label>
                        <input type="text" id="nameofchild" name="nameofchild" readonly value="{{$mayashope['nameofchild']}}">
                        <br>
                        <label for="dateofbirth">Date Of Birth:</label>
                        <input type="date" id="dateofbirth" name="dateofbirth" readonly value="{{$mayashope['dateofbirth']}}">
                        <br>
                        <label for="school">Name Of Child's School:</label>
                        <input type="text" id="school" name="school" readonly value="{{$mayashope['school']}}">
                        <br>
                        <label for="address">Address Or Location</label>
                        <input type="text" id="address" name="address" readonly value="{{$mayashope['address']}}">
                        <br>
                        <label for="sub_site">Sub-Site</label>
                        <input type="text" id="sub_site" name="sub_site" readonly value="{{$mayashope['sub_site']}}">
                        <br>
                        <label for="gender">gender:</label>
                            <select id="gender" name="gender" >
                            <option value="Male" >Male</option>
                            <option value="Female" >Female</option>
                            <option value="Others" >Others</option>
                            </select>
                            <br>
                        <label for="reilogion">Reilogion</label>
                        <input type="text" id="reilogion" name="reilogion" readonly value="{{$mayashope['reilogion']}}">
                        <br>
                        <label for="Grade">Grade:</label>
                            <select id="Grade" name="Grade" value="{{$mayashope['Grade']}}">
                            <option value="Elemtary" >Elemtary</option>
                            <option value="highschool" >highschool</option>
                            <option value="college " >College</option>
                            </select>
                            <br>
                        <label for="fathername">Name Of Father</label>
                        <input type="text" id="fathername" name="fathername" readonly value="{{$mayashope['fathername']}}">   
                           <br>
                        <label for="father_occupation">Father Occupation</label>
                        <input type="text" id="father_occupation" name="father_occupation" readonly value="{{$mayashope['father_occupation']}}">  
                           <br>
                        <label for="father_income">Father's Monthly Income</label>
                        <input type="number" id="father_income" name="father_income" readonly value="{{$mayashope['father_income']}}">
                           <br>
                          

                            <label for="father_employment">Employment of Father:</label>
                            <input type="text" id="father_employment" name="father_employment" readonly value="{{$mayashope['father_employment']}}">   
                        <br>
                        <label for="mothername">Name Of Mother</label>
                        <input type="text" id="mothername" name="mothername" readonly value="{{$mayashope['mothername']}}">   
                           <br>
                        <label for="mother_occupation">Mother Occupation</label>
                        <input type="text" id="mother_occupation" name="mother_occupation" readonly value="{{$mayashope['mother_occupation']}}">
                           <br>
                        <label for="mother_income">Mother's Monthly Income</label>
                        <input type="number" id="mother_income" name="mother_income" readonly value="{{$mayashope['mother_income']}}">
                           <br>
                        
                            <label for="mother_employment">Employment of Father:</label>
                            <input type="text" id="mother_employment" name="mother_employment" readonly value="{{$mayashope['mother_employment']}}"> 
                        <br>




             

              </form>
         </div>

    </footer>
</body>
</html>