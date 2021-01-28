"use strict";

let form = document.querySelector('form');
function responseHandler(serverAnswer) {
    console.log(serverAnswer);
let post = document.getElementById('post');
let divPost= document.createElement("div")
divPost.innerHTML = `${serverAnswer}`;
post.append(divPost);
}

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        const response = await fetch('load.php', 
            {
                method: 'POST',
                body: new FormData(form)
            });
            const answer = await response.text(); 
            responseHandler(answer);
    });
