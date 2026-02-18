<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account - Campus Buddy</title>
    <style>
        /* ================= CAMPUS BUDDY SIGNUP CSS ================= */
        :root {
            --bg: #d9eefb;
            --card: rgba(255, 255, 255, 0.78);
            --text: #0b2b3a;
            --muted: #4b6b7a;
            --primary: #00a6e8;
            --primary-dark: #008fca;
            --success: #10b981;
            --success-dark: #059669;
            --border: rgba(15, 43, 58, 0.18);
            --error: #b42318;
            --shadow: 0 20px 60px rgba(3, 28, 45, 0.12);
            --shadow-soft: 0 10px 24px rgba(3, 28, 45, 0.10);
            --radius: 18px;
        }

        * { box-sizing: border-box; }
        html, body { height: 100%; }

        body {
            margin: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            color: var(--text);
            background: var(--bg);
        }

        .page-header {
            position: fixed;
            top: 18px;
            left: 18px;
            right: 18px;
            z-index: 10;
            display: flex;
            justify-content: flex-start;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: #1c4f66;
            padding: 10px 12px;
            border-radius: 14px;
        }

        .brand:focus-visible {
            outline: 3px solid rgba(0, 166, 232, 0.35);
            outline-offset: 3px;
        }

        .brand__name {
            font-weight: 800;
            letter-spacing: 0.2px;
        }

        .page {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 96px 16px 28px;
        }

        .card {
            width: 100%;
            max-width: 520px;
            background: var(--card);
            border: 1px solid rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(10px);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 34px 26px 26px;
        }

        .title {
            margin: 0 0 22px;
            font-size: clamp(34px, 5vw, 56px);
            line-height: 1.05;
            letter-spacing: -0.6px;
            text-align: center;
            color: #123f55;
        }

        .subtitle {
            text-align: center;
            color: var(--muted);
            margin-bottom: 30px;
            font-size: 14px;
            font-weight: 500;
        }

        .form {
            display: grid;
            gap: 14px;
        }

        .field {
            display: grid;
            gap: 8px;
        }

        .label {
            font-size: 14px;
            color: var(--muted);
            font-weight: 700;
        }

        .input {
            width: 100%;
            height: 52px;
            padding: 0 16px;
            border-radius: 999px;
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, 0.96);
            color: var(--text);
            font-size: 16px;
            box-shadow: 0 6px 16px rgba(3, 28, 45, 0.06);
            transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
        }

        .input::placeholder {
            color: rgba(11, 43, 58, 0.55);
        }

        .input:focus {
            outline: none;
            border-color: rgba(0, 166, 232, 0.75);
            box-shadow: 0 0 0 5px rgba(0, 166, 232, 0.18);
            transform: translateY(-1px);
        }

        .input--error {
            border-color: rgba(180, 35, 24, 0.6);
        }

        .error {
            margin: 0;
            font-size: 13px;
            color: var(--error);
        }

        .btn {
            height: 52px;
            border-radius: 999px;
            border: 1px solid transparent;
            font-size: 16px;
            font-weight: 800;
            cursor: pointer;
            transition: transform 160ms ease, box-shadow 160ms ease, background 160ms ease, border-color 160ms ease;
        }

        .btn:focus-visible {
            outline: 3px solid rgba(0, 166, 232, 0.35);
            outline-offset: 3px;
        }

        .btn--primary {
            background: var(--primary);
            color: #fff;
            box-shadow: 0 12px 26px rgba(0, 166, 232, 0.28), var(--shadow-soft);
        }

        .btn--primary:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .links {
            text-align: center;
            margin-top: -2px;
        }

        .link {
            color: #165a78;
            text-decoration: none;
            font-weight: 700;
        }

        .link:hover {
            text-decoration: underline;
        }

        .divider {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            gap: 12px;
            padding: 8px 4px 6px;
            color: rgba(11, 43, 58, 0.55);
        }

        .divider__line {
            height: 1px;
            background: rgba(11, 43, 58, 0.22);
        }

        .divider__text {
            font-weight: 800;
            font-size: 13px;
        }

        .login {
            margin: 2px 0 0;
            text-align: center;
            color: rgba(11, 43, 58, 0.75);
            font-weight: 700;
        }

        .link--strong {
            font-weight: 900;
        }

        .alert {
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            font-size: 14px;
        }

        .alert--success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }

        @media (max-width: 420px) {
            .card {
                padding: 28px 16px 18px;
            }
        }
    </style>
