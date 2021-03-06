<?php get_header(); ?>
<div class="container">
<div class="row spacer">
    <div class="col-md-8 col-sm-12">
        <div class="row">
            <div class="col-md-12">
                <h4>Pracovné skúsenosti</h4>
                <p><strong>TSS Group a.s.</strong> programátor</p>
                <ul>
                    <li>vývoj konfiguračného softvéru pre GPS jednotky, komunikácia cez sériový port, java</li>
                    <li>TCP/IP server na komunikáciu s GPS jednotkami, multithread, java</li>
                    <li>CAN bus čítačka, sériový port, Visual Basic</li>
                    <li>Android aplikácia pre zobrazovanie GPS pozícii na Google mapách, komunikácia so serverom cez http REST rozhranie, XML, java</li>
                    <li>parser dátových súborov, multithread, komunikácia s databázou, odchytávanie linuxových <i>kill</i> signálov, java</li>
                    <li>práca s databázami MySQL a PostgreSQL, využitie dedičnosti, triggerov, pravidiel, programovanie nových funkcii</li>
                </ul>
                <p><strong>Lumir-Real s.r.o.</strong> webdeveloper</p>
                <ul>
                    <li>vývoj v PHP frameworku Nette + REST rozhranie pre mobilné aplikácie, JSON</li>
                    <li>CSS framework Bootstrap, LESS</li>
                    <li>oboznamenie sa s frameworkom Symfony + Doctrine ORM</li>
                </ul>
                <p><strong>Azet.sk a.s.</strong> webdeveloper</p>
                <ul>
                    <li>programovanie nových funkcii, údržba pôvodných, závislosť viacerých projektov / webov</li>
                    <li>NoSQL databáza Elastic Search, tvorba mappingu a query dotazov</li>
                    <li>nové, interné, balíčky pre composer, PHPUnit testing</li>
                    <li>širšie oboznámenie sa s Google Analytics a jeho možnosťami</li>
                </ul>
                <p><strong>Eset s.r.o.</strong> webdeveloper</p>
                <ul>
                    <li>interné webové aplikácie, správa firemných webov</li>
                    <li>PHP, Slim, FatFree, WordPress, Laravel Eloquent</li>
                    <li>jQuery UI / Widget Factory, CSS Bootstrap / PureCSS</li>
                    <li>Jenkins, deploy scripty - test / produkcia, syntax kontrola, spustanie testov, vytvaranie / tagovanie novych verzii</li>
                    <li>java aplikacia, komunikacia s MSSQL a Windows Auth, Google Gson, Adobe Cloud APIs</li>
                </ul>
            </div>
            <div class="col-md-12">
                <h4>Bočné projekty</h4>
                <p><strong>DiagramArt</strong> programátor</p>
                <ul>
                    <li>Web Widget, React, Flux, webpack, ES6, Babel</li>
                    <li>Android application, Gradle, Fresco na načítanie a zobrazovanie obrázkov, BottomBar pre navigáciu a FragNav na organizáciu fragmentov, SQLite, Repository pattern</li>
                </ul>
                <p><strong>Commander Systems s.r.o.</strong> webdeveloper</p>
                <ul>
                    <li>React, Flux, webpack, ES6, Babel</li>
                    <li>Middleware server v Node.js s frameworkom Express</li>
                    <li>JWT autentifikácia</li>
                    <li>Socket.io klient + server pre interný chat</li>
                    <li>Unit testy pomocou Chai, Sinon, Mocha</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <h4>Kontakt</h4>
        <ul class="list-group contact-list">
            <li class="list-group-item"><i class="fa fa-skype"></i> <span><a href="skype:juffalow?userinfo">juffalow</a></span></li>
            <li class="list-group-item"><i class="fa fa-facebook"></i> <span><a href="https://www.facebook.com/juffalow.page/">juffalow</a></span></li>
            <li class="list-group-item"><i class="fa fa-envelope-o"></i> <span><a href="mailto:juffalow@juffalow.com">juffalow@juffalow.com</a></span></li>
            <li class="list-group-item"><i class="fa fa-twitter"></i> <span><a href="https://twitter.com/juffalow">@juffalow</a></span></li>
            <li class="list-group-item"><i class="fa fa-github"></i> <span><a href="https://github.com/juffalow">juffalow</a></span></li>
            <li class="list-group-item"><i class="fa fa-instagram"></i> <span><a href="https://www.instagram.com/juffalow/">juffalow</a></span></li>
        </ul>
    </div>
    <div class="col-md-4 col-sm-12">
        <h4>S čím pracujem / som pracoval</h4>
            <style>
              .rig {
                width: 100%;
                font-size: 0;
                list-style: none;
                padding: 0;
              }

              .rig li {
                width: 10%;
                display: inline-block;
                vertical-align: middle;
                box-sizing: border-box;
                margin: 0;
                padding: 0;
              }

              .rig li.wide {
                width: 20%;
              }

              .rig-cell {
                margin: 5px;
                display: block;
                position: relative;
                overflow: hidden;
              }

              .rig-img {
                display: block;
                width: 100%;
                height: auto;
                border: none;

              }

              .contact-list li i {
                font-size: 1.5em;
                position: absolute;
                color: #333;
              }

              .contact-list li span {
                margin-left: 2em;
              }

              @media (min-width: 992px) {
                  .rig li {
                    width: 10%;
                  }
                  .rig li.wide {
                    width: 20%;
                  }
              }
              @media (max-width: 992px) {
                  .rig li {
                    width: 5%;
                  }
                  .rig li.wide {
                    width: 10%;
                  }
              }
              @media (max-width: 544px) {
                  .rig li {
                    width: 10%;
                  }
                  .rig li.wide {
                    width: 20%;
                  }
              }
            </style>

            <div style="float: left;">
              <ul class="rig">
                <li class="wide">
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/php.png" alt="php logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/slim.png" alt="slimphp logo" class="rig-img">
                    </a>
                </li>
                <li class="wide">
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/phalcon.png" alt="phalconphp logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/javascript.png" alt="javascript logo" class="rig-img">
                    </a>
                </li>
                <li class="wide">
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/backbone.png" alt="backbone logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/jquery.gif" alt="jquery logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/java.png" alt="java logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/composer.png" alt="composer logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/webpack.png" alt="webpack logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/grunt.png" alt="grunt logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/github.png" alt="github logo" class="rig-img">
                    </a>
                </li>
                <li class="wide">
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/mysql.png" alt="mysql logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/postgresql.png" alt="postgresql logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/jwt.svg" alt="jwt logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/react.svg" alt="react logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/flux.svg" alt="flux logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/elasticsearch.png" alt="elasticsearch logo" class="rig-img">
                    </a>
                </li>
                <li class="wide">
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/git.png" alt="git logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/gitlab.png" alt="gitlab logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/terminal.png" alt="terminal logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/jenkins.png" alt="jenkins logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/golang.png" alt="golang logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/atom.png" alt="atom logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/netbeans.png" alt="netbeans logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/pdepend.png" alt="pdepend logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/phpmessdetector.png" alt="phpmessdetector logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/apache.png" alt="apache logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/laravel.png" alt="laravel logo" class="rig-img">
                    </a>
                </li>
                <li class="wide">
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/npm.png" alt="npm logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/bower.svg" alt="bower logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/android.png" alt="android logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/node.png" alt="node js logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/socketio.gif" alt="socket io logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/yarn.png" alt="yarn logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/mocha-js-logo.png" alt="mocha js logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/sequelize-logo.png" alt="sequelize logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/chai-logo.png" alt="chai js logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/graphql.png" alt="graphql logo" class="rig-img">
                    </a>
                </li>
                <li class="wide">
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/babel.png" alt="babel logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/sqlite.png" alt="sqlite logo" class="rig-img">
                    </a>
                </li>
                <li>
                    <a class="rig-cell">
                        <img src="<?php bloginfo('template_directory'); ?>/images/gulp.png" alt="gulp logo" class="rig-img">
                    </a>
                </li>
              </ul>
          </div>
      </div>
</div>

<?php get_footer(); ?>
