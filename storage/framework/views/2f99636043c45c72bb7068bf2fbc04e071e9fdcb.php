
  
<?php $__env->startSection('content'); ?>
    <div class="card mt-5">
        <div class="card-header">
            <h2>Leerling: <?php echo e($post->naam); ?></h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="<?php echo e(route('posts.index')); ?>"> Terug</a>
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
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Naam:</strong>
                                <?php echo e($post->naam); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Klas:</strong>
                                <?php echo e($post->klas); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Adres:</strong>
                                <?php echo e($post->adres); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Postcode:</strong>
                                <?php echo e($post->postcode); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Woonplaats:</strong>
                                <?php echo e($post->woonplaats); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Telefoonnummer:</strong>
                                <?php echo e($post->telefoonnummer); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bijzonderheden:</strong>
                                <?php echo e($post->bijzonderheden); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\CRUD\resources\views/posts/show.blade.php ENDPATH**/ ?>