<?php $this->load->view('templates/header'); ?>
<h2>Login</h2>
<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit"> Login</button>
</form>
<a href="<?= site_url('auth/register')?>">Register</a>    
<?php $this->load->view('templates/footer'); ?>
