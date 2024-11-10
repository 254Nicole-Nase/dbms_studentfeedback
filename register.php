<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Admin Registration</title>
        <link rel="stylesheet" href="css/styles1.css" />
    </head>

    <body>
        <div class="registration-form">
            <h2>Register your Admin account</h2>
            <form action="php/checkregister.php" method="POST">
                <label>
                    Email
                    <input type="email" id="email" placeholder="email" name="email" required />
                </label>
                <br /><br />
                <label>
                    Password
                    <input
                        type="password"
                        id="password"
                        placeholder="password"
                        name="password"
                        required
                    />
                </label>
                <br /><br />
                <div class="submit-form">
                    <input type="submit" id="register" name="register" value="Register" />
                </div>
            </form>
        </div>
    </body>
</html>