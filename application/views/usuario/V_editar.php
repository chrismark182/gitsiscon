<nav class="blue-grey lighten-1" style="padding: 0 1em;">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Seguridad</a>
        <a href="<?= base_url() ?>usuarios" class="breadcrumb">Usuarios</a>
        <a href="#!" class="breadcrumb">Editar</a>
      </div>
    </div>
</nav>
<div class="section container center">
    <form action="<?= base_url() ?>usuario/<?= $usuario->USUARI_N_ID ?>/actualizar" method="post">
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="username" type="text" name="username" value="<?= $usuario->USUARI_C_USERNAME ?>" class="validate">
                <label class="active" for="username">Nombre de usuario</label> 
            </div>
            <div class="input-field col s12 m6">
                <select name="categoria">
                    <option value="0" disabled>Escoge una opción</option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria->CATEGO_N_ID ?>" 
                            <?php if($categoria->CATEGO_N_ID == $usuario->CATEGO_N_ID): echo 'selected'; endif; ?>><?= $categoria->CATEGO_C_DESCRIPCION ?></option>
                    <?php endforeach; ?>

                </select>
                <label>Categoria</label>
            </div>
            <div class="input-field col s12">
                <input class="btn-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</div>
        
