<?php $this->load->view('templates/header'); ?>
<div class="create>">
    <h2>Create Task</h2>
    <form method="post">
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Add Task</button>
    </form>
    <a href="<?= site_url('tasks') ?>">Back</a>
</div>
<?php $this->load->view('templates/footer'); ?>
