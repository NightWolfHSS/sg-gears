const ase = {
	name: "Michaelk",
	age: 40,
	ocp: "message not the sky",
	level: 7 
}

// get staff
for(const base in ase) {
	console.log(base + ":  "+ ase[base]);
}


// next more
const dataEnmr = {
	name: "kikcle",
	message: "the message has been sent now",
	dta: "good luck my keyboard is broken",
	age: 1845
}

console.log("\r\n");

for(const shortBoxOne in dataEnmr ) {
	console.log(shortBoxOne + ": " + dataEnmr[shortBoxOne]);
}

console.log("\r\n");


let User = {
	name: "Dany",
	display: function() {
		console.log("Name:", this.name);
	}
}

let us1 = Object.create(User);
us1.name = "Slowle";
us1.display();
us1.name = "Nickaekkl";
us1.display();
us1.name = "ourDaySnick";
us1.display();