<?php include("../template/Header.php") ?>

<main>
  <div class="banner">
    <div class="banner-container max-width">
      <h1 class="banner-title">Módulo de administración</h1>
    </div>
  </div>
  <div class="max-width">
    <section class="max-width section">
      <h2>Operaciones a realizar:</h2>

      <div class="administrator-container">
        <details class="administrator-detail">
          <summary>Agregar</summary>
          <form class="administrator-form">

            <label class="texto-de-avisos-2" for="id_producto">Id producto</label>
            <input class="form-input" type="text" id="id_producto" name="id_producto" />
            <label class="texto-de-avisos-2" for="descripcion">Descripción</label>
            <input class="form-input" type="text" id="descripcion" name="descripcion" />

            <label class="texto-de-avisos-2" for="categoria">Categoría</label>

            <select class="dropdown" id="categoria">
              <option value="Brandy">Brandy</option>
              <option value="Champaña">Champaña</option>
              <option value="Espirituosas">Espirituosas</option>
              <option value="Ginebra">Ginebra</option>
              <option value="Ron">Ron</option>
              <option value="Vino">Vino</option>
              <option value="Vodka">Vodka</option>
            </select>

            <label class="texto-de-avisos-2" for="marca">Marca</label>

            <select class="dropdown" id="marca">
              <option value="Absolut">Absolut</option>
              <option value="Baileys">Baileys</option>
              <option value="Barefoot_Wine">Barefoot Wine</option>
              <option value="Cacique">Cacique</option>
              <option value="Captain_Morgan">Captain Morgan</option>
              <option value="E&J_Brandy">E&J Brandy</option>
              <option value="Jack_Daniel’s">Jack Daniel’s</option>
              <option value="Jim_Beam">Jim Beam</option>
              <option value="Malibú">Malibú</option>
              <option value="Martell">Martell</option>
              <option value="Mumm">Mumm</option>
              <option value="Svedka">Svedka</option>
              <option value="Veuve_Clicquot">Veuve Clicquot</option>
              <option value="Yellowtail">Yellowtail</option>
            </select>

            <label class="texto-de-avisos-2" for="id_producto">Precio</label>
            <input class="form-input" type="number" min="0" id="id_producto" name="id_producto" />

            <div class="administrator-buttons">
              <button type="submit" class="button button-succes">Aceptar</button>
              <button type="reset" class="button button-danger">Cancelar</button>
            </div>
            </fieldset>
          </form>
        </details>

        <details class="administrator-detail">
          <summary>Modificar</summary>
          <form class="administrator-form">

            <label class="texto-de-avisos-2" for="descripcion">Descripción</label>
            <input class="form-input" type="text" id="descripcion" name="descripcion" />

            <label class="texto-de-avisos-2" for="categoria">Categoría</label>
            <select class="dropdown" id="categoria">
              <option value="whisky">Whisky</option>
              <option value="Brandy">Brandy</option>
              <option value="Champaña">Champaña</option>
              <option value="Espirituosas">Espirituosas</option>
              <option value="Ginebra">Ginebra</option>
              <option value="Ron">Ron</option>
              <option value="Vino">Vino</option>
              <option value="Vodka">Vodka</option>
            </select>

            <label class="texto-de-avisos-2" for="marca">Marca</label>
            <select class="dropdown" id="marca">
              <option value="Absolut">Absolut</option>
              <option value="Baileys">Baileys</option>
              <option value="Barefoot_Wine">Barefoot Wine</option>
              <option value="Cacique">Cacique</option>
              <option value="Captain_Morgan">Captain Morgan</option>
              <option value="E&J_Brandy">E&J Brandy</option>
              <option value="Jack_Daniel’s">Jack Daniel’s</option>
              <option value="Jim_Beam">Jim Beam</option>
              <option value="Malibú">Malibú</option>
              <option value="Martell">Martell</option>
              <option value="Mumm">Mumm</option>
              <option value="Svedka">Svedka</option>
              <option value="Veuve_Clicquot">Veuve Clicquot</option>
              <option value="Yellowtail">Yellowtail</option>
            </select>

            <label class="texto-de-avisos-2" for="id_producto">Precio</label>
            <input class="form-input" type="number" min="0" id="id_producto" name="id_producto" />

            <div class="administrator-buttons">
              <button type="submit" class="button button-succes">Aceptar</button>
              <button type="reset" class="button button-danger">Cancelar</button>
            </div>
            </fieldset>
          </form>
        </details>

        <details class="administrator-detail">
          <summary>Eliminar</summary>
          <form class="administrator-form">
            <input class="form-input" placeholder="id producto a eliminar" type="text" name="busqueda" />
            <button class="button button-danger">Eliminar</button>
          </form>
        </details>

      </div>

      <div class="administrator-table">
        <div class="generic-container">

          <input class="form-input" type="text" name="Filtrar" placeholder="Id producto" />

          <div>
            <label class="texto-de-avisos-2" for="categoria">Categoría</label>
            <select class="dropdown" id="categoria">
              <option value="whisky">Whisky</option>
              <option value="Brandy">Brandy</option>
              <option value="Champaña">Champaña</option>
              <option value="Espirituosas">Espirituosas</option>
              <option value="Ginebra">Ginebra</option>
              <option value="Ron">Ron</option>
              <option value="Vino">Vino</option>
              <option value="Vodka">Vodka</option>
            </select>

          </div>
          <div>
            <label class="texto-de-avisos-2" for="marca">Marca</label>
            <select class="dropdown" id="marca">
              <option value="Absolut">Absolut</option>
              <option value="Baileys">Baileys</option>
              <option value="Barefoot_Wine">Barefoot Wine</option>
              <option value="Cacique">Cacique</option>
              <option value="Captain_Morgan">Captain Morgan</option>
              <option value="E&J_Brandy">E&J Brandy</option>
              <option value="Jack_Daniel’s">Jack Daniel’s</option>
              <option value="Jim_Beam">Jim Beam</option>
              <option value="Malibú">Malibú</option>
              <option value="Martell">Martell</option>
              <option value="Mumm">Mumm</option>
              <option value="Svedka">Svedka</option>
              <option value="Veuve_Clicquot">Veuve Clicquot</option>
              <option value="Yellowtail">Yellowtail</option>
            </select>
          </div>
          <button type="submit" class="button button-primary">Filtrar</button>
        </div>


        <div class="table-container texto-normal-2">
          <div></div>
          <div>Id producto</div>
          <div>Descripción</div>
          <div>Categoría</div>
          <div>Marca</div>
          <div>Precio</div>
        </div>

        <div class="table-container">
          <div><input class="form-input" type="checkbox" name="" /></div>
          <div>P0001</div>
          <div>Unidad 300ml Jack Daniel's</div>
          <div>Ron</div>
          <div>Jack Daniel's</div>
          <div>S/80</div>

          <div><input class="form-input" type="checkbox" name="" /></div>
          <div>P0002</div>
          <div>Unidad 200ml Smirnoff</div>
          <div>Vodka</div>
          <div>Smirnoff</div>
          <div>S/70</div>

          <div><input class="form-input" type="checkbox" name="" /></div>
          <div>P0003</div>
          <div>Unidad 500ml Bacardi</div>
          <div>Ron</div>
          <div>Bacardi</div>
          <div>S/90</div>

          <div><input class="form-input" type="checkbox" name="" /></div>
          <div>P0004</div>
          <div>Unidad 350ml Jägermeister</div>
          <div>Jägermeister</div>
          <div>Espirituosas</div>
          <div>S/50</div>

          <div><input class="form-input" type="checkbox" name="" /></div>
          <div>P0005</div>
          <div>Unidad 800ml Robert Mondavi</div>
          <div>Vino</div>
          <div>Robert Mondavi</div>
          <div>S/120</div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php include("../template/Footer.php") ?>