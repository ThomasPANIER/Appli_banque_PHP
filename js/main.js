
// const bodyHidden = document.getElementsByTagName("body");

// function layer() {
//     if (bodyHidden.addEventListener("mouseover", function() {
//         let newDiv = document.createElement("DIV");
//         document.body.appendChild(newDiv);
//         newDiv.style.backgroundColor = black;
//     }));
// }

// const bodyHidden = document.getElementById("bodyHidden");
// const bodyShow = document.getElementById("bodyShow");

// bodyHidden.onclick = function () {
//     this.classList.remove("bodyHidden");
//     this.classList.add("bodyShow");
// };

function closeLayer() {
    document.getElementById("layer").style.display="none";
    document.getElementById("bodyShow").style.display="block";
}