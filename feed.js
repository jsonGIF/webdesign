// new feed javascript
//counts the longest name in the array
var i=0;
var names = ['Dan', 'Thomas B', 'Victor'];

function findLongestElement(array) {
	var longest = names[0];
	for (var i=0;i<array.length;i++) {
		if (longest.length<array[i].length) {
			longest = array[i]
		}
	}
	return longest;
}

var longestName = findLongestElement(names);
$("p").html(longestName);