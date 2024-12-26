<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5EFFF; /* Background color */
        margin: 0;
        padding: 0;
    }

    header {
   
        color: white;
        padding: 2%;
        text-align: center;
    }

    h2 {
        margin: 0;
        color:white;
    }

    /* Main container styles */
    #main {
        background-color:#E5D9F2;
        padding: 3%;
        margin: 3%;
        border-radius: 8px;
    }

    .main_second_div {
        margin-top: 3%;
    }

    .main_second_div_top {
        background-color: #A294F9; /* Background color for the top section */
        color: white;
        padding: 2%;
        border-radius: 8px;
        text-align: center;
    }

    h3 {
        margin-top: 3%;
        color: #4B5945; /* Header color */
    }

    /* Table styles */
    table {
        width: 100%;
        margin-top: 2%;
        border-collapse: collapse;
        background-color: #f9f9f9;
    }

    th, td {
        padding: 2%;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #66785F; /* Table header background color */
        color: white;
    }

    td a {
        color: #4B5945; /* Link color */
        text-decoration: none;
    }

    td a:hover {
        text-decoration: underline;
    }

    .actions {
        display: flex;
        gap: 3%;
    }

    .actions a {
        background-color: #91AC8F; /* Action button background color */
        color: white;
        padding: 1% 3%;
        border-radius: 5px;
        text-decoration: none;
        font-size: 1.2em;
    }

    .actions a:hover {
        background-color: #66785F; /* Action button hover color */
    }

    /* Styling for individual record sections */
    .record-section {
        margin-bottom: 5%;
    }

    .record-section table {
        margin-top: 2%;
    }

    /* Footer styles */
    footer {
        background-color: #4B5945; /* Footer background color */
        color: white;
        text-align: center;
        padding: 2%;
        position: fixed;
        width: 100%;
        bottom: 0;
    }

    /* CSS for both pie and bar charts */
    #charts-container {
    display: flex;  /* Use flexbox to position elements */
    flex-direction: row;  /* Arrange charts horizontally */
    justify-content:space-around;  /* Add space between the charts */
    gap: 1%;  /* Optional: Add a small gap between the charts */
}

#recordsChart, #createdUpdatedChart {
    width:200%;  /* Set each chart to take up 48% of the container's width */
    height: auto;  /* Maintain aspect ratio */
}


    /* Mobile Responsiveness */
    @media screen and (max-width: 768px) {
        body {
            font-size: 4%;
        }

        header {
            padding: 4%;
        }

        .main_second_div {
            padding: 3%;
        }

        .main_second_div_top h2 {
            font-size: 4.5%;
        }

        table {
            font-size: 3.5%;
        }

        th, td {
            padding: 3%;
        }

        .actions {
            flex-direction: column;
            gap: 2%;
        }

        footer {
            padding: 3%;
        }
    }

    /* For phone screens */
    @media screen and (max-width: 480px) {
        body {
            font-size: 3.5%;
        }

        header {
            padding: 5%;
        }

        .main_second_div {
            padding: 3%;
        }

        .main_second_div_top h2 {
            font-size: 5%;
        }

        table {
            font-size: 3%;
        }

        th, td {
            padding: 2%;
        }

        h3 {
            font-size: 3.5%;
        }

        .actions a {
            font-size: 3%;
            padding: 2% 4%;
        }

        footer {
            padding: 3%;
        }

        /* Make tables scrollable */
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .record-section {
            padding: 3%;
        }
    }
    </style>
</head>
<body>

    <header id="header">
        @include('/header')
    </header>

    <main id="main">
        <div class="main_second_div">
            <div class="main_second_div_top">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Create a container to hold the charts -->
            <div id="charts-container">
                <!-- Adding the pie chart -->
                <div class="main_second_div">
                    <h3>Records Overview</h3>
                    <canvas id="recordsChart"></canvas>
                </div>

                <!-- Adding another chart for created and updated -->
                <div class="main_second_div">
                    <h3>Created and Updated Records</h3>
                    <canvas id="createdUpdatedChart"></canvas>
                </div>
            </div>
        </div>
    </main>

    <!-- Internal JavaScript for the charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Get the count values from the server
        var mayashopeOnetimeCount = {{ $mayashopeOnetimeCount }};
        var chaliceCount = {{ $chaliceCount }};
        var eventCount = {{ $eventCount }};

        // Data for the created_at and updated_at fields
        var createdDates = @json($createdDates);  // Data should be a list of dates
        var updatedDates = @json($updatedDates);  // Data should be a list of dates

        // Get the canvas element for the pie chart
        var ctx = document.getElementById('recordsChart').getContext('2d');

        // Create a pie chart
        var recordsChart = new Chart(ctx, {
            type: 'pie', // Pie chart type
            data: {
                labels: ['Mayashope Onetime', 'Maya Sponsorship', 'Events'],
                datasets: [{
                    label: 'Total Records',
                    data: [mayashopeOnetimeCount, chaliceCount, eventCount],
                    backgroundColor: ['rgba(45, 74, 40, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(75, 192, 192, 0.6)'],
                    borderColor: ['rgb(45, 74, 40)', 'rgb(255, 159, 64)', 'rgb(75, 192, 192)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });

        // Get the canvas element for the created/updated chart
var ctx2 = document.getElementById('createdUpdatedChart').getContext('2d');

// Function to count records per month
function countRecordsByMonth(dates) {
    var counts = {};
    dates.forEach(function(date) {
        var month = new Date(date).getMonth(); // Get month index (0-11)
        counts[month] = (counts[month] || 0) + 1;
    });
    return counts;
}

// Count records by month for created and updated dates
var createdCountByMonth = countRecordsByMonth(createdDates);
var updatedCountByMonth = countRecordsByMonth(updatedDates);

// Create a line chart for created and updated records
var createdUpdatedChart = new Chart(ctx2, {
    type: 'line', // Change to 'line' chart
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
            {
                label: 'Created Records',
                data: Object.values(createdCountByMonth),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgb(54, 162, 235)',
                borderWidth: 2,
                fill: true,
                tension: 0.3 // Smooth curves
            },
            {
                label: 'Updated Records',
                data: Object.values(updatedCountByMonth),
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                borderWidth: 2,
                fill: true,
                tension: 0.3
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

    </script>

</body>
</html>
