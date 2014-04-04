var itemsInCart = 0;

function addItem() {
	itemsInCart == itemsInCart++;
	console.log('Items in cart ' + itemsInCart)
}

addItem('Items in cart: ' + itemsInCart); // Should say 'Items in cart: 1'

//new code here


function isSystemBolagetOpen(hour) {

	if (hour === 12 || hour === 9) {
		console.log('It is open at ' + hour + ':00')
	}

	else {
		console.log('It is closed ' + hour + ':00')
	}
};

isSystemBolagetOpen(12); // should say 'It is open at 12:00!'
isSystemBolagetOpen(19); // should say 'It is closed at 19:00!'
isSystemBolagetOpen(9);  // should say 'It is open at 9:00!'
isSystemBolagetOpen(8);  // should say 'It is closed 8:00!'

//new code below

var i=0;
var statement = 'I love ';

var favouriteThings = ['Eurovision', 'Midsummer', 'AddFood'];

for (var i=0;i<favouriteThings.length;i++) {
console.log(statement + favouriteThings[i]);
}