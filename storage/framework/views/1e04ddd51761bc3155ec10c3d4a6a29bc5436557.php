<?php $__env->startSection('content'); ?>
<div class="container-fluid app-body">
	<h3> Recent Posts Sent To Buffer

	</h3>

	<div class="row">
    <form action = "/filter" method = "Post">
        <?php echo e(csrf_field()); ?> 
        <input type="text" name="name">
        <input type = "date" name ="sent_at" value="2019-01-01">

        
        <select name="group_type" id ="97">
            <option value = "upload">Upload</option>
            <option value ="curation">Curation </option>
        </select>
        <button type="submit" >Filter </button>
    </form>

		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead> 
				<tbody> 
                <?php $__currentLoopData = $buffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buffer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td><?php echo e($buffer->name); ?></td>
                <td><?php echo e($buffer->type); ?></td>
                <td><?php echo e($buffer->user_name); ?></td>
                <td><?php echo e($buffer->post_text); ?></td>
                <td><?php echo e($buffer->sent_at); ?></td>
               
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				</tbody> 
			</table>
            <div style = "text-align: right;">
            <?php echo $buffers->render(); ?>

            </div>

		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>