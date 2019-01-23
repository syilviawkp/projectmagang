$(function() {
  var base_url=window.location.origin;
  $.ajax({
    type: "GET",
    url: "getGridYankes/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });


    $("#jsGrid").jsGrid({
      height: "auto",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getGridYankes/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addYankes/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateYankes/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteYankes/",
            data: item
          });
        }
      },
      fields: [
       
      {
          name: "namaField",
          title: "Nama Field",
          type: "text",
          width: 150
        },
        {
          name: "namaKategori",
          title: "Nama Kategori",
          type: "select", items: [{ Item: "PELAYANAN KESEHATAN DASAR & RUJUKAN" },{Item:"FARMASI"}], valueField: "Item", textField: "Item",
          width: 150
        },
       
        { type: "control" }
      ]
    });
  });
});