
document.addEventListener('keypress', keypress);
var pk;
var buttons = document.querySelectorAll("button");
var lessonwords = document.querySelector(".lessonwords");
var lw = lessonwords.innerText.trim().toUpperCase();
var inputCount = 0;

var correct = 0;
var incorrect = 0;



function checkInput(userInput) {

    lw[inputCount] = lw[inputCount].replace(/(\r\n|\n|\r)/gm, "")

    if (userInput === lw[inputCount] || (lw[inputCount] == false && userInput == false)) {
        inputCount++;
        console.log('correct');
        var usedlw = "";
        var leftlw = "";
        for (i = 0; i < inputCount; i++) {
            usedlw += lw[i].toLowerCase();
        }
        for (i = inputCount; i < lw.length; i++) {
            if (i == inputCount) {
                leftlw += "<span class='c'>" + lw[i].toLowerCase() + "</span>";

            } else {
                leftlw += lw[i].toLowerCase();

            }
        }

        console.log(leftlw[0]);
        var finalstring = "<span  class='used'>" + usedlw + "</span>" + leftlw;
        lessonwords.innerHTML = finalstring;

        correct++;



    } else {
        incorrect++;

    }

    document.getElementById('correct').innerText = correct;
    document.getElementById('incorrect').innerText = incorrect;


}



function keypress(e) {
    var keynum;

    if (window.event) {
        keynum = e.keyCode;
    } else if (e.which) {
        keynum = e.which;
    }


    pk = String.fromCharCode(keynum).toUpperCase();



    buttons.forEach(function (button, index) {
        var bc = button.innerText;
        if (bc == pk) {
            button.classList.toggle('click');
        } else {

            button.classList.remove('click');

        }
    });
    checkInput(pk);
    pk = null;
    if (inputCount == lw.length) {
        var m = document.querySelector("#minute");
        var s = document.querySelector("#second");

        alert("Total Time : " + m.innerText + " Minutes & " + s.innerText + " Seconds\nCorrect : " + correct + "\nIncorrect : " + incorrect);
        window.location.href = 'index.php';
    }
}