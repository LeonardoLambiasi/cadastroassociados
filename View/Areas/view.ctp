<div class="areas view">
<h2><?php echo __('Area'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($area['Area']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($area['Area']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area'), array('action' => 'edit', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Area'), array('action' => 'delete', $area['Area']['id']), array(), __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Associados'), array('controller' => 'associados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Associado'), array('controller' => 'associados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Associados'); ?></h3>
	<?php if (!empty($area['Associado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Bairro'); ?></th>
		<th><?php echo __('CEP'); ?></th>
		<th><?php echo __('DataDeAdmissao'); ?></th>
		<th><?php echo __('DataDeNascimento'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('RG'); ?></th>
		<th><?php echo __('Estado Civil'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Salario'); ?></th>
		<th><?php echo __('Valor Adicional'); ?></th>
		<th><?php echo __('Mensalidade'); ?></th>
		<th><?php echo __('Mensagem'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($area['Associado'] as $associado): ?>
		<tr>
			<td><?php echo $associado['id']; ?></td>
			<td><?php echo $associado['nome']; ?></td>
			<td><?php echo $associado['endereco']; ?></td>
			<td><?php echo $associado['bairro']; ?></td>
			<td><?php echo $associado['CEP']; ?></td>
			<td><?php echo $associado['dataDeAdmissao']; ?></td>
			<td><?php echo $associado['dataDeNascimento']; ?></td>
			<td><?php echo $associado['telefone']; ?></td>
			<td><?php echo $associado['RG']; ?></td>
			<td><?php echo $associado['estado civil']; ?></td>
			<td><?php echo $associado['cargo_id']; ?></td>
			<td><?php echo $associado['area_id']; ?></td>
			<td><?php echo $associado['salario']; ?></td>
			<td><?php echo $associado['valor adicional']; ?></td>
			<td><?php echo $associado['mensalidade']; ?></td>
			<td><?php echo $associado['mensagem']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'associados', 'action' => 'view', $associado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'associados', 'action' => 'edit', $associado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'associados', 'action' => 'delete', $associado['id']), array(), __('Are you sure you want to delete # %s?', $associado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Associado'), array('controller' => 'associados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
