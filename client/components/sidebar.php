<?php $current_page = basename($_SERVER['REQUEST_URI']);
?>
<div class="sidebar">
    <h2 class="welcome-message text-center">Admin</h2>
    <nav>
        <ul>
            <li <?php if ($current_page === 'home.php') echo 'class="active"'; ?>>
                <a href="../admin/home.php"><i class="fa-solid fa-house <?php if ($current_page === 'home.php') echo 'active'; ?>" title="Homepage"></i></a>
            </li>

            <li <?php if ($current_page === 'dashboard.php') echo 'class="active"'; ?>>
                <a href="../admin/dashboard.php"><i class="fa-solid fa-gauge-high <?php if ($current_page === 'dashboard.php') echo 'active'; ?>" title="Dashboard"></i> </a>
            </li>

            <li <?php if ($current_page === 'addstudent.php') echo 'class="active"'; ?>>
                <a href="../admin/addstudent.php"><i class="fa-solid fa-user-plus <?php if ($current_page === 'addstudent.php') echo 'active'; ?>" title="Add New Student"></i></a>
            </li>

            <li <?php if ($current_page === 'studentlist.php') echo 'class="active"'; ?>>
                <a href="../admin/studentlist.php" title="View Students"><i class="fa-solid fa-users <?php if ($current_page === 'studentlist.php') echo 'active'; ?>"></i></a>
            </li>

            <li <?php if ($current_page === 'studentreport.php') echo 'class="active"'; ?>>
                <a href="../admin/studentreport.php"><i class="fa-solid fa-file-contract <?php if ($current_page === 'studentreport.php') echo 'active'; ?>" title="Generate Report"></i></a>
            </li>

            <li <?php if ($current_page === 'about.php') echo 'class="active"'; ?>>
                <a href="../admin/about.php"><i class="fa-solid fa-circle-info <?php if ($current_page === 'about.php') echo 'active'; ?>" title="About"></i></a>
            </li>

            <li class="logout-link">
                <a href="#"><i class="fa-solid fa-right-from-bracket" title="Logout"></i></a>
            </li>
        </ul>
    </nav>
</div>

