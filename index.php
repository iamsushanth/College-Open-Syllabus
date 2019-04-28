<?php include "templates/header.php"; ?>

<ul>
	<li><a href="create.php"><strong>Click Here</strong></a> - add New Syllabus</li>
	<li><a href="read.php"><strong>Find</strong></a> - find Syllabus</li>
</ul>

<form method="post" action="read.php">
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
<br>
<p>
A NIE Open Syllabus is an academic document that
communicates information about a specific course and defines expectations and
responsibilities. It is descriptive (unlike the prescriptive or specific curriculum).
A syllabus may be set out by an exam board or prepared by the professor who
supervises or controls course qualities.</p>


<p>There are seven essential components to an academic syllabus: Instructor
information, General course information, Course objectives, Course policies,
Grading and evaluation, Learning resources, and the Course Calendar
</p>

<h4 class="modal-title"><span style="color:red;">Submit Your Syllabus Now</span></h4>
<?php include "templates/footer.php"; ?>