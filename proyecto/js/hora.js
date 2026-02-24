function calcular() {

    let h = parseInt(document.getElementById("hora").value);
    let m = parseInt(document.getElementById("minutos").value);

    if (h == 12) h = 0;

    let hf, mf;

    if (m == 0) {
        mf = 0;
        hf = 12 - h;
    } else {
        mf = 60 - m;
        hf = 12 - h;
    }

    if (hf <= 0) hf += 12;

    document.getElementById("resultado").innerText =
        "Hora espejo: " + hf + ":" + mf;
}