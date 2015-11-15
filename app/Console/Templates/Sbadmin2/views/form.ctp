<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><?php echo Inflector::humanize($action).' '.$singularHumanName; ?></h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<?php echo Inflector::humanize($action).' '.$singularHumanName; ?>
			</div>
			<div class="panel-body">
			<?php echo "<?php echo \$this->Form->create('{$modelClass}',array('inputDefaults'=>array('class'=>'form-control','div'=>'form-group'))); ?>\n"; ?>
				<fieldset>
				<?php
						echo "\t<?php\n";
						foreach ($fields as $field) {
							if (strpos($action, 'add') !== false && $field === $primaryKey) {
								continue;
							} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
								echo "\t\techo \$this->Form->input('{$field}');\n";
							}
						}
						if (!empty($associations['hasAndBelongsToMany'])) {
							foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
								echo "\t\techo \$this->Form->input('{$assocName}');\n";
							}
						}
						echo "\t?>\n";
				?>
				</fieldset>
			<?php
				echo "<?php\n\techo \$this->Form->submit(__('Salva'),array('class'=>'btn btn-primary','div'=>false));\n\t\$this->Form->end();\n ?>\n";
			?>
			</div>
		</div>
	</div>
</div>
