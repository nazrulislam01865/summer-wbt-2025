
var users = [
  { userName: "nazrulislam", password: "123456" },
  { userName: "nazrul", password: "123456" }
];

var fromDataArr = JSON.parse(localStorage.getItem("fromDataArr")) || []; 

document.addEventListener("DOMContentLoaded", function() {
  var form = document.getElementById("contactForm");
  if (form) {
    form.addEventListener("submit", function(event) {
      event.preventDefault(); 
      validateFrom(); 
    });
  }
});

function validateFrom() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var reason = document.getElementById("reason").value;
  var service = document.querySelector("input[name='service']:checked")?.value;
  var offer = document.querySelector("input[name='offer']:checked")?.value;
  var position = document.getElementById("position").value;

  if (!name || !email || !phone || !reason || !service || !offer || !position) {
    alert("Please fill out all fields.");
    return; 
  }

  var fromData = {name, email, phone, reason, service, offer, position};
  fromDataArr.push(fromData);

  localStorage.setItem("fromDataArr", JSON.stringify(fromDataArr));

  window.location.href = "success.html"; 
}

function signIn() {
  var userName = prompt("Enter your username:");
  var password = prompt("Enter your password:");

  if (userName && password) {
    var userFound = users.find(user => user.userName === userName && user.password === password);
    if (userFound) {
      alert("Login successful!");

      var savedData = JSON.parse(localStorage.getItem("fromDataArr")) || [];
      savedData.forEach((data, index) => {
        console.log(`Message #${index + 1}:`, data);
      });

    } else {
      alert("Invalid username or password.");
    }
  } else {
    alert("Please enter both username and password.");
  }
}

if (window.location.pathname.includes("success.html")) {
  signIn();
}

