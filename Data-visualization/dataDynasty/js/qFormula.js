/*

Javascript file to randomly display questions
Author: Jim Kollevik, Vanja Folin, Jo Posselt and Diego Fria
*/

var questions=[
				['Question 1', 'moderaterna'],
				['Question 2', 'sossarna'],
				['Question 3', 'moderaterna'],
				['Question 4', 'moderaterna'],
				['Question 5', 'sossarna'],
				['Question 6', 'sossarna']
];

//i answers sätt elementet till rätt fråga och svar


	function getQ(){
	console.log(questions)
 	var randomId =  Math.floor((Math.random()*questions.length));
  	var randomItem = questions[randomId][0];

  	$('#qText p').append(randomItem);
  	remove_q = questions.splice(randomId, 1)

  	if (questions.length < 1) {
  		$('#btn').hide()
  	}

  	else {}
}

  	// måste veta vilken fråga det gäller för att kunna göra ett if statement!
  	//if () {
  		//här händer det något
  	//}

  	//else if () {
  		//här händer det något om svaret ej är rätt
  	//}