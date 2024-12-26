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
        <table>
            <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Sponsor Site</th>
                    <th>Name Of Child</th>
                    <th>Date Of Birth</th>
                    <th>Name Of Child's School</th>
                    <th>Sub-Site</th>
                    <th>Gender</th>
                    <th>Religion</th>
                    <th>Name Of Father</th>
                    <th>Father's Monthly Income</th>
                    <th>Name Of Mother</th>
                    <th>Mother's Monthly Income</th>
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->Sponsor}}</td>
                    <td>{{$data->nameofchild}}</td>
                    <td>{{$data->dateofbirth}}</td>
                    <td>{{$data->school}}</td>
                    <td>{{$data->sub_site}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->reilogion}}</td>
                    <td>{{$data->fathername}}</td>
                    <td>{{$data->father_income}}</td>
                    <td>{{$data->mothername}}</td>
                    <td>{{$data->mother_income}}</td>
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
      <br>
      <br>
        <table>
            <thead>
                    <tr>             
                        <th>Employment of Father:</th>
                        <th>Employment of Mother:</th>
                    </tr>
            </thead>
            <tbody>
                    <td>{{$data->mother_employment}}</td>
                    <td>{{$data->father_employment}}</td>
            </tbody>
     
        </table>
     
    </div>
</body>
</html>
