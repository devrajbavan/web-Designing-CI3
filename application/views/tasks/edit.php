<?php $this->load->view('templates/header'); ?>
<div class="edit">
    <h2>Edit Task</h2>
    <form method="post">
        <input type="text" name="title" value="<?= $task['title'] ?>" required>
        <textarea name="description"><?= $task['description'] ?></textarea>
        <select name="status">
            <option value="pending" <?= $task['status']=='pending'?'selected':'' ?>>Pending</option>
            <option value="completed" <?= $task['status']=='completed'?'selected':'' ?>>Completed</option>
        </select>
        <button type="submit">Update Task</button>
    </form>
    <a href="<?= site_url('tasks') ?>">Back</a>
</div>
<?php $this->load->view('templates/footer'); ?>
