<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php include_javascripts() ?>
<?php include_stylesheets() ?>
<title><?php if (!include_slot('title')): ?>Posting.ru<?php endif; ?></title>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>

<div id="mainHeader">
    <div class="overlay"></div>
    <div class="content">
        <h1>
            <a href="<?php echo url_for('@homepage') ?>"><img src="/images/main_logo.png" alt="Posting.ru" /></a>
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
                    <a href="<?php echo url_for('projects/index') ?>">задания</a>
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
			<?php if (!include_slot('breadcrumbs')): ?><?php endif; ?>
        </div>
        <b class="r1"></b><b class="r1"></b><b class="r2"></b><b class="r4"></b>
    </div>

    <div id="mainContent">

        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice"><?php echo $sf_user->getFlash('notice') ?></div>
        <?php endif; ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
        <?php endif; ?>
 
          <?php echo $sf_content ?>

        </div><!-- #mainContent -->
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