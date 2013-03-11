<?php

/* itsam changed to a bare minimum for imc template */

// no direct access
defined('_JEXEC') or die;


JHtml::_('behavior.keepalive');
$document = JFactory::getDocument();

//$document->addScript(JURI::root(true).'/templates/improvemycity/js/jquery-1.7.1.min.js');
//$document->addScript(JURI::root(true).'/templates/improvemycity/assets/js/bootstrap.min.js');
//$document->addStyleSheet(JURI::root(true).'/templates/improvemycity/assets/css/bootstrap.min.css');

//JHTML::_('behavior.modal', 'a.modalwin', array('handler' => 'ajax', 'evalScripts' => true)); /* fix */

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

		
			<form name="logoutform" action="<?php echo JRoute::_('index.php', true, $params->get('usesecure')); ?>" method="post">
				
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="user.logout" />
				<input type="hidden" name="return" value="<?php echo $return; ?>" />
				<?php echo JHtml::_('form.token'); ?>	
				<div class="btn-group">
				<?php /*
				<a class="btn" href="index.php?option=com_users&view=profile&return=<?php echo $return; ?>"><i class="icon-user"></i> <?php echo $greet;?></a>
				*/?>
				<a class="btn" href="javascript:void(0);"><i class="icon-user"></i> <?php echo $greet;?></a>
				<a class="btn" onclick="javascript:document.logoutform.submit();"><i class="icon-off"></i> <?php echo JText::_('JLOGOUT');?></a>
				</div>
			</form>
		

<?php else : ?>
		
		<?php
		$usersConfig = JComponentHelper::getParams('com_users');
		if ($usersConfig->get('allowUserRegistration')) : ?>
			<div class="btn-group">
				<a class="btn" href="index.php?option=com_users&view=login&return=<?php echo $return; ?>"><?php echo JText::_('JLOGIN');?></a>
				<a class="btn" href="index.php?option=com_users&view=registration&return=<?php echo $return; ?>"><?php echo JText::_('MOD_LOGIN_REGISTER');?></a>
			</div>		
		<?php else : ?>
			<a class="btn" href="index.php?option=com_users&view=login&return=<?php echo $return; ?>"><?php echo JText::_('JLOGIN');?></a>
		<?php endif; ?>

<?php endif; ?>
</div>
