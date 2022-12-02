<?php
/* Smarty version 4.2.1, created on 2022-12-02 22:32:26
  from 'C:\xampp\htdocs\pagina indumentaria\templates\body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_638a6eea17f939_34698380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa3a6e4b86d7102da9aac8a5f847769fc5229ab3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pagina indumentaria\\templates\\body.tpl',
      1 => 1670016744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_638a6eea17f939_34698380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="pageSector">
    <div class="filtros">

        <h2> Classics </h2>
        <h3> Classics</h3>
        <ul class="tipos">
            <li><a href="">Old School</a></li>
            <li><a href="">Era</a></li>
            <li><a href="">Authentic</a></li>
            <li><a href="">Sk8</a></li>
        </ul>

        <h3>Precios</h3>
        <div class="rango">
            <div>
                <label for="">Desde</label><input class="input_rango" type="number">
            </div>
            <div>
                <label for="">Hasta</label><input class="input_rango" type="number">
            </div>
        </div>

        <h3>Colores</h3>
        <ul>
            <li><a href="">Rojo</a></li>
            <li><a href="">Verde</a></li>
            <li><a href="">Azul</a></li>
            <li><a href="">Amarillo</a></li>
            <li><a href="">Violeta</a></li>
        </ul>

    </div>
    
    <div class="zapatillas">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zapatillas']->value, 'zapatilla');
$_smarty_tpl->tpl_vars['zapatilla']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zapatilla']->value) {
$_smarty_tpl->tpl_vars['zapatilla']->do_else = false;
?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Modelo: <?php echo $_smarty_tpl->tpl_vars['zapatilla']->value->modelo;?>
</h5>
                    <h5 class="card-text">Color: <?php echo $_smarty_tpl->tpl_vars['zapatilla']->value->color;?>
</h5>
                    <h5 class="card-text">Genero: <?php echo $_smarty_tpl->tpl_vars['zapatilla']->value->genero;?>
</h5>
                    <h5 class="card-text">Calzado: <?php echo $_smarty_tpl->tpl_vars['zapatilla']->value->calzado;?>
</h5>
                    <a href="zapatilla/<?php echo $_smarty_tpl->tpl_vars['zapatilla']->value->id;?>
" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
   
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
