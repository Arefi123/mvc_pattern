<h2>Edit User</h2>

<form method="POST" action="?action=update">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />

    <input type="text" name="name" value="<?php echo $user['name']; ?>" placeholder="Please enter your name" />
    <br><br>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" placeholder="Please enter your email" />
    <br><br>
    <button type="submit">
        Update
    </button>
</form>