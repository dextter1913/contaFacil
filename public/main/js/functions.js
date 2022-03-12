/**
 * PROMESA QUE OBTIENE EL FORMULARIO DEL CONTROLADOR serviciosPublicos/create
 */
if (document.getElementById('_formCreate') != null) {
    let _formCreate = document.getElementById('_formCreate');
    _formCreate.addEventListener('submit', function (e) {
        e.preventDefault();
        let datos = new FormData(_formCreate);
        fetch("/contaFacil/public/serviciosPublicos", {
            method: 'POST',
            body: datos
        })
            .then(res => res.json())
            .then(data => {
                console.log(data);
                if (data.status === '200') {
                    _formCreateMensaje.innerHTML = `
                    <div class="alert alert-success" role="alert">
                        ${data.message}
                    </div>
                    `;
                } else {
                    _formCreateMensaje.innerHTML = `
                    <div class="alert alert-danger" role="alert">
                        ${data.message}
                    </div>
                    `;
                }
            })
            .catch(error => console.log(error));
        _formCreate.reset();
    });
}