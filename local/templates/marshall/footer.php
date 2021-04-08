<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__row">
                <div class="footer__col">
                    <div class="footer__logo">
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="footer__copyright">
                        ©2020 zound industries. <br>
                        all rights reserved. org. nr 5567574610
                    </div>
                </div>
                <div class="footer__col">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_THEME" => "site",	// Тема меню
		"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
                </div>
<!--                <div class="footer__col">-->
<!--                    <div class="footer__menu">-->
<!--                        <ul class="footer__menu-list">-->
<!--                            <li>-->
<!--                                <a href="#" class="footer__menu-link">marshall records</a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="footer__menu-link">history</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="footer__col">
                    <div class="footer__social">
                        <ul class="footer__social-list">
                            <li>
                                <a href="#" class="footer__social-link">spotify</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">facebook</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">instagram</a>
                            </li>
                            <li>
                                <a href="#" class="footer__social-link">pinterest</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/script.min.js"></script>
</body>
</html>