function up(max) {
    document.getElementById("text").value = parseInt(document.getElementById("text").value) + 1;
    if (document.getElementById("text").value >= parseInt(max)) {
        document.getElementById("text").value = max;
    }
}
function down(min) {
    document.getElementById("text").value = parseInt(document.getElementById("text").value) - 1;
    if (document.getElementById("text").value <= parseInt(min)) {
        document.getElementById("text").value = min;
    }
}

function up1(max) {
    document.getElementById("text1").value = parseInt(document.getElementById("text1").value) + 1;
    if (document.getElementById("text1").value >= parseInt(max)) {
        document.getElementById("text1").value = max;
    }
}
function down1(min) {
    document.getElementById("text1").value = parseInt(document.getElementById("text1").value) - 1;
    if (document.getElementById("text1").value <= parseInt(min)) {
        document.getElementById("text1").value = min;
    }
}

function up2(max) {
    document.getElementById("text2").value = parseInt(document.getElementById("text2").value) + 1;
    if (document.getElementById("text2").value >= parseInt(max)) {
        document.getElementById("text2").value = max;
    }
}
function down2(min) {
    document.getElementById("text2").value = parseInt(document.getElementById("text2").value) - 1;
    if (document.getElementById("text2").value <= parseInt(min)) {
        document.getElementById("text2").value = min;
    }
}




