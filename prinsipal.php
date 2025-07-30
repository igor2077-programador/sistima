<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiolo.css">
    <title>sistema.R.I.C.S</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navegacao ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa-solid fa-handshake"></i>RICS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            opçaos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search"/>
        <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        <a href="#" class="btn btn-outline-light ms-2 "><i class="fa-solid fa-right-from-bracket"></i></a>
      </form>
     
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      
      <ul class="ul">
        <li><a href="#" class="menu-itens"> <i class="fa-regular fa-user"></i>usuarios</a></li>
        <li><a href="#" class="menu-itens"><i class="fa-solid fa-map-pin"></i>regiao</a></li>
        <li><a href="#" class="menu-itens"><i class="fa-solid fa-city"></i>cidades</a></li>
        <li><a href="#" class="menu-itens"><i class="fa-solid fa-user-tie"></i>pontos focais</a></li>
        <li><a href="#" class="menu-itens"><i class="fa-solid fa-graduation-cap"></i>areas</a></li>
        <li><a href="#" class="menu-itens"><i class="fa-solid fa-cart-shopping"></i>efetuar vendas</a></li>
        <li><a href="#" class="menu-itens"><i class="fa-solid fa-magnifying-glass-dollar"></i>pesquisa de vendas</a></li>
      </ul>
    </div>
         <div class="col-5">
        <h1> Cadastro </h1>

        <form>
          <div class="mb-3">
            <label class="form-label"> CPF </label>
            <input type="text" class="form-control .cpf">
          </div>

          <div class="mb-3">
            <label class="form-label"> E-mail </label>
            <input type="email" class="form-control">
          </div>

          <div class="mb-3 input-group">
            <label class="form-label">Senha</label>
            <div class="input-group">
            <input type="password" class="form-control" id="senha">
            <span  onclick="visualizar()" style="cursor: pointer;"  class="input-group-text" ><i id="olho" class="fa-regular fa-eye"></i></span>
            </div>
          </div>

          <button type="submit" class="btn btn-primary"> Salvar </button>
        </form>
      </div>

      <div class="col-5">
        <h1> Listagem </h1>

        <table id="tabela" class="table table-striped table-bordered" >
          <thead class="table-primary">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Senha</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td> Stênio </td>
              <td> Stenio@gmail.com </td>
              <td> 123 </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Arlindo</td>
              <td>Arlindo@gmail.com</td>
              <td>lindo123</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Maria</td>
              <td>Maria@gmail.com</td>
              <td>MariaMaria</td>
            </tr>
          </tbody>
        </table>
      </div>


  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
  
  </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="script.js"></script>
    <h1></h1>

</body>
</html>