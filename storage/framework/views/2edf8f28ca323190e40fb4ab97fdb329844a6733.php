
 
<?php $__env->startSection('content'); ?>
    <div class="card mt-5">
        <div class="card-header">
            <h2>Leerling administratie systeem</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-success" href="<?php echo e(route('posts.create')); ?>"> Nieuwe leerling</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Naam</th>
                            <th>Klas</th>
                            <th width="280px">Actie</th>
                        </tr>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post-> id); ?></td>
                            <td><?php echo e($post-> naam); ?></td>
                            <td><?php echo e(\Str::limit($post->klas, 50)); ?></td>
                            <td>
                                <form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="POST">
                   
                                    <a class="btn btn-info" href="<?php echo e(route('posts.show',$post->id)); ?>">Toon</a>
                    
                                    <a class="btn btn-primary" href="<?php echo e(route('posts.edit',$post->id)); ?>">Bewerk</a>
                   
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                      
                                    <button type="submit" class="btn btn-danger">Verwijder</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo $posts->links(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\CRUD\resources\views/posts/index.blade.php ENDPATH**/ ?>