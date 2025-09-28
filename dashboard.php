<?php 
session_start();
include_once('config.php');

if (empty($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();
$users_data = $selectUsers->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Nike</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset and base styles */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f4f4; }

        a { text-decoration: none; }

        /* Header */
        header {
            background-color: #111;
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .brand {
            font-size: 1.5em;
            font-weight: bold;
        }

        header .logout {
            font-size: 1em;
            color: #ff9000;
        }

        header .logout:hover {
            color: #ff6600;
        }

        /* Layout */
        .dashboard-wrapper {
            display: flex;
        }

        .sidebar {
            width: 220px;
            background-color: #fff;
            padding: 30px 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.05);
            min-height: 100vh;
        }

        .sidebar h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .sidebar a {
            display: block;
            margin-bottom: 15px;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .sidebar a:hover {
            color: #ff9000;
        }

        .main {
            flex-grow: 1;
            padding: 40px;
        }

        .main h2 {
            margin-bottom: 30px;
            font-size: 2em;
            color: #111;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
        }

        th {
            background-color: #ff9000;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn-link {
            color: #ff9000;
            font-weight: bold;
        }

        .btn-link:hover {
            text-decoration: underline;
            color: #ff6600;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .dashboard-wrapper {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
                justify-content: center;
                padding: 20px;
            }

            .main {
                padding: 20px;
            }

            th, td {
                font-size: 0.9em;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="brand">Nike Dashboard</div>
    <div>
        <span>Welcome, <?= $_SESSION['username']; ?> | </span>
        <a href="logout.php" class="logout">Sign Out</a>
    </div>
</header>

<div class="dashboard-wrapper">
    <aside class="sidebar">
        <h3>Navigation</h3>
        <a href="home.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
    </aside>

    <main class="main">
        <h2>User Management</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users_data as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']); ?></td>
                        <td><?= htmlspecialchars($user['username']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                        <td><a class="btn-link" href="editUsers.php?id=<?= $user['id']; ?>">Update</a></td>
                        <td><a class="btn-link" href="deleteUsers.php?id=<?= $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</div>

</body>
</html>
