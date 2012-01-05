<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo form_tag_for($form, '@projects') ?>
  <div class="fieldsContainer">
		<?php echo $form['title']->renderLabel() ?>
		<?php echo $form['title']->render() ?>
		<div class="help">
			<?php echo $form['title']->renderHelp() ?>
			<?php echo $form['title']->renderError() ?>
		</div>
  </div>
  <div class="fieldsContainer">
		<?php echo $form['text']->renderLabel() ?>
		<?php echo $form['text']->render() ?>
		<div class="help">
			<?php echo $form['text']->renderHelp() ?>
			<?php echo $form['text']->renderError() ?>
		</div>
  </div>
  <div class="fieldsContainer">
		<?php echo $form['price']->renderLabel() ?>
		<?php echo $form['price']->render() ?>
		<div class="help">
			<?php echo $form['price']->renderHelp() ?>
			<?php echo $form['price']->renderError() ?>
		</div>
  </div>
  <div id="licenceFields" class="fieldsContainer">
	<input id="registerButton" type="submit" value="Добавить" />
  </div>
</form>