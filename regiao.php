<?php 
  include './backend/conexao.php';
  include './backend/validacao.php';
  include './recursos/cabecalho.php';

  $destino="./backend/regiao/inserir.php";

  if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM regiao where id='$id' ";

    $dados=mysqli_query($conexao, $sql);
    $regios=mysqli_fetch_assoc($dados);
    $destino="./backend/regiao/alterar.php";
  }
?>



<body>

 <?php include './recursos/menu-superior.php'; ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      <?php include './recursos/menu-laterau.php'; ?>
    </div>
         <div class="col-3">
        <h1> Cadastro </h1>

        <form action="<?=$destino?>"method="post">
          <div class="mb-3">
            <label class="form-label">ID</label>
            <input readonly name="id" type="" value="<?php echo isset($regios) ? $regios['id']: "" ?> " class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label"> nome </label>
            <input name="nome" type="" value="<?php echo isset($regios) ? $regios['nome']: "" ?>"class="form-control">
          </div>


          <button type="submit" class="btn btn-primary"> Salvar </button>
        </form>
      </div>

      <div class="col-7">
        <h1> Listagem </h1>

        <table id="tabela" class="table table-striped table-bordered" >
          <thead class="table-primary">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">opecoes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql="select * from regiao";
              $dados = mysqli_query($conexao, $sql);
              while($colunas=mysqli_fetch_assoc($dados)){
            ?>
            <tr>
              <th scope="row"><?php echo $colunas['id'] ?></th>
              <td> <?php echo $colunas['nome'] ?></td>
              <td>
                <a href="./regiao.php?id=<?= $colunas['id'] ?>"> <i class="fa-solid fa-pencil me-2"></i></a>
                <a href=<?php echo"./backend/regiao/excluir.php?id=".$colunas['id'] ?> onclick="return confirm('deseja realmente exclur?')"><i class="fa-solid fa-trash-can" style="color: #db0606;"></i></a>
              </td>
            </tr>
          <?php } ?>
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