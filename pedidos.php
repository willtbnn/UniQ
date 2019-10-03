<?php require_once("main/menu.php"); ?>
<?php include_once 'config.php'; ?>
<!--alert errro-->

<div class="container-fluid mt-5 py-5 fpedidos">
    <div class="container pt-5 ">
        
        <?php require_once("main/alert.php"); ?>
        <form  method="POST" id="jclickform01" action="<?= HOME ?>/js/requisicao/requisicao.php">
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
            <input id="jbtn" class="jdplustrigger-btn btn btn-success bgf" type="submit"  value="enviar"/>
        </form>
    </div>
</div>
<?php require_once("main/footer.php");?>