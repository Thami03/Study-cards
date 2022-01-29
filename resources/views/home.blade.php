<!DOCTYPE html>
    @extends('layout.layout')
<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body >
    @section('cabecalho')
    
    @endsection
    
    
    @section('rodape')


 <div class="container-fluid"> 
        <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Sobre o Study-cards</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample" style="">
                                    <div class="card-body">
                                         <p>É um sistema que ajudará as pessoas a estudarem para o enem, 
                                         com a utilização de flashs cards para simplificar e ajudar no entendimento.<p>
                                    </div>
                                </div>
        </div>
         <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Entenda as 4 áreas de conhecimento do Enem</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample" style="">
                                    <div class="card-body">
                                       <p>As áreas de conhecimento do Enem são encontradas na matriz de referência do exame. 
                                       Esse documento é produzido para avaliações de larga escala, como é o caso do Enem,
                                        para indicar habilidades a serem avaliadas em cada etapa escolar, além de orientar 
                                        para elaboração das questões. O conteúdo das provas do Enem 
                                       é definido a partir dessa matriz de referência, divididas nas 4 áreas do conhecimento.<p>
                                    <br><p> Sendo assim, as disciplinas que conhecemos ficam divididas da seguinte forma:</p>


                                   <p> - Ciências Humanas e suas Tecnologias: História, Geografia, Filosofia e Sociologia.</p>

                                    <p>- Ciências da Natureza e suas Tecnologias: Química, Física e Biologia.</p>

                                    <p>- Linguagens, Códigos e suas Tecnologias: Língua Portuguesa, Literatura, Língua Estrangeira (Inglês ou Espanhol), Artes, Educação Física e Tecnologias da Informação e Comunicação.</p>

                                    <p>- Matemática e suas Tecnologias: Matemática.</p>

                                    </div>
                                </div>
        </div>
         <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">O que é e para que serve o Enem?</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample" style="">
                                    <div class="card-body">
                                        <p>A prova do Enem é realizada anualmente e os resultados dos participantes podem ser utilizados para ingressar em uma faculdade pública ou privada. As principais formas são por meio dos programas do governo federal: Sistema de Seleção Unificada (Sisu), 
                                            para universidades e institutos superior públicos do Brasil.</p>
                                   <p>O Programa Universidade para Todos (Prouni) que oferta bolsas de estudo para faculdades privadas brasileiras, o Fundo de Financiamento Estudantil (Fies) que financia todo o curso de graduação em uma faculdade particular e o Enem Portugal, em que universidades portuguesas utilizam 
                                    a nota do exame para o acesso de estudantes brasileiros em seus cursos de graduação.</p>
                                    </div>
                                </div>
        </div>
    </div>
    
    @endsection

    </body>
</html>
