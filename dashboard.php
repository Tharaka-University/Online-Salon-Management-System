<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Dashboard</title>
    <style>
        /* Basic styles for layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #2C3E50;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar a:hover {
            background-color: #34495E;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .header {
            background-color: #2980B9;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .dashboard-section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 48%;
            margin-bottom: 20px;
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            font-size: 24px;
            font-weight: bold;
        }

        .card .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2980B9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .card .btn:hover {
            background-color: #3498DB;
        }

        /* For small screens, stack the dashboard sections */
        @media (max-width: 768px) {
            .dashboard-section {
                flex-direction: column;
            }

            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 style="text-align:center; color: white;">Mega Beauty</h2>
        <a href="#">Dashboard</a>
        <a href="#">Appointments</a>
        <a href="#">Clients</a>
        <a href="#">Services</a>
        <a href="#">Staff</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="header">
            <h1>Welcome, [User Name]</h1>
            <p>Your Mega Beauty Dashboard</p>
        </div>

        <!-- Dashboard Sections -->
        <div class="dashboard-section">

            <!-- Upcoming Appointments Card -->
            <div class="card">
                <h3>Upcoming Appointments</h3>
                <p>5</p>
                <p>Appointments Scheduled Today</p>
                <a href="#" class="btn">View Appointments</a>
            </div>

            <!-- Revenue Summary Card -->
            <div class="card">
                <h3>Today's Revenue</h3>
                <p>$1,200</p>
                <p>Revenue Today</p>
                <a href="#" class="btn">View Revenue</a>
            </div>
        </div>

        <div class="dashboard-section">
            <!-- Top Services Card -->
            <div class="card">
                <h3>Top Services</h3>
                <ul>
                    <li>Haircut - $50</li>
                    <li>Facial Treatment - $70</li>
                    <li>Massage - $40</li>
                </ul>
                <a href="#" class="btn">View All Services</a>
            </div>

            <!-- Staff Overview Card -->
            <div class="card">
                <h3>Staff Overview</h3>
                <p>10 Active Staff</p>
                <p>2 New Hires This Month</p>
                <a href="#" class="btn">View Staff</a>
            </div>
        </div>

        <div class="dashboard-section">
            <!-- Inventory Overview Card -->
            <div class="card">
                <h3>Inventory Overview</h3>
                <p>20% of Products Running Low</p>
                <a href="#" class="btn">View Inventory</a>
            </div>

            <!-- Client Feedback Card -->
            <div class="card">
                <h3>Latest Customer Feedback</h3>
                <p>"Great service, loved the haircut!"</p>
                <a href="#" class="btn">View Feedback</a>
            </div>
        </div>
    </div>

</body>
</html>
