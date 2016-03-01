<div id="header_mobile" class="animacao">
  <div id="area_menu_mobile" class="slideleft animacao">

    <div id="menu_mobile">
      <ul>
        <li><a href="clinica" <?php if($page == "clinica"){ ?> class="ativo" <?php } ?>>CLINICA</a></li>
        <li><a href="especialidades" <?php if($page == "especialidades"){ ?> class="ativo" <?php } ?>>ESPECIALIDADES</a></li>
        <li><a href="tratamentos" <?php if($page == "tratamentos"){ ?> class="ativo" <?php } ?>>TRATAMENTOS</a></li>
        <li><a href="convenios" <?php if($page == "convenios"){ ?> class="ativo" <?php } ?>>CONVÊNIOS</a></li>
        <li><a href="agenda" <?php if($page == "agenda"){ ?> class="ativo" <?php } ?>>AGENDA</a></li>
        <li><a href="informativos" <?php if($page == "informativos"){ ?> class="ativo" <?php } ?>>INFORMATIVOS</a></li>
        <li><a href="contato" <?php if($page == "contato"){ ?> class="ativo" <?php } ?>>CONTATO</a></li>
      </ul>

    </ul>
  </div>
</div>
<div id="bt_menu">
  <span></span>
  <span></span>
  <span></span>
</div>

<div class="logo-mobile">
  <a href="home">
    <img src="includes/imgs/logo-mini.png" alt="" />
  </a>
</div>

</div>
<div id="mask_menu"></div>



<div id="topo">
  <div class="content_responsive">
    <div class="estrutura_site">
      <div class="logo">
        <a href="home"></a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="clinica" <?php if($page == "clinica"){ ?> class="ativo" <?php } ?>>CLINICA</a></li>
          <li><a href="especialidades" <?php if($page == "especialidades"){ ?> class="ativo" <?php } ?>>ESPECIALIDADES</a></li>
          <li><a href="tratamentos" <?php if($page == "tratamentos"){ ?> class="ativo" <?php } ?>>TRATAMENTOS</a></li>
          <li><a href="convenios" <?php if($page == "convenios"){ ?> class="ativo" <?php } ?>>CONVÊNIOS</a></li>
          <li><a href="agenda" <?php if($page == "agenda"){ ?> class="ativo" <?php } ?>>AGENDA</a></li>
          <li><a href="informativos" <?php if($page == "informativos"){ ?> class="ativo" <?php } ?>>INFORMATIVOS</a></li>
          <li><a href="contato" <?php if($page == "contato"){ ?> class="ativo" <?php } ?>>CONTATO</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
if($page != "especialidades" AND $page != "ler_especialidade"){
  ?>
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

            <span>Uma equipe de dentistas pós-graduados e especializados com
              equipamentos de última geração.</span>
            </div>
          </div>

          <a style="background:url('includes/imgs/slider1.jpg') no-repeat center center;"></a>
        </li>

        <li>
          <div class="box_conteudo_slider">
            <div class="titulo_slider">
              A clínica
            </div>
            <div class="subtitulo_slider">
              Oferecemos reabilitação oral em todos os níveis de complexidade.

              <span>Uma equipe de dentistas pós-graduados e especializados com
                equipamentos de última geração.</span>
              </div>
            </div>

            <a style="background:url('includes/imgs/slider1.jpg') no-repeat center center;"></a>
          </li>
        </div>
        <div id="pager_slider">
          <div></div>
        </div>
      </div>
    </div>
    <?php } ?>
