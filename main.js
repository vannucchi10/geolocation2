window.addEventListener("load", () =>{

    if ('serviceWorker' in navigator){
        navigator.serviceWorker.register("sw.js").
        then(e => {
            console.log("sw registrado com sucesso")
        })
        .catch( err => {
            console.log("deu erro");
            console.log(err)
        } )
    }else {
        console.log("navegador muito antigo sem suporte ao sw ")
    }
    });