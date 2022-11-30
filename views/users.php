<?php include_once "layouts/header.php" ?>
<?php include_once "layouts/footer.php" ?>
<?php
$page = $_GET['page'];
$pages = ceil($params['count'] / 10);
?>
<h1>Database:</h1>
<table class="table table-bordered table-hover">
    <div class="table-responsive-sm">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($params['users'] as $user):?>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['gender']; ?></td>
                <td><?= $user['status']; ?></td>
                <td>
                    <a href="/users/<?=$user['id']?>" class="btn btn-outline-dark" onclick="return confirm('Delete this?');">
                        Delete
                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    </a>
                    <a href="/users/edit/<?=$user['id']?>" class="btn btn-outline-dark">
                        Edit
                        <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    </a>
                </td>
            </tr>
        <?endforeach;?>
    </tbody>
    </div>
</table>
<div class="container my-5">
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item"><a href="?page=<?=$page - 1;?>" class="page-link">&laquo;</a></li>
            <?php for ($i = 1; $i <= $pages; $i++): ?>
            <li class="page-item"><a href="?page=<?= $i; ?>" class="page-link"><?= $i ?></a></li>
            <?php endfor;?>
            <li class="page-item"><a href="?page=<?=$page + 1;?>" class="page-link">&raquo;</a></li>
        </ul>
    </nav>
</div>
</form>

