function pushCookie() {
	var path = window.location.pathname;
	path = path.substr(0, path.indexOf("/quiz"));
	var expires = new Date();
	expires.setDate(expires.getDate() + 7);
	expires.toUTCString();
	var quizzPass = 'quizzpass';
	document.cookie = [
		'quizzPass=' + quizzPass
		, '; expires=' + expires // используем expires, max-age не поддерживается в ИЕ
		, '; path=' + path
		, '; domain=' + document.location.host
	].join('');
};
// end cookie