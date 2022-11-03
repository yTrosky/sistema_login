<?php
require_once("controller/ControllerCadastro.php");
?>

<html>

<head>
    <title>Sistema Web 2.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container text-center">
        
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                            Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta.php">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- As a heading -->
                <nav class="navbar bg-light">
                    <div id = "dale" class="container_fluid">
                        <span class="navbar-brand">Editar Usuário</span>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                        <?php
                        $controller = new cadastroController();
                        $result = $controller->listar($_GET['id']);
                        ?>
                        <form class="row g-3" method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $result[0]['id']; ?>" id="form" name="form">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $result[0]['email']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="txtSenha" id="txtSenha" value="<?php echo $result[0]['senha']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="txtEndereco" id="txtEndereco" value="<?php echo $result[0]['endereco']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAdress2" class="form-label">Bairro</label>
                            <input type="text" class="form-control" name="txtBairro" id="txtBairro" value="<?php echo $result[0]['bairro']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Cep</label>
                            <input type="text" class="form-control" name="txtCep" id="txtCep" value="<?php echo $result[0]['cep']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Cidade</label>
                            <input type="text" class="form-control" name="txtCidade" id="txtCidade" value="<?php echo $result[0]['cidade']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Estado</label>
                            <select id="txtEstado" name="txtEstado" class="form-select">
                                 <option value="1" <?php if($result[0]['estado'] == "AC"){echo "selected";}?>>AC</option>
                                 <option value="2" <?php if($result[0]['estado'] == "AL"){echo "selected";}?>>AL</option>
                                 <option value="3" <?php if($result[0]['estado'] == "AP"){echo "selected";}?>>AP</option>
                                 <option value="4" <?php if($result[0]['estado'] == "AM"){echo "selected";}?>>AM</option>
                                 <option value="5" <?php if($result[0]['estado'] == "BA"){echo "selected";}?>>BA</option>
                                 <option value="6" <?php if($result[0]['estado'] == "CE"){echo "selected";}?>>CE</option>
                                 <option value="7" <?php if($result[0]['estado'] == "ES"){echo "selected";}?>>ES</option>
                                 <option value="8" <?php if($result[0]['estado'] == "GO"){echo "selected";}?>>GO</option>
                                 <option value="9" <?php if($result[0]['estado'] == "MA"){echo "selected";}?>>MA</option>
                                 <option value="10" <?php if($result[0]['estado'] == "MT"){echo "selected";}?>>MT</option>
                                 <option value="11" <?php if($result[0]['estado'] == "MS"){echo "selected";}?>>MS</option>
                                 <option value="12" <?php if($result[0]['estado'] == "MG"){echo "selected";}?>>MG</option>
                                 <option value="13" <?php if($result[0]['estado'] == "PA"){echo "selected";}?>>PA</option>
                                 <option value="14" <?php if($result[0]['estado'] == "PB"){echo "selected";}?>>PB</option>
                                 <option value="15" <?php if($result[0]['estado'] == "PR"){echo "selected";}?>>PR</option>
                                 <option value="16" <?php if($result[0]['estado'] == "PE"){echo "selected";}?>>PE</option>
                                 <option value="17" <?php if($result[0]['estado'] == "PI"){echo "selected";}?>>PI</option>
                                 <option value="18" <?php if($result[0]['estado'] == "RJ"){echo "selected";}?>>RJ</option>
                                 <option value="19" <?php if($result[0]['estado'] == "RN"){echo "selected";}?>>RN</option>
                                 <option value="20" <?php if($result[0]['estado'] == "RS"){echo "selected";}?>>RS</option>
                                 <option value="21" <?php if($result[0]['estado'] == "RO"){echo "selected";}?>>RO</option>
                                 <option value="22" <?php if($result[0]['estado'] == "RR"){echo "selected";}?>>RR</option>
                                 <option value="23" <?php if($result[0]['estado'] == "SC"){echo "selected";}?>>SC</option>
                                 <option value="24" <?php if($result[0]['estado'] == "SP"){echo "selected";}?>>SP</option>
                                 <option value="25" <?php if($result[0]['estado'] == "SE"){echo "selected";}?>>SE</option>
                                 <option value="26" <?php if($result[0]['estado'] == "TO"){echo "selected";}?>>TO</option>
                                 <option value="27" <?php if($result[0]['estado'] == "DF"){echo "selected";}?>>DF</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" id="btnInserir" class="btn btn-dark">Editar</button>
                        </div>
                         </form>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>