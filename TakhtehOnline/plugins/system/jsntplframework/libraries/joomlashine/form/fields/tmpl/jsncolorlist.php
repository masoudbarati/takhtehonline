<div class="jsn-color-list <?php echo $this->disabledClass ?>">
	<ul class="jsn-items-list ui-sortable" data-target="#<?php echo $this->id ?>">
		<?php foreach ($this->optionList as $item): ?>
		<?php $option = $this->defaultOptions[$item] ?>
		<?php $checked = in_array($item, $this->optionChecked) ? 'checked' : '' ?>

		<li class="jsn-item ui-state-default">
			<label class="checkbox <?php echo $this->disabledClass ?>">
				<input type="checkbox" name="<?php echo $this->group ?>[<?php echo $this->element['name'] ?>Items][]" value="<?php echo htmlentities($option['value']) ?>" <?php echo $checked ?> <?php echo $this->disabledClass ?> />
				<?php echo JText::_($option['label']) ?>
			</label>
		</li>
		<?php endforeach ?>
	</ul>
	<?php $value = is_array($this->value) ? json_encode($this->value) : $this->value; ?>
	<input type="hidden" name="<?php echo $this->name ?>" value="<?php echo htmlentities($value) ?>" id="<?php echo $this->id ?>" />
</div>