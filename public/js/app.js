const form = document.getElementById('form-rech');

form.addEventListener('submit', function (e) {

    e.preventDefault();

    const token = document.querySelector('meta[name="csrf-token"]').content;
    const url = this.getAttribute('action');
    const req = document.getElementById('req').value;
    

    fetch(url, {
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        method: 'post',
        body: JSON.stringify({
            req: req
        })
    }).then(response => {
        response.json().then( data => {

            const posts = document.getElementById('rech');
            posts.innerHTML = '';

            Object.entries(data)[0][1].forEach(element => {
                posts.innerHTML += `<h1>${element.title}</h1>
                <p>${element.content}</p>
                `
            })
        })
    }).catch(erreur => {
        console.log(erreur);
    })
})