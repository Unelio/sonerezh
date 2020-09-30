<?php echo $this->start('script'); ?>
<script>
    $(function() {
        $('#UserRole').selecter({
            label: "<?php echo __('Select a role'); ?>"
        });
    });
</script>
<?php echo $this->end(); ?>
<div class="col-xs-12">
    <h3>
        <?php if ($user['User']['id'] == AuthComponent::user('id')) {
            echo __('Edit your account');
        } else {
            echo __('Edit a user');
        } ?>
    </h3>
    <hr />

    <?php echo $this->Form->create('User', array('type' => 'file')); ?>

    <div class="row">
        <div class="col-md-7 col-lg-12">
            <?php
            echo $this->Form->input('id', array('type' => 'hidden'));
            echo $this->Form->input('email', array('placeholder' => __('Enter an email')));
            echo $this->Form->input('password', array('placeholder' => __('Choose a password'), 'label' => __('New password'), 'required' => false));
            echo $this->Form->input('confirm_password', array('type' => 'password', 'placeholder' => __('Confirm new password'), 'label' => __('Confirm new password'), 'required' => false));
            if (AuthComponent::user('role') == 'admin' && AuthComponent::user('id') != $this->request->data['User']['id']) {
                echo $this->Form->input('role', array(
                    'options'   => array('admin' => __('Administrator'), 'listener' => __('Listener')),
                    'label'     => __('Select a role')
                ));
            }
            ?>
          <div class="form-group">
              <?php echo $this->Form->submit(__('Save Changes'), array('class' => 'btn btn-success pull-right')); ?>
          </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
