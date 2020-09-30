<div class="col-xs-12" style="margin-top: 20px;" data-view="search">
    <form class="form-horizontal" action="<?php echo $this->Html->url(array('controller' => 'songs', 'action' => 'search')); ?>" role="search">
        <div class="form-group">
            <div>
                <input type="text" class="form-control search-input" placeholder="Nirvana" name="q" value="<?php echo isset($query) ? h($query) : ''; ?>"/>
                <button type="submit" class="btn btn-default btn-primary pull-right"><?php echo __('Search'); ?></button>
            </div>
        </div>
    </form>
</div>

<?php if ($query) { ?>
    <div data-scroll-container="true" class="search">
        <?php echo $this->element('artists_view'); ?>
        <?php echo $this->element('add_to_playlist'); ?>
        <?php echo $this->element('pagination'); ?>
    </div>
<?php } ?>
