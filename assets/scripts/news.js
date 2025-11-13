

let open_news = 1;
let max_news = 6;

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
}