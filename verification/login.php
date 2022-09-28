<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome to Chatly!</title>
</head>
<body>
    <div class="wrapper">
        <section class="signup__signupForm">
            <header>Chatly</header>
            <form action="#" method="post">
                <div class="signup__errorText">This error</div>
                <div class="signup__userDataContainer">
                    <div class="signup__field">
                        <label for="#signup__email">Email Adress</label>
                        <input name="email" id="signup__email" type="text" placeholder="example@gmail.com">
                    </div>
                    <div class="signup__field">
                        <label for="#signup__password">Password</label>
                        <input name="password" id="signup__password" type="password" placeholder="qwerty1234">
                    </div>
                    <div class="signup__button">
                        <input name="submit" type="submit" value="Start Chat!">
                </div>
                <div class="signup__alreadySignUpContainer">Dont have an account? <a href="./login.php">Login Now</a></div>
            </form>
        </section>
    </div>
</body>
</html>