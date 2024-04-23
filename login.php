<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rememberMe = isset($_POST['rememberMe']) && $_POST['rememberMe'] === 'true';

        $validEmail = 'kelompokenam@gmail.com';
        $validPassword = 'Yukb1s4Yuk@';
        $fullName = 'Via Nadia Willy';
        $username = 'kelompokenam';
        $interest = 'Business Technology - UI/UX Design';
        $description = 'Halo! Kami adalah kelompok 6! Kami hadir dengan semangat menyala, siap untuk menghadirkan inovasi dan keceriaan!';
        $phone = '0812345678';
        $address = 'Universitas Brawijaya';

        if ($email === $validEmail && $password === $validPassword) {
            session_start();
            $_SESSION['loggedIn'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $fullName;
            $_SESSION['username'] = $username;
            $_SESSION['interest'] = $interest;
            $_SESSION['description'] = $description;
            $_SESSION['phone'] = $phone;
            $_SESSION['address'] = $address;

            if ($rememberMe) {
                setcookie('email', $email,time() + (24 * 60 * 60), '/');
                setcookie('password', $password,time() + (24 * 60 * 60), '/');
            }
            echo 'success';
        } else {
            if ($email !== $validEmail) {
                echo 'Email salah';
            } else {
                echo 'Password salah';
            }
        }
    }