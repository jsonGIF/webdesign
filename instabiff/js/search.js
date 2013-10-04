//instagram api example, this code makes you fetch images after searching specific hashtag

$(document).ready(function() {

var myId = "c0ee95950fa74610acd62710a626edd9";

//sets so form doesnt override jquery
$('#submit').click(function(event) {
	event.preventDefault();
	})

function processImages(chilibiff) {
    // The variable "chilibiff" represents the information we got back.
    var i = 0;
    for (i in chilibiff.data) {
   	 	var f = chilibiff.data[i]
    	var imgSrc = f.images.standard_resolution.url
    	var userImg = f.user.profile_picture
    	var userName = f.user.username
    	var tags = f.tags[i++]
	   	$('.feed').append('<img src="' + userImg + '" id="profile"><p>' + userName +'</p>')
	   	$('.feed').append('<p>' + tags + '</p>')
    	$('.feed').append('<img src="' + imgSrc + '">')
    }
    	$('#load').empty()
}
//shows a loading bar when press the btn

function searchInst() {
	$('.feed').empty()
	$('#load').append('<p>The images are loading..</p><br><img src="img/load.gif">')
	var input = $("#textInput").val()
	var url = 'https://api.instagram.com/v1/tags/' + input + '/media/recent?client_id=dff465e44a4d4026b554b3d7925643cc&callback=?&count=100'
	$.getJSON(url, processImages);
};

$('#submit').click(searchInst);

  // Setup the url for the API
  //var url = "https://api.instagram.com/v1/tags/"+input+"/media/recent?client_id=dff465e44a4d4026b554b3d7925643cc&callback=?&count=100";

  // Tell jQuery to fetch the data.
  // When it returns the data, it will call our `processImages` function 
  //$.getJSON(url, processImages);
  

});