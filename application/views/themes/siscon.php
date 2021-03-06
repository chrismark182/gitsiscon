<!DOCTYPE>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/siscon.css?<?= time() ?>">
	
	<!--Agregado de datetimepicker -->
	<!--
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datetimepicker.min.css">
	-->
	<!--fin de datetimepicker -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SISCON</title>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>assets/js/materialize.js"></script>
	<script src="<?= base_url() ?>assets/js/funciones.js"></script>
	<script src="<?= base_url() ?>assets/js/moment.js"></script>
	<!--
	<script src="<?= base_url() ?>assets/js/locales/bootstrap-datetimepicker.fr.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap-datetimepicker.js"></script>
	-->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			$('select').formSelect();
			$('.sidenav').sidenav();
			$('.modal').modal();
			var options = {
				format: 'dd/mm/yyyy',
				autoClose: true, 
				setDefaultDate: true
			}
			var elems = document.querySelectorAll('.datepicker');
			var instances = M.Datepicker.init(elems, options);
			$('.dropdown-trigger').dropdown();
			$('.tooltipped').tooltip();
			var message = '<?= $this->session->flashdata('message'); ?>';
			if(message != '')
			{
				M.toast({html: message, classes: 'rounded'});
			}
		});
	</script>
	<style>
		.preloader-background
        {
            display: none;
            background-color: rgba(255,255,255,0.5);
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 9;
        }
        .preloader-wrapper.active
        {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            top: 20em;
        }
		td i
		{
			color: #039be5;
		}
		
		<!--MODIFICACION-->
		<!--
		[type="radio"]:not(:checked), [type="radio"]:checked {
			position: relative !important;;  
			opacity: 1 !important;; 
		}
		-->
		<!--FIN MODIFICACION-->
	</style>
</head>
<body>
	 <!-- Preloader  -->
	 <div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
	<nav class="blue-grey darken-1" style="padding: 0 1em;">
    	<div class="nav-wrapper">
		<?php if($this->session->userdata('logged_in')): ?>
			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<?php endif; ?>
			<a href="<?= base_url() ?>" class="brand-logo">SISCON</a>
			<!-- Dropdown Structure -->
			<ul id="dropUsuario" class="dropdown-content">
				<li><a href="<?= base_url() ?>logout">Cerrar Sesión</a></li>  
			</ul>


			<?php if(!empty($accesos['padres'])):  ?>
				<?php foreach ($accesos['padres'] as $menu_padre): ?>
					<ul id="<?= $menu_padre->MENU_ID; ?>" class="dropdown-content">
						<?php foreach($accesos['hijos'] as $hijo):?>
							<?php if($hijo->MENU_PADRE_ID == $menu_padre->MENU_ID): ?>
								<li>
									<a href="<?= base_url() ?><?= $hijo->MENU_RUTA; ?>">
										<?= $hijo->MENU_DESCRIPCION; ?>
									</a>
								</li> 
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
				<?php endforeach; ?>
			<?php endif; ?>


			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<?php if($this->session->userdata('logged_in')): ?>
					<?php if(!empty($accesos['padres'])): ?>
						<?php foreach($accesos['padres'] as $acceso): ?>
							<?php if($acceso->MENU_RUTA == '#'): ?>
								<li><a class="dropdown-trigger" href="#!" data-target="<?= $acceso->MENU_ID ?>"><?= $acceso->MENU_DESCRIPCION ?><i class="material-icons right">arrow_drop_down</i></a></li>
							<?php else: ?>
								<li>
									<a href="<?= base_url() . $acceso->MENU_RUTA ?>"><?= $acceso->MENU_DESCRIPCION ?></a>
								</li>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
					<li><a href="#" class="dropdown-trigger" data-target="dropUsuario"><?= $session->USUARI_C_USERNAME ?>
						<i class="material-icons right">arrow_drop_down</i></a></li>
				<?php else: ?>
				
				<?php endif;?>
				
			</ul>
    	</div>
  	</nav>
	<ul id="slide-out" class="sidenav">
		<li>
			<div class="user-view">
				<div class="background">
					<img src="<?= base_url() ?>assets/images/office.jpg">
				</div>
				<a href="#user"><img class="circle" src="<?= base_url() ?>assets/images/yuna.jpg"></a>
				<a href="#name"><span class="white-text name"><?= $session->USUARI_USERNAME ?></span></a>
				<a href="#email"><span class="white-text email"><?= $session->USUARI_USERNAME ?>@gmail.com</span></a>
			</div>
		</li>
		
		<?php if($this->session->userdata('logged_in')): ?>
			<?php if(!empty($accesos['hijos'])): ?>
				<?php foreach($accesos['hijos'] as $acceso): ?>
					<li>
						<a href="<?= base_url() . $acceso->MENU_RUTA ?>"><?= $acceso->MENU_DESCRIPCION ?></a>
					</li>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php else: ?>
		<?php endif;?>
		<li><div class="divider"></div></li>
		<li><a href="#!" class="subheader">Seguridad</a></li>
		<li><a class="waves-effect" href="<?= base_url() ?>logout">Cerrar Sesión</a></li>
	</ul>
	<div class="container">
		<?php if ($this->session->flashdata('error')): ?>
			<div class="card-panel red lighten-2 white-text"><?= $this->session->flashdata('error'); ?></div>
		<?php endif ?>
	</div>
	<?php echo $output;?>
	
</body>
</html>