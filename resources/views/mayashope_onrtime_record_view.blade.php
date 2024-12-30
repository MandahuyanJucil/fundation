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
        height:30%;
        width: 20%;
    
    }
       
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table {
            width: 300%;
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
    <header>
        @include('/header')
    </header>

    <main id="main">
        <div class="main_second_div">
            <div class="main_second_div_top">
                <a href="http://localhost/dashboard/fundation/public/mayashope_onrtime_record">
                    <img src="http://localhost/dashboard/fundation/public/img/arrow.png" alt="Back">
                </a>
                <h2>Maya's Hope Surgery Record</h2>
            </div>
            <table class="table">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td>Guardian</td>
                    <td>{{$maya['guardian']}}</td>
                </tr>
                <tr>
                    <td>Contact Details</td>
                    <td>{{$maya['contact_details']}}</td>
                </tr>
                <tr>
                    <td>Procedure</td>
                    <td>{{$maya['procedure']}}</td>
                </tr>
                <tr>
                    <td>No. of Surgeries Done</td>
                    <td>{{$maya['no_of_surgery_done']}}</td>
                </tr>
                <tr>
                    <td>Date of Admission</td>
                    <td>{{$maya['date_of_admission']}}</td>
                </tr>
                <tr>
                    <td>Date of Surgery</td>
                    <td>{{$maya['date_of_surgery']}}</td>
                </tr>
                <tr>
                    <td>Anesthesiologist</td>
                    <td>{{$maya['anesthesislologist']}}</td>
                </tr>
                <tr>
                    <td>Diagnosis</td>
                    <td>{{$maya['diagnosis']}}</td>
                </tr>
                <tr>
                    <td>Additional Doctors</td>
                    <td>{{$maya['additional_doctors']}}</td>
                </tr>
                <tr>
                    <td>Post-op Notes</td>
                    <td>{{$maya['post_op_Notes']}}</td>
                </tr>
                <tr>
                    <td>Additional Notes</td>
                    <td>{{$maya['additional_notes']}}</td>
                </tr>
                <tr>
                    <td>Admin Notes</td>
                    <td>{{$maya['Admin_notes']}}</td>
                </tr>
            </table>
           
        </div>
        <img src="http://localhost/dashboard/fundation/public/storage/{{$maya['image']}}" alt="image">
    </main>

    <footer id="footer">
        <div class="footer_container">
        <?php
$totalAmount = $maya['amount'] + $maya['amount2'] + $maya['amount3'] + $maya['amount4'] + $maya['amount5'] + $maya['amount6'];
?>

<table>
    <tr>
        <th>Summary</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Paid by</th>
        <th>Remarks</th>
    </tr>
    <tr>
        <td><?=$maya['summary']?></td>
        <td><?=$maya['description']?></td>
        <td><?=$maya['amount']?></td>
        <td><?=$maya['paid_by']?></td>
        <td><?=$maya['remarks']?></td>
    </tr>
    <tr>
        <td><?=$maya['summary2']?></td>
        <td><?=$maya['description2']?></td>
        <td><?=$maya['amount2']?></td>
        <td><?=$maya['paid_by2']?></td>
        <td><?=$maya['remarks2']?></td>
    </tr>
    <tr>
        <td><?=$maya['summary3']?></td>
        <td><?=$maya['description3']?></td>
        <td><?=$maya['amount3']?></td>
        <td><?=$maya['paid_by3']?></td>
        <td><?=$maya['remarks3']?></td>
    </tr>
    <tr>
        <td><?=$maya['summary4']?></td>
        <td><?=$maya['description4']?></td>
        <td><?=$maya['amount4']?></td>
        <td><?=$maya['paid_by4']?></td>
        <td><?=$maya['remarks4']?></td>
    </tr>
    <tr>
        <td><?=$maya['summary5']?></td>
        <td><?=$maya['description5']?></td>
        <td><?=$maya['amount5']?></td>
        <td><?=$maya['paid_by5']?></td>
        <td><?=$maya['remarks5']?></td>
    </tr>
    <tr>
        <td><?=$maya['summary6']?></td>
        <td><?=$maya['description6']?></td>
        <td><?=$maya['amount6']?></td>
        <td><?=$maya['paid_by6']?></td>
        <td><?=$maya['remarks6']?></td>
    </tr>
    <tr>
        <th colspan="2">Total</th>
        <th><?=$totalAmount?></th>
        <th colspan="2"></th>
    </tr>
</table>

</body>
</html>
