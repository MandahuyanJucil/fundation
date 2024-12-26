<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maya's Hope Sponsored</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js CDN -->
    <style>
   /* General Body with Fade-in Animation */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #B2C9AD;
    animation: fadeIn 1.2s ease-in;
}

/* Header and Footer with Slide-Down Animation */

/* Header Title Fade-in Effect */
h2 {
    color: #4B5945;
    text-align: center;
    animation: fadeInUp 1s ease-in-out;
}

/* Search Form Animation */
.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
    animation: fadeInUp 1.2s ease-in;
}

/* Search Button with Hover Effect */
.search-button {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #91AC8F;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.search-button:hover {
    background-color: #66785F;
    transform: scale(1.05); /* Slight zoom effect */
}

/* Table Container with Fade-in Animation */
.table-container {
    flex: 1 1 45%;
    padding: 20px;
    border-radius: 8px;
    animation: fadeIn 1.5s ease-in;
}

/* Table Row Hover Effect */
table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 10px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 8px;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
    transition: background-color 0.3s ease;
}

table th {
    background-color: #A294F9;
    color: #fff;
}

table tr:hover {
    background-color: #f0f5f0;
    transition: background-color 0.3s ease;
}

/* Image Actions with Hover Scale Animation */
.actions img {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.actions img:hover {
    transform: scale(1.2);
    opacity: 0.8;
}

/* Content Layout for side-by-side display */
.content-layout {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

/* Left Section: Table */
.table-container {
    flex: 1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    animation: fadeIn 1.5s ease-in;
}

/* Right Section: Graph */
.graph-container {
    flex: 1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    text-align: center;
    animation: fadeInUp 1.5s ease-in;
}


/* Footer Links */
footer a {
    color: #fff;
    text-decoration: underline;
    transition: color 0.3s ease;
}

footer a:hover {
    text-decoration: none;
    color: #A294F9; /* Subtle color change */
}

span{
    color: #A294F9;
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
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
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
            <h2>Events</h2>

            <form action="http://localhost/dashboard/fundation/public/event_search" method="get" class="search-form">
                <a href="http://localhost/dashboard/fundation/public/add_events" class="create-new">
                    <span>CREATE NEW</span>
                </a>
            </form>

            <div class="content-layout">
                <!-- Left Section: Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th class="actions">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event as $data)
                            <tr>
                                <td>{{$data['event']}}</td>
                                <td>{{$data['date']}}</td>
                                <td>{{$data['location']}}</td>
                                <td class="actions">
                                    <a href = {{"events_edit/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/edit.png" alt="edit"></a>
                                    <a href = {{"events_delete/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/delete.png" alt="edit"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Right Section: Graph -->
                <div class="graph-container">
                    <h3>Events Graph</h3>
                    <canvas id="eventsChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </main>

    <!-- Internal JavaScript -->
    <script>
        // Example data, replace it with actual data from your backend
        const eventData = @json($event);  // This converts PHP data to JavaScript object
        
        // Extract event names and count the occurrences of each date
        const eventDates = eventData.map(event => event.date);
        const dateCounts = eventDates.reduce((acc, date) => {
            acc[date] = (acc[date] || 0) + 1;
            return acc;
        }, {});

        // Prepare chart data
        const labels = Object.keys(dateCounts);
        const data = Object.values(dateCounts);

        // Create chart
        const ctx = document.getElementById('eventsChart').getContext('2d');
        const eventsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Events',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
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
