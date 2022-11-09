<?php
/**
 * @var SiteController $this
 * @var LoginForm      $model
 * @var SimpleXMLElement $update_item
 * @var SimpleXMLElement $blog_item
 */
$txtLogin = Yii::t('pls', 'Login');
$this->pageTitle = Yii::app()->name . ' - ' . $txtLogin;
$this->breadcrumbs = [
	$txtLogin,
];
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 align-self-center">
			<?php
			$this->renderPartial('_login', ['model' => $model]);
			?>
		</div>
		<div class="col-md-6">
			<?php
			$this->renderPartial('_slides', ['update_item' => $update_item, 'blog_item' => $blog_item]);
			?>
		</div>
	</div>
</div>