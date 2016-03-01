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
          <textarea name="mensagem" rows="8" cols="40" placeholder="MENSAGEM"></textarea>
          <div class="mens">
            TRABALHE CONOSCO<br />
            Envie seu currículo para: contato@atelieodonto.com.br
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
