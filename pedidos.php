<?php require_once("main/menu.php"); ?>
        <div class="container-fluid mt-5 py-5 fpedidos">
            <div class="container pt-5 mt-5">
                <form method="POST" class="pt-5" action="email.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email"> Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        
                    </div>
                    <select class="form-control form-control-sm" name="selecao">
                      <option value="0">Selecione o tipo de serviço</option>
                      <option value="1">Moveis planejados</option>
                      <option value="2">Coportativo</option>
                      <option value="3">Construção e serviços</option>
                      <option value="4">Energia Solar</option>
                    </select>
                    <div class="form-group">
                        <label for="Mensagem"> Mensagens</label>
                        <textarea class="form-control" name="mensagem" id="Mensagem" row="5"></textarea>
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-primary bgf" />
                </form>
            </div>
        </div>
<?php require_once("main/footer.php");?>