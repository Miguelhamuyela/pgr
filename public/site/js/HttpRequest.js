const baseURL = 'http://localhost/pgr';

function get(url, params = {}) {
    return request('GET', url, params);
}

function post(url, params = {}) {
    return request('POST', url, params);
}

function destroy(url, params = {}) {
    return request('DELETE', url, params);
}

function request(method, url, params = {}) {
    return new Promise((resolve, reject) => {
        let ajax = new XMLHttpRequest();

        ajax.open(method.toUpperCase(), url);

        ajax.onerror = e => {
            reject(e);
        }

        ajax.onload = e => {
            let res = [];

            try {
                res = JSON.parse(ajax.responseText);
            } catch (e) {
                reject(e);
                console.log(e);
            }

            resolve(res);
        };

        ajax.send(params);
    });
}

if (document.getElementById("store") !== null) {
    document.getElementById("store").addEventListener('submit', e => {
        e.preventDefault();
    
        let formSubmit = e.target;
        formElem = new FormData(formSubmit);
        console.log(formSubmit.action);
        let myRequestSee = new Request(formSubmit.action, {
            method: 'POST',
            body: formElem
        });
    
        fetch(myRequestSee)
            .then(function(res) { return res.json() })
            .then(function(data) {
                console.log(data);
                swal(data.message, "", data.type);
                
                if (data.type == "success") {
                    if (data.redirect) {
                        console.log(data.redirect)
                        setTimeout(() => {
                            window.location.href = data.redirect;
                        }, 3000)
                    }
    
                    setInterval(() => location.reload(), 1200);
                }
    
                if (data.next_page) {
                    window.location.href = data.next_page
                    console.log(data.next_page)
                }
            });
    });
}

function handleDestroy(route, id) {
    fetch(`${baseURL}/gestor/${route}/${id}`, {
        method: 'DELETE'
    })
    .then(function(data) {
        swal("Eliminado com sucesso!", "", "success");
        
        setInterval(() => location.reload(), 1200);
    });
}

Array.from(document.getElementsByClassName("update")).forEach((form, index) => {
    form.addEventListener('submit', e => {
        e.preventDefault();
    
        let formSubmit = e.target;
        formElem = new FormData(formSubmit);

        // let id = 5;

        // formElem.forEach((el, key) => {
        //     if (key == "id") id = el;
        // });

        // console.log(id);

        let myRequestSee = new Request(formSubmit.action, {
            method: "POST",
            body: formElem
        });
    
        fetch(myRequestSee)
            .then(function(res) { return res.json() })
            .then(function(data) {
                console.log(data);
                swal(data.message, "", data.type);
                
                if (data.type == "success") {
                    if (data.redirect) {
                        console.log(data.redirect)
                        setTimeout(() => {
                            window.location.href = data.redirect;
                        }, 3000)
                    }
    
                    setInterval(() => location.reload(), 1200);
                }
    
                if (data.next_page) {
                    window.location.href = data.next_page
                    console.log(data.next_page)
                }
            });
    });
});


function handleDestroyContacto(id) {
    destroy(`${baseURL}/gestor/contactos/${id}`); 
    swal("Eliminado com Sucesso", "", "success");

    setInterval(() => location.reload(), 1200);
}




function handleDestroyDenuncia(id) {
    destroy(`${baseURL}/gestor/denuncias/${id}`);

    swal("Eliminado com Sucesso", "", "success");

    setInterval(() => location.reload(), 1200);
}


function handleDestroyReclamacao(id) {
    destroy(`${baseURL}/gestor/reclamacoes/${id}`);

    swal("Eliminado com Sucesso", "", "success");

    setInterval(() => location.reload(), 12100);
}