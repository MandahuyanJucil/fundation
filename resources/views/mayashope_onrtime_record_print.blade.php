<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/dashboard/fundation/public/css/Mayaform.css">
    <title>Maya's Hope Surgery Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .main_second_div_top {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .main_second_div_top img {
            width: 30px;
            height: 30px;
        }
        h2 {
            margin: 0;
        }
        main{
            display:flex;

            justify-content: space-between;
            align-items: center;
        }
  
       img{
        height:15%;
        width: 30%;
    
    }
       
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .footer_container {
            margin-top: 30px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
   

    <main id="main">
        <div class="main_second_div">
            <div class="main_second_div_top">
                <h2>Maya's Hope Surgery Record</h2>
            </div>
            <img src="data:image/jpeg;base64,{{ $data->base64Image }}" alt="Image">
            <table class="table">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>{{$data->Admin_notes}}
                <tr>
                    <td>Guardian</td>
                    <td>{{$data->guardian}}</td>
                </tr>
                <tr>
                    <td>Contact Details</td>
                    <td>{{$data->contact_details}}</td>
                </tr>
                <tr>
                    <td>Procedure</td>
                    <td>{{$data->procedure}}</td>
                </tr>
                <tr>
                    <td>No. of Surgeries Done</td>
                    <td>{{$data->no_of_surgery_done}}</td>
                </tr>
                <tr>
                    <td>Date of Admission</td>
                    <td>{{$data->date_of_admission}}</td>
                </tr>
                <tr>
                    <td>Date of Surgery</td>
                    <td>{{$data->date_of_surgery}}</td>
                </tr>
                <tr>
                    <td>Anesthesiologist</td>
                    <td>{{$data->anesthesislologist}}</td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>{{$data->diagnosis}}</td>
                </tr>
                <tr>
                    <td>Additional Doctors</td>
                    <td>{{$data->additional_doctors}}</td>
                </tr>
                <tr>
                    <td>Post-op Notes</td>
                    <td>{{$data->post_op_Notes}}</td>
                </tr>
                <tr>
                    <td>Additional Notes</td>
                    <td>{{$data->additional_notes}}</td>
                </tr>
                <tr>
                    <td>Admin Notes</td>
                    <td>{{$data->Admin_notes}}</td>
                </tr>
            </table>
           
        </div>
    
        
    </main>

    <footer id="footer">
        <div class="footer_container">
        <table>
                <tr>
                    <th>Summary</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Paid by</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                    <td>{{$data->summary}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->amount}}</td>
                    <td>{{$data->paid_by}}</td>
                    <td>{{$data->remarks}}</td>
                </tr>
                <tr>
                    
                    <td>{{$data->summary2}}</td>
                    <td>{{$data->description2}}</td>
                    <td>{{$data->amount2}}</td>
                    <td>{{$data->paid_by2}}</td>
                    <td>{{$data->remarks2}}</td>
                </tr>
                <tr>
                <td>{{$data->summary3}}</td>
                    <td>{{$data->description3}}</td>
                    <td>{{$data->amount3}}</td>
                    <td>{{$data->paid_by3}}</td>
                    <td>{{$data->remarks3}}</td>
                </tr>
                <tr>
                <td>{{$data->summary4}}</td>
                    <td>{{$data->description4}}</td>
                    <td>{{$data->amount4}}</td>
                    <td>{{$data->paid_by4}}</td>
                    <td>{{$data->remarks4}}</td>
                </tr>
                <tr>
                <td>{{$data->summary5}}</td>
                    <td>{{$data->description5}}</td>
                    <td>{{$data->amount5}}</td>
                    <td>{{$data->paid_by5}}</td>
                    <td>{{$data->remarks5}}</td>
                </tr>
                <tr>
                <td>{{$data->summary6}}</td>
                    <td>{{$data->description6}}</td>
                    <td>{{$data->amount6}}</td>
                    <td>{{$data->paid_by6}}</td>
                    <td>{{$data->remarks6}}</td>
                </tr>
               
            </table>
        </div>
    </footer>
</body>
</html>
