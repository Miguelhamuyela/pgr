 <!-- ======= Footer ======= -->
 <footer>
     <div class="footer-area">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-sm-4 col-xs-12">
                     <div class="footer-content">
                         <div class="footer-head">
                             <div class="footer-content">
                                 <div class="footer-head">
                                     <h4>Links Úteis</h4>
                                     <a target="_blank" href="https://tribunalsupremo.ao/">Tribunal Supremo</a>
                                     <br>
                                     <a target="_blank" href="https://tribunalconstitucional.ao/">Tribunal
                                         Constitucional</a>
                                     <br>
                                     <a target="_blank" href="https://www.tcontas.ao/">Tribunal de Contas</a>
                                     <br>
                                     <a target="_blank" href="https://governo.gov.ao/ao/">Portal do Governo</a>
                                     <br>
                                     <a target="_blank" href="https://sic.gov.ao/">SIC</a>
                                     <br>
                                     <a target="_blank" href="https://www.sme.gov.ao/">Serviço de Migração e
                                         Estrangeiro</a>
                                     <br>
                                     <a target="_blank" href="http://candidaturas.pgr.ao">Candidatura</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- end single footer -->
                 <div class="col-md-6">
                     <div class="footer-content">
                         <div class="footer-head">
                             <h4>Contactos</h4>
                             <div class="footer-contacts">
                                 <p><span>Telefone:</span> {{ $configuration->telefone }}</p>
                                 <p><span>Email:</span> {{ $configuration->email }}</p>
                             </div>
                         </div>
                         <div class="footer-icons">
                             <ul>
                                 <li>
                                     <a target="_blank"
                                         href="{{ $configuration->facebook }}"><i
                                             class="fa fa-facebook"></i></a>
                                 </li>
                                 <li>
                                     <a target="_blank" href="{{ $configuration->twitter }}"><i
                                             class="fa fa-twitter"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>


             </div>
         </div>
     </div>
     <div class="footer-area-bottom">
         <div class="container">
             <div class="footer-menu col-md-6 col-sm-12">
                 <div class="copyright">
                     Copyright © {{ date('Y') }} Todos os Direitos Reservados
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- End  Footer -->
 {!! ReCaptcha::htmlScriptTagJsApi() !!}
 <style>
     .modal-content {
         padding: 10px 100px;
     }


     .tile-center {
         text-align: center;
         margin-bottom: 40px;
         font-weight: bold;
         font-size: 1.6rem;
     }

     .tile-justify {
         text-align: justify;
         font-weight: bold;
         font-size: 1.3rem;
         margin: 30px 0px;
     }

     .body-text {
         text-align: justify;
         font-size: 1.3rem;
         margin: 30px 0px;
         text-indent: 60px;
     }

     .footer-text {
         text-align: center;
         font-weight: bold;
         font-size: 1.2rem;
     }

     .img-container {
         text-align: center;
     }

     .modal-body img {
         width: 88px;
     }

     .modal-footer button {
         background: #800000;
     }

     @media only screen and (max-width: 970px) {
         .modal-content {
             padding: 0px;
         }

         .tile-justify {
             text-align: center;
         }

         .body-text {
             text-indent: 10px;
         }

         .modal-header {
             margin: 0px !important;
         }

         .modal-footer {
             margin: 0px !important;
         }

         #exampleModalLong {
             z-index: 100000;
         }
     }

 </style>

 <!-- Modal -->
 <div class="modal fade bd-example-modal-xl" id="exampleModalLong" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitle" aria-hidden="true">
     <div class="modal-dialog modal-xl" role="document">
         <div class="modal-content">
             <div class="modal-header" style="margin: 0 -100px;">
                 <!--<h5 class="modal-title" id="exampleModalLongTitle">MENSAGEM DE FIM DE ANO DO PROCURADOR-GERAL DA REPÚBLICA 2020 </h5> -->
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="img-container"><img src=""></div>
                 <h3 class="tile-center">República de Angola <br /> Procuradoria Geral da República</h3>
                 <p class="tile-center"> MENSAGEM DE FIM DE ANO DO PROCURADOR-GERAL DA REPÚBLICA 2020 </p>
                 <p class="tile-justify"> Caros Magistrados do Ministério Público, Técnicos de Justiça e Funcionários
                     Administrativos da Procuradoria-Geral da República; </p>
                 <p class="body-text"> O final de cada ano civil, é marcado, entre nós e não só, com a habitual
                     Cerimónia de Cumprimentos de Fim de Ano. E no acto cumprimentamo-nos, literalmente, abraçamo-nos e
                     trocamos afectos, pois pela dispersão territorial dos serviços da Procuradoria-Geral da República e
                     pelas exigências laborais quotidianas, muitos de nós só têm a oportunidade de estar juntos
                     pessoalmente nesse dia. </p>
                 <p class="body-text"> É também o momento em que fazemos o balanço das actividades do ano que finda
                     e perspectivamos o ano vindouro. </p>
                 <p class="body-text"> Mas o ano 2020 pôs à prova todos os nossos prognósticos e retirou da
                     categoria de cliché as expressões “Resiliência e Reinvenção”. A dura realidade que vivemos por
                     decorrência da pandemia da Covid-19, que assola o mundo inteiro, alterou radicalmente a forma como
                     encaramos a vida, o convívio e o trabalho. </p>
                 <p class="body-text"> Embora com cautelas redobradas, cumprindo com as regras de biossegurança e
                     de distanciamento físico, a Procuradoria-Geral da República não deixou de prestar os seus serviços
                     à sociedade, na medida em que a sua actuação se mostra essencial ao normal funcionamento do Estado
                     Democrático de Direito. Deste modo, trabalhamos na instrução preparatória, quer realizando-a
                     directamente, quer fiscalizando os processos instruídos pelos órgãos de investigação criminal; na
                     fiscalização dos actos migratórios e na tramitação dos processos junto dos tribunais de jurisdição
                     comum e dos tribunais superiores, sem descurar o apoio jurídico prestado aos cidadãos e às
                     instituições públicas. </p>
                 <p class="body-text"> No ano atípico que está a findar, importa destacar aqui algumas actividades
                     desenvolvidas pela Procuradoria-Geral da República: </p>
                 <p class="body-text"> - Para salvaguardar o bem vida, e seguindo as recomendações dos organismos
                     internacionais em matéria de direitos humanos, foi levado a efeito um programa de contenção da
                     propagação da COVID-19 nos estabelecimentos prisionais, com a cooperação dos Tribunais e do
                     Ministério Interior, do qual resultou a soltura provisória de cerca de 2753 arguidos que se
                     encontravam em prisão preventiva; </p>
                 <p class="body-text"> - No plano da criação de condições materiais para o funcionamento dos órgãos
                     da Procuradoria-Geral da República, foi inaugurada a Procuradoria-Geral da República na Região Sul,
                     no Lubango, que se enquadra numa experiência piloto de reorganização dos serviços, integrando, além
                     da Huíla, as províncias do Namibe, Cunene e Cuando Cubango; </p>
                 <p class="body-text"> - Ainda no âmbito do funcionamento das regiões, foi realizada a Primeira
                     Reunião Alargada da Região Norte, que integra as províncias do Bengo, Cabinda, Cuanza Norte,
                     Malanje, Zaire e Uíge, que albergou o encontro, tendo sido feito um balaço positivo das actividades
                     desenvolvidas no ano de 2020; </p>
                 <p class="body-text"> - Em matéria de gestão dos recursos humanos, nomeadamente quanto à promoção
                     do género, registamos um considerável aumento de magistradas do Ministério Público na direcção de
                     órgãos da Procuradoria-Geral da República, sendo que actualmente 6 órgãos da direcção central da
                     PGR e 5 órgãos províncias são dirigidos por mulheres de reconhecido mérito e profissionalismo; </p>
                 <p class="body-text"> - Durante o ano de 2020, 70 Auditores de Justiça terminaram a sua formação
                     curricular e estágio no INEJ, pelo que aguardam pelas nomeações como Magistrados do Ministério
                     Público, o que se enquadra num esforço para ir mitigando a carência de recursos humanos; </p>
                 <p class="body-text"> - Por outro lado, encontram-se em estágio os Sub-Procuradores- Gerais da
                     República selecionados para os Tribunais da Relação de Benguela, Huíla e Luanda, cujo funcionamento
                     se prevê para breve; </p>
                 <p class="body-text"> - Um número considerável de magistrados do Ministério Públio integra a
                     Comissão de Reforma da Justiça e do Direito e as suas diversas subcomissões técnicas, que mesmo em
                     plena pandemia, não pouparam esforços, trabalhando em plataformas de videoconferência para elaborar
                     propostas de diplomas legais, alguns dos quais já em fase de consulta pública; </p>
                 <p class="body-text"> - O reconhecimento de que o bom funcionamento da Procuradoria-Geral da
                     República não depende apenas da prestação de serviço dos magistrados do Ministério Público, levou a
                     que se trabalhasse de modo aturado com os órgãos competentes para que o processo de transição e
                     promoção dos Técnicos de Justiça ficasse concluído, pelo que cerca de 672 funcionários da
                     Procuradoria-Geral da República beneficiaram de actualizações das respectivas categorias; </p>
                 <p class="body-text"> - No plano do combate à impunidade, a par das centenas de milhares de
                     processos movimentados em todo o país, nas mais diversas jurisdições e áreas de actuação do
                     Ministério Público, importa destacar a existência de 1522 processos relacionados com criminalidade
                     económico-financeira e patrimonial, de onde se destacam os crimes de peculato, branqueamento de
                     capitais, recebimento indevido de vantagens, participação económica em negócio, corrupção activa e
                     passiva e burla por defraudação; </p>
                 <p class="body-text"> - A este propósito foram apreendidos e/ou arrestados bens móveis e imóveis,
                     constituídos com fundos públicos ou com vantagens do crime, no valor equivalente a cerca de USD
                     4.232.320.000.00 (quatro mil, duzentos e trinta e dois milhões e trezentos e vinte mil dólares
                     norte- americanos) tais como fábricas, supermercados, edifícios, imóveis residenciais, hotéis,
                     participações sociais em instituições financeiras em diversas empresas rentáveis, material de
                     electricidade, etc; </p>
                 <p class="body-text"> - Até ao momento, o Serviço Nacional de Recuperação de Activos solicitou às
                     suas Congéneres no exterior do país a apreensão e/ou o arresto de bens e dinheiro no valor de USD
                     5.434.100.000.00, como é o caso da Suíça, Holanda, Luxemburgo, Portugal, Reino Unido, Singapura,
                     Bermudas, entre outros países; </p>
                 <p class="body-text"> - O Estado recuperou, definitivamente, até ao momento, em dinheiro e bens
                     cerca de USD 5.329.007.842,82. Ou seja, USD 2.709.007.842,82 em dinheiro e USD 2. 620.000.000,00 em
                     imóveis tais como, imóveis habitacionais, escritórios, edifícios, fábricas, terminais portuários,
                     participações sociais em empresas, etc; </p>
                 <p class="body-text"> - Tendo como objectivo o reforço da capacidade técnica dos magistrados do
                     Ministério Público, foi elaborado um Manual de Boas Práticas para Magistrados do Ministério Público
                     na Instrução Preparatória, que está em fase de adaptação aos novos Código Penal e Código do
                     Processo Penal; </p>
                 <p class="body-text"> - Ainda no capítulo formativo, e tendo em atenção a data de início de
                     vigência do Código Penal e do Código do Processo Penal, está a decorrer uma acção de formação com a
                     participação de todos os magistrados do Ministério Público, em especial dos que actuam na área
                     criminal, sobre as grandes mudanças que os novos diplomas legais irão introduzir no nosso
                     ordenamento jurídico-penal. Os formadores são magistrados do Ministério Público que participaram na
                     comissão que elaborou dos referidos diplomas legais e um técnico sénior do Ministério da Justiça e
                     dos Direitos Humanos e temos nos socorrido das plataformas eletrónicas de videoconferência para
                     permitir a cobertura nacional, em simultâneo, das sessões de formação; </p>
                 <p class="body-text"> - E porque pretendemos preservar para a posteridade a história da
                     Procuradoria-Geral da República, contada pelos seus fazedores, isto é, pelos próprios magistrados
                     do Ministério Público, publicamos o livro PGR 40 Anos, 40 Memórias, I Volume, um projecto lançado
                     aquando celebração do 40o aniversário da Procuradoria-Geral da República, assinalado no dia 27 de
                     Abril de 2019; </p>
                 <p class="body-text"> - Ainda ao longo deste ano, vários magistrados do Ministério Público
                     publicaram obras e artigos científicos em matéria de direito, o que queremos aqui encorajar e
                     incentivar o estudo e a investigação do direito no nosso seio. </p>
                 <p class="body-text"> Caros Magistrados do Ministério Público, Técnicos de Justiça e Funcionários
                     Administrativos da Procuradoria-Geral da República, </p>
                 <p class="body-text"> Em 2020, certamente, ficaram caminhos por percorrer e metas por alcançar,
                     porque a palavra de ordem era e ainda é: Fique em Casa! </p>
                 <p class="body-text"> Mas em 2021, estamos optimistas de que sairemos de casa, com a mesma vontade
                     e determinação de colocar a nossa pedra na construção de uma Angola democrática, fortalecendo a
                     Procuradoria- Geral da República, porquanto: </p>
                 <p class="body-text"> - Almejamos concluir o concurso para a nomeação de 12 novos
                     Procuradores-Gerais Adjuntos da República para melhore responder às exigências laborais ao nível
                     superior; </p>
                 <p class="body-text"> - Pretendemos ver aprovados os diplomas legais que regerão a actividade da
                     Procuradoria-Geral da República, dos magistrados do Ministério Público e dos Técnicos de Justiça,
                     sendo que irão dinamizar e optimizar o nosso funcionamento; </p>
                 <p class="body-text"> - Pelo facto de os resultados do funcionamento das Regiões da PGR (Norte e
                     Sul) terem sido bastante animadores, estamos a ponderar estender a experiência a outras regiões do
                     País; </p>
                 <p class="body-text"> - Continuaremos a trabalhar afincadamente no domínio da gestão dos recursos
                     humanos e na formação dos magistrados do Ministério Público e dos técnicos de justiça da
                     Procuradoria-Geral da República, no âmbito da implementação do Plano de Formação da
                     Procuradoria-Geral da República para o triênio 2020 -2022; </p>
                 <p class="body-text"> - Reforçaremos o intercâmbio e a cooperação com os órgãos de soberania e com
                     as instituições estrangeiras congéneres, pois num mundo cada vez mais complexo e globalizado, não
                     lograremos sucessos se a nossa actuação for isolada; </p>
                 <p class="body-text"> - Neste sentido, foram remetidas 16 Cartas rogatórias a países como os
                     E.U.A, Portugal, Reino Unido, Espanha, Africa do Sul e Namíbia, sendo que 7 já foram cumpridas. Por
                     outro lado, recebemos para tratamento 82 pedidos rogatórios dos seguintes países: Portugal, Brasil
                     e Namíbia. E a Procuradoria-Geral da República já cumpriu e devolveu 11 cartas rogatórias; </p>
                 <p class="body-text"> - Importa ainda reiterar o nosso apelo para que a Procuradoria- Geral da
                     República seja dotada de meios matérias, técnicos, equipamentos, instalações e recursos humanos
                     para melhorar a sua eficácia e garantir a excelência da sua prestação serviço à sociedade. E uma
                     solução seguida pela maioria dos países que se comprometeram como o combate cerrado à corrupção,
                     aliás, recomendada pelos organismos internacionais sobre a matéria e que desonera o Orçamento Geral
                     do Estado, passa pela afectação de uma percentagem dos bens recuperados no âmbito do combate à
                     criminalidade económica e financeira, para a melhoria das condições de trabalho e aquisição de
                     equipamentos para os órgãos que intervêm na luta contra este cancro que corrói às sociedades; </p>
                 <p class="body-text"> - Está em curso a construção do edifício-sede da Procuradoria- Geral da
                     República, porém constrangimentos de ordem financeira levaram à paralisação das obras, o que nos
                     preocupa, na medida em que a não existência de instalações próprias tem condicionado a expansão e a
                     modernização dos serviços da PGR; </p>
                 <p class="body-text"> Finalmente, dirijo uma palavra de apreço a todos que de forma empenhada,
                     consentindo sacrifícios e com espírito de missão contribuíram para que chegássemos ao final de 2020
                     com a grata sensação de dever cumprido, apesar das vicissitudes enfrentadas. </p>
                 <p class="body-text"> Assim, formulo votos de saúde e esperança em dias melhores a todos os
                     servidores da Procuradoria-Geral da República. </p>
                 <h3 class="footer-text">Boas Festas e Próspero Ano Novo!</h3>
                 <p class="body-text">Luanda, 30 de Dezembro de 2020.</p>
             </div>
             <div class="modal-footer" style="margin: 0 -100px;"> <button type="button" class="btn btn-secondary"
                     data-dismiss="modal">Fechar</button>
             </div>
         </div>
     </div>
 </div>

 @if (session('create'))
 <script>
     Swal.fire({
         icon: 'success',
         title: 'Cadastrado com sucesso!',
         showConfirmButton: true
     })
 </script>

