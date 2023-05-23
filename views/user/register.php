<h1>Registration</h1>

<?php if($_SESSION['register'] && $_SESSION['register'] == 'complete'): ?>
        <strong class="alert_green">Registration completed succesfull</strong>
    
<?php elseif($_SESSION['register'] && $_SESSION['register'] == 'failed') : ?>
    <strong class="alert_red">Registration failed enter the correct data</strong>

<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<form action="<?= base_url ?>User/save" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>

    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" id="lastname" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Registration">
</form>