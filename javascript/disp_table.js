$(document).ready(function () {
  // Retrieve data from PHP script
  $.get("get_table_data.php", function (data) {
    // Parse data as JSON
    var rows = JSON.parse(data);

    // Select table element by id
    var table = $("#my-table");

    // Create table header row
    var header =
      "<thead><tr><th>Sr.no</th><th>Title</th><th>Category</th><th>Status</th><th>Difficulty</th><th>Languages</th></tr></thead>";

    // Create table body rows
    var body = "<tbody>";
    $.each(rows, function (index, row) {
      body +=
        "<tr><td>" +
        row.ID +
        "</td><td>" +
        row.title +
        "</td><td>" +
        row.category +
        "</td><td>" +
        +"</td><td>" +
        row.difficulty +
        "</td><td>" +
        +"</td></tr>";
    });
    body += "</tbody>";

    // Append header and body to table element
    table.append(header);
    table.append(body);
  });
});
