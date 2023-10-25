<?php $current_page = basename($_SERVER['REQUEST_URI']);
?>
<div class="sidebar">
    <h2 class="welcome-message text-center">EVSU</h2>
    <nav>
        <ul>
            <li>
                <a href="./home.php"><i class="fa-solid fa-house <?php if ($current_page === 'home.php') echo 'active'; ?>" title="Homepage"></i></a>
            </li>

            <li>
                <a href="./personaldetails.php"><i class="fa-solid fa-id-card <?php if ($current_page === 'personaldetails.php') echo 'active'; ?>" title="Personal Details"></i> </a>
            </li>

            <li>
                <a href="./academicperformance.php"><i class="fa-solid fa-user-tie <?php if ($current_page === 'academicperformance.php') echo 'active'; ?>" title="Academic Performance"></i></a>
            </li>

            <li>
                <a href="./studentprofile.php" title="Student Profile"><i class="fa-solid fa-user-gear <?php if ($current_page === 'studentprofile.php') echo 'active'; ?>"></i></a>
            </li>

            <li class="logout-link">
                <a href="#"><i class="fa-solid fa-right-from-bracket" title="Logout"></i></a>
            </li>
        </ul>
    </nav>
</div>

