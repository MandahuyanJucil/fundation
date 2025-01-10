<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mayashope.css">
    <title>Chalice</title>
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
 -->
<div class="main_second_div">
 <div class="main_second_div_top">
       <h2>Chalice</h2>
 </div>

 

 <div class="main_div3">

     <div class="main_div3_container_serch">

     </div>

     <div class="main_div3_container_print">
         
     </div>
             <div class="main_div3_container_search">
                <input type="text" placeholder="CATEGORY"> 
                 <div class="main_div3_container_search_divider">
                    <img src="/img/search.png" alt="search"> 
                 </div>
             </div>

          

              <div class="main_div3_container">
                <img src="/img/plus.png" alt="plus">   
                <h5><a href="/mayaform">CREATE NEW</a></h5>         
              </div>

             
          </div>

          <div class="main_div4"> 
             <table>
                 <thead>
                     <tr>
                         <th>No.</th>
                         <th>Name</th>
                         <th>Grade</th>
                         <th>BIRTHDATE</th>
                         <th>Status</th>
                         <th>Score</th>
                         
                         <th class="actions">Action</th>
                     </tr>
                 </thead>
                 <tbody>
                 @foreach ($mayashope as $data)
                     <tr>
                     <td>{{$data['id']}}</td>
                     <td>{{$data['nameofchild']}}</td>
                     <td>{{$data['Grade']}}</td>
                     <td>{{$data['dateofbirth']}}</td>
                     <td>{{$data['status']}}</td>
                     <td>{{$data['evaluation']}}</td>
                     
                         <td class="actions">
                             <a href={{"mayashope_edit/".$data['id']}}>edit</a>
                             <a href={{"mayashope_delete/".$data['id']}}>delete</a>
                             <a href={{"mayashope_print/".$data['id']}}>Print</a>
                         </td>
                     </tr>
                     @endforeach
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