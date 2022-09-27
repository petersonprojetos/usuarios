<?php 
    session_start();
    include("conexao.php");
    $result_cadastro = "SELECT * FROM cadastro WHERE id = '1' ";
    $resultado_cadastro = mysqli_query($conexao, $result_cadastro);
    $row_cadastro = mysqli_fetch_assoc($resultado_cadastro);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Editar Usuário</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/bootstrap.css">
		<link rel="stylesheet" href="./css/estilo.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<body>
	<div class="container">
		<header class="header">
			<div class="caixa1" style="margin-left: 150px; margin-top: 10px;">
				<i class="fa fa-minus-square-o" style="font-size:20px;"></i>
				<i class="fa fa-minus-square-o" style="font-size:20px;"></i>
			</div>
			<div class="caixa2" style="margin-top: 10px;">
				<span>'Nome do usuário'</span> 
				<i class="fa fa-minus-square-o" style="font-size:20px;"></i>
			</div>
		</header>
		<main class="main-content">
			<div class="historico" style="margin-top: -6px; margin-bottom:2px;">
				<span class="header-story" style="margin-left: 2px;">                           
				<a href="index.php"> <small>Home</small> / </a>           
				<a href="usuarios.php"> <small>Usuários </small> / </a>
				<small>Edição</small>
				</span> 
			</div>
			<div class="usuarios">
				<h1>Usuários</h1>
				<small>Edição de usuários</small>
			</div>
			<div class="salvar-cancelar" style="margin-bottom: 10px;">
				<div class="salvar">   
					<button id="btnSalvar" type="submit" onclick="btnSalvar()">              
					<i class="fa fa-save" style="font-size:36px;"></i>
					<small>Salvar</small>
					</button>  
				</div>
				<div class="cancelar">   
					<button id="btnCancelar">
					<i class="fa fa-close" style="font-size:36px;"></i> 
					<small>Cancelar</small>
					</button>                                               
				</div>
			</div>
			<section id="section2" style="background-color: #FFF; padding: 20px;">
				<div id="informacoesGerais">
					<h3 style="color: #C63131">Informações Gerais</h3>
					<br>
					<form id="form-cad-usuario" method="POST" action="proc_edit_usuario.php">
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-xs-3 col-form-label control-label" style="margin-top:15px">Bloqueado</label>
										<div class="controls col-xs-3">
											<input class="" style="margin-top:15px;" name="bloqueado" type="checkbox" value=" <?php echo $row_cadastro['bloqueado']; ?> ">
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-xs-3 col-form-label control-label" style="margin-top: 8px;">Nome</label>
										<div class="controls col-xs-7">
											<input class="form-control" name="nome" id="nome" type="text" value=" <?php echo $row_cadastro['nome']; ?> ">
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-xs-3 col-form-label control-label" style="margin-top: 8px;">E-mail</label>
										<div class="controls col-xs-7">
											<input class="form-control" name="email" id="email" type="email" value=" <?php echo $row_cadastro['email']; ?> ">
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-xs-3 col-form-label control-label" style="margin-top: 8px;">Login</label>
										<div class="controls col-xs-7">
											<input class="form-control" name="login" id="login" type="text" value=" <?php echo $row_cadastro['login']; ?> "> 
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-xs-3 col-form-label control-label" style="margin-top: 8px;">Senha</label>
										<div class="controls col-xs-7">
											<input class="form-control" name="senha" id="senha" type="password" value=" <?php echo $row_cadastro['senha']; ?> ">
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-xs-3 col-form-label control-label" style="margin-top: 8px;">CPF</label>
										<div class="controls col-xs-7">
											<input class="form-control" name="cpf" id="cpf" type="text" value=" <?php echo $row_cadastro['cpf']; ?> ">
										</div>
									</div>
								</div>
								<button type="submit">EDITAR</button> 
							</div>
						</div>
				</div>
				<hr>
				<div class="div-tipos-setor" style="background-color: white; padding: 10px;">
                    <h4>Perfil</h4>
                    <br>
    				<div class="form-group row">
        				<div class="col-md-12">
            				<label class="col-xs-4 col-form-label control-label" style="margin-left: -15px; margin-top: 10px;">Perfil de usuário:</label>
            				<div class="controls col-xs-3">
                				<select class="form-control" name="funcao" id="perfil-select" style="cursor: pointer; margin-left: -230px;" onclick="aplicar()" onchange="selecionado()">
                    				<option value="."></option>
                    				<option value="cadastro">Cadastro</option>
				                    <option value="auditoria-concorrente">Auditoria Concorrente</option>
                                    <option value="pagamento">Pagamento</option>
                                    <option value="relatorios-bi">Relatórios BI </option>
                                    <option value="credenciamento">Credenciamento</option>
                                    <option value="ais">Atenção Integral a Saúde</option>
                                    <option value="core">Core</option>
                                    <option value="relacionamento">Relacionamento</option>
                                    <option value="relatorios">Relatórios</option>
                                    <option value="cobranca">Cobrança</option>
                                    <option value="setup">Setup</option>
                                    <option value="analise-de-contas">Análise de Contas</option>
                                    <option value="autorizacao">Autorização</option>
                                    <option value="atendimento">Atendimento</option>
                                    <option value="editor-de-regras">Editor de Regras</option>
                                    <option value="faturamento">Faturamento</option>
				                </select>
				            </div>
				        </div>
				    </div>                                          
				<button class="btn btn-danger" id="aplicar" type="submit" onclick="aplicar()">Aplicar</button>  
				<p id="demo"></p>
				</div>
				<hr>
				<br>
				<div>
				<h2 style="color: #C63131;">Sistemas</h2>
				<hr>
				<div id="cadastro">
				<span class="span-cadastro">Cadastro</span>
				<a href="javascript://" class="link-form"> <i class="fa fa-caret-square-o-down"></i> </a> 
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input perfis-cadastro">
				<small>Analista de cadastro</small> 
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input perfis-cadastro" value="Cadastro - Administrador">
				<small>Administrador</small> 
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input perfis-cadastro" value="Cadastro - Consulta cadastro online">
				<small>Consulta cadastro online</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input perfis-cadastro" value="Cadastro - Consulta">
				<small>Consulta</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input perfis-cadastro" value="Cadastro - Gestor">
				<small>Gestor</small>
				</label><br>
				</div>
				<hr>
				<div id="auditoriaConcorrente">
				<span class="span-cadastro">Auditoria Concorrente</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input auditoria-concorrente" value="Auditoria Concorrente- Criador">
				<small>Criador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input auditoria-concorrente" value="Auditoria Concorrente - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input auditoria-concorrente" value="Auditoria Concorrente - Prestador">
				<small>Prestador</small>
				</label><br>
				</div>
				<hr>
				<div id="pagamento">
				<span class="span-cadastro">Pagamento</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Validação de Glosas">
				<small>Validação de Glosas</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Pagamento">
				<small>Pagamento</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Aprovação">
				<small>Aprovação</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Contas Médicas">
				<small>Contas Médicas</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Protocolo">
				<small>Protocolo</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Mestre">
				<small>Mestre</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input pagamento" value="Pagamento - Consultar Pagamento">
				<small>Consultar Pagamento</small>
				</label><br>
				</div>
				<hr>
				<div id="relatoriosBI">
				<span class="span-cadastro">Relatórios BI</span> 
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input relatorios-bi" value="Relatórios BI - Usuário">
				<small>Usuário</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input relatorios-bi" value="Relatórios BI - Administrador">
				<small>Administrador</small>
				</label><br>
				</div>
				<hr>
				<div id="credenciamento">
				<span class="span-cadastro">Credenciamento</span> 
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input credenciamento" value="Credenciamento - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input credenciamento" value="Credenciamento - Operadora">
				<small>Operadora</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input credenciamento" value="Credenciamento - Prestador">
				<small>Prestador</small>
				</label><br>
				</div>
				<hr>
				<div id="ais">
				<span class="span-cadastro">Atenção Integral a Saúde</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input ais" value="AIS - Agendador">
				<small>Agendador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input ais" value="AIS - Beneficiário">
				<small>Beneficiário</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input ais" value="AIS - Supervisor">
				<small>Supervisor</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input ais" value="AIS - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input ais" value="AIS - Atendente">
				<small>Atendente</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input ais" value="AIS - Atendente - Liberar Atendimentos">
				<small>Atendente - Liberar Atendimentos</small>
				</label><br>
				</div>
				<hr>
				<div id="core">
				<span class="span-cadastro">Core</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input core" value="Core - Administrador">
				<small>Administrador</small>
				</label><br>
				</div>
				<hr>
				<div id="relacionamento">
				<span class="span-cadastro">Relacionamento</span>   
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input relacionamento" value="Relacionamento - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input relacionamento" value="Relacionamento - Atendente">
				<small>Atendente</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input relacionamento" value="Relacionamento - Backoffice">
				<small>Backoffice</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input relacionamento" value="Relacionamento - Gestor da Area de Negocios">
				<small>Gestor da Area de Negocios</small>
				</label><br>
				</div>
				<hr>
				<div id="relatorios">
				<span class="span-cadastro">Relatórios</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input relatorios" value="Relatórios - Criador">
				<small>Criador</small>
				</label><br>
				<label class="form-check-label">
				<input  name="visDados[]" type="checkbox" class="form-check-input relatorios" value="Relatórios - Vizualizador">
				<small>Vizualizador</small>
				</label><br>
				</div>
				<hr>
				<div id="cobranca">
				<span class="span-cadastro">Cobrança</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input cobranca" value="Cobrança - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input cobranca" value="Cobrança - Gestor">
				<small>Gestor</small>
				</label><br>
				</div>
				<hr>
				<div id="setup">
				<span class="span-cadastro">Setup</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input setup" value="Setup - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input setup" value="Setup - Usuário">
				<small>Usuário</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input setup" value="Setup - SSO Usuário">
				<small>SSO Usuário</small>
				</label><br>
				</div>
				<hr>
				<div id="analiseDeContas">
				<span class="span-cadastro">Análise de Contas</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input analise-de-contas" value="Análise de Contas - Auditor">
				<small>Auditor</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input analise-de-contas" value="Análise de Contas - Operadora">
				<small>Operadora</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input analise-de-contas" value="Análise de Contas - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input analise-de-contas" value="Análise de Contas - Prestador">
				<small>Prestador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input analise-de-contas" value="Análise de Contas - Visualização">
				<small>Visualização</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input analise-de-contas" value="Análise de Contas - Analista">
				<small>Analista</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input analise-de-contas" value="Análise de Contas - Gestor">
				<small>Gestor</small>
				</label><br>
				</div>
				<hr>
				<div id="autorizacao">
                    <span class="span-cadastro">Autorização</span>  
                    <a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
                    <h4>Perfis</h4>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Biometria">
                    <small>Biometria</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Consulta">
                    <small>Consulta</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Cadastro de Prestador">
                    <small>Cadastro de Prestador</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Médico">
                    <small>Médico</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Gestor">
                    <small>Gestor</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Gestão da Autorização">
                    <small>Gestão da Autorização</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Auditor">
                    <small>Auditor</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Solicitante">
                    <small>Solicitante</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Administrador">
                    <small>Administrador</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Intercorrência">
                    <small>Intercorrência</small>
                    </label><br>
                    <label class="form-check-label">
                    <input name="visDados[]" type="checkbox" class="form-check-input autorizacao" value="Autorização - Analista">
                    <small>Analista</small>
                    </label>
                    <br>
				</div>
				<hr>
				<div id="atendimento">
				<span class="span-cadastro">Atendimento</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input atendimento" value="Atendimento - Agendamento">
				<small>Agendamento</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input atendimento" value="Atendimento - Médico Solicitante">
				<small>Médico Solicitante</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input atendimento" value="Atendimento - Prestador">
				<small>Prestador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input atendimento" value="Atendimento - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input atendimento" value="Atendimento - Leitura de Biometria">
				<small>Leitura de Biometria</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input atendimento" value="Atendimento - Execução de Guias">
				<small>Execução de Guias</small>
				</label><br>
				</div>
				<hr>
				<div id="editorDeRegras">
				<span class="span-cadastro">Editor de Regras</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input editor-de-regras" value="Editor de Regras - Desenvolvedor">
				<small>Desenvolvedor</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input editor-de-regras" value="Editor de Regras - Analista">
				<small>Analista</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input editor-de-regras" value="Editor de Regras - Gerente">
				<small>Gerente</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input editor-de-regras" value="Editor de Regras - Administrador">
				<small>Administrador</small>
				</label><br>
				</div>
				<hr>
				<div id="faturamento">
				<span class="span-cadastro">Faturamento</span>
				<a href="javascript://" class="link-form"><i class="fa fa-caret-square-o-down"></i></a>
				<h4>Perfis</h4>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input faturamento" value="Faturamento - Administrador">
				<small>Administrador</small>
				</label><br>
				<label class="form-check-label">
				<input name="visDados[]" type="checkbox" class="form-check-input faturamento" value="Faturamento - Consig">
				<small>Consig</small>
				</label><br>
				</div>
				</div>
				</form>   
			</section>
		</main>
		<aside class="side-bar">
			<div class="navbar-tabs-menu">
			</div>
			<?php
				include("mainmenu.php");
				?>
		</aside>
		<div class="mobile-menu">
			<input id="menu__toggle" type="checkbox">
			<label class="menu__btn" for="menu__toggle">
			<span></span>
			</label>
			<ul class="menu__box" style="background-color: #e5e5e5e0;">
				<li class="menu__item" style="background-color: #e5e5e5e0;">
					<a href="funcao.php" class="menu__item  nav-link sub-btn">Função</a>
				</li>
				<li class="menu__item">
					<a href="perfilusuario.php" class="menu__item sub-btn">Perfil de Usuário</a>              
				</li>
				<li class="menu__item">
					<a href="setor.php" class="menu__item sub-btn">Setor</a>
				</li>
				<li class="menu__item">
					<a href="tipousuario.php" class="menu__item sub-btn">Tipos de Usuário</a>
				</li>
				<li class="menu__item">
					<a href="usuarios.php" class="menu__item sub-btn">Usuário</a>
				</li>
				<li class="menu__item">
					<a href="log.php" class="menu__item sub-btn">Log</a>
				</li>
				<li class="menu__item" >
					<a href="index.php" class="menu__item">Sair</a>
				</li>
			</ul>
		</div>
		<footer class="footer">  
			<small style="margin-left: 10px;">Setup 4.39.4 - Desenvolvido por Qualirede - <a href="" style="color: #C63131;">http://www.qualirede.com.br</a> </small>
		</footer>
	</div>
	<!-- <script src="./js/script.js"></script>  -->
	<script>
		//DROPDOWN
		$(document).ready(function() {
		    $('.link-form').click(function(){
		        $(this).next('.form').slideToggle();
		    })
		})
		
		/*
		function btnSalvar() {
		    
		    //CAPTAR DADOS SELECIONADOS PELO CHECKBOX E POR EM UM ARRAY
		    let visualizarDadosCheckbox=[]
		    let v = document.getElementsByName('visDados[]')
		    for (var i=0 ; i<v.length ; i++){
		        if (v[i].checked) {
		            visualizarDadosCheckbox.push(v[i].value)
		        }
		    }
		        
		    //DADOS CAPTADOS DO CHECKBOX COLOCADOS EM ORDEM ALFABÉTICA NO ARRAY
		    const sorted = visualizarDadosCheckbox.sort((a,b)=>{
		        return a.localeCompare(b)
		    })
		    console.log(sorted)
		    
		}
		
		
		//PERFIL - PERFIL DE USUARIO - APLICAR (MARCAR - TODAS)
		var select = document.getElementById('perfil-select')
		var valorSelecionado 
		
		let checkbox
		let btnCheck
		
		select.onchange = function selecionado(){
		    valorSelecionado = this.value
		}
		
		function aplicar() {
		    switch (valorSelecionado) {
		
		            //CADASTRO
		            case 'cadastro':
		                //console.log('cadastro-funcionou')
		                checkbox = document.querySelectorAll('.perfis-cadastro')
		                btnCheck = document.querySelector('#aplicar')
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked       
		                }
		                })
		            break;
		    
		            
		            //AUDITORIA-CONCORRENTE
		            case 'auditoria-concorrente':
		                //console.log('auditoria-concorrente-funcionou')
		                checkbox = document.querySelectorAll('.auditoria-concorrente')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //PAGAMENTO
		            case 'pagamento':
		                //console.log('pagamento-funcionou')
		                checkbox = document.querySelectorAll('.pagamento')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //RELATORIOS BI
		            case 'relatorios-bi':
		                //console.log('relatorios-bi-funcionou')
		                checkbox = document.querySelectorAll('.relatorios-bi')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //CREDENCIAMENTO
		            case 'credenciamento':
		                //console.log('credenciamento-funcionou')
		                checkbox = document.querySelectorAll('.credenciamento')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //AIS
		            case 'ais':
		                //console.log('ais-funcionou')
		                checkbox = document.querySelectorAll('.ais')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //CORE
		            case 'core':
		                //console.log('core-funcionou')
		                checkbox = document.querySelectorAll('.core')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //RELACIONAMENTO
		            case 'relacionamento':
		                //console.log('relacionamento-funcionou')
		                checkbox = document.querySelectorAll('.relacionamento')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //RELATORIOS
		            case 'relatorios':
		                //console.log('relatorios-funcionou')
		                checkbox = document.querySelectorAll('.relatorios')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //COBRANCA
		            case 'cobranca':
		                //console.log('cobranca-funcionou')
		                checkbox = document.querySelectorAll('.cobranca')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //SETUP
		            case 'setup':
		                //console.log('setup-funcionou')
		                checkbox = document.querySelectorAll('.setup')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //ANALISE DE CONTAS
		            case 'analise-de-contas':
		                //console.log('analise-de-contas-funcionou')
		                checkbox = document.querySelectorAll('.analise-de-contas')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //AUTORIZACAO
		            case 'autorizacao':
		                //console.log('autorizacao-funcionou')
		                checkbox = document.querySelectorAll('.autorizacao-funcionou')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //ATENDIMENTO
		            case 'atendimento':
		                //console.log('atendimento-funcionou')
		                checkbox = document.querySelectorAll('.atendimento')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //EDITOR DE REGRAS
		            case 'editor-de-regras':
		                //console.log('editor-de-regras-funcionou')
		                checkbox = document.querySelectorAll('.editor-de-regras')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		
		            //FATURAMENTO
		            case 'faturamento':
		                //console.log('faturamento-funcionou')
		                checkbox = document.querySelectorAll('.faturamento')
		                btnCheck = document.querySelector('#aplicar')
		
		                btnCheck.addEventListener('click',() => {
		                for (let current of checkbox) {
		                    current.checked = !current.checked
		                    
		                }
		                })
		            break;
		            
		        default:
		            break;
		    }
		}
		*/
		
	</script>
</body>
</html>