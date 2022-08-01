let loginform = document.getElementById("loginform");
let signupform = document.getElementById("signupform");
let loginbox = document.getElementById("loginbox");
let signupbox = document.getElementById("signupbox");
let form = document.getElementById("form")
let student = document.getElementById("student");
let admin = document.getElementById("admin");
let closebtn = document.getElementById("close");

// loginbox means login btn option in student form
// signupbox means signup btn option in student from


student.addEventListener("click", () => {
    signupform.classList.toggle("showsignup");
    loginform.classList.remove("showlogin");
})


admin.addEventListener("click", () => {
    loginform.classList.toggle("showlogin");
    signupform.classList.remove("showsignup");
})


loginbox.addEventListener("click", () => {
    signupform.classList.remove("showsignup");
    loginform.classList.toggle("showlogin");
});

// signupbox.addEventListener("click", () => {
// });




// close btn function for signup btn
function signupcross() {
    signupform.classList.remove("showsignup")
}

// close btn function for login btn

function logincross() {
    loginform.classList.remove("showlogin")
}