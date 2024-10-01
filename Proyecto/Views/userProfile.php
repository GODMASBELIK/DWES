<!-- Views/userProfile.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>ID: <?php echo htmlspecialchars($user->getIdUser()); ?></p>
    <p>Name: <?php echo htmlspecialchars($user->getUserName()); ?></p>
    <p>Role: <?php echo htmlspecialchars($user->getUserRole()); ?></p>

    <?php if ($user->isAdmin()): ?>
        <p>The user is an admin.</p>
    <?php else: ?>
        <p>The user is not an admin.</p>
    <?php endif; ?>
</body>
</html>
