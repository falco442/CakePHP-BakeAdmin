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
<div class="<?php echo $pluralVar; ?> index">
	<h2><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h2>
	<table class="table">
		<thead>
			<tr>
				<?php foreach ($fields as $field): ?>
				<th><?php echo "<?php echo \$this->Paginator->sort('{$field}'); ?>"; ?></th>
				<?php endforeach; ?>
				<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
			</tr>
	</thead>
	<tbody>
	<?php
		echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
		echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "<td>\n\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
		echo "\t\t\t<?php echo \$this->Html->link(__('View'), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'btn btn-sm btn-default','div'=>false)); ?>\n";
		echo "\t\t\t<?php echo \$this->Html->link(__('Edit'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('class'=>'btn btn-sm btn-default','div'=>false)); ?>\n";
		echo "\t\t\t<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('confirm' => __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}']),'class'=>'btn btn-sm btn-danger','div'=>false)); ?>\n";
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
	</tbody>
	</table>
	<p>
	<?php echo "<?php
	echo \$this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>"; ?>
	</p>
	<div class="paging">
	<?php
		echo "<?php\n\t\techo \$this->Paginator->pagination(array(\n\t\t\t'ul' => 'pagination'\n\t\t));\n\t?>\n";
	?>
	</div>
</div>