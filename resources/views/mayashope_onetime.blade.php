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
                <h2> Mayashope Onetime form</h2>
            </div>


                
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

<!--          $table->string('4_description')->nullable(); 
            $table->string('4_amount')->nullable(); 
            $table->string('4_paid_by')->nullable(); 
            $table->string('4_remarks')->nullable();  -->

              <div class="footer_2">

              <form action="http://localhost/dashboard/fundation/public/mayashope_onetime" method="POST"  enctype="multipart/form-data">
                  @csrf 
                        <label for="child_name">Name</label>
                        <input type="text" id="child_name" name="child_name" required>
                        <br>
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" required>
                        <br>
                        <label for="birthday">Birthday</label>
                        <input type="date" id="birthday" name="birthday" required>
                        <br>
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" required>
                        <br>
                        <label for="phill_no">Phill no</label>
                        <input type="number" id="phill_no" name="phill_no" required>
                        <br>
                        <label for="guardian">Guardian</label>
                        <input type="text" id="guardian" name="guardian" required>
                        <br>
                        <label for="contact_details">Contact details</label>
                        <input type="phone" id="contact_details" name="contact_details" required>
                        <br>
                        <label for="procedure">Procedure</label>
                        <input type="text" id="procedure" name="procedure" required>
                        <br>
                        <label for="before_procedure_dianosis">Before procedure dianosis</label>
                        <input type="text" id="before_procedure_dianosis" name="before_procedure_dianosis" required>
                        <br>
                        <label for="date_of_discharge">Date_of_discharge</label>
                        <input type="date" id="date_of_discharge" name="date_of_discharge" required>
                        <br>
                        <label for="no_of_surgery_done">No of surgery done:</label>
                        <input type="number" id="no_of_surgery_done" name="no_of_surgery_done" required>
                        <br>
                        <label for="date_of_admission">Date of admission</label>
                        <input type="date" id="date_of_admission" name="date_of_admission" required>
                        <br>
                        <label for="date_of_surgery">Date of surgery</label>
                        <input type="date" id="date_of_surgery" name="date_of_surgery" required>
                        <br>
                            <br>
                        <label for="anesthesislologist">Anesthesislologist</label>
                        <input type="text" id="anesthesislologist" name="anesthesislologist" required>
                        <br>

                        <label for="diagnosis">Diagnosis</label>
                        <input type="text" id="diagnosis" name="diagnosis" required>
                        <br>

                        <label for="surgeon">Surgeon</label>
                        <input type="text" id="surgeon" name="surgeon" required>
                        <br>
                        <label for="additional_doctors">Additional doctors</label>
                        <input type="text" id="additional_doctors" name="additional_doctors" required>   
                           <br>
                        <label for="post_op_Notes">Post op Notes</label>
                        <input type="text" id="post_op_Notes" name="post_op_Notes" required>  
                           <br>
                        <label for="additional_notes">Additional notes</label>
                        <input type="text" id="additional_notes" name="additional_notes" required>
                           <br>
                           
                        <label for="Admin_notes">Admin notes</label>
                        <input type="text" id="Admin_notes" name="Admin_notes" required>   
                           <br>
                           <label for="image">Image</label>
                        <input type="file" id="image" name="image" required>   
                           <br>
                           

           
                <!-- Additional Fields Section -->
                <div id="additional-fields-container">
                    <label for="summary">Summary</label>
                    <input type="date" id="summary" name="summary" required>
                    <br>
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" required>
                    <br>
                    <label for="amount">Amount</label>
                    <input type="number" id="amount" name="amount" required>
                    <br>
                    <label for="paid_by">Paid by</label>
                    <input type="text" id="paid_by" name="paid_by" required>
                    <br>
                    <label for="remarks">Remarks</label>
                    <input type="text" id="remarks" name="remarks" required>
                    <br>
                </div>

                <!-- Add Button -->
                <div class="footer_9">
                    <button type="button" id="add-button">Add</button>
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</footer>

<script>
    let counter = 2; // Start counter from 2 for additional fields

    const addButton = document.getElementById('add-button');
    addButton.addEventListener('click', function () {
        if (counter > 6) {
            // Stop adding more fields if counter exceeds 6
            alert('You can only add up to 6 fields.');
            return;
        }

        const container = document.getElementById('additional-fields-container');

        const additionalFieldsHTML = `
            <label for="summary${counter}">Summary ${counter}</label>
            <input type="date" id="summary${counter}" name="summary${counter}" required>
            <br>
            <label for="description${counter}">Description ${counter}</label>
            <input type="text" id="description${counter}" name="description${counter}" required>
            <br>
            <label for="amount${counter}">Amount ${counter}</label>
            <input type="number" id="amount${counter}" name="amount${counter}" required>
            <br>
            <label for="paid_by${counter}">Paid by ${counter}</label>
            <input type="text" id="paid_by${counter}" name="paid_by${counter}" required>
            <br>
            <label for="remarks${counter}">Remarks ${counter}</label>
            <input type="text" id="remarks${counter}" name="remarks${counter}" required>
            <br>
        `;

        const div = document.createElement('div');
        div.innerHTML = additionalFieldsHTML;
        container.appendChild(div);

        counter++; // Increment counter for next set of fields
    });
</script>


</html>
