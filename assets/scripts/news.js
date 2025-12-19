let open_news = 9;

window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const q = params.get("news");

    if (q) {
        open_news = Number(q);
        change_page(q);
    }
    else{
        change_page(open_news)
    }
});

let full_news = ["","start_of_the_site.html","cat_news.html","official_start.html",
    "what_to_do.html","comic_recommendation.html","steam_machine.html",
    "horror.html","zelda_leaks.html","christmas_and_reviews.html"
];

let max_news = 9;


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

    document.getElementById("full_news").href = `/full_news/${full_news[page]}`

    let newURL = window.location.pathname + "?news=" + encodeURIComponent(page);
    history.pushState({}, "", newURL);
}
