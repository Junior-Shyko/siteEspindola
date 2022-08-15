$(document).ready(function () {
    $.ajax({
        type: "get",
        url: "http://localhost:50000/api/team",
        dataType: "json",
        success: function (response) {
            console.log({response})
        }
    });

    $.get("http://localhost:50000/api/team",
        function (data, textStatus, jqXHR) {
            console.log({data})
            console.log({textStatus})
            console.log({jqXHR})
        },
        "json"
    );
});