@elseif(session('destroy'))
 <script>
     Swal.fire({
         icon: 'info',
         title: 'Eliminado com sucesso!',
         showConfirmButton: true
     })
 </script>

@elseif(session('complaint'))
 <script>
     Swal.fire({
         icon: 'success',
         title: 'Denúcia cadastrada com sucesso !',
         showConfirmButton: true
     })
 </script>


@elseif(session('edit'))
 <script>
     Swal.fire({
         icon: 'success',
         title: 'Alterações foram salvas com sucesso!',
         showConfirmButton: true
     })
 </script>
@elseif(session('create_image'))
 <script>
     Swal.fire({
         icon: 'success',
         title: 'Imagens foram salvas com sucesso!',
         showConfirmButton: true
     })
 </script>

@elseif(session('erro_students'))
 <script>
     Swal.fire({
         icon: 'error',
         title: 'Este estudante já esta cadastrado nesta turma e curso!',
         showConfirmButton: true
     })
 </script>

@elseif(session('romm_occupied'))
 <script>
     Swal.fire({
         icon: 'error',
         title: 'Esta sala estará ocupada neste horário!',
         showConfirmButton: true
     })
 </script>

@elseif(session('room_Satatus'))
 <script>
     Swal.fire({
         icon: 'error',
         title: 'Existe uma sala com este nome!',
         showConfirmButton: true
     })
 </script>


