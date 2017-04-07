
var url = window.location;
if (url == "http://victoralexandru.com/") {
	$('ul.nav li.home').addClass("active");
}
$('ul.nav a').filter(function() {
    return this.href == url;
	
}).parent().addClass('active');

