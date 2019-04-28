<?php

/**
 * Function to query information based on 
 * a parameter: in this case, branch.
 *
 */

if (isset($_POST['submit'])) {
    try  {
        
        require "config.php";
        require "common.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * 
                        FROM users
                        WHERE branch = :branch";

        $branch = $_POST['branch'];

        $statement = $connection->prepare($sql);
        $statement->bindParam(':branch', $branch, PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>
<?php require "templates/header.php"; ?>

<h2>Find Syllabus based on branch</h2>

<form method="post">
    <label for="branch">Branch</label>
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
    <input type="submit" name="submit" value="View Results">
</form>


<?php  
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) { ?>
        <h2>Results</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Link Address</th>
                    <th>Year</th>
                    <th>Branch</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo escape($row["id"]); ?></td>
                <td><a href="<?php echo escape($row["link"]); ?>">Download</a></td>
                <td><?php echo escape($row["sem"]); ?></td>
                <td><?php echo escape($row["branch"]); ?></td>
                <td><?php echo escape($row["date"]); ?> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['branch']); ?>.</blockquote>
    <?php } 
} ?> 



<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
