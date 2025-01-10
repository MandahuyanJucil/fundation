<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/summary_view.css">
    <title>Maya's Hope</title>
</head>
<body>
    <header id="header">
         @include('/header')
    </header>
        
        <main id="main">
         
<!-- <div class="main_first_div">


<div class="main_first_div_container_carlo">
         
               <h3 class="h3">{{auth()->user()->name}}</h3>
            </div>
            
            <div class="main_first_div_container h2">
               <a href="/admin_dasboard">Dashboard</a> 
            </div>

            <div class="main_first_div_container h3">
               <a href="/accoutinformation">
               <h3 class="h3">Account Information</h3></a> 
            </div>

            <div class="main_first_div_container h2">
                <a href="/events"><h2 class="h3"class="h2">Events</h2></a>
            </div>

            <div class="main_first_div_container h3">
           
                <a href="/chalice"> 
                <h3 class="h3">Maya's Hope<p>One time Support</p></h3></a>
                
            </div>

            <div class="main_first_div_container h3">
           
           <a href="/mayashope">
           <h3 class="h3"> Chalice</h3></a>
           
       </div>

            <div class="main_first_div_container h3">
            <a href="/mayashope">
            <h3 class="h3">Maya's Hope<p>Life time Support</p></h3></a>
            </div>

   

            <div class="main_first_div_container h3">
           <a href="{{route('logout')}}" class="logout"> <img src="/img/logout.png" alt="" class="icon">LOG OUT </a>  
            </div>
</div>

</div> -->

<div class="main_second_div">
 
 

 <div class="main_div3">

     <div class="main_div3_container_serch">

     </div>

     <div class="main_div3_container_print">
         
     </div>
             <div class="main_div3_container_search">
             
                 <div class="main_div3_container_search_divider">
                    <img src="/img/search.png" alt="search"> 
                 </div>
             </div>

          </div>

          <div class="main_div4"> 
             <table>
                 <thead>
                     <tr>
                    
                         <th>guardian</th>
                         <th>contact_details</th>
                         <th>procedure</th>
                         <th>no_of_surgery_done</th>
                         <th>date_of_surgery</th>
                 
                         
                     </tr>
                 </thead>
                 <tbody>
          
                        <tr>
                               
                                <td>{{$maya['guardian']}}</td>
                                <td>{{$maya['contact_details']}}</td>
                                <td>{{$maya['procedure']}}</td>
                                <td>{{$maya['no_of_surgery_done']}}</td>
                                <td>{{$maya['date_of_surgery']}}</td>
                                    
                               
                        </tr>
      
                       
                       
                        
                       
                 </tbody>
             </table>


             <table>
                 <thead>
                     <tr>
                         <th>Summarry.</th>
                         <th>guardian</th>
                         <th>contact_details</th>
                         <th>procedure</th>
                         <th>no_of_surgery_done</th>
                         <th>date_of_surgery</th>
                         <th class="actions">Action</th>
                         
                     </tr>
                 </thead>
                 <tbody>

                 
                 </tbody>
             </table>
          </div> 


 </div>


</div>

        </main>
        
    <footer id="footer">

    </footer>
</body>
</html>