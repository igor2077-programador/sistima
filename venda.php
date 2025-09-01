<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./recusos/login-estilo.css">
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
</head>
<body class="">

  <div class="container mt-4">
    <h2>venda de areas</h2>
    <form action="">
      <div class="row">
        <div class="col-md-4">
          <label for="">region</label>
          <select name="regioa_id" id="regioa_id" required class="form-select">

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
        <div class="col-md-4">
          <label for="">cidade</label>
          <select name="cidade_id" id="cidade_id" required class="form-select">
            <option value="">selecione</option>
            
          </select>
        </div>

        <div class="col-md-4">
          <label for="">ponto focal</label>
          <select name="" class="form-select">
            <option value="">copragra</option>
            <option value="">incol</option>
          </select>
        </div>

        <div class="col-md-4 mt-4">
          <label for="">areas</label>
          <select name="" class="form-select">
            <option value="">gastronomia</option>
            <option value="">tecnologia</option>
          </select>
        </div>

        <div class="col-md-4 mt-4">
          <label for=""> data da venda</label>
          <input type="date" class="form-control">
        </div>

        <div class="col-md-4 mt-4">
          <label for=""> origem</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-12 mt-4">
          <label for="">observacao</label>
          <textarea name="" class="form-control" rows="20"></textarea>
        </div>

        <div class="md-4 d-flex mt-2"> 
          <button type="submit" class="btn btn-success">salvar</button>
          <a href="index.html" class="btn btn-primary ms-1">voltar</a>
        </div>
          

        
      </div>
    </form>
  </div>

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
  <script src="script.js"></script>
  
 <script>
  $('#regioa_id').on('change',function(){alert("funcionou!");})
 </script>
</body>
</html>