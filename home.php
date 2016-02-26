<?php include "template-site/header.php"; ?>

<div id="topo">
  <div class="content_responsive">
    <div class="estrutura_site">
      <div class="logo">
        <a href="#"></a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="#">CLINICA</a></li>
          <li><a href="#">ESPECIALIDADES</a></li>
          <li><a href="#">TRATAMENTOS</a></li>
          <li><a href="#">CONVÊNIOS</a></li>
          <li><a href="#">AGENDA</a></li>
          <li><a href="#">INFORMATIVOS</a></li>
          <li><a href="#">CONTATO</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="destaque">
  <div id="area_slider_intro">
    <div id="slider_intro" class="slideshow"
    data-cycle-swipe=true
    data-cycle-pager="#pager_slider div"
    data-cycle-slides="> li"
    data-cycle-timeout=0
    >

    <li>
      <div class="box_conteudo_slider">
        <div class="titulo_slider">
          A clínica
        </div>
        <div class="subtitulo_slider">
          Oferecemos reabilitação oral em todos os níveis de complexidade.

          Uma equipe de dentistas pós-graduados e especializados com
          equipamentos de última geração.
        </div>
      </div>

      <a style="background:url('includes/imgs/slider1.jpg') no-repeat center center;"></a>
    </li>

    <li>
      <div class="titulo_slider">
        Teste
      </div>
      <a style="background:url('includes/imgs/slider1.jpg') no-repeat center center;"></a>
    </li>

  </div>

</div>
</div>

<div id="conteudo">
  <div class="content_responsive">
    <div class="estrutura_site">
      <div class="conteudo">
        <div class="box_home">
          <div class="box_home_int">
            <div class="titulo">
              A CLÍNICA
            </div>
            <div class="img">
              <a href="#"><img src="includes/imgs/a-clinica.jpg" class="img-responsive" alt="" /></a>
            </div>
            <div class="desc">
              Tecnologia de ponta, os melhores equipamentos e as técnicas mais avançadas de tratamento para atingir alta qualidade de resultados.
            </div>
          </div>
          <div class="box_home_int second">
            <div class="titulo">
              AGENDA
            </div>
            <div class="img">
              <a href="#"><img src="includes/imgs/agenda.jpg" class="img-responsive" alt="" /></a>
            </div>
            <div class="desc">
              Mais praticidade para você! Consulte dia e horários que combinam com a sua disponibilidade.
            </div>
          </div>


          <div class="equipe">
            <div class="mulher">
              <img src="includes/imgs/mulher.png" alt="" class-"img-responsive" />
            </div>
            <div class="desc_equipe">
              <div class="titulo">
                EQUIPE DE PROFISSIONAIS
              </div>
              <div class="desc">
                Saiba mais sobre nossa clinica e sua equipe de profissionais qualificados em diversas especialidades para melhor atendê-lo.
              </div>
            </div>
          </div>
          <div class="banner-rodape">
            <img src="includes/imgs/banner-home.jpg" class="img-responsive" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="rodape">
  <div class="content_responsive">
    <div class="estrutura_site">
      <div class="rodape_int first">
        <div class="logo"></div>

        <div class="informacoes">
          <li class="end">Rua Carlos Benack, 592 - Saguaçu - Joinville/SC</li>
          <li class="tel">(47) 3472.2717</li>
          <li class="email">contato@atelieodonto.com.br</li>
          <li class="site">www.atelieodonto.com.br</li>
        </div>

      </div>
      <div class="rodape_int second">
        <div class="cont">
          <div class="titulo">
            RECEBA NOSSAS NOTÍCIAS
          </div>
          <div class="desc">
            Digite seu e-mail e vamos enviar-lhe um cupom com 10% de desconto em sua próxima visita.
          </div>

          <form action="" method="post">
            <div class="input-email">
              <input type="email" name="name" value="" required="true">
              <input type="image" src="includes/imgs/btn-enviar.png" name="name" value="">
            </div>
          </form>


          <div class="rede-social">
            <span>
              <a href="#" class="facebook"></a>
              <a href="#" class="twitter"></a>
              <a href="#" class="plus"></a>
              <a href="#" class="youtube"></a>
              <a href="#" class="linkedin"></a>
            </span>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


<?php include "template-site/footer.php"; ?>
