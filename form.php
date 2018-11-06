<?php require_once 'index.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Posts & Rails Challenge</title>
</head>
<body>
    <h1>PHP Posts & Rails Challenge</h1>
    <h2>Get Distance</h2>
    <form action="form.php" method="post">
    <div>
        <label>Posts :</label>
        <input type="number" name="numberOfPosts" min="2" placeholder="Enter no. of posts" />
        <label>Rails :</label>
        <input type="number" name="numberOfRails" min="1" placeholder="Enter no. of rails" />
        <input type="submit" name="Get Distance" />
        <label>Distance possible :</label>
        <textarea name="possibleDistance" cols="50" rows="1" placeholder="Can build..."><?php echo $distance ?></textarea>
    </div>
    <h2>Get Number of Posts & Rails</h2>
    <div>
        <label>Distance Needed to Cover :</label>
        <input type="text" name="distanceReq" placeholder="metres" />
        <input type="submit" value="Get posts & rails" />
        <label> Posts Needed : <?php echo $postsNeeded ?></label>
        <label> Rails Needed : <?php echo $railsNeeded ?></label>
    </div>
    </form>
</body>
</html>