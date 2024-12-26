<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/Mayaform.css">
    <title>Mayashope oneime</title>
</head>
<body>
<header> 
   @include('/header')
   </header>
        
        <main id="main">

            <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="http://localhost/dashboard/fundation/public/mayashope_onrtime_record"><img src="http://localhost/dashboard/fundation/public/img/arrow.png" alt="arrow"></a>
                <h2> Mayashope Onetime form View</h2>
            </div>


                
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">
         <div class="main_3rd_div_1">
    <!--                <img src="http://localhost/dashboard/fundation/public/storage/{{$maya['image']}}" alt="Child"> -->
                </div>
              

              <div class="footer_2">

              <form action="http://localhost/dashboard/fundation/public/edit" method="POST"  enctype="multipart/form-data">
                  @csrf 
                  <input hidden type="number" id="id" name="id" value="{{$maya['id']}}" required>
                        <label for="guardian">Guardian</label>
                        <input type="text" id="guardian" name="guardian" value="{{$maya['guardian']}}" readonly>
                        <br>
                        <label for="contact_details">Contact details</label>
                        <input type="phone" id="contact_details" name="contact_details" value="{{$maya['contact_details']}}" readonly>
                        <br>
                        <label for="procedure">Procedure</label>
                        <input type="text" id="procedure" name="procedure" value="{{$maya['procedure']}}" readonly>
                        <br>
                        <label for="no_of_surgery_done">No of surgery done:</label>
                        <input type="number" id="no_of_surgery_done" name="no_of_surgery_done" value="{{$maya['no_of_surgery_done']}}" readonly>
                        <br>
                        <label for="date_of_admission">Date of admission</label>
                        <input type="date" id="date_of_admission" name="date_of_admission" value="{{$maya['date_of_admission']}}" readonly>
                        <br>
                        <label for="date_of_surgery">Date of surgery</label>
                        <input type="date" id="date_of_surgery" name="date_of_surgery" value="{{$maya['date_of_surgery']}}" readonly>
                        <br>
                            <br>
                        <label for="anesthesislologist">Anesthesislologist</label>
                        <input type="text" id="anesthesislologist" name="anesthesislologist" value="{{$maya['anesthesislologist']}}" readonly>
                        <br>
                            <br>
                        <label for="additional_doctors">Additional doctors</label>
                        <input type="text" id="additional_doctors" name="additional_doctors" value="{{$maya['additional_doctors']}}" readonly>   
                           <br>
                        <label for="post_op_Notes">Post op Notes</label>
                        <input type="text" id="post_op_Notes" name="post_op_Notes" value="{{$maya['post_op_Notes']}}" readonly>  
                           <br>
                        <label for="additional_notes">Additional notes</label>
                        <input type="text" id="additional_notes" name="additional_notes" value="{{$maya['additional_notes']}}" readonly>
                           <br>
                           
                        <label for="Admin_notes">Admin notes</label>
                        <input type="text" id="Admin_notes" name="Admin_notes" value="{{$maya['Admin_notes']}}" readonly>   
                           <br>
                        

             

              </form>
         </div>

    </footer>
</body>
</html>
