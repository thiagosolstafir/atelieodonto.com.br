<?php include "template-site/header.php"; ?>
<?php include "template-site/topo.php"; ?>
<div id="conteudo">
  <div class="content_responsive">
    <div class="estrutura_site">
      <div class="clinica">
        <div class="clinica_int">
          <div class="titulo">
            CLÍNICA
          </div>
          <div class="texto">
            A Clínica Odontológica Ateliê Odonto está há 10 anos proporcionando sorrisos bonitos e saudáveis.
            Ambiente onde toda a família pode realizar seus tratamentos dentários, com fácil acesso e estacionamento próprio.
            <br /><br />
            Contamos com profissionais mestres e especialistas, uma equipe bem treinada e pronta para receber você e sua família, com toda dedicação e carinho.
            <br /><br />
            Volte a SORRIR conosco!
          </div>
        </div>
        <div class="clinica_int second">
          <div class="texto">
            A necessidade de extração de dentes como o siso, em casos onde sua permanência possivelmente provocará um dano local, é uma cirurgia comum mas não menos importante.  Exames clínicos seguidos de radiografias panorâmicas e tomografias computadorizadas, muitas vezes são fundamentais para que os riscos de uma cirurgia sejam medidos e assim essas intercorrências possam ser evitadas.

          </div>
        </div>

      </div>

      <div class="fotos_cli">
        <div class="titulo">
          FOTOS
        </div>
        <div class="foto_cli_int">
          <img src="includes/imgs/foto1.jpg" alt="" />
        </div>
        <div class="foto_cli_int">
          <img src="includes/imgs/foto1.jpg" alt="" />
        </div>
        <div class="foto_cli_int">
          <img src="includes/imgs/foto1.jpg" alt="" />
        </div>
      </div>
      <div class="clinica">

        <div class="profissionais">


          <script type="text/javascript">

          $(function(){

            $('.profissionais .fotos_pro a').click(function(){

              $('.profissionais .fotos_pro a').removeClass('ativo_pro');
              $(this).addClass('ativo_pro');

              var idArea = $(this).data('area');

              $('#exibe_pro div.remove').removeClass('show');
              $('#area_' + idArea).addClass('show');


            });

          });

          </script>

          <div class="titulo">
            PROFISSIONAIS
          </div>
          <div class="fotos_pro">
            <a data-area="1" class="ativo_pro"><img src="includes/imgs/pro1.jpg" alt="" /></a>
            <a data-area="2" ><img src="includes/imgs/pro1.jpg" alt="" /></a>
            <a data-area="3" ><img src="includes/imgs/pro1.jpg" alt="" /></a>
            <a data-area="4"><img src="includes/imgs/pro1.jpg" alt="" /></a>
            <a data-area="5" ><img src="includes/imgs/pro1.jpg" alt="" /></a>
            <a data-area="6" ><img src="includes/imgs/pro1.jpg" alt="" /></a>
          </div>
          <div id="exibe_pro">
            <div id="area_1" class="remove show">
              um teste
            </div>
            <div id="area_2" class="remove">
              outro teste
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
</div>
<?php include "template-site/footer.php"; ?>
