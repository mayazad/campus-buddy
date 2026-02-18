<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Buddy!</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>

<body>
    <header class="page-header">
        <a class="brand" href="<?php echo e(url('/')); ?>" aria-label="Campus Buddy home">
            <span class="brand__icon" aria-hidden="true">
                <svg viewBox="0 0 64 64" focusable="false">
                    <path d="M32 10L6 22l26 12 26-12-26-12z" fill="currentColor" />
                    <path d="M14 30v10c0 6 8 12 18 12s18-6 18-12V30l-18 8-18-8z" fill="currentColor" opacity="0.9" />
                    <path d="M54 25v16" stroke="currentColor" stroke-width="4" stroke-linecap="round" />
                    <circle cx="54" cy="45" r="4" fill="currentColor" />
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

            <?php if(session('success_message')): ?>
                <div class="alert alert--success" style="background-color: #d1fae5; color: #065f46; padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
                    <?php echo e(session('success_message')); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('login')); ?>" class="form" novalidate>
                <?php echo csrf_field(); ?>

                <div class="field">
                    <label for="login" class="label">Varsity ID / Email</label>
                    <input id="login" name="login" type="text" class="input <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e(old('login')); ?>" placeholder="Varsity ID / Email" autocomplete="username" required>
                    <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="error" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="field">
                    <label for="password" class="label">Password</label>
                    <input id="password" name="password" type="password"
                        class="input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password"
                        autocomplete="current-password" required>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="error" role="alert"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="btn btn--primary">Sign In</button>

                <div class="links">
                    <a class="link" href="<?php echo e(url('forgot-password')); ?>">Forgot Password?</a>
                </div>
            </form>

            <div class="divider" role="separator" aria-label="Or">
                <span class="divider__line"></span>
                <span class="divider__text">Or</span>
                <span class="divider__line"></span>
            </div>



            <p class="signup">
                Don’t have an account?
                <a class="link link--strong" href="<?php echo e(route('signup')); ?>">Sign Up</a>
            </p>
        </section>
    </main>
</body>

</html><?php /**PATH C:\xampp\htdocs\CampusBuddy(Mayaz)\resources\views/login/index.blade.php ENDPATH**/ ?>