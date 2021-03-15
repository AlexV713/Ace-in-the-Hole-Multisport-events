<?php define('BASE_URL', '/repositories/Ace-in-the-Hole-Multisport-events/'); ?>

<header>
    <nav id="desktop-nav">
        <div id="desktop-logo">
            <a href="<?php echo BASE_URL; ?>index.php">
                <h1>Ace in The Hole</h1>
                <h3>Multisport Events</h3>
            </a>
        </div>
        <div id="desktop-links">
            <a href="<?php echo BASE_URL; ?>index.php">Home</a>
            <a href="<?php echo BASE_URL; ?>events.php">Information</a>
            <a href="<?php echo BASE_URL; ?>register">Register</a>
            <a href="<?php echo BASE_URL; ?>contact">Contact</a>
        </div>
    </nav>

    <nav id="mobile-nav">
        <div id="front">
            <a href="<?php echo BASE_URL; ?>index.php" id="logo">
                <h1>Ace in The Hole</h1>
            </a>
            <a href="#" id="toggle">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <ul id="mobile-links">
            <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>events.php">Information</a></li>
            <li><a href="<?php echo BASE_URL; ?>register">Register</a></li>
            <li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
        </ul>
    </nav>
</header>