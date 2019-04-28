<?php


if (isset($_POST['submit'])) {
    require "config.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $new_user = array(
            "link"     => $_POST['link'],
            "sem"       => $_POST['sem'],
            "branch"  => $_POST['branch']
        );

        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "users",
                implode(", ", array_keys($new_user)),
                ":" . implode(", :", array_keys($new_user))
        );
        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMesssem();
    }
}
?>

<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote><?php echo $_POST['branch']; ?> successfully added.</blockquote>
<?php } ?>

<h2>Add Syllabus</h2>

<form method="post">
    <label for="link" >link Address</label>
    <input type="text" name="link" id="link">
    <label for="sem">sem</label>
    <input type="text" name="sem" id="sem">
    <label for="branch">branch</label>
    <input type="text" list="branch" name="branch">
    <datalist id="branch">
    <option>Mech</option>
    <option>Civil</option>
    <option>ECE</option>
    <option>EEE</option>
    <option>CSE</option>
    <option>ISE</option>
    <option>IP</option>
</datalist>
    <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
