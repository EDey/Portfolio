<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Myrtax </title>
    <?php include_once("./prefabs/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./css/zoom_view.css">
    <link rel="stylesheet" type="text/css" href="./css/mainprojects.css">
  </head>
  <body>
    <?php include_once("./prefabs/header.php"); ?>
    <section id="zoom_view">
      <a class="btn_anterior_link" onclick="zoomhide()"><img class="btn_anterior" src="./img/menu/btn_anterior_black.png"/></a>
      <div id="container_imagetozoom">
        <img id="imagetozoom" src="./img/posts/firstpost.png" alt="">
      </div>
      <div id="zoom_image"></div>
    </section>
    <section id="main_screen">
      <img id="logo" src="./img/logo/logo_mini.png" alt="logo do site">
      
      <!-- PROJETOS PRINCIPAIS -->
      
      <section class="area" id="main_projects">
        <div class="slide_projects">
          <div class="shadow_slide"></div>
          <a class="btn_slide anterior_slide" onclick="anteriorSlide()"><img class="btn_slide_img" src="./img/btn/btn_anterior.png" alt=""></a>
          <a class="btn_slide proximo_slide" onclick="proximoSlide()"><img class="btn_slide_img" src="./img/btn/btn_proximo.png" alt=""></a>
          <div class="content_slide">
            <h3 class="title_slide">Foxby</h3>
            <p class="description_slide">Foxby é um livro infantil baseado em uma historia propria que fiz para uma HQ indie que conta 
            um pouco das minhas vivencias de forma ludica e artistica em um contexto infantil.</p>
          </div>
          <ol class="indices_slide">
          </ol>
          <a class="link_slide" onclick="carregarPagina()"></a> 
        </div>
      </section>
  
      <!-- ILUSTRAÇÕES -->
      
      <section class="area" id="ilustracoes">
        <nav class="menu_tags">
          <h2 class="title_tag"><span class="text_part_1">Ilus</span><span class="text_part_2">trações</span></h2>
          <div class="down_bar"></div>
          <a class="link_vermais_tag" href="/ilustracoes/"><div><span class="vermais_tag_text">Ver mais</span><img  class="btn_vermais_tag" src="./img/btn/btn_arrow.png" alt=""></div></a>
          <!-- <ol class="projetcs_tag"> 
            <Li class="project_tag">
              <a class="link_project_tag" href="/projects/foxby/">
                <h3 class="project_tag_title">Foxby</h3>
                <span class="project_tag_description">/Livro infantil</span>
              </a>
            </Li>
            <Li class="project_tag">
              <a class="link_project_tag" href="">
                <h3 class="project_tag_title">Ainda</h3>
                <span class="project_tag_description">/em andamento</span>
              </a>
            </Li>
            <Li class="project_tag">
              <a class="link_project_tag" href="">
                <h3 class="project_tag_title">Ainda</h3>
                <span class="project_tag_description">/em andamento</span>
              </a>
            </Li>
            <Li class="project_tag">
              <a class="link_project_tag" href="">
                <h3 class="project_tag_title">Ainda</h3>
                <span class="project_tag_description">/em andamento</span>
              </a>
            </Li>
          </ol> -->
          <ol class="tags">
            <a href="/editorial/"><li class="tag"><div class="background_tag" style="background-image: url('./img/tags/backgrounds/tag_editorial.png');">
            <div class="barra_tag"></div><div class="barra_tag_title"><h3>Editorial</h3></div></div></li></a>
          </ol>
        </nav>
        <ol class="posts">
          <li class="post">
            <a class="link_post_ampliar" onclick="zoomshow('./img/posts/firstpost.png','url(/img/arts/firstpost_max.png)')">
              <img src="./img/posts/firstpost.png" alt="pintura de hilda">
              <div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div>
            </a>
            <div class="content">
              <h3 class="title_post">Hilda</h3>
              <h4 class="category_post">Fan art</h4>
              <p>Ilustração da personagem “pearl” da serie de desenho animado 
                Steven Universe criada por Rebecca Sugar</p><br>
              <h5 class="characteristics_post">Programas Usados:</h5>
              <ol class="softwares_post">
                <li class="software_post"><img src="./img/icons/softwares/photoshop.png" alt=""/></li>
              </ol>
              <h5 class="characteristics_post">Duração:</h5>
              <p>3 horas</p><br>
              <h5 class="characteristics_post">Dificuldade:</h5>
              <div class="barra_back"><div data-porcetagem="55" class="barra"></div></div>
            </div>
          </li>
          <li class="post">
            <a class="link_post_ampliar" onclick="zoomshow('./img/posts/secondpost.png','url(/img/arts/secondpost_max.png)')">
              <img src="./img/posts/secondpost.png" alt="pintura de hilda">
              <div class="btn_gradient btn_ampliar"><span class="btn_text">Ampliar</span></div>
            </a>
            <div class="content">
              <h3 class="title_post">Retrato Praia</h3>
              <h4 class="category_post">Photopaint</h4>
              <p>Retrato ecomendado pelo Instagram, pintura estilizada baseada em foto</p><br>
              <h5 class="characteristics_post">Programas Usados:</h5>
              <ol class="softwares_post">
                <li class="software_post"><img src="./img/icons/softwares/photoshop.png" alt=""/></li>
              </ol>
              <h5 class="characteristics_post">Duração:</h5>
              <p>5 horas</p><br>
              <h5 class="characteristics_post">Dificuldade:</h5>
              <div class="barra_back"><div data-porcetagem="85" class="barra"></div></div>
          </li>
        </ol>
      </section>
      <div class="separacao"><a href="/ilustracoes/" class="btn_vermais_separacao"><h6 class="title_vermais">Ver mais</h6></a></div>
     
      <!-- DESIGN -->
      
      <section class="area" id="Design">
        <nav class="menu_tags">
          <h2 class="title_tag"><span class="text_part_1">Des</span><span class="text_part_2">ign</span></h2>
          <div class="down_bar"></div>
          <ol class="tags">
            <a href="/infograficos/"><li class="tag"><div class="background_tag" style="background-image: url('./img/tags/backgrounds/tag_infograficos.png');">
            <div class="barra_tag"></div><div class="barra_tag_title"><h3>Infográficos</h3></div></div></li></a>
          </ol>
        </nav>
        <ol class="posts">
          <li class="post">
            <a class="link_post_design" href="/projects/foxby_identidade_visual/">
              <img src="./img/posts/design/firstpost.png" alt="pintura de hilda">
            </a>
            <div class="content">
              <h3 class="title_post">Foxby</h3>
              <h4 class="category_post">Identidade Visual</h4>
              <p>Ilustração da personagem “pearl” da serie de desenho animado 
                Steven Universe criada por Rebecca Sugar</p><br>
              <h5 class="characteristics_post">Programas Usados:</h5>
              <ol class="softwares_post">
                <li class="software_post"><img src="./img/icons/softwares/photoshop.png" alt=""/></li>
                <li class="software_post"><img src="./img/icons/softwares/illustrator.png" alt=""/></li>
                <li class="software_post"><img src="./img/icons/softwares/dimension.png" alt=""/></li>
              </ol>
              <h5 class="characteristics_post">Duração:</h5>
              <p>1 Semana</p><br>
              <h5 class="characteristics_post">Dificuldade:</h5>
              <div class="barra_back"><div data-porcetagem="45" class="barra"></div></div>
            </div>
          </li>
        </ol>
      </section>
    </section>
    <script type="text/javascript" src="./js/zoomimage.js"></script>
    <script type="text/javascript" src="./js/slide.js"></script>
    <script type="text/javascript" src="./js/barras.js"></script>
    <script type="text/javascript" src="./js/btn.js"></script>
  </body>
</html>
