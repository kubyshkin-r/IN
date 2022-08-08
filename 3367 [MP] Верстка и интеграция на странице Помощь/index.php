<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Помощь");
//CJSCore::Init(['bootstrap4']);
\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
$APPLICATION->SetAdditionalCSS('/help/style.css');
?>

    <div class="main-container">
        <div class="page-title">Пожалуйста, изучите внимательно этот раздел. Здесь собраны частые вопросы и проблемы,
            которые возникают у посетителей сайта. Возможно, у вашей задачи уже есть быстрое решение.</div>
        <div class="content">
            <nav class="question-categories">
                <p>Категории вопросов:</p>
                <button class="tablinks active" onclick="openTab(event, 'All')">Все</button>
                <button class="tablinks" onclick="openTab(event, 'Login-and-registration')">Вход и регистрация</button>
                <button class="tablinks" onclick="openTab(event, 'Broadcast')">Трансляция</button>
                <button class="tablinks" onclick="openTab(event, 'Other')">Другое</button>
            </nav>
            <section id="All" class="tabcontent" style="display: block;">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Как зарегистрироваться на&nbsp;сайте?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Для регистрации на&nbsp;сайте перейдите по&nbsp;<a href="/auth/?register=yes&utm_source=faq&utm_medium=quation">ссылке</a>, внимательно заполните все поля, выберете свою специальность, нажмите я&nbsp;не&nbsp;робот и&nbsp;выполните задачу. После выполнения всех этих действий кнопка «регистрация» станет активна. Нажмите на&nbsp;нее. Регистрация завершена.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Как авторизироваться на&nbsp;сайте?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Для авторизации на&nbsp;сайте перейдите по&nbsp;<a href="/auth/?utm_source=faq&utm_medium=quation">ссылке</a>, введите логин (адрес электронной почты) и&nbsp;пароль, указанные при регистрации. Поставьте галочку в&nbsp;графе «запомнить меня» и&nbsp;нажмите «войти». Авторизация завершена.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Не&nbsp;помню свой пароль
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Если вы&nbsp;забыли свой <a href="/auth/?forgot_password=yes">пароль</a>, перейдите по&nbsp;ссылке, введите свой логин (адрес электронной почты), нажмите я&nbsp;не&nbsp;робот и&nbsp;выполните задачу, нажмите на&nbsp;«выслать». Перейдите в&nbsp;свой почтовый ящик и&nbsp;ожидайте письмо с&nbsp;дальнейшими инструкциями. Письмо приходит в&nbsp;течение двух минут, если по&nbsp;истечении этого времени письмо не&nbsp;пришло, проверьте папку спам.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Как зарегистрироваться на&nbsp;мероприятие?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Если вы&nbsp;не&nbsp;зарегистрированы на&nbsp;сайте, пройдите процедуру регистрации, потом необходимо пройти процедуру авторизации на&nbsp;сайте. Перейдите на&nbsp;интересующее вас мероприятие по&nbsp;ссылке из&nbsp;письма или найдите его в&nbsp;разделе <a href="/events/?utm_source=faq&utm_medium=quation">мероприятия.</a> Далее необходимо нажать на&nbsp;кнопку «принять участие».
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Как найти мероприятие по&nbsp;теме?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                На&nbsp;каждой странице нашего сайта есть поисковая строка, расположенная в&nbsp;верхней части страницы, рядом с&nbsp;логотипом, введите туда интересующий вас запрос и&nbsp;нажмите на&nbsp;значок увеличительного стекла, и&nbsp;мы&nbsp;подберем для вас наиболее подходящую информацию.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Есть&nbsp;ли возможность посмотреть мероприятие после его завершения? Будет&nbsp;ли запись мероприятия?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Да, мы&nbsp;всегда ведем записи наших мероприятий, как очных, так и&nbsp;онлайн. Вы&nbsp;всегда можете зайти на&nbsp;страницу прошедшего мероприятия и&nbsp;просмотреть его с&nbsp;любого места. Видео появляется на&nbsp;странице прошедшего мероприятия в&nbsp;течение трех рабочих дней после его завершения.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Можно&nbsp;ли посмотреть мероприятие на&nbsp;YouTube?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Нет, мы&nbsp;не&nbsp;выкладываем свои мероприятия на&nbsp;видео-платформу YouTube, так как информация, которую они содержат, предназначена исключительно для работников здравоохранения.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Пропал звук или изображение
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Если во&nbsp;время просмотра мероприятия у&nbsp;вас пропал звук или изображение, проверьте ваше соединение с&nbsp;интернетом. Наши трансляции ведутся в&nbsp;большом разрешении и&nbsp;требуют устойчивого соединения. Так&nbsp;же вы&nbsp;можете снизить разрешение трансляции, нажав на&nbsp;шестеренку в&nbsp;правом нижнем углу окна трансляции и&nbsp;выбрать более низкое качество, это повлияет только на&nbsp;картинку. Убедитесь, что у&nbsp;вас не&nbsp;включены какие-либо VPN сервисы.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Login-and-registration" class="tabcontent">
                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                Как зарегистрироваться на&nbsp;сайте?
                            </button>
                        </h2>
                        <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Для регистрации на&nbsp;сайте перейдите по&nbsp;<a href="/auth/?register=yes&utm_source=faq&utm_medium=quation">ссылке</a>, внимательно заполните все поля, выберете свою специальность, нажмите я&nbsp;не&nbsp;робот и&nbsp;выполните задачу. После выполнения всех этих действий кнопка «регистрация» станет активна. Нажмите на&nbsp;нее. Регистрация завершена.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                Как авторизироваться на&nbsp;сайте?
                            </button>
                        </h2>
                        <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Для авторизации на&nbsp;сайте перейдите по&nbsp;<a href="/auth/?utm_source=faq&utm_medium=quation">ссылке</a>, введите логин (адрес электронной почты) и&nbsp;пароль, указанные при регистрации. Поставьте галочку в&nbsp;графе «запомнить меня» и&nbsp;нажмите «войти». Авторизация завершена.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                Не&nbsp;помню свой пароль
                            </button>
                        </h2>
                        <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2"
                             data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                Если вы&nbsp;забыли свой <a href="/auth/?forgot_password=yes">пароль</a>, перейдите по&nbsp;ссылке, введите свой логин (адрес электронной почты), нажмите я&nbsp;не&nbsp;робот и&nbsp;выполните задачу, нажмите на&nbsp;«выслать». Перейдите в&nbsp;свой почтовый ящик и&nbsp;ожидайте письмо с&nbsp;дальнейшими инструкциями. Письмо приходит в&nbsp;течение двух минут, если по&nbsp;истечении этого времени письмо не&nbsp;пришло, проверьте папку спам.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="Broadcast" class="tabcontent">
                <div class="accordion" id="accordionExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour3">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour3" aria-expanded="false" aria-controls="collapseFour3">
                                Как зарегистрироваться на&nbsp;мероприятие?
                            </button>
                        </h2>
                        <div id="collapseFour3" class="accordion-collapse collapse show" aria-labelledby="headingFour3"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                Если вы&nbsp;не&nbsp;зарегистрированы на&nbsp;сайте, пройдите процедуру регистрации, потом необходимо пройти процедуру авторизации на&nbsp;сайте. Перейдите на&nbsp;интересующее вас мероприятие по&nbsp;ссылке из&nbsp;письма или найдите его в&nbsp;разделе <a href="/events/?utm_source=faq&utm_medium=quation">мероприятия.</a> Далее необходимо нажать на&nbsp;кнопку «принять участие».
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive3" aria-expanded="false" aria-controls="collapseFive3">
                                Как найти мероприятие по&nbsp;теме?
                            </button>
                        </h2>
                        <div id="collapseFive3" class="accordion-collapse collapse" aria-labelledby="headingFive3"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                На&nbsp;каждой странице нашего сайта есть поисковая строка, расположенная в&nbsp;верхней части страницы, рядом с&nbsp;логотипом, введите туда интересующий вас запрос и&nbsp;нажмите на&nbsp;значок увеличительного стекла, и&nbsp;мы&nbsp;подберем для вас наиболее подходящую информацию.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix3" aria-expanded="false" aria-controls="collapseSix3">
                                Есть&nbsp;ли возможность посмотреть мероприятие после его завершения? Будет&nbsp;ли запись мероприятия?
                            </button>
                        </h2>
                        <div id="collapseSix3" class="accordion-collapse collapse" aria-labelledby="headingSix3"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                Да, мы&nbsp;всегда ведем записи наших мероприятий, как очных, так и&nbsp;онлайн. Вы&nbsp;всегда можете зайти на&nbsp;страницу прошедшего мероприятия и&nbsp;просмотреть его с&nbsp;любого места. Видео появляется на&nbsp;странице прошедшего мероприятия в&nbsp;течение трех рабочих дней после его завершения.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven3" aria-expanded="false" aria-controls="collapseSeven3">
                                Можно&nbsp;ли посмотреть мероприятие на&nbsp;YouTube?
                            </button>
                        </h2>
                        <div id="collapseSeven3" class="accordion-collapse collapse" aria-labelledby="headingSeven3"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                Нет, мы&nbsp;не&nbsp;выкладываем свои мероприятия на&nbsp;видео-платформу YouTube, так как информация, которую они содержат, предназначена исключительно для работников здравоохранения.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine3" aria-expanded="false" aria-controls="collapseNine3">
                                Пропал звук или изображение
                            </button>
                        </h2>
                        <div id="collapseNine3" class="accordion-collapse collapse" aria-labelledby="headingNine3"
                             data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                Если во&nbsp;время просмотра мероприятия у&nbsp;вас пропал звук или изображение, проверьте ваше соединение с&nbsp;интернетом. Наши трансляции ведутся в&nbsp;большом разрешении и&nbsp;требуют устойчивого соединения. Так&nbsp;же вы&nbsp;можете снизить разрешение трансляции, нажав на&nbsp;шестеренку в&nbsp;правом нижнем углу окна трансляции и&nbsp;выбрать более низкое качество, это повлияет только на&nbsp;картинку. Убедитесь, что у&nbsp;вас не&nbsp;включены какие-либо VPN сервисы.
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section id="Other" class="tabcontent">
                <div class="accordion" id="accordionExample4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight4">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight4" aria-expanded="false" aria-controls="collapseEight4">
                                Будут&nbsp;ли начислены баллы НМО?
                            </button>
                        </h2>
                        <div id="collapseEight4" class="accordion-collapse collapse show" aria-labelledby="headingEight4"
                             data-bs-parent="#accordionExample4">
                            <div class="accordion-body">
                                Внимательно ознакомитесь с&nbsp;описанием мероприятия, если в&nbsp;описании нет упоминания о&nbsp;начислении баллов НМО, они начислены не&nbsp;будут.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>




    <script>
        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"-->
<!--            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"-->
<!--            crossorigin="anonymous"></script>-->

     <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>