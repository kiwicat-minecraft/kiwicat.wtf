let open_news = 7;

window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const q = params.get("news");

    if (q) {
        open_news = Number(q);
        change_page(q);
    }
});



let max_news = 7;
change_page(open_news);

function left(){
    if(open_news != 1){
        open_news -= 1;
    }
    change_page(open_news);
}
function right(){
    if(open_news != max_news){
        open_news += 1;
    }
    change_page(open_news);
}

function change_page(page){
    document.getElementById("news_main").src = `/news/news_${page}.html`;
    document.getElementById("news_count").innerText = `News: ${page}`;
    let newURL = window.location.pathname + "?news=" + encodeURIComponent(page);
    history.pushState({}, "", newURL);
}