<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/add_event.css">
    <title>accountInformation</title>
</head>
<body>
    
        
        <main id="main">

            <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="http://localhost/dashboard/fundation/public/events"><img src="http://localhost/dashboard/fundation/public/img/arrow.png" alt="arrow"></a>
                <h2>Events</h2>
            </div>


                
            </div>

        </main>
        
    <footer id="footer">

         <div class="footer_container">

              <div class="footer_1">
                    <h2>Events Information</h2>
              </div>

              <div class="footer_2">

              <form action="http://localhost/dashboard/fundation/public/events_editpost" method="POST"  enctype="multipart/form-data">
                  @csrf
                  <label for="event">Event:</label>
                  <input hidden type="number" id="id" name="id" value="{{$event['id']}}" required>
                        <input type="text" id="event" name="event" value="{{$event['event']}}">
                        <label for="date">Date:</label>
                        <input type="text" id="date" name="date" value="{{$event['date']}}">
                        <label for="location">Location:</label>
                        <input type="text" id="location" name="location" value="{{$event['location']}}">
                        <label for="information">Information:</label>
                        <input type="text" id="information" name="information" value="{{$event['information']}}">
                        <br>
                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image" value="{{$event['image']}}">
                        <label for="image2">Image:</label>
                        <input type="file" id="image2" name="image2" value="{{$event['image2']}}">
                        <label for="image3">Image:</label>
                        <input type="file" id="image3" name="image3" value="{{$event['image3']}}">
                        <label for="image4">Image:</label>
                        <input type="file" id="image4" name="image4" value="{{$event['image4']}}">

              <div class="footer_9">
                    <button type="submit">Save</button>
              </div>

              </form>
         </div>

    </footer>
</body>
</html>
