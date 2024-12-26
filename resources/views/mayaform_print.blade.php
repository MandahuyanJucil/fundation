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
            border: 1px solid #ddd;
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
        <h1>Personal Infomation</h1>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Sponsor</th>
                    <th>Dateofbirth</th>
                    <th>Nameofchild</th>
                    <th>School</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->Sponsor}}</td>
                    <td>{{$data->dateofbirth}}</td>
                    <td>{{$data->nameofchild}}</td>
                    <td>{{$data->school}}</td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Address</th>
                    <th>Grade</th>
                    <th>Sub site</th>
                    <th>Gender</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->address}}</td>
                    <td>{{$data->Grade}}</td>
                    <td>{{$data->sub_site}}</td>
                    <td>{{$data->gender}}</td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Reilogion</th>
                    <th>Fathername</th>
                    <th>Father_occupation</th>
                    <th>Mothername</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->reilogion}}</td>
                    <td>{{$data->fathername}}</td>
                    <td>{{$data->father_occupation}}</td>
                    <td>{{$data->mothername}}</td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>

        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Mother occupation</th>
                    <th>Father income</th>
                    <th>Mother income</th>
                    <th>Mother employment</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->mother_occupation}}</td>
                    <td>{{$data->father_income}}</td>
                    <td>{{$data->mother_income}}</td>
                    <td>{{$data->mother_employment}}</td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Evaluation</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Status</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->evaluation}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>{{$data->updated_at}}</td>
                    <td>{{$data->status}}</td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

     
    </div>
</body>
</html>
