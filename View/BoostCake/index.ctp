<?php $this->layout = 'bootstrap2'; ?>
<?php $this->set('title_for_layout', 'Bootstrap Plugin for CakePHP'); ?>

<div class="hero-unit">
	<h1>BoostCake</h1>
	<p>
		This is a plugin for CakePHP using Bootstrap
	</p>
	<p>
		<a href="https://github.com/slywalker/cakephp-plugin-boost_cake" class="btn btn-primary btn-large">
			Github Project &raquo;
		</a>
	</p>
</div>

<div class="page-header">
	<h2>Install</h2>
</div>

<h3>Enable plugin</h3>
<p>You need to enable the plugin your app/Config/bootstrap.php file:</p>
<pre class="prettyprint">CakePlugin::load('BoostCake');</pre>
<p>If you are already using <code>CakePlugin::loadAll();</code>, then this is not necessary.</p>

<h3>Add helpers</h3>
<p>You need to add helpers at controller.</p>
<pre class="prettyprint"><?php echo h("<?php
class AppController extends Controller {

	public \$helpers = array(
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	);

}"); ?></pre>