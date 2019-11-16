<?php include_once 'config.php'; ?>
<?php //habilitando o cors
        header("Access-Control-Allow-Origin: *");?>

<div class="container-fluid mt-5 py-5 fpedidos">
    <div class="container pt-5 ">
        <!--Sucesso no envio-->
        <div class="j_seletor alert alert-success" id="j_sucesso" role="alert" >
            <h4 class="alert-heading">Enviado com Sucesso!</h4>
            <p>Dentro de alguns dias entraremos em contato com você, temos uma equipe especilizada para etende-lo. Obrigado pela preferência.</p>
            <hr>
            <p class="mb-0">Fique avontade, para conhecer mais sobre nossa empresa e parceiros.</p>
        </div>
        <form id="jcontrol" class="bg-light rounded p-4 box-shadow" action="<?= HOME ?>/js/requisicao/requisicao.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome"><b>Nome</b></label>
                    <input type="text" class="form-control" id="nome" name="nome" required/>
                </div>
                <div class="form-group col-md-6">
                    <label for="email"> <b>Email</b></label>
                    <input type="text" class="form-control" id="email" name="email" required/>
                </div>
            </div>
            <label for="selecao"><b>Qual serviço quer atendimento ?</b></label>
            <select class="form-control form-control-sm" name="selecao">
              <option value="0">Selecione o tipo de serviço</option>
              <option value="1">Moveis planejados</option>
              <option value="2">Coportativo</option>
              <option value="3">Construção e serviços</option>
              <option value="4">Energia Solar</option>
            </select>
            <div class="form-group">
                <label for="Mensagem"><b>Mensagens</b></label>
                <textarea class="form-control" name="mensagem" id="Mensagem" row="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" method="POST">Enviar</button>
            <!--Erro-->
            <div class="j_seletor alert alert-danger" id="j_error" role="alert">
                Tente novamente, houve um erro!
                Regarregue a pagina.
                Caso error persiste, ligue para nós.
            </div>
            <!--Enviando-->
            <div class="d-flex justify-content-center" >
                <div class="j_seletor spinner-border" role="status" id="j_enviando">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </form>
    </div>
</div>