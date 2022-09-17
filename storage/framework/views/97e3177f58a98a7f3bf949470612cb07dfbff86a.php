<div class="avatar d-flex align-items-center justify-content-center">
    <div class="avatar-progress text-white position-absolute">
        <i class="fas fa-5x fa-circle-notch fa-spin"></i>
        <span class="avatar-percent">0%</span>
    </div>
    <div class="avatar-buttons">
        <div class="btn-group">
            <a class="btn btn-sm btn-default avatar-upload" data-link="<?php echo e(route('boilerplate.user.avatar.upload', null, false)); ?>" data-toggle="tooltip" title="Upload">
                <i class="fa fa-fw fa-upload"></i>
            </a>
            <a class="btn btn-sm btn-default avatar-gravatar" data-link="<?php echo e(route('boilerplate.user.avatar.gravatar', null, false)); ?>" data-toggle="tooltip" title="Get from Gravatar">
                <i class="fa fa-fw fa-cloud-download-alt"></i>
            </a>
            <a class="btn btn-sm btn-default avatar-delete <?php echo e($user->hasAvatar() ? '' : 'd-none'); ?>" data-link="<?php echo e(route('boilerplate.user.avatar.delete', null, false)); ?>" data-toggle="tooltip" title="Delete">
                <i class="fa fa-fw fa-trash"></i>
            </a>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center avatar-label mb-0">
        <img src="<?php echo e($user->avatar_url); ?>" class="avatar-img" alt="avatar" />
        <?php echo Form::file('avatar', ['id' => 'avatar-file', 'class' => 'd-none', 'accept' => 'image/*']); ?>

    </div>
</div><?php /**PATH E:\Repo\simtpu-v2\vendor\sebastienheyd\boilerplate\src/resources/views/users/avatar.blade.php ENDPATH**/ ?>