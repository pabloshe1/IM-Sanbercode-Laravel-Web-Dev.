<!DOCTYPE html>
<html>
<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <form action="/welcome" method="POST">
        @csrf
        <label>First name:</label><br><br>
        <input type="text" name="first_name" required><br><br>
        <label>Last name:</label><br><br>
        <input type="text" name="last_name" required><br><br>
        
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male"> Laki Laki<br>
        <input type="radio" name="gender" value="female"> Perempuan <br><br>
        
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>