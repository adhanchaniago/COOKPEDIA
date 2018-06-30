$(function() {
  $.ajax({
    type: "GET",
    url: "getAllRental/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "300px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllRental/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addRental/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateRental/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteRental/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "id",
          title: "ID",
          type: "hidden",
          width: 15
        },
        {
          name: "member",
          title: "Member",
          type: "text",
          width: 50
        },
        {
          name: "judulfilm",
          title: "Judul Film",
          type: "text",
          width: 150
        },
        {
          name: "tglpinjam",
          title: "Tanggal Pinjam",
          type: "text",
          width: 150
        },
        {
          name: "tglkembali",
          title: "Tanggal Kembali",
          type: "text",
          width: 150
        },
        {
          name: "harga",
          title: "Harga",
          type: "text",
          width: 150
        },
        { type: "control" }
      ]
    });
  });
});