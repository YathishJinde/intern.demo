console.log("added js");

function verify() {
    const inputPassword = document.querySelector('#inputPassword')
    const confirmPassword = document.querySelector('#confirmPassword')
    const passwordAlert = document.querySelector('#password')

    if(inputPassword.value !== confirmPassword.value) {
        console.log("password doest not match");
        passwordAlert.innerHTML="password doesn't match hello";
        passwordAlert.style.display ="block"
    }
    else { 

        console.log("password match");
        passwordAlert.style.display = "none"
        
    }
}

let fruits = ["mango","apple","banana","watermelon"]

console.log(fruits)

const details = [ {name : "Yathish",
                role : "Developer"},

                {name : "Virat",
                role : "Batsmen"},

                {name : "Dhoni",
                role : "Wicketkeeper"}
            ]
console.log(details)

let lastFruit =fruits.pop();//"watermelon"

console.log(fruits)


let citrusFruits =fruits.slice(1,3);//"["mango","banana"]"

console.log(citrusFruits)