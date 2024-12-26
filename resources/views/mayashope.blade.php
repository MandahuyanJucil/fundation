<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maya's Hope Sponsored</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #B2C9AD;
    animation: fadeIn 1s ease-in; /* Fade-in for the body */
}

header, footer {
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    animation: slideDown 1s ease-in; /* Slide-down animation for header and footer */
}

main {
    padding: 20px;
}

h2 {
    color: #4B5945;
    text-align: center;
}

.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
    animation: fadeIn 1.2s ease-in; /* Slight delay for search form fade-in */
}

.search-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #66785F;
    border-radius: 4px;
    width: 300px;
    transition: box-shadow 0.3s ease; /* Smooth transition for focus effect */
}

.search-input:focus {
    outline: none;
    box-shadow: 0 0 10px #91AC8F; /* Glowing border on focus */
}

.search-button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #A294F9;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.search-button:hover {
    background-color: #A294F9;
    transform: scale(1.05); /* Slight zoom effect */
}

.content-layout {
    display: flex;
    gap: 20px;
}

.table-container, .chart-container {
    flex: 0 0 45%;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 1.2s ease; /* Slide up and fade-in */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    border-radius: 8px;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
    transition: background-color 0.3s ease; /* Smooth transition for hover */
}

table th {
    background-color: #A294F9;
    color: #fff;
}

table tr:hover td {
    background-color: #f0f8f0; /* Light green background on hover */
}

.actions img {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.actions img:hover {
    transform: scale(1.2); /* Slight zoom effect on hover */
}

span {
    color: #66785F;
}

/* Keyframe Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header id="header">
        @include('/header')
    </header>

    <main id="main">
        <div class="main_second_div">
            <h2>Chalice</h2>

            <form action="http://localhost/dashboard/fundation/public/search" method="get" class="search-form">
                <input type="text" name="search" placeholder="Search..." class="search-input">
                <button type="submit" class="search-button">Search</button>
                <a href="http://localhost/dashboard/fundation/public/mayaform" class="create-new">
                    <span>CREATE NEW</span>
                </a>
            </form>

            <div class="content-layout">
                <!-- Left Section: Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Grade</th>
                                <th>BIRTHDATE</th>
                                <th>Date Created</th>
                                <th>Score</th>
                                <th class="actions">Action</th>
                            </tr>
                        </thead>           
                        <tbody>
                        @foreach ($mayashope as $data)
                            <tr>
                                <td><a href={{"mayashope_view/".$data['id']}} style="color:black;">view</a></td>
                                <td>{{$data['nameofchild']}}</td>
                                <td>{{$data['Grade']}}</td>
                                <td>{{$data['dateofbirth']}}</td>
                                <td>{{$data['created_at']}}</td> <!-- Displaying date created -->
                                <td>{{$data['evaluation']}}</td>
                                <td class="actions">
                                    <a href={{"mayashope_edit/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/edit.png" alt="edit"></a>
                                    <a href={{"mayashope_delete/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/delete.png" alt="delete"></a>
                                    <a href={{"mayaform_print/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/print.png" alt="print"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Right Section: Graph -->
                <div class="chart-container">
                    <canvas id="dateScoreChart"></canvas>
                </div>
            </div>
        </div>
    </main>

    <script>
        const ctx = document.getElementById('dateScoreChart').getContext('2d');

        // Prepare data for the graph
        const labels = [@foreach ($mayashope as $data) '{{$data['created_at']}}', @endforeach];
        const scores = [@foreach ($mayashope as $data) {{$data['evaluation']}}, @endforeach];

        // Create the graph
        const dateScoreChart = new Chart(ctx, {
            type: 'line', // Line chart to show trends
            data: {
                labels: labels, // Dates
                datasets: [{
                    label: 'Scores by Date Created',
                    data: scores, // Scores corresponding to the dates
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.3, // Smooth lines
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Date Created'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Score'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
