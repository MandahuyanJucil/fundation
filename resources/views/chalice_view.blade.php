<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/chalice_view.css">
    <title>chalice view</title>
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

               
                
                    
                <div class="main_3rd_div_3">
               
                </div>
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              <div class="footer_1">
                    <h2>Personal Information</h2>
              </div>

              <div class="footer_2">

              <form action="http://localhost/dashboard/fundation/public/chalice_Edit" method="POST" enctype="multipart/form-data" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; font-family: Arial, sans-serif; background-color: #f9f9f9;">
  @csrf
  
  <div style="margin-bottom: 15px;">
    <label for="fname" style="display: block; font-weight: bold;">Name:</label>
    <input hidden type="number" id="id" name="id" value="{{$chalice['id']}}" required>
    <input type="text" id="fname" name="fname" value="{{$chalice['fname']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="status" style="display: block; font-weight: bold;">Status:</label>
    <input type="text" id="status" name="status" value="{{$chalice['status']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="YEARSTARTED" style="display: block; font-weight: bold;">Year Started as a Beneficiary:</label>
    <input type="text" id="YEARSTARTED" name="YEARSTARTED" value="{{$chalice['YEARSTARTED']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="birthdate" style="display: block; font-weight: bold;">Birth Date:</label>
    <input type="text" id="birthdate" name="birthdate" value="{{$chalice['birthdate']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="age" style="display: block; font-weight: bold;">Age:</label>
    <input type="text" id="age" name="age" value="{{$chalice['age']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="gender" style="display: block; font-weight: bold;">Gender:</label>
    <input type="text" id="gender" name="gender" value="{{$chalice['gender']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="address" style="display: block; font-weight: bold;">Address:</label>
    <input type="text" id="address" name="address" value="{{$chalice['address']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="religion" style="display: block; font-weight: bold;">Religion:</label>
    <input type="text" id="religion" name="religion" value="{{$chalice['religion']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="hobbies" style="display: block; font-weight: bold;">Hobbies:</label>
    <input type="text" id="hobbies" name="hobbies" value="{{$chalice['hobbies']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="diagnosis" style="display: block; font-weight: bold;">Diagnosis:</label>
    <input type="text" id="diagnosis" name="diagnosis" value="{{$chalice['diagnosis']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>


  <div style="margin-bottom: 15px;">
    <label for="mothername" style="display: block; font-weight: bold;">Mother's Name:</label>
    <input type="text" id="mothername" name="mothername" value="{{$chalice['mothername']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="mother_occupation" style="display: block; font-weight: bold;">Mother's Occupation:</label>
    <input type="text" id="mother_occupation" name="mother_occupation" value="{{$chalice['mother_occupation']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="fathername" style="display: block; font-weight: bold;">Father's Name:</label>
    <input type="text" id="fathername" name="fathername" value="{{$chalice['fathername']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="margin-bottom: 15px;">
    <label for="father_occupation" style="display: block; font-weight: bold;">Father's Occupation:</label>
    <input type="text" id="father_occupation" name="father_occupation" value="{{$chalice['father_occupation']}}" readonly style="width: 100%; padding: 8px; margin-top: 5px;">
  </div>

  <div style="text-align: center; margin-top: 20px;">
    <button type="submit" style="padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Save</button>
  </div>
</form>

         </div>

    </footer>
</body>
</html>























































