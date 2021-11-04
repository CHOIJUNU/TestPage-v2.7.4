<!DOCTYPE html>

<head>
    <h3>Sign up</h3>
</head>

<body>

    <form action="sign_up_ok.php" method="post">
        <h1>
            Sign Up
        </h1>
        <fieldset>
            <legend>Your Basic Info</legend>

            <label>ID:</label>
            <input type="text" name="id"><br>

            <label>Password:</label>
            <input type="password" name="pwd"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Birth(ex.990101):</label>
            <input type="text" name="birth"><br>

            <label>Email(Can be use to find pwd.):</label>
            <input type="email" name="email"><br>

            <label>Phone:</label>
            <input type="text" name="phone">

        </fieldset>
        <button type="submit">Submit</button>
    </form>

</body>

</html>