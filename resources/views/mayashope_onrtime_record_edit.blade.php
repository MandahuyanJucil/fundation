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
                <h2> Mayashope Onetime form Edit</h2>
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
                  <input hidden type="number" id="id" name="id" value="{{$maya['id']}}" >
                        <label for="child_name">Child Name</label>
                        <input type="text" id="child_name" name="child_name" value="{{$maya['child_name']}}" >
                        <label for="guardian">Guardian</label>
                        <input type="text" id="guardian" name="guardian" value="{{$maya['guardian']}}" >
                        <br>
                        <label for="contact_details">Contact details</label>
                        <input type="phone" id="contact_details" name="contact_details" value="{{$maya['contact_details']}}" >
                        <br>
                        <label for="procedure">Procedure</label>
                        <input type="text" id="procedure" name="procedure" value="{{$maya['procedure']}}" >
                        <br>
                        <label for="no_of_surgery_done">No of surgery done:</label>
                        <input type="number" id="no_of_surgery_done" name="no_of_surgery_done" value="{{$maya['no_of_surgery_done']}}" >
                        <br>
                        <label for="date_of_admission">Date of admission</label>
                        <input type="date" id="date_of_admission" name="date_of_admission" value="{{$maya['date_of_admission']}}" >
                        <br>
                        <label for="date_of_surgery">Date of surgery</label>
                        <input type="date" id="date_of_surgery" name="date_of_surgery" value="{{$maya['date_of_surgery']}}" >
                        <br>
                            <br>
                        <label for="anesthesislologist">Anesthesislologist</label>
                        <input type="text" id="anesthesislologist" name="anesthesislologist" value="{{$maya['anesthesislologist']}}" >
                        <br>
                            <br>
                        <label for="additional_doctors">Additional doctors</label>
                        <input type="text" id="additional_doctors" name="additional_doctors" value="{{$maya['additional_doctors']}}" >   
                           <br>
                        <label for="post_op_Notes">Post op Notes</label>
                        <input type="text" id="post_op_Notes" name="post_op_Notes" value="{{$maya['post_op_Notes']}}" >  
                           <br>
                        <label for="additional_notes">Additional notes</label>
                        <input type="text" id="additional_notes" name="additional_notes" value="{{$maya['additional_notes']}}" >
                           <br>
                           
                        <label for="Admin_notes">Admin notes</label>
                        <input type="text" id="Admin_notes" name="Admin_notes" value="{{$maya['Admin_notes']}}" >   
                           <br>
                           <label for="summary">Summary</label>
                    <input type="date" id="summary" name="summary"  value="{{$maya['summary']}}"  >
                    <br>
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" value="{{$maya['description']}}" >
                    <br>
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" name="amount" value="{{$maya['amount']}}" >
                    <br>
                    <label for="paid_by">Paid by</label>
                    <input type="text" id="paid_by" name="paid_by" value="{{$maya['paid_by']}}">
                    <br>
                    <label for="remarks">Remarks</label>
                    <input type="text" id="remarks" name="remarks" value="{{$maya['remarks']}}" >
                    <br>

                 
                    <label for="description2">Description 2</label>
                    <input type="text" id="description2" name="description2" value="{{$maya['description2']}}" >
                    <br>
                    <label for="amount2">Amount 2</label>
                    <input type="number" id="amount2" name="amount2" value="{{$maya['amount2']}}" >
                    <br>
                    <label for="paid_by2">Paid by 2</label>
                    <input type="text" id="paid_by2" name="paid_by2" value="{{$maya['paid_by2']}}">
                    <br>
                    <label for="remarks2">Remarks 2</label>
                    <input type="text" id="remarks2" name="remarks2" value="{{$maya['remarks2']}}" >
                    <br>

                  
                    <label for="description3">Description 3</label>
                    <input type="text" id="description3" name="description3" value="{{$maya['description3']}}" >
                    <br>
                    <label for="amount3">Amount 3</label>
                    <input type="number" id="amount3" name="amount3" value="{{$maya['amount3']}}" >
                    <br>
                    <label for="paid_by3">Paid by 3</label>
                    <input type="text" id="paid_by3" name="paid_by3" value="{{$maya['paid_by3']}}">
                    <br>
                    <label for="remarks3">Remarks 3</label>
                    <input type="text" id="remarks3" name="remarks3" value="{{$maya['remarks3']}}" >
                    <br>

                  
                    <label for="description4">Description 4</label>
                    <input type="text" id="description4" name="description4" value="{{$maya['description4']}}" >
                    <br>
                    <label for="amount4">Amount 4</label>
                    <input type="number" id="amount4" name="amount4" value="{{$maya['amount4']}}" >
                    <br>
                    <label for="paid_by4">Paid by 4</label>
                    <input type="text" id="paid_by4" name="paid_by4" value="{{$maya['paid_by4']}}">
                    <br>
                    <label for="remarks4">Remarks 4</label>
                    <input type="text" id="remarks4" name="remarks4" value="{{$maya['remarks4']}}" >
                    <br>

                    <label for="description5">Description 5</label>
                    <input type="text" id="description5" name="description5" value="{{$maya['description5']}}" >
                    <br>
                    <label for="amount5">Amount 5</label>
                    <input type="number" id="amount5" name="amount5" value="{{$maya['amount5']}}" >
                    <br>
                    <label for="paid_by5">Paid by 5</label>
                    <input type="text" id="paid_by5" name="paid_by5" value="{{$maya['paid_by5']}}">
                    <br>
                    <label for="remarks5">Remarks 5</label>
                    <input type="text" id="remarks5" name="remarks5" value="{{$maya['remarks5']}}" >
                    <br>

                    
                    <label for="description6">Description 6</label>
                    <input type="text" id="description6" name="description6" value="{{$maya['description6']}}" >
                    <br>
                    <label for="amount6">Amount 6</label>
                    <input type="number" id="amount6" name="amount6" value="{{$maya['amount6']}}" >
                    <br>
                    <label for="paid_by6">Paid by 6</label>
                    <input type="text" id="paid_by6" name="paid_by6" value="{{$maya['paid_by6']}}">
                    <br>
                    <label for="remarks6">Remarks 6</label>
                    <input type="text" id="remarks6" name="remarks6" value="{{$maya['remarks6']}}" >
                    <br>



              <div class="footer_9">
                    <button type="submit">Save</button>
              </div>

              </form>
         </div>

    </footer>
</body>
</html>
