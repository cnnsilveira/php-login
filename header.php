<header>
    <div class="header-content">
        <div class="welcome-wrap">
            <span class="js-welcome-first">Welcome, </span><span class="js-welcome-second"><?php echo isset($_SESSION['id']) ? $_SESSION['name'] : 'Stranger' ?></span>
        </div>
        <div class="btn-wrap">
            <?php 
            
            if (!isset($_SESSION['id'])) { ?>

                <a href="login.php" role="button" class="blue-bg">Log In</a>
                <a href="#" role="button" class="orange-bg">Register</a>

            <?php } else { ?>

                <a href="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'index.php' :  'dashboard.php' ?>" role="button" class="blue-bg"><?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'Home' :  'Dashboard' ?></a>
                <a href="logout.php" role="button" class="orange-bg">Log out</a>

            <?php } ?>

        </div>
    </div>
</header>