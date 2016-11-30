    <?php include 'includes/config.php'; ?>
    <?php include 'includes/header.php'; ?>

    <h1>Welcome to Your Website</h1>
        <p>
            <img src="<?=$pic?>" alt="" id="coffee" />
            <strong class="feature"><?php echo $dayOfWeek?>'s Coffee Special:</strong> <?php echo $dayOfWeek?>'s daily coffee special is <strong class="feature"><?php print $coffee?></strong>, <?php print $content; ?></p>
        
        <p><span class="feature"><?php print $coffee?> is </span><?php print $sentence?></p>
<p><span class="feature">Enjosy our <?php print $coffee?>!</span></p> 
                     
            
<p>Click below to view specials for other days</p>
<a href="index.php?day=Mon">Monday</a>
<a href="index.php?day=Tue">Tuesday</a>
<a href="index.php?day=Wed">Wednesday</a>
<a href="index.php?day=Thu">Thursday</a>
<a href="index.php?day=Fri">Friday</a>
<a href="index.php?day=Sat">Saturday</a>
<a href="index.php?day=Sun">Sunday</a>

<br/>        
    <p>Clever content goes here</p>



     <?php include 'includes/footer.php'; ?>