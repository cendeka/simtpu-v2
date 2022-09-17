<?php $__env->startSection('content'); ?>
    <?php echo e(Form::open(['route' => 'boilerplate.roles.store', 'autocomplete' => 'off'])); ?>

    <div class="row">
        <div class="col-12 mb-3">
            <a href="<?php echo e(route("boilerplate.roles.index")); ?>" class="btn btn-default" data-toggle="tooltip" title="<?php echo app('translator')->get('boilerplate::role.list.title'); ?>">
                <span class="far fa-arrow-alt-circle-left text-muted"></span>
            </a>
            <span class="btn-group float-right">
                <button type="submit" class="btn btn-primary">
                    <?php echo app('translator')->get('boilerplate::role.savebutton'); ?>
                </button>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php $__env->startComponent('boilerplate::card', ['title' => 'boilerplate::role.parameters']); ?>
                <?php $__env->startComponent('boilerplate::input', ['name' => 'display_name', 'label' => 'boilerplate::role.label', 'autofocus' => true]); ?><?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('boilerplate::input', ['name' => 'description', 'label' => 'boilerplate::role.description']); ?><?php echo $__env->renderComponent(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <?php if(count($permissions_categories) > 0): ?>
            <div class="col-md-7">
                <?php $__env->startComponent('boilerplate::card', ['color' => 'teal', 'title' => 'boilerplate::role.permissions']); ?>
                    <?php $__currentLoopData = $permissions_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="permission_category">
                            <div class="h6"><?php echo e($category->name); ?></div>
                            <table class="table table-hover table-sm">
                                <tbody>
                                <?php $__currentLoopData = $category->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="width:25px;">
                                            <div class="icheck-primary">
                                                <?php echo e(Form::checkbox('permission['.$permission->id.']', 1, old('permission.'.$permission->id), ['id' => 'permission_'.$permission->id,])); ?>

                                                <label for="<?php echo e('permission_'.$permission->id); ?>"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo e(Form::label('permission_'.$permission->id, __($permission->display_name), ['class' => 'mb-0', 'data-toggle' => 'tooltip', 'data-title' => $permission->name])); ?>

                                            <br/>
                                            <small class="text-muted"><?php echo e(__($permission->description)); ?></small>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('boilerplate::layout.index', [
    'title' => __('boilerplate::role.title'),
    'subtitle' => __('boilerplate::role.create.title'),
    'breadcrumb' => [
        __('boilerplate::role.title') => 'boilerplate.roles.index',
        __('boilerplate::role.create.title')
    ]
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Repo\simtpu-v2\vendor\sebastienheyd\boilerplate\src/resources/views/roles/create.blade.php ENDPATH**/ ?>