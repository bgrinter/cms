<div>
    <?php echo $this->User->welcome(); ?>
</div>

<div>
    <?= $this->Html->link("Articles", ['controller' => 'articles', 'action' => 'index']) ?>
    <?= $this->Html->link("Tags", ['controller' => 'tags', 'action' => 'index']) ?>
    <?= $this->Html->link("Users", ['controller' => 'users/index', 'action' => 'index']) ?>
    <?php echo $this->User->logout(); ?>
</div>