@elseif(session('existing_candidate'))
 <script>
     Swal.fire({
         icon: 'error',
         title: 'Já existe um estudante com este Número de Identificação',
         showConfirmButton: true
     })
 </script>

@elseif(session('NoAuth'))
 <script>
     Swal.fire({
         icon: 'error',
         title: 'Não tem autorização para visualizar esta página!',
         showConfirmButton: false,
         timer: 2500
     })
 </script>

@elseif(session('candidates_status'))
 <script>
     Swal.fire({
         icon: 'error',
         title: 'Não foi encontrado Pagamento deste Estudante com o status pago !',
         showConfirmButton: false,
         timer: 4500
     })
 </script>
@endif

 <!-- Vendor JS Files -->
 <script src="/site/vendor/jquery/jquery.min.js"></script>
 <script src="/site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="/site/vendor/jquery.easing/jquery.easing.min.js"></script>
 <script src="/site/vendor/php-email-form/validate.js"></script>
 <script src="/site/vendor/appear/jquery.appear.js"></script>
 <script src="/site/vendor/knob/jquery.knob.js"></script>
 <script src="/site/vendor/parallax/parallax.js"></script>
 <script src="/site/vendor/wow/wow.min.js"></script>
 <script src="/site/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="/site/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
 <script src="/site/vendor/owl.carousel/owl.carousel.min.js"></script>
 <script src="/site/vendor/venobox/venobox.min.js"></script>

 <!-- Template Main JS File -->
 <script src="/site/js/main.js"></script>


 @yield('JS')

 </body>

 </html>
