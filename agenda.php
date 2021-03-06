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
          <input type="text" name="email" value="" placeholder="NOME">
          <input type="email" name="email" value="" placeholder="E-MAIL">
          <input type="text" name="telefone" value="" placeholder="TELEFONE">
          <input type="text" name="endereco" value="" placeholder="ENDEREÇO">
          <div class="data">
            <div class="form-group">
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' id="data" placeholder="DATA DESEJADA"/>
              </div>
            </div>
          </div>
          <input type="text" name="name" id="hora" placeholder="HORÁRIO DESEJADO">
          <div class="cmp-select">
            <div class="label-dentista">
              SEU DENTISTA
            </div>
            <div class="formulario_select">
              <span><strong>SELECIONE</strong></span>
              <select id="estado" name="estado" required="true" aria-required="true">
                <option value="">SELECIONE</option>
                <option value="DR. ROBERTO STELTER">DR. ROBERTO STELTER</option>
              </select>
            </div>
          </div>

          <div class="btn_enviar">
            <input type="submit" name="name" value="ENVIAR">
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
$(function () {
  $('#data').datetimepicker({
    format: 'DD/MM/YYYY'
  });
});
</script>


<?php include "template-site/footer.php"; ?>
