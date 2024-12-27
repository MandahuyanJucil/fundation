<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table</title>
    <style>
        /* Basic Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 2px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        /* Make the table horizontally scrollable */
        .table-container {
            overflow-x: auto;
        }
        img{
            width: 15%;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            th, td {
                font-size: 12px;
                padding: 6px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                font-size: 10px;
                padding: 4px;
            }
        }
    </style>
</head>
<body>
    <div class="table-container">
    <img src="data:image/jpeg;base64,{{ $data->base64Image }}" alt="Image">
        <table>
            <thead> 
                <h2>Personal Information</h2>
                <tr>
                   
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Birthdate</th>
                    <th>YEARSTARTED</th>
                    <th>Status</th>
                    <th>Address</th>
                    <th>Religion</th>
                    <th>Hobbies</th>
                    <th>Diagnosis</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->fname}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->age}}</td>
                    <td>{{$data->birthdate}}</td>
                    <td>{{$data->YEARSTARTED}}</td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->religion}}</td>
                    <td>{{$data->hobbies}}</td>
                    <td>{{$data->diagnosis}}</td>
                 
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
      <br>
      <br>
        <table>
            <thead> <h2>Family Information</h2>
                    <tr> 
                       
                        <th>Mother Name</th>
                        <th>Father Name</th>
                        <th>Mother Occupation</th>
                        <th>Father Occupation</th>
                        
                        
                    </tr>
            </thead>
            <tbody>   
                    <td>{{$data->mothername}}</td>
                    <td>{{$data->fathername}}</td>
                    <td>{{$data->mother_occupation}}</td>
                    <td>{{$data->father_occupation}}</td>
                             
                    
                   
            </tbody>
     
        </table>
        <br>
        <table>
            <thead>
            <h2>Contact Information</h2>
                    <tr> 
                      
                       <th>Contact Person</th>
                        <th>Relation</th>
                        <th>Phone number</th>
                        
                    </tr>
            </thead>
            <tbody>   
                    <td>{{$data->Contact_Person}}</td>
                    <td>{{$data->Relation}}</td>
                    <td>{{$data->Phone_Number}}</td>           
                    
                   
            </tbody>
     
        </table>
<br>
        <table>
            <h2>Living Condition</h2>
            <thead>
                     
                        <th>Running Water</th>
                        <th>Electricity</th>
                        <th>Latrine</th>
                        <th>Walls</th>
                        <th>Foor</th>
                        <th>Number of Rooms</th>
            </thead>

            <tbody>
                    <td>{{$data->Running_Water}}</td>
                    <td>{{$data->Electricity}}</td>
                    <td>{{$data->Latrine}}</td>
                    <td>{{$data->Walls}}</td>
                    <td>{{$data->Floor}}</td>
                    <td>{{$data->No_of_Rooms}}</td>
            </tbody>
        </table>
        <br>
        <table>
        <h2>Child Details</h2>
            <thead>
                       
                        <th>Child History of Diagnosis</th>
                        <th>Current Condition of the Child</th>
                        <th>Additional Notes</th>
                        <th>Prepared by</th>
            </thead>

            <tbody>
                    
                    <td>{{$data->Child_History_of_Diagnosis}}</td>
                    <td>{{$data->Current_Condition_of_the_Child}}</td>
                    <td>{{$data->Additional_Notes}}</td>
                    <td>{{$data->Prepared_by}}</td>
                    
            </tbody>
        </table>
     
    </div>
 

</body>
</html>
