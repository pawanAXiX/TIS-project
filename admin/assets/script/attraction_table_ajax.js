function attractionTable() {
  var attraction_table = document.getElementById("table-content");

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "./ajax_scripts/attraction_table_processing.php");
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(xhttp.responseText);

      var response = JSON.parse(xhttp.responseText);

      console.log(response);

      // console.log(response[0]);
      var table =
        "<table class='place-table'><thead><tr><th>Attraction No.</th><th>Attraction Name</th><th>Attraction Image</th></tr></thead>";
      // var data="<table border='1'>";
      for (let count = 0; count < response.length; count++) {
        const row = response[count];

        table =
          table +
          "<tr><td>" +
          row.p_num +
          "</td>" +
          "<td>" +
          row.p_name +
          "</td>" +
          "<td><img class='place-image' src=" +
          row.p_image +
          " ></td>" +
          "</tr>";
      }
      table = table + "</table>";
      attraction_table.innerHTML = table;
    }
  };
}

function AccomondationTable() {
  var attraction_table = document.getElementById("table-content");

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "./ajax_scripts/attraction_table_processing.php");
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(xhttp.responseText);

      var response = JSON.parse(xhttp.responseText);

      console.log(response);

      // console.log(response[0]);
      var table =
        "<table class='place-table'><thead><tr><th>Accomodation No.</th><th>Attraction Name</th><th>Attraction Image</th></tr></thead>";
      // var data="<table border='1'>";
      for (let count = 0; count < response.length; count++) {
        const row = response[count];

        table =
          table +
          "<tr><td>" +
          row.p_num +
          "</td>" +
          "<td>" +
          row.p_name +
          "</td>" +
          "<td><img class='place-image' src=" +
          row.p_image +
          " ></td>" +
          "</tr>";
      }
      table = table + "</table>";
      attraction_table.innerHTML = table;
    }
  };
}
