

const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://mailcheck.p.rapidapi.com/?domain=rupeshpatil2011345%40davvscsit.in",
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "mailcheck.p.rapidapi.com",
		"x-rapidapi-key": "c801871fc5msh09697b05c1fff61p108b03jsnfc6cdd0c60ab"
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
});