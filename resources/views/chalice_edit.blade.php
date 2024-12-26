<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/Add_event.css">
    <title>accountInformation</title>
</head>
<body>
    
        
        <main id="main">

            <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="http://localhost/dashboard/fundation/public/chalice"><img src="http://localhost/dashboard/fundation/public/img/arrow.png" alt="arrow"></a>
                <h2>Maya's Hope</h2>
            </div>

          

            
                
                    

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              

           

              <form action="http://localhost/dashboard/fundation/public/chalice_edit" method="POST" enctype="multipart/form-data">
                  @csrf

                  <fieldset>
                  <legend>Personal Information</legend>
                        <label for="fname">Name:</label>
                        <input type="text" id="fname" name="fname">

                        <!-- <label for="status">STATUS:</label>
                        <input type="text" id="status" name="status"> -->
                        
                        <label for="role">Role:</label>
                            <select id="role" name="status">
                            <option value="sponsored" >sponsored</option>
                            </select>

                      <!--   <label for="YEARSTARTED">YEAR STARTED AS A BENEFICIARY:</label>
                        <input type="text" id="YEARSTARTED" name="YEARSTARTED"> -->
                        <label for="YEARSTARTED">Year Started as a Beneficiary:</label>
                        <input type="date" id="YEARSTARTED" name="YEARSTARTED" required>
                        
                  
                       <br>
                        <br>
                        <label for="birthdate">Birth Date:</label>
                        <input type="date" id="birthdate" name="birthdate" required>
                        
                       <!--  <label for="birthdate">BIRTH DATE:</label>
                        <input type="text" id="birthdate" name="birthdate"> -->

                        <label for="age">AGE:</label>
                        <input type="number" id="age" name="age">
                        
                        <!-- <label for="gender">GENDER:</label>
                        <input type="text" id="gender" name="gender"> -->
                        <label for="gender">gender:</label>
                            <select id="gender" name="gender">
                            <option value="Male" >Male</option>
                            <option value="Female" >Female</option>
                            <option value="Others" >Others</option>
                            </select>
                        
                   </fieldset>
              
          

              <div class="footer_3">
                   
                

              <fieldset>
              <legend>FAMILY INFORMATION</legend>
              

              <div class="footer_7">
                    <label for="mothername">Mother's Name:</label>
                    <input type="text" id="mothername" name="mothername" required> 

                    <label for="mother_occupation">Occupation:</label>
                    <input type="text" id="mother_occupation" name="mother_occupation" required> 
              </div>

              <div class="footer_7">
                    <label for="live_with">Live With:</label>
                    <input type="text" id="live_with" name="live_with" required> 

                    <label for="brothers">Brothers:</label>
                    <input type="text" id="brothers" name="brothers" required> 

                    <label for="sisters">Sisters:</label>
                    <input type="text" id="sisters" name="sisters" required> 
              </div>

              <div class="footer_8">
                    <label for="fathername">Father's Name:</label>
                    <input type="text" id="fathername" name="fathername" required> 

                    <label for="father_occupation">Occupation:</label>
                    <input type="text" id="father_occupation" name="father_occupation" required> 
              </div>
             </fieldset>
             
              <fieldset>
                              <legend>Contact Information</legend>
                              <label for="Contact_Person">Contact Person:</label>
                              <input type="text" id="Contact_Person" name="Contact_Person" required><br><br>

                              <label for="Relation">Relation:</label>
                              <input type="text" id="Relation" name="Relation" required><br><br>

                              <label for="Phone_Number">Phone Number:</label>
                              <input type="number" id="Phone_Number" name="Phone_Number" required><br><br>

                            
              </fieldset>
              <fieldset>
            <legend>Living Condition</legend>
            <label>Running Water:</label>
            <input type="radio" id="water_yes" name="Running_Water" value="yes" required>
            <label for="water_yes">Yes</label>
            <input type="radio" id="water_no" name="Running_Water" value="no" required>
            <label for="water_no">No</label><br><br>

            <label>Electricity:</label>
            <input type="radio" id="Electricity_yes" name="Electricity" value="yes" required>
            <label for="Electricity_yes">Yes</label>
            <input type="radio" id="Electricity_no" name="Electricity" value="no" required>
            <label for="Electricity_no">No</label><br><br>

            <label>Latrine:</label>
            <input type="radio" id="Latrine_yes" name="Latrine" value="yes" required>
            <label for="Latrine_yes">Yes</label>
            <input type="radio" id="Latrine_no" name="Latrine" value="no" required>
            <label for="Latrine_no">No</label><br><br>

            <label>Cooking Facility:</label>
            <input type="radio" id="cooking_facility_yes" name="cooking_facility" value="yes" required>
            <label for="cooking_facility_yes">Yes</label>
            <input type="radio" id="cooking_facility_no" name="cooking_facility" value="no" required>
            <label for="cooking_facility_no">No</label><br><br>
            

     
        </fieldset>

        <fieldset>
            <legend>Home Details</legend>
            <label for="Walls">Walls:</label>
            <input type="text" id="Walls" name="Walls" required><br><br>

            <label for="Floor">Floor:</label>
            <input type="text" id="Floor" name="Floor" required><br><br>

            <label for="No_of_Rooms">No. of Rooms:</label>
            <input type="number" id="No_of_Rooms" name="No_of_Rooms" required>

            <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>

                    <label for="religion">Religion:</label>
                    <input type="text" id="religion" name="religion" required> 
              </div>

              
        </fieldset>

        <fieldset>
            <legend>Child Details</legend>
            <label for="Child_history_of_Diagnosis">Child History of Diagnosis:</label><br>
            <textarea id="Child_history_of_Diagnosis" name="Child_history_of_Diagnosis" rows="4" cols="50" required></textarea><br><br>

            <label for="Current_Condition_of_the_Child">Current Condition of the Child:</label><br>
            <textarea id="Current_Condition_of_the_Child" name="Current_Condition_of_the_Child" rows="4" cols="50" required></textarea><br><br>
            <div class="footer_4">
                    <label for="hobbies">Hobbies:</label>
                    <input type="text" id="hobbies" name="hobbies" required> 
              </div>
                     
              <div class="footer_5">
                    <label for="diagnosis">Diagnosis:</label>
                    <input type="text" id="diagnosis" name="diagnosis" required> 
              </div>

              <div class="footer_5">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" required> 
              </div>

              <div class="footer_5">
                    <label for="school">School:</label>
                    <input type="text" id="school" name="school" required> 
              </div>

              <div class="footer_5">
                    <label for="grade_lvl">Grade Level:</label>
                    <input type="text" id="grade_lvl" name="grade_lvl" required> 
              </div>

              
        </fieldset>

        <fieldset>
            <legend>Additional Notes</legend>
            <label for="Additional_Notes">Additional Notes:</label><br>
            <textarea id="Additional_Notes" name="Additional_Notes" rows="4" cols="50" required></textarea>
        </fieldset>

        <fieldset>
            <legend>Prepared By</legend>
            <label for="Prepared_by">Prepared By:</label>
            <input type="text" id="Prepared_by" name="Prepared_by" required>
        </fieldset>
              <div class="footer_9">
                    <button type="submit">Save</button>
              </div>

              </form>
         </div>

    </footer>
</body>
</html>


