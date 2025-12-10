let text = "";
let first = "";
let symbol = "";
let last = "";
let selectingFirst = true;

function refresh() {
    text = first + " " + symbol + " " + last;
    document.getElementById("c_in").textContent = text;
}

// Numbers
for (let i = 0; i <= 9; i++) {
    let btn = document.getElementById(i.toString());
    if (btn) {
        btn.addEventListener("click", function() {
            if (selectingFirst) {
                first += i.toString();
            } else {
                last += i.toString();
            }
            refresh();
        });
    }
}

// operants
["+", "-", "*", "/"].forEach(op => {
    let btn = document.getElementById(op);
    if (btn) {
        btn.addEventListener("click", function() {
            symbol = op;
            selectingFirst = false;
            refresh();
        });
    }
});

// =
document.getElementById("=").addEventListener("click", function() {
    if (first !== "" && last !== "") {
        try {
            let result = eval(first + symbol + last);
            document.getElementById("c_in").textContent = result;
            first = result.toString();
            last = "";
            selectingFirst = true;
        } catch {
            document.getElementById("c_in").textContent = "Error";
        }
    }
});

// Clear
document.getElementById("C").addEventListener("click", function() {
    first = "";
    last = "";
    symbol = "";
    selectingFirst = true;
    refresh();
});

