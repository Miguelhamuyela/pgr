window.onload = function() {

     const baseURL = "https://pgr.ao/";
    let clicked = true;
    
    function get(url, params = {}) {
        return request('GET', url, params);
    }
    
    function post(url, params = {}) {
        return request('POST', url, params);
    }
    
    function destroy(url, params = {}) {
        return request('DELETE', url, params);
    }
    
    function getDenuncias(url){
        let searchKey = document.getElementById("searchKey").value
        let divResult = document.getElementById("resultDenuncia");
        let processo = document.getElementById("processo").value;
        if(processo || searchKey){
    
        if(clicked){
            clicked= false
            
            let myRequestSee = new Request(`${url.replace('{processo}',processo)}`, {
                method: 'POST'
            });
    
            fetch(myRequestSee)
                .then(function(res) { return res.json() })
                .then(function(data) {
                    // console.log(data)
                    
                    divResult.innerHTML = data?.type != "error" ? `<div class="w3-panel w3-pale-green w3-border" style="width:70%;margin-left:15%;color:white !important;background-color: #800000d9!important;opacity:0.9;">
                                        <h3 style="text-align:center;margin-top:15px;color:white !important;">Resutado da Denúncia</h3>
                                        <p style="color:white !important;">Nº da denúncia: ${data.processo}</p>
                                        <p style="color:white !important;">Estado: ${data.estado}</p>
                                        <!-- p style="color:white !important;">${data.assunto}</p> -->
                                    </div>` : `<div class="w3-panel w3-pale-green w3-border" style="width:70%;margin-left:15%;color:white !important;background-color: #800000d9!important;opacity:0.9;">
                                    <h3 style="text-align:center;margin-top:15px;color:white !important;">A denúncia com o nº de processo: ${processo} não existe!</h3>
                                </div>`;
                });
            }
            clicked = true;
    } else {
        divResult.innerHTML = "";
        clicked = true;
    
    }
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
            
            // console.log(formSubmit);
            
            formElem = new FormData(formSubmit);
    
            let myRequestSee = new Request(formSubmit.action, {
                method: 'POST',
                body: formElem
            });
        
            fetch(myRequestSee)
                .then(function(res) { return res.json() })
                .then(function(data) {
                    // console.log(data.message);
    
                    if (data.message !== undefined) swal(data.message, "", data.type);
                    
                    if (data.type == "success") {
                        if (data.redirect) {
                            setTimeout(() => {
                                window.location.href = data.redirect;
                            }, 3000)
                        }
                        setInterval(() => location.reload(), 1200);
                    }
                    if (data.next_page) {
                        window.location.href = data.next_page
                        // console.log(data.next_page)
                    }
                });
        });
    }
    
    if (document.getElementsByClassName("form-problem").length > 0) {
        Array.from(document.getElementsByClassName("form-problem")).forEach((form, index) => {
            form.addEventListener('submit', e => {
                e.preventDefault();
            
                let formSubmit = e.target;
                
                console.log("----->", formSubmit.parentNode.querySelector("textarea").innerHTML, formSubmit.parentNode.querySelector(".input-problem"))
                
                formElem = new FormData(formSubmit);
               
                let myRequestSee = new Request(formSubmit.action, {
                    method: 'POST',
                    body: formElem
                });
            
                fetch(myRequestSee)
                    .then(function(res) { return res.json() })
                    .then(function(data) {
                        // console.log(data.message);
        
                        if (data.message !== undefined) swal(data.message, "", data.type);
                        
                        if (data.type == "success") {
                            if (data.redirect) {
                                setTimeout(() => {
                                    window.location.href = data.redirect;
                                }, 3000)
                            }
                            setInterval(() => location.reload(), 1200);
                        }
                        if (data.next_page) {
                            window.location.href = data.next_page
                            // console.log(data.next_page)
                        }
                    });
            });
        }) 
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
                method: 'POST',
                body: formElem
            });
        
            fetch(myRequestSee)
                .then(function(res) { return res.text() })
                .then(function(data) {
                    console.log(data);
                    //swal(data.message, "", data.type);
                    
                    if (data.type == "success") {
                        if (data.redirect) {
                            // console.log(data.redirect)
                            setTimeout(() => {
                                window.location.href = data.redirect;
                            }, 3000)
                        }
        
                        setInterval(() => location.reload(), 1200);
                    }
        
                    if (data.next_page) {
                        window.location.href = data.next_page
                        // console.log(data.next_page)
                    }
                });
        });
    });

 
      
    let botoesDeEliminarbann = Array.from(document.getElementsByClassName("banners-eliminar"));

    if (botoesDeEliminarbann.length > 0) {
      botoesDeEliminarbann.forEach(botao => {
          let id = botao.getAttribute("target-id");
      
          botao.addEventListener("click", function() {
              
      
              destroy(`${baseURL}/gestor/banners/${id}`);
      
              swal("Eliminado com Sucesso", "", "success");
      
              setInterval(() => location.reload(), 1200);
          });
        });
    }

    
     
  let botoesDeEliminarmembro = Array.from(document.getElementsByClassName("membros-eliminar"));

  if (botoesDeEliminarmembro.length > 0) {
    botoesDeEliminarmembro.forEach(botao => {
        let id = botao.getAttribute("target-id");
    
        botao.addEventListener("click", function() {
            console.log(id);
    
            destroy(`${baseURL}/gestor/membros/${id}`);
    
            swal("Eliminado com Sucesso", "", "success");
    
            setInterval(() => location.reload(), 1200);
        });
      });
  }
        
  let botoesDeEliminarden = Array.from(document.getElementsByClassName("denuncias-eliminar"));

  if (botoesDeEliminarden.length > 0) {
    botoesDeEliminarden.forEach(botao => {
        let id = botao.getAttribute("target-id");
    
        botao.addEventListener("click", function() {
            console.log(id);
    
            destroy(`${baseURL}/gestor/denuncias/${id}`);
    
            swal("Eliminado com Sucesso", "", "success");
    
            setInterval(() => location.reload(), 1200);
        });
      });
  }


  let botoesDeEliminarRec = Array.from(document.getElementsByClassName("reclamacoes-eliminar"));

  if (botoesDeEliminarRec.length > 0) {
    botoesDeEliminarRec.forEach(botao => {
        let id = botao.getAttribute("target-id");
    
        botao.addEventListener("click", function() {
            console.log(id);
    
            destroy(`${baseURL}/gestor/reclamacoes/${id}`);
    
            swal("Eliminado com Sucesso", "", "success");
    
            setInterval(() => location.reload(), 1200);
        });
      });
  }
 
  let botoesDeEliminarcom = Array.from(document.getElementsByClassName("comunicados-eliminar"));

  if (botoesDeEliminarcom.length > 0) {
    botoesDeEliminarcom.forEach(botao => {
        let id = botao.getAttribute("target-id");
    
        botao.addEventListener("click", function() {
            console.log(id);
    
            destroy(`${baseURL}/gestor/comunicados/${id}`);
    
            swal("Eliminado com Sucesso", "", "success");
    
            setInterval(() => location.reload(), 1200);
        });
      });
  }

   
  let botoesDeEliminarusu = Array.from(document.getElementsByClassName("usuarios-eliminar"));

  if (botoesDeEliminarusu.length > 0) {
    botoesDeEliminarusu.forEach(botao => {
        let id = botao.getAttribute("target-id");
    
        botao.addEventListener("click", function() {
            console.log(id);
    
            destroy(`${baseURL}/gestor/usuarios/${id}`);
    
            swal("Eliminado com Sucesso", "", "success");
    
            setInterval(() => location.reload(), 1200);
        });
      });
  }

 
 
    }