<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="style.css">
        <title>Bem-vindo à Home Managing WebApp</title>

        <style>

            body{
                background-color: #011638;
            }

            h3 {
                margin: 0px 0px 23px 0px;
            }

            .col {
                margin: 15px;
            }

            .form-check {
                margin-bottom: 15px;
            }

            .logo {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 40%;
                min-width: 500px;
            }

            .col {
                border-radius: 3px;
            }

        </style>
    </head>
    <body>
        <img  class="logo" src="imagens\logo.png" alt="Home Managing WebApp">
        <form>
            <div class="container px-lg-5">
                <div class="row mx-lg-n5">
                    <div class="col py-3 px-lg-5 border bg-light">                
                        <h3>Entrar como Administrador</h3>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Número de identificação" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                    <div class="col py-3 px-lg-5 border bg-light">                
                        <h3>Entrar na casa</h3>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Número de identificação da casa" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group">
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button></div>
                    </div>
                </div>
            </div>
        </form>
        <form>
        <div class="container px-lg-5">
            <div class="row mx-lg-n5">
                <div class="col py-3 px-lg-5 border bg-light">
                    <h3>Registe-se como Administrador</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nome" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Data de Nascimento</span>
                        </div>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Feminino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Masculino</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="NIF" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Senha do Administrador">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        A senha criada pode ter no máximo 16 caracteres.
                    </small>
                    <hr>
                    <h5>Informações Opcionais</h5>
                    <p>Dê um visto nas informações que pretende inserir</p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Telemóvel ou Telefone" aria-label="Telemóvel ou Telefone" aria-describedby="basic-addon2">
                        </div>
                        </label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Registe-se</button></div>   
                </div>
                <br>
            </div>
        </div>
    </body>
</html>