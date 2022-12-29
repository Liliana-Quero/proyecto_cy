    function validar() {
        var select = document.getElementById('select1');
        var option = select.options[select.selectedIndex];

        document.getElementById('valorselect').value = option.text;
        document.getElementById("valorselect").value = selected;
return redirect('/cuestionarioadmin');
    }






function habilitar() {
    select1 = document.getElementById ("select1").value;
    select2 = document.getElementById ("select2").value;

    val=0;

    if(select1 == ""){
        val++;
    }
    if(select2 == ""){
        val++;
    }

    if(val == 0){
        document.getElementById("select3").disabled = false;
    } else {
        document.getElementById("select3").disabled = true;
    }
}
document.getElementById("select1").addEventListener("change", habilitar);
document.getElementById("select2").addEventListener("change", habilitar);
document.getElementById("select3").addEventListener("click", () =>{});
