<?php
session_start();
include_once('config.php');

// Check if user is logged in
if (empty($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$user_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
if (!$user_id) {
    header("Location: dashboard.php");
    exit();
}

$message = '';
$error = '';

// Handle deletion confirmation
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['confirm_delete'])) {
    try {
        // Prevent users from deleting themselves
        $currentUserSql = "SELECT id FROM users WHERE username = :username";
        $currentUserStmt = $conn->prepare($currentUserSql);
        $currentUserStmt->bindParam(':username', $_SESSION['username']);
        $currentUserStmt->execute();
        $currentUser = $currentUserStmt->fetch(PDO::FETCH_ASSOC);
        
        if ($currentUser && $currentUser['id'] == $user_id) {
            $error = "You cannot delete your own account.";
        } else {
            // Delete the user
            $deleteSql = "DELETE FROM users WHERE id = :id";
            $deleteStmt = $conn->prepare($deleteSql);
            $deleteStmt->bindParam(':id', $user_id);
            
            if ($deleteStmt->execute()) {
                header("Location: dashboard.php?message=User deleted successfully");
                exit();
            } else {
                $error = "Error deleting user.";
            }
        }
    } catch (PDOException $e) {
        $error = "Database error: " . $e->getMessage();
    }
}

// Fetch user data to display
try {
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        header("Location: dashboard.php");
        exit();
    }
} catch (PDOException $e) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><?php echo "Welcome " . $_SESSION['username']; ?></a>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="logout.php">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">
                            <span data-feather="file"></span>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list_movies.php">
                            <span data-feather="file"></span>
                            Movies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookings.php">
                            <span></span>
                            Bookings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Delete User</h1>
                <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
            </div>

            <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-danger text-white">
                            <h5 class="card-title mb-0">Confirm Deletion</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Are you sure you want to delete this user? This action cannot be undone.</p>
                            
                            <div class="mb-3">
                                <strong>User Details:</strong>
                            </div>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><strong>ID:</strong> <?php echo htmlspecialchars($user['id']); ?></li>
                                <li class="list-group-item"><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></li>
                                <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
                            </ul>
                            
                            <form method="POST" class="d-inline">
                                <input type="hidden" name="confirm_delete" value="1">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you absolutely sure you want to delete this user?')">
                                    Yes, Delete User
                                </button>
                            </form>
                            <a href="dashboard.php" class="btn btn-secondary ms-2">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

</body>
</html>
