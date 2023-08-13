function fnSearch() {
  var toSearch = document.getElementById("toSearch").value.trim();
  console.log(toSearch);

  $.ajax({
    type: "POST",
    url: "./include/db_files/(junk)findPlaces.php",
    dataType: "JSON",
    data: { find: toSearch },
    success: function (response) {
      for (let i = 0; i < response.length; i++) {
        console.log(response[i].id);
        console.log(response[i].name);
      }
    },
  });
}
