<?php define('BASE_URL', '/repositories/Ace-in-the-Hole-Multisport-events/'); ?>

<header>
    <a href="javascript:void(0);" class="icon" onclick="dropLinks()">
        <i class="fas fa-bars"></i>
    </a>

    <nav id="desktop-nav">
        <a href="<?php echo BASE_URL; ?>index.php" class="logo">
            <h1>Ace in The Hole</h1>
            <h3>Multisport Events</h3>
        </a>
        <div id="desktop-links">
            <a href="<?php echo BASE_URL; ?>index.php">Home</a>
            <a href="<?php echo BASE_URL; ?>events.php">Information</a>
            <a href="<?php echo BASE_URL; ?>register">Register</a>
            <a href="<?php echo BASE_URL; ?>contact">Contact</a>
        </div>
    </nav>

    <nav id="mobile-nav">
        <a href="<?php echo BASE_URL; ?>index.php" class="logo">
            <img src="<?php echo BASE_URL; ?>images/logo2.jpg" alt="ace" class="logo">
        </a>
        <div id="links">
            <a href="<?php echo BASE_URL; ?>index.php">Home</a>
            <a href="<?php echo BASE_URL; ?>events.php">Events Information</a>
            <a href="<?php echo BASE_URL; ?>register">Register</a>
            <a href="<?php echo BASE_URL; ?>contact">Contact</a>
        </div>
    </nav>
</header>