</head>
<body>

<header class="page-header">
    <a class="brand" href="<?php echo e(url('/')); ?>">
        <span class="brand__name">Campus Buddy</span>
    </a>
</header>

<main class="page">
<section class="card">
    <h1 class="title">Create Account</h1>
    <p class="subtitle">Join Campus Buddy and connect with your campus community</p>

    <?php if(session('success_message')): ?>
        <div class="alert alert--success" role="alert">
            <?php echo e(session('success_message')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('signup.post')); ?>" class="form">
        <?php echo csrf_field(); ?>

        <div class="field">
            <label class="label">Registration Type</label>
            <select name="registration_type" id="registration_type" class="input <?php $__errorArgs = ['registration_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="toggleRegistrationFields()" required>
                <option value="student" <?php echo e(old('registration_type') == 'student' ? 'selected' : ''); ?>>Student</option>
                <option value="cr" <?php echo e(old('registration_type') == 'cr' ? 'selected' : ''); ?>>Class Representative (CR)</option>
            </select>
            <?php $__errorArgs = ['registration_type'];
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
            <label class="label">Full Name</label>
            <input
                type="text"
                name="full_name"
                class="input <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Enter your full name"
                value="<?php echo e(old('full_name')); ?>"
                autocomplete="off"
                required
            >
            <?php $__errorArgs = ['full_name'];
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
            <label class="label">Student ID</label>
            <input
                type="text"
                name="student_id"
                class="input <?php $__errorArgs = ['student_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Enter your student ID"
                value="<?php echo e(old('student_id')); ?>"
                autocomplete="off"
                required
            >
            <?php $__errorArgs = ['student_id'];
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
            <label class="label">Varsity Mail</label>
            <input
                type="email"
                name="varsity_mail"
                class="input <?php $__errorArgs = ['varsity_mail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Enter your varsity email"
                value="<?php echo e(old('varsity_mail')); ?>"
                autocomplete="off"
                required
            >
            <?php $__errorArgs = ['varsity_mail'];
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

        <!-- CR Specific Fields -->
        <div id="cr_fields" style="display: none;">
            <div class="field">
                <label class="label">Department</label>
                <select name="department" class="input <?php $__errorArgs = ['department'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <option value="">Select Department</option>
                    <option value="CSE" <?php echo e(old('department') == 'CSE' ? 'selected' : ''); ?>>Computer Science Engineering</option>
                    <option value="EEE" <?php echo e(old('department') == 'EEE' ? 'selected' : ''); ?>>Electrical & Electronic Engineering</option>
                    <option value="BBA" <?php echo e(old('department') == 'BBA' ? 'selected' : ''); ?>>Business Administration</option>
                    <option value="Civil" <?php echo e(old('department') == 'Civil' ? 'selected' : ''); ?>>Civil Engineering</option>
                    <option value="Mechanical" <?php echo e(old('department') == 'Mechanical' ? 'selected' : ''); ?>>Mechanical Engineering</option>
                </select>
                <?php $__errorArgs = ['department'];
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
                <label class="label">Batch</label>
                <input
                    type="text"
                    name="batch"
                    class="input <?php $__errorArgs = ['batch'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Enter your batch (e.g., 2021)"
                    value="<?php echo e(old('batch')); ?>"
                    autocomplete="off"
                >
                <?php $__errorArgs = ['batch'];
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
                <label class="label">Semester</label>
                <select name="semester" class="input <?php $__errorArgs = ['semester'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <option value="">Select Semester</option>
                    <option value="1st" <?php echo e(old('semester') == '1st' ? 'selected' : ''); ?>>1st Semester</option>
                    <option value="2nd" <?php echo e(old('semester') == '2nd' ? 'selected' : ''); ?>>2nd Semester</option>
                    <option value="3rd" <?php echo e(old('semester') == '3rd' ? 'selected' : ''); ?>>3rd Semester</option>
                    <option value="4th" <?php echo e(old('semester') == '4th' ? 'selected' : ''); ?>>4th Semester</option>
                    <option value="5th" <?php echo e(old('semester') == '5th' ? 'selected' : ''); ?>>5th Semester</option>
                    <option value="6th" <?php echo e(old('semester') == '6th' ? 'selected' : ''); ?>>6th Semester</option>
                    <option value="7th" <?php echo e(old('semester') == '7th' ? 'selected' : ''); ?>>7th Semester</option>
                    <option value="8th" <?php echo e(old('semester') == '8th' ? 'selected' : ''); ?>>8th Semester</option>
                </select>
                <?php $__errorArgs = ['semester'];
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
                <label class="label">Section</label>
                <select name="section" class="input <?php $__errorArgs = ['section'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <option value="">Select Section</option>
                    <option value="A" <?php echo e(old('section') == 'A' ? 'selected' : ''); ?>>Section A</option>
                    <option value="B" <?php echo e(old('section') == 'B' ? 'selected' : ''); ?>>Section B</option>
                    <option value="C" <?php echo e(old('section') == 'C' ? 'selected' : ''); ?>>Section C</option>
                    <option value="D" <?php echo e(old('section') == 'D' ? 'selected' : ''); ?>>Section D</option>
                </select>
                <?php $__errorArgs = ['section'];
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
        </div>

        <div class="field">
            <label class="label">Password</label>
            <input
                type="password"
                name="password"
                class="input <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input--error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Create a strong password"
                autocomplete="off"
                required
            >
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

        <div class="field">
            <label class="label">Confirm Password</label>
            <input
                type="password"
                name="password_confirmation"
                class="input"
                placeholder="Confirm your password"
                autocomplete="off"
                required
            >
        </div>

        <button type="submit" class="btn btn--primary">Create Account</button>
    </form>

    <script>
        function toggleRegistrationFields() {
            const registrationType = document.getElementById('registration_type').value;
            const crFields = document.getElementById('cr_fields');
            
            if (registrationType === 'cr') {
                crFields.style.display = 'block';
                // Make CR fields required
                document.querySelector('select[name="department"]').setAttribute('required', 'required');
                document.querySelector('input[name="batch"]').setAttribute('required', 'required');
                document.querySelector('select[name="semester"]').setAttribute('required', 'required');
                document.querySelector('select[name="section"]').setAttribute('required', 'required');
            } else {
                crFields.style.display = 'none';
                // Remove required from CR fields
                document.querySelector('select[name="department"]').removeAttribute('required');
                document.querySelector('input[name="batch"]').removeAttribute('required');
                document.querySelector('select[name="semester"]').removeAttribute('required');
                document.querySelector('select[name="section"]').removeAttribute('required');
            }
        }
        
        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            toggleRegistrationFields();
        });
    </script>

    <div class="divider" role="separator" aria-label="Or">
        <span class="divider__line"></span>
        <span class="divider__text">Or</span>
        <span class="divider__line"></span>
    </div>

    <div class="links">
        <p class="login">Already have an account?</p>
        <a href="<?php echo e(route('login')); ?>" class="link link--strong">Sign In</a>
    </div>
</section>
</main>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\CampusBuddy(Mayaz)\resources\views/signup/index.blade.php ENDPATH**/ ?>