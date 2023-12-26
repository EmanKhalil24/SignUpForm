<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(URL::asset('/signup.css')); ?>">
    <title>Registration Page</title>
</head>
<body>
    <div class="container">
        <div class="su">
            <form action="<?php echo e(route('Regist.store')); ?>" method="POST">
                <h1 class="h1-s">Sign Up</h1>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <label class="l-u">Username: </label>
                <br>
                <input type="text" name="Username" class="i-u" placeholder="Your username..." required>
                <br><br>
                <label class="l-pa">Password: </label>
                <input type="password" name="Password" class="i-pa" placeholder="Your password..." required>
                <br><br>
                <label class="l-n">Name: </label>
                <input type="text" name="name" class="i-n" placeholder="Your name..." required>
                <br><br>
                <label class="l-e">Email: </label>
                <input type="email" name="email" class="i-e" placeholder="Your email..." required>
                <br><br>
                <label class="l-ph">Phone: </label>
                <input type="phone" name="Phone" class="i-ph" placeholder="Your phone..." required>
                <br><br>
                <input type="submit" value="Submit" class="submit" id="submit">
                <br><br>
            </form>       
        </div>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $sign; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data-> name); ?></td>
                    <td><?php echo e($data-> email); ?></td>
                    <td><?php echo e($data-> phone); ?></td>
                </tr>            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<script>
    var submit = document.getElementById('submit');
    submit.onclick = function(){
        location.reload();
    }
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\signup\resources\views/signup.blade.php ENDPATH**/ ?>