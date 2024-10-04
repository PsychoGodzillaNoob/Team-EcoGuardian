<!-- USER Information Table Basic -->
<h3>User Information:</h3>
<table border='1'>
    <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>Total HP</th>
    <th>Current Progress</th>
    <th>Status</th>
    </tr>
<?php foreach ($userData as $user) { ?>
            <tr>
            <td><?php echo $user['user_id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['total_hp']; ?></td>
            <td><?php echo $user['current_progress']; ?></td>
            <td><?php echo $user['status']; ?></td>
            </tr>
<?php } ?>
</table>