function getCookie(lang) {
	var matches = document.cookie.match(new RegExp("(?:^|; )" + lang.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
	return matches ? decodeURIComponent(matches[1]) : "en";
}

document.getElementsByTagName('body')[0].className = getCookie('lang');

var title = {
	en: "Answer 5 questions to get a bonus!",
	es: "¡Responde 5 preguntas para obtener un bono!"
}

document.title = title[getCookie('lang')];