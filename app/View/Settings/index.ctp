<?php $this->start('script');
echo $this->Html->script('settings');
$this->end(); ?>

<div class="row settings" style="margin-bottom: 50px;">
    <div class="col-md-8 col-xs-12">
        <div class="col-xs-12">
            <h3><?php echo __('Sonerezh settings'); ?></h3>
            <hr />
            <?php
            echo $this->Form->create('Setting');
            $this->Form->unlockField('Setting.quality');
            $this->Form->unlockField('Rootpath');
            echo $this->Form->input('id');
            ?>
            <label for="SettingRootPath">
                <?php echo __('Music root directory'); ?>
            </label>
            <div class="rootpath">
            <?php
            if (isset($this->request->data['Rootpath'][0])) echo $this->Form->input("Rootpath.0.id");
            echo $this->Form->error('Rootpath.0.rootpath', null, array('class' => 'text-danger'));
            echo $this->Form->input('Rootpath.0.rootpath', array(
                'type'  => 'text',
                'label' => false,
                'div'   => array('id' => 'root-path-input-group', 'class' => 'input-group'),
                'error' => false,
                'placeholder' => __('Music root directory'),
                'after' => '<span class="input-group-btn"><button type="button" id="add-root-path-field" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button></span>'
            ));
            ?>
            </div>
            <?php
            foreach ($this->request->data['Rootpath'] as $i => &$rootpath) {
                if (!$i) continue;
                echo '<div class="rootpath">';
                if (isset($rootpath['id'])) echo $this->Form->input("Rootpath.$i.id");
                echo $this->Form->error("Rootpath.$i.rootpath", null, array('class' => 'text-danger'));
                echo $this->Form->input("Rootpath.$i.rootpath", array(
                    'type'  => 'text',
                    'label' => false,
                    'div'   => array('class' => 'input-group'),
                    'error' => false,
                    'placeholder' => __('Music root directory'),
                    'after' => '<span class="input-group-btn"><button type="button" class="btn btn-danger remove-dir"><i class="glyphicon glyphicon-minus"></i></button></span>'
                ));
                echo '</div>';
            }
            ?>
            <small>
                <span class="help-block"><?php echo __('Make sure Sonerezh can read this folder recursively. Current App folder is:') . ' ' . APP; ?></span>
            </small>
        </div>

        <div class="col-xs-12">
            <h3><?php echo __('Database management'); ?></h3>
            <hr />
            <div class="col-sm-4 col-xs-12">
                <?php echo $this->Html->link(__('Database update'), array('controller' => 'songs', 'action' => 'import'), array('class' => 'btn btn-info clearfix center-block')); ?>
            </div>
            <div class="col-sm-4 col-xs-12">
                <?php echo $this->Html->link(__('Clear the cache'), array('controller' => 'settings', 'action' => 'clear'), array('class' => 'btn btn-warning clearfix center-block')); ?>
            </div>
            <div class="col-sm-4 col-xs-12">
                <?php echo $this->Form->postLink(__('Reset the database'), array('action' => 'truncate'), array('class' => 'btn btn-danger clearfix center-block'), __('Are you sure? All your songs and playlists will disappear!')); ?>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-xs-12">
        <div class="col-xs-12">
            <h3><?php echo __('Sonerezh statistics'); ?></h3>
            <hr />
            <ul class="list-group" style="margin-bottom: 0;">
                <li class="list-group-item">
                    <span class="badge"><?php echo $stats['artists']; ?></span>
                    <?php echo __('Artists'); ?>
                </li>
                <li class="list-group-item">
                    <span class="badge"><?php echo $stats['albums']; ?></span>
                    <?php echo __('Albums'); ?>
                </li>
                <li class="list-group-item">
                    <span class="badge"><?php echo $stats['songs']; ?></span>
                    <?php echo __('Songs'); ?>
                </li>
                <li class="list-group-item">
                    <span class="badge"><?php echo $this->FileSize->humanize($stats['thumbCache']); ?></span>
                    <?php echo __('Thumbnails cache'); ?>
                </li>
            </ul>
            <p class="help-block text-right">
                <small>
                    <?php echo $stats['sonerezh_version']; ?>
                </small>
            </p>
        </div>
    </div>
</div>
