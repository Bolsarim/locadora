function Trocar(){
    let tipo = document.getElementById("veiculo").value
    

    if(tipo == "Básico"){
        document.getElementById("imagem").src="basico.png"
    }else if(tipo == "Esporte"){
        document.getElementById("imagem").src="esporte.png"
    }else{
        document.getElementById("imagem").src="completo.png"
    }
}