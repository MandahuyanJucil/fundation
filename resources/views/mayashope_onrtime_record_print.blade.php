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
                    <th>Guardian</th>
                    <th>Contact details</th>
                    <th>Procedure</th>
                    <th>No of surgery done</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->guardian}}</td>
                    <td>{{$data->contact_details}}</td>
                    <td>{{$data->procedure}}</td>
                    <td>{{$data->no_of_surgery_done}}</td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
  <br>
  <br>
        <table>
        <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Date of admission</th>
                    <th>Date of surgery</th>
                    <th>Anesthesislologist</th>
                    <th>Additional doctors</th>
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->date_of_admission}}</td>
                    <td>{{$data->date_of_surgery}}</td>
                    <td>{{$data->anesthesislologist}}</td>
                    <td>{{$data->additional_doctors}}</td>
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <br>
  <br><br>
  <br>
        <table>
        <thead>
                <tr>
                    <!-- Generating 31 Columns -->
                    <th>Post op Notes</th>
                    <th>Additional Notes</th>
                    <th>Admin Notes</th>
                    
                    
                    
                   
                  
                </tr>
                
             
                
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr>
                   <td>{{$data->post_op_Notes}}</td>
                    <td>{{$data->additional_notes}}</td>
                    <td>{{$data->Admin_notes}}</td>
                 
               
                   
                   
                  
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>


     
    </div>
</body>
</html>
