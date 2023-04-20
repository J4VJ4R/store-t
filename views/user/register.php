<h1>Registration</h1>

<form action="?controller=User&action=save" method="post">
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