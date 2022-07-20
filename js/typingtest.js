
var stbutton = document.querySelector("#stbutton");
var timebar = document.querySelector("#timebar");

var time;
var uname;
var run;
var leftt;


stbutton.addEventListener('click', function () {
    uname = document.querySelector("#name").value;
    time = document.querySelector("#time").value;
    leftt = time;
    document.querySelector("#modalui").style.display = "none";

});


function timer() {
    var l = (leftt / time) * 100;
    leftt--;
    timebar.style.width = l + "%";

    if (leftt < 1) {
        clearInterval(run);

        var words = usedtext.trim().split(" ");
        var userWords = usertext.trim().split(" ");
        console.log(words);
        console.log(userWords);
        for (var i = 0; i < words.length; i++) {
            if (words[i].localeCompare(userWords[i]) != 0) {
                mistakes++;
            }


        }


        var acc = ((words.length - mistakes) / words.length) * 100;
        var wpm = ((words.length - mistakes) / (time / 60));

        document.querySelector("#wname").innerText = uname;
        document.querySelector("#wpm").innerText = wpm + " wpm";
        document.querySelector("#acc").innerText = acc + " %";
        document.querySelector("#modalui2").style.display = "block";
        console.log(acc + "% accuracy\nwpm: " + wpm);

    }
}
var mistakes = 0;
var inputcount = 0;

var text = document.querySelector(".ms").innerText;
var usedtext = "";
var usertext = "";
var typingtool = document.querySelector("#typingtool");



typingtool.addEventListener('keypress', function () {
    if (!run) {
        run = setInterval(() => { timer(); }, 1000);
    }
    usedtext += text[inputcount];
    usertext = typingtool.value;

    inputcount++;
});