<?php $this->load->view('templates/header'); ?>
<h2>My Tasks</h2>
<button><a href="<?= site_url('tasks/create') ?>">Add Task</a></button>
<ul>

    <table>
        <tr>
            <th>S. no.</th>
            <th>Task Title</th>
            <th>Status</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php foreach($tasks as $task): ?>
        <tr>
            <td><?= $task['id'] ?></td>
            <td><?= $task['title'] ?></td>
            <td><?= $task['status'] ?></td>
            <td><a href="<?= site_url('tasks/edit/'.$task['id']) ?>">Edit</a></td>
            <td><a href="<?= site_url('tasks/delete/'.$task['id']) ?>">Delete</a></td>
        </tr>        
   
<?php endforeach; ?>
 </table>
</ul>
<button><a href="<?= site_url('auth/logout') ?>">Logout</a></button>
<?php $this->load->view('templates/footer'); ?>
