
  
<?php $__env->startSection('content'); ?>
<div class="card mt-5">
        <div class="card-header">
            <h2>Leerling aanmaken</h2>
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
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <strong>Oeps!</strong> Er zijn wat problemen gevonden in je input.<br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                       
                    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                      
                         <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <strong>Naam:</strong>
                                    <input type="text" name="naam" class="form-control" placeholder="Naam">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <strong>Klas:</strong>
                                    <input type="text" name="klas" class="form-control" placeholder="Klas">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Adres:</strong>
                                    <input type="text" name="adres" class="form-control" placeholder="Adres">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <strong>Postcode:</strong>
                                    <input type="text" name="postcode" class="form-control" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    <strong>Woonplaats:</strong>
                                    <input type="text" name="woonplaats" class="form-control" placeholder="Woonplaats">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Telefoonnummer:</strong>
                                    <input type="text" name="telefoonnummer" class="form-control" placeholder="Telefoonnummer">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Bijzonderheden:</strong>
                                    <textarea class="form-control" style="height:150px" name="bijzonderheden" placeholder="Bijzonderheden"></textarea>                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Toevoegen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('posts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\CRUD\resources\views/posts/create.blade.php ENDPATH**/ ?>