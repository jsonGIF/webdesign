//instagram api example, this code makes you fetch images after searching specific hashtag

$(document).ready(function() {

var myId = "dff465e44a4d4026b554b3d7925643cc";

//sets so form doesnt override jquery
$('#submit').click(function(event) {
	event.preventDefault();
	})

$('#submit').click(searchInst);

//shows a loading bar when press the btn

  // Setup the url for the API
  //var url = "https://api.instagram.com/v1/tags/"+input+"/media/recent?client_id=dff465e44a4d4026b554b3d7925643cc&callback=?&count=100";

  // Tell jQuery to fetch the data.
  // When it returns the data, it will call our `processImages` function 
  //$.getJSON(url, processImages);

function searchInst() {
	$('.feed').empty()
	$('#load').append('<p>The images are loading..</p><br><img src="img/load.gif">')
	var input = $("#textInput").val()
	var url = 'https://api.instagram.com/v1/tags/' + input + '/media/recent?client_id=' + myId + '&callback=?&count=100'
	$.getJSON(url, processImages);
};

function processImages(chilibiff) {
    // The variable f represents the information we got back.
    for (var i = 0; i < chilibiff.data.length; i++) {
    	var f = chilibiff.data[i]
    	var imgSrc = f.images.standard_resolution.url
    	var userImg = f.user.profile_picture
    	var userName = f.user.username
    	//tag for loop doesn't work, try code for in on your server
	   	$('.feed').append('<img src="' + imgSrc + '">')
      $('.feed').append('<img src="' + userImg + '" id="profile">' + '<p><a href="http://www.instagram.com/' + userName + '" target="_blank">' + userName + '</a></p>')

      for (var x=0; x < f.tags.length; x++) {
      var tag = f.tags[x]
      $('.feed').append('<li>' + tag + '</li>')
    }

  }

    	$('#load').empty()
}
  

});