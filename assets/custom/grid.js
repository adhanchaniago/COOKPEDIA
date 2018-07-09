$(function() {
  $.ajax({
    type: "GET",
    url: "getAllAkun/"
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
            url: "getAllAkun/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addAkun/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateAkun/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteAkun/",
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
          name: "email",
          title: "Email",
          type: "text",
          width: 50
        },
        {
          name: "username",
          title: "Username",
          type: "text",
          width: 150
        },
        {
          name: "password",
          title: "Passwoed",
          type: "text",
          width: 150
        },
        {
          name: "gender",
          title: "Gender",
          type: "text",
          width: 150
        },
        {
          name: "phone",
          title: "Phone",
          type: "text",
          width: 150
        },
        {
          name: "status",
          title: "Status",
          type: "text",
          width: 150
        },
        {
          name: "photo",
          title: "Photo",
          type: "text",
          width: 150
        },
        { type: "control" }
      ]
    });
  });
});