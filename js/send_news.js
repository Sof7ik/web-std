let sendNews = async (event) =>
{
    event.preventDefault();

    let titleNewsValue = titleNewsInput.value;
    let textNewsValue = textNewsInput.value;
    let fileNewsValue = fileNewsInput.files[0];

    let form = new FormData();
    form.append('title_news', titleNewsValue);
    form.append('text_news', textNewsValue);
    form.append('image_news', fileNewsValue);

    let fetchResponse = await fetch('./php/adding_news.php', 
    {
        method: 'POST',
        body: form
    });

    let textResponse = await fetchResponse.text();

    document.querySelector('body').insertAdjacentHTML('beforeEnd', textResponse);
}

let sendNewsButton = document.querySelector('.new-news-wrapper input[type="submit"]');
let titleNewsInput = document.querySelector('.new-news-wrapper input[name="title_news"]');
let textNewsInput = document.querySelector('.input-main-text');
let fileNewsInput = document.querySelector('.new-news-wrapper input[name="image_news"]');

sendNewsButton.addEventListener('click', (event) =>
{
    sendNews(event);
});