<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maya's Hope Sponsored</title>
    <style>
    /* General Styling */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #B2C9AD;
    animation: fadeIn 1.5s ease-in;
}

/* Main Section */
main {
    padding: 20px;
}

/* Heading with Slide-In Animation */
h2 {
    color: #4B5945;
    text-align: center;
    animation: slideIn 1s ease-out;
}

/* Search Form */
.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
}

/* Search Input */
.search-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #66785F;
    border-radius: 4px;
    width: 300px;
    transition: box-shadow 0.3s ease;
}

.search-input:focus {
    box-shadow: 0 0 8px rgba(102, 120, 95, 0.7);
    outline: none;
}

/* Search Button with Hover Animation */
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
    transform: scale(1.05);
}

/* Link with Hover Effect */
.create-new {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #A294F9;
    gap: 5px;
    font-size: 16px;
    transition: color 0.3s ease;
}

.create-new:hover {
    color: #A294F9;
}

.create-new img {
    width: 24px;
    height: 24px;
    transition: transform 0.3s ease;
}

.create-new:hover img {
    transform: rotate(10deg);
}

/* Content Layout */
.content-layout {
    display: flex;
    gap: 20px;
}

/* Table with Zoom-In Animation */
.table-container {
    flex: 0 0 30%;
    padding: 20px;
    border-radius: 8px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-radius: 8px;
    animation: zoomIn 1s ease-in;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

table th {
    background-color: #A294F9;
    color: #fff;
}

/* Actions with Hover Animation */
.actions img {
    width: 20px;
    height: 20px;
    margin: 0 5px;
    cursor: pointer;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.actions img:hover {
    opacity: 0.8;
    transform: scale(1.1);
}

/* Chart Container */
.chart-container {
    width: 80%;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: fadeInUp 1.5s ease-out;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes zoomIn {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
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
</head>
<body>
    <header id="header">
        @include('/header')
    </header>

    <main id="main">
        <div class="main_second_div">
            <h2>Mayashope Onetime</h2>

            <form action="http://localhost/dashboard/fundation/public/search_mayaonetime" method="get" class="search-form">
                <input type="text" name="search" placeholder="Search..." class="search-input">
                <button type="submit" class="search-button">Search</button>
                <a href="http://localhost/dashboard/fundation/public/mayashope_onetime" class="create-new">
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
                                <th>guardian</th>
                                <th>contact_details</th>
                                <th>Name of child</th>
                                <th>no_of_surgery_done</th>
                                <th>date_of_surgery</th>
                                <th class="actions">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mayashope_onrtime_record as $data)
                            <tr>
                                <td><a href={{"mayashope_onrtime_record_view/".$data['id']}} style="color:black;">view</a></td>
                                <td>{{$data['guardian']}}</td>
                                <td>{{$data['contact_details']}}</td>
                                <td>{{$data['child_name']}}</td>
                                <td>{{$data['no_of_surgery_done']}}</td>
                                <td>{{$data['date_of_surgery']}}</td>
                                <td class="actions">
                                    <a href={{"mayashope_onrtime_record_edit/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/edit.png" alt="edit"></a>
                                    <a href={{"mayashope_onrtime_record_delete/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/delete.png" alt="delete"></a>
                                    <a href={{"mayashope_onrtime_record_print/".$data['id']}}><img src="http://localhost/dashboard/fundation/public/img/print.png" alt="print"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Right Section: Chart -->
                <div class="chart-container">
                    <canvas id="childChart"></canvas>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Extract data from Laravel
            const childNames = @json($mayashope_onrtime_record->pluck('child_name'));
            const creationDates = @json($mayashope_onrtime_record->pluck('date_created'));

            // Group data by dates for meaningful visualization
            const dataGroupedByDate = creationDates.reduce((acc, date) => {
                acc[date] = (acc[date] || 0) + 1; // Count occurrences per date
                return acc;
            }, {});

            // Prepare labels and data for the graph
            const labels = Object.keys(dataGroupedByDate);
            const dataValues = Object.values(dataGroupedByDate);

            // Chart.js setup
            const ctx = document.getElementById('childChart').getContext('2d');
            const childChart = new Chart(ctx, {
                type: 'bar', 
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Number of Children Sponsored',
                        data: dataValues,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
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
                            title: {
                                display: true,
                                text: 'Number of Children'
                            },
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
