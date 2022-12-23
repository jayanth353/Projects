//local storage

if (localStorage.getItem("count") == undefined) {
    localStorage.setItem("count", 0);
}

if (localStorage.getItem("count") == undefined) {
    localStorage.setItem("count", 0);
}
localCount = document.getElementById("local-count");
localCount.textContent = localStorage.getItem("count");

localPlus = document.getElementById("local-plus");
localPlus.addEventListener("click", () => {
    let cnt = parseInt(localStorage.getItem("count"));
    upDateCnt = (cnt + 1).toString();
    localCount.innerHTML = upDateCnt;
    localStorage.setItem("count", upDateCnt);
});

localMinus = document.getElementById("local-minus");
localMinus.addEventListener("click", () => {
    let cnt = parseInt(localStorage.getItem("count"));
    upDateCnt = (cnt - 1).toString();
    localCount.innerHTML = upDateCnt;
    localStorage.setItem("count", upDateCnt);
});

if (sessionStorage.getItem("count") == undefined) {
    sessionStorage.setItem("count", 0);
}

sessionCount = document.getElementById("session-count");
sessionCount.textContent = sessionStorage.getItem("count");

sessionPlus = document.getElementById("session-plus");
sessionPlus.addEventListener("click", () => {
    let cnt = parseInt(sessionStorage.getItem("count"));
    upDateCnt = (cnt + 1).toString();
    sessionCount.innerHTML = upDateCnt;
    sessionStorage.setItem("count", upDateCnt);
});

sessionMinus = document.getElementById("session-minus");
sessionMinus.addEventListener("click", () => {
    let cnt = parseInt(sessionStorage.getItem("count"));
    upDateCnt = (cnt - 1).toString();
    sessionCount.innerHTML = upDateCnt;
    sessionStorage.setItem("count", upDateCnt);
});

/* Reset counts */
const rLocal = document.getElementById("reset-local");
console.log(rLocal)
rLocal.addEventListener("click", () => {
    localStorage.setItem("count", 0);
    localCount.innerHTML = 0;
});

const rSession = document.getElementById("reset-session");
console.log(rSession)

rSession.addEventListener("click", () => {
    sessionStorage.setItem("count", 0);
    sessionCount.innerHTML = 0;
});
