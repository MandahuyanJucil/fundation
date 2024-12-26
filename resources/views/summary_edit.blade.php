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

              <form action="http://localhost/dashboard/fundation/public/mayasummary_upload" method="POST"  enctype="multipart/form-data">
                  @csrf 
                  <input hidden type="number" id="id" name="id" value="{{$maya['id']}}" required>
                                    
                  <label for="description">Description</label>
                  <input type="text" id="description" name="description" required>
                  <br>
                  <label for="amount">Amount</label>
                  <input type="number" id="amount" name="amount" required>
                  <br>
                  <label for="paid_by">Paid by</label>
                  <input type="text" id="paid_by" name="paid_by"  required>
                  <br>
                  <label for="remarks">Remarks</label>
                  <input type="text" id="remarks" name="remarks" required>
                  <br>
                  <input hidden type="number" id="child_id" name="child_id" value="{{$maya['id']}}" required>
                  <br>

              <div class="footer_9">
                    <button type="submit">Save</button>
              </div>

              </form>
         </div>

    </footer>
</body>
</html>
