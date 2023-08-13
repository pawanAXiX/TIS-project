
// function district_dropdown_options() {

    var form_data = new FormData();
    form_data.append("select_option", "district");

    var ajax_request = new XMLHttpRequest();
    ajax_request.open("POST", "user/ajax_processing/dropdown_options_processing.php");
    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState == 4 && ajax_request.status == 200) {
            console.log(ajax_request.responseText);
            var response = JSON.parse(ajax_request.responseText);
            console.log(response);

            var option = document.querySelector("#district");

            for (let count = 0; count < response.length; count++) {
                var district_name = response[count].district;
                console.log(district_name);
                option.insertAdjacentHTML("beforeend", "<option value=" + district_name + " id=" + district_name.toLowerCase() + " >" + district_name + "</option>")
                // option=  document.querySelector("#"+district_name.toLowerCase().toLowerCase());
            }
        }
    }
// }



function type_dropdown_options(option) {
    var form_data = new FormData();
    form_data.append("dest_option", option);

    var ajax_request = new XMLHttpRequest();
    ajax_request.open("POST", "user/ajax_processing/dropdown_options_processing.php");
    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState == 4 && ajax_request.status == 200) {
            console.log(ajax_request.responseText);
            var response = JSON.parse(ajax_request.responseText);
            console.log(response);

            let option = document.querySelector("#type");
            // var option2=document.getElementsByClassName("btn-search");
            console.log(option);
            // console.log(option2);
            option.innerHTML = "<option disabled selected>Types</option>";
            for (let count = 0; count < response.length; count++) {
                var types = response[count].type;
                // console.log(types.toLowerCase());
                option.insertAdjacentHTML("beforeend", "<option value='" + types +"' id='" + types + "' >" + types + "</option>");
                // option=  document.querySelector("#"+types.toLowerCase());
            }
        }
    }
}