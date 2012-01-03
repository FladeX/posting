<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php include_javascripts() ?>
<?php include_stylesheets() ?>
<title>Posting.ru — биржа наполнения форумов - Текущие задания</title>
</head>
<body>

<div id="mainHeader">
    <div class="overlay"></div>
    <div class="content">
        <h1>
            <img src="/images/main_logo.png" alt="Posting.ru" />
        </h1>

        <div id="mainHeaderLogin">
            <a href="#">моя страница</a> |
            <a href="#">
                <div class="value">
                    <span>2</span>
                </div>
                сообщения
            </a> |
            <a href="#">
                <div class="value">
                    <span>350</span>
                </div>
                баланс
            </a> |
            <a href="#">выйти</a>
        </div>

        <div id="mainMenu">
            <ul>
                <li class="first">
                    <span></span>
                    <a href="index.html">главная</a>
                </li>
                <li class="current">
                    <span></span>
                    <a href="#">задания</a>
                </li>
                <li class="postCurrent">
                    <span></span>
                    <a href="#">постеры</a>
                </li>
                <li class="last">
                    <span></span>
                    <a href="#">поддержка</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="mainContainer" class="listPage">
    <div id="innerHeader">
        <div class="content">
            <h2>Текущие задания</h2>
            <a href="#">Архив</a>
        </div>
        <b class="r1"></b><b class="r1"></b><b class="r2"></b><b class="r4"></b>
    </div>

    <div id="mainContent">
        <div id="sidebar">
            <div class="sidebarBlock">
                <a id="addTaskLink" href="#">добавить задание</a>
            </div>


            <div id="topCustomers" class="sidebarBlock">
                <h3>Лучшие заказчики</h3>
                <ul class="userList">
                    <li class="odd">
                        <img src="/images/fake_avatar_1.png" alt="" class="avatar" />
                        <div class="content">
                            <div class="title">Степан Трофимов</div>
                            <div class="rating">
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                / 302
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="/images/fake_avatar_2.png" alt="" class="avatar" />
                        <div class="content">
                            <div class="title">Екатерина Селиверстова</div>
                            <div class="rating">
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                / 255
                            </div>
                        </div>
                    </li>
                    <li class="odd">
                        <img src="/images/fake_avatar_3.png" alt="" class="avatar" />
                        <div class="content">
                            <div class="title">Ангелина Рычкова</div>
                            <div class="rating">
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                / 221
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="/images/fake_avatar_4.png" alt="" class="avatar" />
                        <div class="content">
                            <div class="title">Василий Пупкин</div>
                            <div class="rating">
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                / 217
                            </div>
                        </div>
                    </li>
                    <li class="odd">
                        <img src="/images/fake_avatar_5.png" alt="" class="avatar" />
                        <div class="content">
                            <div class="title">Иван Семенов</div>
                            <div class="rating">
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                <img src="/images/icon_star.png" />
                                / 211
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="searchBlock" class="sidebarBlock">
                <h3>Поиск</h3>
                <form action="#">
                    <input id="searchQuery" type="text" name="query" />
                    <input type="submit" value="Найти" />
                </form>
            </div>

            <div class="sidebarBlock">
                <div id="feedBlock" >
                    <a href="#">RSS-лента</a>
                </div>
            </div>

        </div>

        <div id="primaryContent">
            <div id="priceMenu" class="innerMenu">
                <div class="title">
                    <span>цена</span>/wmr
                </div>

                <ul>
                    <li>
                        <a href="#" class="current">любая</a>
                    </li>
                    <li>
                        <a href="#">до 150</a>
                    </li>
                    <li>
                        <a href="#">150-1000</a>
                    </li>
                    <li>
                        <a href="#">более 1000</a>
                    </li>
                    <li>
                        <a href="#">договорная</a>
                    </li>
                </ul>
            </div>

            <table id="tasksTable" class="dataTable">
                <thead>
                    <tr>
                        <th>
                            <a href="#" class="sortDesc">дата добавления</a>
                        </th>
                        <th>
                            <a href="#">цена</a>
                        </th>
                        <th class="last">
                            <a href="#">претенденты</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice"><?php echo $sf_user->getFlash('notice') ?></div>
        <?php endif; ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
        <?php endif; ?>
 
          <?php echo $sf_content ?>
                </tbody>
            </table>

            <div id="paging">
                <div class="numbers">
                    <span class="current">1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                    <a href="#">9</a>
                    <a href="#">10</a>
                    <span>...</span>
                    <a href="#">25</a>
                </div>
                <div class="keys">
                    <div class="next">
                        <a href="#">следующая</a>
                    </div>
                    <div class="prev">предыдущая</div>
                </div>
            </div>

        </div>
    </div>

    <div id="mainFooter">
        <div class="content">
            <ul class="menu">
                <li class="first">
                    <a href="#">о нас</a>
                </li>
                <li>
                    <a href="#">новости</a>
                </li>
                <li>
                    <a href="#">пользовательское соглашение</a>
                </li>
                <li>
                    <a href="#">партнерская программа</a>
                </li>
                <li>
                    <a href="#">карта сайта</a>
                </li>
            </ul>

            <div class="socialMenu">
                <ul>
                    <li>
                        <a href="#">
                            <img src="/images/social_icon_vk.png" alt="В Контакте" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/social_icon_fb.png" alt="Facebook" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/social_icon_tw.png" alt="Twitter" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/images/social_icon_yt.png" alt="You tube" />
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

</div>



</body>
</html>