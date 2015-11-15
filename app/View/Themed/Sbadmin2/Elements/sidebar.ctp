<?php 
	function getIcon($controller,$array){
		$controller = strtolower($controller);
		foreach($array as $key=>$value){
			if($key==$controller)
				return $value;
		}
		return '';
	}
?>            
<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<i class="fa fa-search"></i>
						</button>
					</span>
				</div>
				<!-- /input-group -->
			</li>
			<li>
				<a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
			</li>
			<?php foreach($controllers as $controller): ?>
			<li>
				<a href="#"><i class="fa <?= getIcon($controller['name'],$icons); ?> fa-fw"></i> <?= $controller['displayName']; ?><span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="<?= $this->Html->url(array('controller'=>strtolower($controller['name']),'action'=>'index')); ?>"><?= __('Lista') ?></a>
					</li>
					<li>
						<a href="<?= $this->Html->url(array('controller'=>strtolower($controller['name']),'action'=>'add')); ?>"><?= __('Aggiungi'); ?></a>
					</li>
				</ul>
				<!-- /.nav-second-level -->
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->