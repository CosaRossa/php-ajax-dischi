function getData() {
  $.ajax({
    url: "index.php",
    method: "GET",
    success: function (data) {
      printData(data);
    },
    error: function (err) {
      console.log(err);
    }

  });
};

function printData(data) {
    var template = $("#cd-template").html();
    var compiled = Handlebars.compile(template);
    var target = $('#cds-container');

    for (var i = 0; i < data.length; i++) {
        var cd = data[i];
        var cdHTML = compiled(cd);
        target.append(cdHTML);
    }
};


function init() {
  getData();
}

$(document).ready(init);
