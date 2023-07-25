(function () {
	var body = document.getElementsByTagName('body')[0];

	var switcherEN = document.getElementById('switcher-en');
	var switcherES = document.getElementById('switcher-es');

	// Заранее считаем срок хранения кук
	var expires = new Date();
	expires.setDate(expires.getDate() + 366);
	expires.toUTCString();

	// Русский и английский заголовки
	// var titleEN = document.getElementById('title-en');
	// var titleES = document.getElementById('title-es');
	// var title = {
	// 	en: titleEN.getAttribute('content'),
	// 	es: titleES.getAttribute('content')
	// }

	var switchLang = function () {
		var lang = this.id
		lang = lang.replace('switcher-', '');

		// Меняем класс для BODY
		body.className = lang;
		
		// Записываем куки
		document.cookie = [
			'lang=' + lang
			, '; expires=' + expires // используем expires, max-age не поддерживается в ИЕ
			// , '; path=/'
			, '; domain=' + document.location.host
		].join('');
		// document.title = title[lang];
	}

	switcherEN.onclick = switchLang;
	switcherES.onclick = switchLang;
})();

//Достаем куки
function getCookie(lang) {
	var matches = document.cookie.match(new RegExp("(?:^|; )" + lang.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
	return matches ? decodeURIComponent(matches[1]) : "en";
}
document.getElementsByTagName('body')[0].className = getCookie('lang');

//Меню
var switcherButton = document.getElementById('site-settings-button');
var switcherMenu = document.getElementById('site-settings-menu');
var crossButton = document.getElementById('site-settings-cross');

var switchMenu = function () {
	if (switcherMenu.className == "site-settings-menu-none") {
		switcherMenu.className = "site-settings-menu";
		crossButton.innerHTML = ' &#10005;';
	} else {
		switcherMenu.className = "site-settings-menu-none";
		crossButton.innerHTML = ' &#9660;';
	}
}

switcherButton.onclick = switchMenu;

let click;
document.addEventListener("click", function (e) {
	// click = e.target;
	const target = e.target;
	const its_menu = target == switcherMenu || switcherMenu.contains(target);
	const its_btnMenu = target == switcherButton || switcherButton.contains(target);;
	const menu_is_active = switcherMenu.classList.contains('site-settings-menu');
	if (!its_menu && !its_btnMenu && menu_is_active) {
		switchMenu();
	}
});