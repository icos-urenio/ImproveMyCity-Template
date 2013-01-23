<?php

/* itsam changed to a bare minimum for imc template */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
$document = JFactory::getDocument();
$document->addScript(JURI::root(true).'/templates/improvemycity/assets/js/bootstrap.min.js');

JHTML::_('behavior.modal', 'a.modalwin', array('handler' => 'ajax')); /* fix */
?>
<div id="mod-login">
<?php if ($type == 'logout') : ?>
	
		<?php $greet = ''; ?>
		<?php if ($params->get('greeting')) : ?>
		<div class="greeting">
			<?php if ($params->get('name') == 0) : {
				//$greet = JText::sprintf('MOD_LOGIN_HINAME', $user->get('name'));
				$greet = $user->get('name');
			} else : {
				$greet = $user->get('username');
			} endif; ?>
		</div>
		<?php endif; ?>

		<div class="btn-group">
			<button class="btn"><i class="icon-user"></i> <?php echo $greet;?></button>
			<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			<form name="logoutform" action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post">
				<ul class="dropdown-menu">
					<!-- dropdown menu links -->
					<li><a href="#" onclick="javascript:document.logoutform.submit();;"><i class="icon-off"></i> <?php echo JText::_('JLOGOUT');?></a></li>
				</ul>
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="user.logout" />
			<input type="hidden" name="return" value="<?php echo $return; ?>" />
			<?php echo JHtml::_('form.token'); ?>	
			</form>
		</div>

<?php else : ?>
		
		<?php
		$usersConfig = JComponentHelper::getParams('com_users');
		if ($usersConfig->get('allowUserRegistration')) : ?>
			<div class="btn-group">
				
				<a class="btn modalwin" rel="{size: {x: 270, y: 360}}" href="index.php?option=com_users&view=login&tmpl=component&return=<?php echo $return; ?>"><?php echo JText::_('JLOGIN');?></a>
				<a class="btn" href="index.php?option=com_users&view=registration&return=<?php echo $return; ?>"><?php echo JText::_('MOD_LOGIN_REGISTER');?></a>
			</div>		
		<?php else : ?>
			<a class="btn modalwin" rel="{size: {x: 270, y: 360}}" href="index.php?option=com_users&view=login&tmpl=component&return=<?php echo $return; ?>"><?php echo JText::_('JLOGIN');?></a>		
		<?php endif; ?>

<?php endif; ?>
</div>
