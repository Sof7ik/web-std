let sendFeedback = async (event) =>
{
    event.preventDefault();

    let fioValue = fioInput.value;
    let emailValue = emailInput.value;
    let textValue = textInput.value;

    let form = new FormData();
    form.append('fio_feedback', fioValue);
    form.append('email_feedback', emailValue);
    form.append('description_feedback', textValue);

    let fetchResponse = await fetch('../php/adding_feedback.php', 
    {
        method: 'POST',
        body: form
    });

    let textResponse = await fetchResponse.text();

    document.querySelector('body').insertAdjacentHTML('beforeEnd', textResponse);
}

let sendFeedbackButton = document.querySelector('#feedback_form input[type="submit"]');
let fioInput = document.querySelector('#fio_feedback');
let emailInput = document.querySelector('#email_feedback');
let textInput = document.querySelector('#text_feedback');

sendFeedbackButton.addEventListener('click', (event) =>
{
    sendFeedback(event);
});