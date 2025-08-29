<?php 
  include './backend/conexao.php';
  include './backend/validacao.php';
  include './recursos/cabecalho.php';

  $destino="./backend/ponto_focal/inserir.php";

  if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM ponto_focal where id='$id' ";

    $dados=mysqli_query($conexao, $sql);
    $ponto_focal =mysqli_fetch_assoc($dados);
    $destino="./backend/ponto_focal/alterar.php";
  }
?>


<body>

<?php include './recursos/menu-superior.php'; ?>


<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      <?php include './recursos/menu-laterau.php'; ?>
    </div>
         <div class="col-2">
        <h1> Cadastro </h1>

        <form action="<?=$destino?>"method="post">
          
          <div class="mb-3">
            <label class="form-label">ID</label>
            <input readonly name="id" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['id']: "" ?> " class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label"> nome </label>
            <input name="nome" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['nome']: "" ?>"class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">razao social </label>
            <input name="razao_social" type="razao_social" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['razao_social']: "" ?>" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label"> tipo </label>
            <select class="form-select" id="">
              <option value="privada">privada</option>
              <option value="publica">publica</option>
            </select>
          </div> 

          <div class="mb-3">
            <label class="form-label"> cnpj </label>
            <input name=".cnpj" type="text" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['cnpj_cpf']: "" ?>" class="form-control cnpj">
          </div> 

          <div class="mb-3">
            <label class="form-label"> endereco </label>
            <input name="endereco" type="text" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['endereco']: "" ?>" class="form-control endereco">
          </div> 

          <div class="mb-3">
            <label class="form-label"> telefone </label>
            <input name="telefone" type="text" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['telefone']: "" ?>" class="form-control celuLAR_with_ddd">
          </div> 

          <div class="mb-3">
            <label class="form-label"> celular </label>
            <input name="celular" type="text" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['celular']: "" ?>" class="form-control celuLAR_with_ddd">
          </div> 

          <div class="mb-3">
            <label class="form-label"> email </label>
            <input name="email" type="text" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['email']: "" ?>" class="form-control email">
          </div> 

          <div class="mb-3">
            <label class="form-label"> cidade </label>
            <input name="id_cidade_fk" type="text" type="" value="<?php echo isset($ponto_focal) ? $ponto_focal['id_cidade_fk']: "" ?>" class="form-control id_cidade_fk">
                          <select name = "id_cidade_fk" class="form-select" require> <!--  -->
                <option>selecione uma cidade</option>
                  <?php 
                    $sql="select * from cidade order by nome";
                    $resultado=mysqli_query($conexao, $sql);
                    $cidadeselesonada = isset($cidade) ? $cidade['id_cidade_fk']:'';

                    while ($reg=mysqli_fetch_assoc($resultado)) {
                      $selecao=($reg['id'] == $cidadeselesonada) ?'SELECIONE':'';
                      echo"<option value='{$reg['id']}'$selecao>{$reg['nome']} </option>";
                    }
                  ?>
              <select>  
          </div>






          <button type="submit" class="btn btn-primary"> Salvar </button>
        </form>
      </div>

      <div class="col-8">
        <h1> Listagem </h1>

        <table id="tabela" class="table table-striped table-bordered" >
          <thead class="table-primary">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">razao_social</th>
              <th scope="col"> tipo </th> 
              <th scope="col">cnpj</th>
              <th scope="col">endereco</th>
              <th scope="col">telefone</th>
              <th scope="col">celular</th>
              <th scope="col">email</th>
              <th scope="col">Opcoes</th>
               <th>Opcoes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql="select * from ponto_focal";
              $dados = mysqli_query($conexao, $sql);
              while($colunas=mysqli_fetch_assoc($dados)){
            ?>
            <tr>
              <th scope="row"><?php echo $colunas['id'] ?></th>
              <td> <?php echo $colunas['nome'] ?></td>
              <td> <?php echo $colunas['razao_social'] ?> </td>
              <td> <?php echo $colunas['tipo'] ?> </td>
              <td> <?php echo $colunas['cnpj_cpf'] ?></td>
              <td> <?php echo $colunas['endereco'] ?></td>
              <td> <?php echo $colunas['telefone'] ?></td>
              <td> <?php echo $colunas['celular'] ?></td>
              <td> <?php echo $colunas['email'] ?></td>
              <td> <?php echo $colunas['id_cidade_fk'] ?></td>

              <td>
                <a href="./ponto-focal.php?id=<?= $colunas['id'] ?>"> <i class="fa-solid fa-pencil me-2"></i></a>
                <a href=<?php echo"./backend/ponto_focal/excluir.php?id=".$colunas['id'] ?> onclick="return confirm('deseja realmente exclur?')"><i class="fa-solid fa-trash-can" style="color: #db0606;"></i></a>
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