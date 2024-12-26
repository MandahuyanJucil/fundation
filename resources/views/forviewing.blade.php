<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/Forviewing.css">
    <title>Dashboard</title>
</head>
<body>
    <header id="header">
         <div class="header_mainbox">
              <div class="header_picture">
                    <img src="http://localhost/dashboard/fundation/public/img/logo.png" alt="logo" class="header_logo">
              </div>

              <div class="header_navigation">
                 <a href="https://www.facebook.com/BYSMPblessthechildren" target="_blank">Support a Program</a>
                 <a href="http://localhost/dashboard/fundation/public/forviewing">Home</a>
                 <a href="http://localhost/dashboard/fundation/public/gallery">Gallery</a>
                 <a href="http://localhost/dashboard/fundation/public/ourstory">Our Story</a>

              </div>
         </div>

        </header>

        <main id="main">
             <div class="main_firstdiv background background-container "> 
                <h1 class="main_firsdiv_h1">BYSMP</h1>
                <h5 class="main_firstdiv_h5">BLESS THE CHILDREN FOUNDATION</h5>
                <p class="main_firstdiv_p">INSPIRING CHANGE, BUILDING WITH HOPE.</p>
                <div class="horizontal-line"></div>
             </div>

             <div class="main_div1">
                <h2>Events And Programs</h2>
             </div>
             @foreach ($event as $data)

             <div class="main_div2">
                <div class="main_div2_info">
                    <div class="main_div2_info_top">
                            <h2>{{$data['event']}} </h2>
                            <h3>{{$data['date']}}</h3>
                            <h2>{{$data['location']}}</h2>
                    </div>
                    <div class="main_div2_info_p">
                        <p>{{$data['information']}}</p>
                    </div>
                  
                </div>
                <div class="main_div2_image">
                   <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image']}}" alt="">
                   <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image2']}}" alt="">
                   <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image3']}}" alt="">
                   <img src="http://localhost/dashboard/fundation/public/storage/{{$data['image4']}}" alt="">
                </div>
                
                
             </div>
            
                        <!-- <tr>  
                            
                                <td>{{$data['id']}}</td>
                                <td></td>
                                <td>{{$data['date']}}</td>
                                <td>{{$data['location']}}</td>
                                <td class="actions" >
                                    
                                </td>
                            </tr>
   -->
             @endforeach
            
           
        </main>

        <footer id="footer">
 

   
        <div class="contact-info">
            <h4>Contact Information:</h4>
            <p><i class="fas fa-envelope"></i> Email: info@bysmpblessthechildren.com</p>
            <p><i class="fas fa-globe"></i> Website & Social Media: @BYSMPblessthechildren</p>
            <p><i class="fas fa-phone"></i> Contact Numbers: +8521 1938 | +63 991 731 1461</p>
            <h4>Office Locations:</h4>
            <p><i class="fas fa-map-marker-alt"></i> <b>Main Office:</b><br>Centro Salvador Bldg.,<br>18 Maginoo St., Tondo, Manila 1013</p>
            <p><i class="fas fa-map-marker-alt"></i> <b>Branch Office:</b><br>Casa Soledad & Vicente Bldg.,<br>063 Blk 1, Gasangan, Baseco, Brgy. 649, Port Area, Manila, 1018</p>
        </div>

        <div class="partners">
            <h4>Major Partners:</h4>
            <p>Chalice</p>
            <p>Maya's Hope</p>
            <p>John D.V. Salvador Foundation</p>
        </div>

        <div class="enterprise">
            <h4>Social Enterprise:</h4>
            <p>Be Blessed Marketplace</p>
            <p>Smokey Tours</p>
        </div>
    </div>
    @include('/FAQ')
</footer>




</body>
</html>