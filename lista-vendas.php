<?php 
   include './backend/conexao.php';
   include './backend/validacao.php';
   $sql="SELECT * ,
   V.id,
   v.data,
   pf.nome AS ponto_focal_nome,
   pf.tipo,
   a.nome AS area_nome,
   c.nome AS cidade_nome,
   r.nome AS regiao_nome
   FROM venda v INNER JOIN ponto_focal pf
   on pf.id = v.id_ponto_focal_fk
   INNER JOIN area a
   on a.id = v.id_area_fk
   INNER JOIN cidade c
   ON pf.id_cidade_fk=c.id
   INNER JOIN regiao r
   on c.id_regiao_fk = r.id
   ORDER BY v.data DESC
   ";
   $resultado = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema.R.I.C.S</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous" 
      referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
      crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
     crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
      <style>
      button{
        background-color:#007fff;
        margin-bottom: 15px;
        margin-right: 8px;
        color: white;
        padding:8px;
        border: none;
        border-radius: 8px;
      }
      #tabela{
        margin-top: 8px;
      }
    </style>
</head>
<body class="container-fluid">

  <H2>Relatorios de Vendas de Areas</H2>

      <div class="row">
        <div class="col-md-3">
          <label for="">region</label>
          <select name="regiao_id" id="regiao_id" required class="form-select">

            <option>selecione</option>
            <?php 
                include"./backend/conexao.php";
                 $regioes=mysqli_query($conexao,"SELECT * from regiao order by nome");
                    while ($reg=mysqli_fetch_assoc($regioes)) {
                      echo"<option value='{$reg['id']}'>{$reg['nome']} </option>";
                    }
            ?>

          </select>
        </div>
        <div class="col-md-3">
          <label for="">cidade</label>
          <select name="cidade_id" id="cidade_id" required class="form-select">
            <option value="">selecione</option>
            
          </select>
        </div>

        <div class="col-md-3">
          <label for="">Ponto Focal (Empresa) </label>
          <select class="form-select" name="ponto_focal_id" id="ponto_focal_id" required>
          <option value=""> Selecione </option>
          </select>
        </div>

        <div class="col-md-3">
          <label for="">areas</label>
          <select class="form-select" name="area_id" id="area_id" required>
            <option value="">Selecione</option>
           <?php
            $areas = mysqli_query($conexao, "SELECT * FROM AREA order by nome");
            while ($a = mysqli_fetch_assoc($areas)){
              echo"<option value='{$a['id']}'> {$a['nome']} </option>";
            }
            
            ?>
          </select>
        </div>

    <div class="table-responsive md-6">
      <table class="table table-bordered table-striped " id="tabela">
        <thead>
          <tr>
            <th>region</th>
            <th>cidade</th>
            <th>ponto focal</th>
            <th>tipo</th>
            <th>area de curso</th>
            <th>data da compra</th>
            <th>origem</th>
            <th>observacao</th>
            <th>excluir</th>
          </tr>
          <tbody>
            <?php while ($linha=mysqli_fetch_assoc($resultado)){?>
            <tr>
              <td><?=$linha['regiao_nome']?></td>
              <td><?=$linha['cidade_nome']?></td>
              <td><?=$linha['ponto_focal_nome']?></td>
              <td><?=$linha['tipo']?></td>
              <td><?=$linha['area_nome']?></td>
              <td><?=date("d/m/Y",  strtotime($linha['data'])) ?> </td>
              <td><?=$linha['origem']?></td>
              <td><?=$linha['obs']?></td>
              <td>
                <a href="./backend/venda/excluir.php?id=<?=$linha['id']?>" class="text-danger" onclick="return confirm('tem certeza que quer excluir')">
                  <i class="fa-solid fa-trash-can"></i>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </thead>
      </table> 
    </div>

<a href="./usuario.php" class="btn btn-lg btn-success" style="height:500px;">voltar</a>
    
  </div>





  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
   <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
   integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" 
   crossorigin="anonymous" 
   referrerpolicy="no-referrer"></script>
  
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>  
<!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
  <script src="./recusos/login.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
  crossorigin="anonymous" 
  referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
   integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" 
   crossorigin="anonymous" 
   referrerpolicy="no-referrer"></script>
  
  


 <script>
    //se tiver alteração no campo região, dispara essa função
    $('#regiao_id').on('change', function(){ 
      //variável que guarda id da região selecionada
      var regiaoId = $(this).val();
      //vamos chamar o arquivo php que vai carregar as cidades de acordo com região
      $.post('./backend/venda/buscar_cidades.php', {regiao_id: regiaoId}, 
      function(data){ $('#cidade_id').html(data); });
     });

     $('#cidade_id').on('change', function(){ 
      var cidadeId = $(this).val();
      $.post('./backend/venda/buscar_ponto_focal.php', {cidade_id: cidadeId}, 
      function(data){ $('#ponto_focal_id').html(data); });
     });

   
   var tabela=$('#tabela').DataTable({
     dom:'Bfrtip',
     buttons: ['copy','excel','pdf','print'],
     responsive: true,
        language: {
         url: 'https://cdn.datatables.net/plug-ins/2.3.2/i18n/pt-BR.json',
     }
     
    });
  
  $('#regiao_id').on('change',function(){
    var texto = $('#regiao_id option:selected').text();
    tabela.column(0).search(texto).draw();
  });
  
  $('#regiao_id').on('change', function(){
      var texto = $('#regiao_id option:selected').text();
      tabela.column(0).search(texto).draw();
     });

    $('#cidade_id').on('change',function(){
    var texto = $('#cidade_id option:selected').text();
    tabela.column(1).search(texto).draw();
  });  

  $('#ponto_focal_id').on('change',function(){
    var texto = $('#ponto_focal_id option:selected').text();
    tabela.column(2).search(texto).draw();
  });  
  
  
  
  $('#area_id').on('change',function(){
    var texto = $('#area_id option:selected').text();
    tabela.column(4).search(texto).draw();
  });
 </script>

  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

</body>
</html>