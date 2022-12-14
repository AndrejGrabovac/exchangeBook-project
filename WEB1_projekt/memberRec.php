<?php
include('assets\templates\header.php');
require('assets/db/baza.php');
?>
<html>

<body>
    <div class="container-member">
        <h2>Members</h2>
        <table class="table">
            <thead>
                <tr>
                    <th><strong>Member ID</strong></th>
                    <th><strong>Member Name</strong></th>
                    <th><strong>Member last name</strong></th>
                    <th><strong>Member e-mail</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $sql = "Select * from member ORDER BY memberID asc;";
                $result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row["memberID"]; ?></td>
                        <td><?php echo $row["memberName"]; ?></td>
                        <td><?php echo $row["memberLastName"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><a class="edit" href="editMember.php?memberID=<?php echo $row["memberID"]; ?>">Edit</a></td>
                        <td><a class="delete" href="deleteMember.php?memberID=<?php echo $row["memberID"]; ?>">Delete</a></td>
                    </tr>
                <?php
                    $i++;
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php
include('assets\templates\footer.php');

?>