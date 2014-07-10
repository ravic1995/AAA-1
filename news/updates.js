
function createUpdates() {
    $.getJSON("messages.js", function (data) {
         $.each(data, function (key, val) {
            console.log(key);
             console.log(val[0]);
         })});
             
               /* var select = [];
                $.each(a, function (key, val) {
                 select.push(val);
                 });
    console.log(select);
                for(var i = select.length - 1; i >= 0; i--){
                    $("<div />", {
                        "id": "name" + i,
                        "class": "stuff",
                        html: "<b>" + "Name: " + "</b>" + select[i]["Name"],
                    }).hide().appendTo("#dataMess").fadeIn();
                    $("<br />", {
                    }).appendTo("body");
                    $("<div />", {
                        "id": "topic" + i,
                        "class": "stuff",
                        html: "<b>" + "Topic: " + "</b>" + select[i]["Topic"],
                    }).hide().appendTo("#dataMess").fadeIn();
                    $("<br />", {
                    }).appendTo("body");	
                    $("<div />", {
                        "id": "message" + i,
                        "class": "stuff",
                        html: "<b>" + "Details: " + "</b> <br />" + select[i]["Message"],
                    }).hide().appendTo("#dataMess").fadeIn();
                    $("<hr />", {
                        "class": "line",
                    }).appendTo("#dataMess");
                }*/
            }