{include file="header.tpl"}

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
        {foreach from=$zapatillas item=$zapatilla}
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Modelo: {$zapatilla->modelo}</h5>
                    <h5 class="card-text">Color: {$zapatilla->color}</h5>
                    <h5 class="card-text">Genero: {$zapatilla->genero}</h5>
                    <h5 class="card-text">Calzado: {$zapatilla->calzado}</h5>
                    <a href="zapatilla/{$zapatilla->id}" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
        {/foreach}
    </div>
   
</div>

{include file="footer.tpl"}