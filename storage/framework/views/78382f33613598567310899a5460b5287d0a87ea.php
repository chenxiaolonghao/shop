<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
    	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>出错了!</strong>
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>