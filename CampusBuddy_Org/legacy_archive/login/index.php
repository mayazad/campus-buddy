<?php



declare(strict_types=1);



session_start();



require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Database.php';

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Auth.php';



use CampusBuddy\Src\Database;

use CampusBuddy\Src\Auth;



$errors = $_SESSION['errors'] ?? [];

$old = $_SESSION['old'] ?? [];

unset($_SESSION['errors'], $_SESSION['old']);



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = trim((string)($_POST['login'] ?? ''));

    $password = (string)($_POST['password'] ?? '');



    $newErrors = [];

    if ($login === '') {

        $newErrors['login'] = 'Varsity ID / Email is required.';

    }

    if ($password === '') {

        $newErrors['password'] = 'Password is required.';

    }



    if ($newErrors) {

        $_SESSION['errors'] = $newErrors;

        $_SESSION['old'] = ['login' => $login];

        header('Location: /CampusBuddy/login');

        exit;

    }



    try {

        $pdo = Database::pdo();

        $user = Auth::attempt($pdo, $login, $password);



        if (!$user) {

            $_SESSION['errors'] = ['login' => 'The provided credentials do not match our records.'];

            $_SESSION['old'] = ['login' => $login];

            header('Location: /CampusBuddy/login');

            exit;

        }



        session_regenerate_id(true);

        $_SESSION['user'] = $user;



        header('Location: /CampusBuddy/Dashboard1/');

        exit;

    } catch (Throwable $e) {

        $_SESSION['errors'] = ['login' => 'Unable to sign in right now. Please try again.'];

        $_SESSION['old'] = ['login' => $login];

        header('Location: /CampusBuddy/login');

        exit;

    }

}



$loginValue = (string)($old['login'] ?? '');

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Buddy!</title>

    <link rel="stylesheet" href="/CampusBuddy/public/css/login.css">

</head>

<body>

<header class="page-header">

    <a class="brand" href="/CampusBuddy/" aria-label="Campus Buddy home">

        <span class="brand__icon" aria-hidden="true">

            <svg viewBox="0 0 64 64" focusable="false">

                <path d="M32 10L6 22l26 12 26-12-26-12z" fill="currentColor"/>

                <path d="M14 30v10c0 6 8 12 18 12s18-6 18-12V30l-18 8-18-8z" fill="currentColor" opacity="0.9"/>

                <path d="M54 25v16" stroke="currentColor" stroke-width="4" stroke-linecap="round"/>

                <circle cx="54" cy="45" r="4" fill="currentColor"/>

            </svg>

        </span>

        <span class="brand__text">

            <span class="brand__name">Campus Buddy</span>

        </span>

    </a>

</header>



<main class="page">

    <section class="card" aria-labelledby="login-title">

        <h1 id="login-title" class="title">Welcome Buddy!</h1>



        <form method="POST" action="/CampusBuddy/login" class="form" novalidate>

            <div class="field">

                <label for="login" class="label">Varsity ID / Email</label>

                <input

                    id="login"

                    name="login"

                    type="text"

                    class="input<?php echo isset($errors['login']) ? ' input--error' : ''; ?>"

                    value="<?php echo htmlspecialchars($loginValue, ENT_QUOTES, 'UTF-8'); ?>"

                    placeholder="Varsity ID / Email"

                    autocomplete="username"

                    required

                >

                <?php if (isset($errors['login'])): ?>

                    <p class="error" role="alert"><?php echo htmlspecialchars((string)$errors['login'], ENT_QUOTES, 'UTF-8'); ?></p>

                <?php endif; ?>

            </div>



            <div class="field">

                <label for="password" class="label">Password</label>

                <input

                    id="password"

                    name="password"

                    type="password"

                    class="input<?php echo isset($errors['password']) ? ' input--error' : ''; ?>"

                    placeholder="Password"

                    autocomplete="current-password"

                    required

                >

                <?php if (isset($errors['password'])): ?>

                    <p class="error" role="alert"><?php echo htmlspecialchars((string)$errors['password'], ENT_QUOTES, 'UTF-8'); ?></p>

                <?php endif; ?>

            </div>



            <button type="submit" class="btn btn--primary">Sign In</button>



            <div class="links">

                <a class="link" href="/CampusBuddy/forgot-password">Forgot Password?</a>

            </div>

        </form>



        <div class="divider" role="separator" aria-label="Or">

            <span class="divider__line"></span>

            <span class="divider__text">Or</span>

            <span class="divider__line"></span>

        </div>



        <form method="POST" action="/CampusBuddy/login/guest.php" class="form" style="gap: 10px;">

            <button type="submit" class="btn btn--secondary">Log In as Guest</button>

        </form>



        <p class="signup">

            Don’t have an account?

            <a class="link link--strong" href="/CampusBuddy/signup">Sign Up</a>

        </p>

    </section>

</main>

</body>

</html>

