<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style> 
        /*Start Global Style*/
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #e9ebee;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: sans-serif;
            background: linear-gradient(to top left, #9933ff 0%, #003300 100%);

        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            height: 100%
        }

        .login,
        .register {
            width: 50%
        }

        /*Start Login Style*/
        .login {
            float: left;
            background-color: #fafafa;
            height: 100%;
            border-radius: 10px 0 0 10px;
            text-align: center;
            padding-top: 100px;
            margin-left: 300px;
        }

        .login h1 {
            margin-bottom: 40px;
            font-size: 2.5em;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 30px;
            border: none;
            background-color: #eeeeef;
        }

        input[type="checkbox"] {
            float: left;
            margin-right: 5px;
        }

        .login span {
            float: left
        }

        .login a {
            float: right;
            text-decoration: none;
            color: #000;
            transition: 0.3s all ease-in-out;
        }

        .login a:hover {
            color: #9526a9;
            font-weight: bold
        }

        .login button {
            width: 100%;
            margin: 30px 0;
            padding: 10px;
            border: none;
            background-color: #9526a9;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s all ease-in-out;
        }

        .login button:hover {
            width: 97%;
            font-size: 22px;
            border-radius: 5px;

        }

        .login hr {
            width: 30%;
            display: inline-block
        }

        .login p {
            display: inline-block;
            margin: 0px 10px 30px;
        }

        .login ul {
            list-style: none;
            margin-bottom: 40px;
        }

        .login ul li {
            display: inline-block;
            margin-right: 30px;
            cursor: pointer;
        }

        .login ul li:hover {
            opacity: 0.6
        }

        .login ul li:last-child {
            margin-right: 0
        }

        .login .copyright {
            display: inline-block;
            float: none;
        }

        /*Start Register Style*/
        .register {
            float: right;
            background-image: linear-gradient(135deg, #23212f 5%, #9526a9 95%);
            height: 100%;
            color: #fff;
            border-radius: 0 10px 10px 0;
            text-align: center;
            padding: 100px 0;
        }

        .register h2 {
            margin: 30px 0;
            font-size: 50px;
            letter-spacing: 3px
        }

        .register p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .register a {
            background-color: transparent;
            border: 1px solid #FFF;
            border-radius: 20px;
            padding: 10px 20px;
            color: #fff;
            font-size: 20px;
            text-transform: uppercase;
            transition: 0.2s all ease-in-out;
        }

        .register a:hover {
            color: #9526a9;
            background-color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login">
        <h1>Login</h1>
        <form action="<?php echo base_url('auth/aksi_login'); ?>" method="post">
        
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                </span>
            </div>
            </div>
            <button type="login" class="btn btn-primary">login</button>
            <div class="mt-3">
                <p>Belum punya akun?
                <a href='./register'; class="btn btn-success me-2" style="color:blue">Register Karyawan</a>
                <br>
                <a href='./register_admin/'; class="btn btn-danger" style="color:blue">Register Admin</a>
                </p>
            </div>
            </form>

        
        </div>
    </div>

</body>

</html>
