<ul class="nav navbar-nav">
    <li><?php echo $this->Html->link(__('Songs'), array('controller' => 'songs', 'action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('Artists'), array('controller' => 'songs', 'action' => 'artists')); ?></li>
    <li><?php echo $this->Html->link(__('Albums'), array('controller' => 'songs', 'action' => 'albums')); ?></li>
    <li><?php echo $this->Html->link(__('Playlists'), array('controller' => 'playlists', 'action' => 'index')); ?></li>
</ul>
<form action="<?php echo $this->Html->url(array('controller' => 'songs', 'action' => 'search')); ?>" class="navbar-form navbar-left hidden-md hidden-sm hidden-xs" role="search">
    <div class="form-group search" >
        <input type="text" class="form-control search-input" placeholder="<?php echo __('Search'); ?>" name="q" >
    </div>
</form>
<ul class="nav navbar-nav navbar-right">
    <li class="hidden-lg"><?php echo $this->Html->link('<i class="desktop glyphicon glyphicon-search"></i>'.' <span class="mobile">'.__('Search').'</span>', array('controller' => 'songs', 'action' => 'search'), array('data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => __('Search'), 'class' => 'nav-tooltips', 'escape' => false)); ?></li>
    <li><?php echo $this->Html->link('<i class="desktop glyphicon glyphicon-log-out"></i>'.' <span class="mobile">'.__('Logout').'</span>', array('controller' => 'users', 'action' => 'logout'), array('data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => __('Logout'), 'class' => 'nav-tooltips no-ajax', 'escape' => false)); ?></li>
</ul>
