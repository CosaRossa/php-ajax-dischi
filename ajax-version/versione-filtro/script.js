function getData() {
  $.ajax({
    url: "http://localhost:8888/index.php",
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

    target.html("");

    for (var i = 0; i < data.length; i++) {
      var cd = data[i];
      var cdHTML = compiled(cd);
      target.append(cdHTML);
    }
};

function addSearchClickListener() {
  var target = $("button#search");
  target.click(searchByArtist);
};

function searchByArtist() {
  var target = $('select#author');
  var author = target.val();
  if (author === 'All') {
    getData();
  } else {
    getDataByAuthor(author);
  }
};

function getDataByAuthor(author) {
  $.ajax({
    url: "index.php",
    method: "GET",
    data: {
      'author': author
    },
    success: function(data) {
      printData(data);
    },
    error: function(err) {
      console.log('err', err);
    }
  });
};

function init() {
  getData();
  addSearchClickListener();
}

$(document).ready(init);
