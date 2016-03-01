<?php include "template-site/header.php"; ?>
<?php include "template-site/topo.php"; ?>

<div id="conteudo" class="agenda">
  <div class="content_responsive">
      <div class="estrutura_site">
          <div class="agenda_int">
            <div class="texto">
              Para entrar agendar sua consulta, preencha o formulário abaixo<br />
              ou ligue para <span>(47) 3472.2717</span> ou ainda, envie-nos um e-mail.
            </div>
            <div class="form">
              <input type="text" name="email" value="" placeholder="Nome">
              <input type="email" name="email" value="" placeholder="E-mail">
              <input type="text" name="telefone" value="" placeholder="Telefone">
              <input type="text" name="endereco" value="" placeholder="Endereço">
              <div class="data">
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' id="data" placeholder="Data Desejada"/>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class='col-sm-6'>

        </div>
        <script type="text/javascript">
            $(function () {
                $('#data').datetimepicker({
                  format: 'DD/MM/YYYY'
                });
            });
        </script>
    </div>
</div>

<?php include "template-site/footer.php"; ?>
