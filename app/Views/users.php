<h1>User List</h1>

<a href="?action=create">
    Create User
</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="?action=delete&id=<?php echo $user['id']; ?>">
                        Delete
                    </a> |
                    <a href="?action=edit&id=<?php echo $user['id']; ?>">
                        Edit
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>