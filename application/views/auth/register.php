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
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

section {
    position: relative;
    min-height: 100vh;
    background-color: Grey;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

section .container {
    position: relative;
    max-width: 400px;
    /* Mengurangi lebar kontainer */
    background: #fff;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    /* Mengatur elemen di dalam kontainer secara vertikal */
    align-items: center;
    /* Mengatur elemen di dalam kontainer di tengah */
}

section .container .user .formBx {
    width: 100%;
    /* Mengisi seluruh lebar kontainer */
    padding: 40px 20px;
    /* Mengurangi padding atas dan bawah */
    text-align: center;
    /* Mengatur teks di tengah horizontal */
}

section .container .user .formBx form h2 {
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 10px;
    color: #555;
}

section .container .user .formBx form input {
    width: 100%;
    padding: 10px;
    /* Meningkatkan padding input */
    background: #f5f5f5;
    color: #333;
    border: none;
    outline: none;
    box-shadow: none;
    margin: 8px 0;
    font-size: 14px;
    letter-spacing: 1px;
    font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
    max-width: 100px;
    background: #677eff;
    color: #fff;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    transition: 0.5s;
}

section .container .user .formBx form .signup {
    font-size: 12px;
    letter-spacing: 1px;
    color: #555;
    text-transform: uppercase;
    font-weight: 300;
    margin-top: 20px;
}

section .container .user .formBx form .signup a {
    font-weight: 600;
    text-decoration: none;
    color: #677eff;
}

.input-group {
    position: relative;
}

.show-password {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
}

#password {
    padding-right: 30px;
    /* Biarkan ruang untuk ikon mata */
}

@media (max-width: 991px) {
    section .container {
        max-width: 400px;
    }

    section .container .imgBx {
        display: none;
    }

    section .container .user .formBx {
        width: 100%;
    }
}
</style>

<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="formBx">
                    <form action="<?php echo base_url(
                        'auth/aksi_register'
                    ); ?>" method="post">
                        <h2>Register</h2>
                        <p class="karyawan">Register Sebagai Karyawan</p>
                        <div class="input-group">
                            <input type="text" name="username" placeholder="Username" />
                            <input type="email" name="email" placeholder="Email" />
                            <input type="text" name="nama_depan" placeholder="Nama Depan" />
                            <input type="text" name="nama_belakang" placeholder="Nama Belakang" />
                            <div class="input-group">
                                <input type="password" name="password" id="password" placeholder="Password" />
                                <div class="show-password">
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="" value="Register" />
                        <p class="signup">
                             Sudah memiliki akun?
                            <a href="<?php echo base_url('auth'); ?>">Login</a>
                        </p>
                        <p class="signup">
                            Ingin mendaftar sebagai admin?
                            <a href="<?php echo base_url(
                                'auth/register_admin'
                            ); ?>">Admin</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var passwordInput = document.getElementById("password");
        var togglePasswordButton = document.getElementById("togglePassword");

        togglePasswordButton.addEventListener("click", function() {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePasswordButton.classList.remove("fa-eye");
                togglePasswordButton.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                togglePasswordButton.classList.remove("fa-eye-slash");
                togglePasswordButton.classList.add("fa-eye");
            }
        });
    });
    </script>
    <script>
    <?php if ($this->session->flashdata('password_length_error')): ?>
    Swal.fire({
        title: 'Password Error',
        text: 'Password harus memiliki 8 karakter',
        icon: 'error',
        showConfirmButton: true
    });
    <?php endif; ?>
    </script>

</body>

</html>