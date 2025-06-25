<!-- resources/views/components/menu-produtos.blade.php -->

<div class="navbar sub">
  <a href="{{ route('produtos') }}" class="subb">Todos os Produtos</a>

  <!-- Categoria: Cabelos -->
  <div class="subnav">
    <button class="subnavbtn">Cabelos <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="{{ route('produtos') }}?categoria=cabelos" class="drop">Produtos para Cabelos</a>
      <a href="#" class="drop">Tipos de Cabelos</a>
      <a href="#" class="drop">Marcas de Salão</a>
      <a href="#" class="drop">Kits de Tratamento</a>
    </div>
  </div> 

  <!-- Categoria: Barba -->
  <div class="subnav">
    <button class="subnavbtn">Barba <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="{{ route('produtos') }}?categoria=barba" class="drop">Kits para Barba</a>
      <a href="#" class="drop">Cuidados com a Barba</a>
      <a href="#" class="drop">Pós-Barba</a>
    </div>
  </div> 

  <!-- Marcas -->
  <div class="subnav">
    <button class="subnavbtn">Marcas <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#" class="drop">0-9</a>
      <a href="{{ route('produtos') }}?marca[]=Lowell&marca[]=Alfaparf" class="drop">A - Lowell + Alfaparf</a>
      <a href="{{ route('produtos') }}?marca=B" class="drop">B</a>
      <a href="{{ route('produtos') }}?marca=C" class="drop">C</a>
    </div>
  </div>

  <!-- Outlet -->
  <!-- <a href="#contact" class="subb">Outlet</a> -->
</div>